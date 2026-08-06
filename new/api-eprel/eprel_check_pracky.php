<?php
/**
 * Kontrolní skript: projde katalog praček v data/produkty.php a pro každý
 * model zkusí dohledat technické parametry v EPREL. NIC nezapisuje zpátky do
 * produkty.php - jen vypíše srovnání (naše hodnota vs. EPREL) a hotový PHP
 * úryvek ke ručnímu vložení, až si to zkontrolujete. Beze změny by šlo o
 * zápis nezkontrolovaných dat, což jde přímo proti tomu, co web sám slibuje
 * na stránce Metodika ("nic neodhadujeme").
 *
 * Vychází ze stejného postupu, který už používá api-eprel/eprel_test.php
 * v sousedním projektu test-pneumatik.cz (viz tam - je to stejné API,
 * jen jiná produktová skupina).
 *
 * JAK VYHLEDÁVÁNÍ FUNGUJE (2 kroky, viz EPREL Public site - API, v1.0.120):
 *
 * 1) Přímý lookup podle EAN: GET /api/product/gtin/{ean}
 *    - VEŘEJNÝ endpoint, API klíč není potřeba.
 *    - V praxi jsem ověřil (přímo curl, ne přes tenhle skript) na 7 EANech
 *      z produkty.php, že ŽÁDNÝ z nich takhle nejde najít - dodavatelé
 *      (Bosch, LG, Samsung...) u těchto konkrétních modelů GTIN do EPREL
 *      nevyplnili. Skript to i tak zkouší jako první (je to zdarma a časem
 *      se to může změnit), ale nespoléhejte na to.
 *
 * 2) Fallback - hledání podle značky + modelového označení:
 *    GET /api/products/washingmachines2019?modelIdentifier=...&supplierOrTrademark=...
 *    - RESTRICTED endpoint, vyžaduje x-api-key (viz $apiKey níže).
 *    - Jako modelIdentifier posílá pole 'alza_id' z produkty.php (např.
 *      "WGE03200BY"), jako supplierOrTrademark pole 'znacka' (např. "Bosch").
 *      Tohle jsem NEMOHL vyzkoušet naostro (nemám tady k dispozici skutečný
 *      API klíč) - je to postavené 1:1 na parametrech z dokumentace a na
 *      diagnostickém volání, které už funguje v eprel_test.php, ale je
 *      možné, že dodavatel zapsal modelIdentifier v EPREL trochu jinak
 *      (mezery, pomlčky navíc) a shoda se nenajde. V takovém případě
 *      zkuste v EPREL ručně (https://eprel.ec.europa.eu/screen/group/washingmachines2019)
 *      vyhledat podle značky a zjistit, jak přesně tam mají modelIdentifier
 *      zapsaný, a hodnotu $p['alza_id'] pro test dočasně přepsat.
 *
 * POZOR - EPREL u praček NEMÁ samostatnou hodnotu hluku při odstřeďování:
 * existuje jen jedno pole "noise" (hluk při praní) a "noiseClass". Pole
 * hlucnost_odstred v produkty.php tenhle skript proto nikdy nedoplní -
 * bude potřeba jiný zdroj (např. specifikace u prodejce), nebo hlucnost_odstred
 * ze stránek raději odstranit, pokud se nenajde věrohodný zdroj.
 *
 * POZOR - jednotky u rozměrů (dimensionWidth/Height/Depth) a spotřeby vody
 * (waterCons) jsem nemohl ověřit na reálném produktu (viz výše - žádný
 * z našich EANů se v EPREL nenašel), dokumentace uvádí jen testovací data
 * s nesmyslně malými čísly. Skript proto u těchto polí vypisuje POZOR
 * a hodnotu neslučujte se stránkou bez ručního ověření (např. porovnáním
 * s rozměry, které uvádí Alza/výrobce u stejného modelu).
 *
 * Konfigurace (API klíč) se bere ze souboru credentials.php vedle tohoto
 * skriptu - stejná konvence jako u test-pneumatik.cz/api-eprel/. Tenhle
 * soubor NENÍ (a nesmí být) v gitu, vytvořte ho ručně až na serveru:
 *
 *     <?php
 *     $apiKey = 'xxx';
 *
 * Bez credentials.php skript pořád poběží, jen přeskočí krok 2 (fallback
 * hledání) a spolehne se jen na (u nás zatím vždy neúspěšný) lookup podle EAN.
 *
 * Spouští se přes URL v prohlížeči (žádné argumenty, žádný zápis do souborů).
 */

set_time_limit(0);

$environment = 'production'; // 'acceptance' (testovací data) nebo 'production' (ostrá data)
$productGroup = 'washingmachines2019';
$apiKey = null;

$credentialsFile = __DIR__ . '/credentials.php';
if (is_file($credentialsFile)) {
    require $credentialsFile;
}

$apiUrls = array(
    'acceptance' => 'https://public-energy-label-acceptance.ec.europa.eu/api',
    'production' => 'https://eprel.ec.europa.eu/api',
);
if (!isset($apiUrls[$environment])) {
    die('Neznámé prostředí: ' . $environment);
}
$apiUrl = $apiUrls[$environment];

function eprelGet($url, $apiKey)
{
    $headers = array();
    if ($apiKey) {
        $headers[] = 'x-api-key: ' . $apiKey;
    }

    $ch = curl_init($url);
    curl_setopt_array($ch, array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_USERAGENT => 'curl/7.88.1',
        CURLOPT_TIMEOUT => 20,
    ));
    $body = curl_exec($ch);
    if ($body === false) {
        $error = curl_error($ch);
        curl_close($ch);
        return array('status' => 0, 'body' => null, 'error' => $error, 'url' => $url);
    }
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return array('status' => $status, 'body' => $body, 'error' => null, 'url' => $url);
}

/** Zkusí najít model v EPREL - nejdřív podle EAN, pak (má-li se $apiKey) podle značky/modelu. */
function eprelFindModel($apiUrl, $productGroup, $apiKey, array $p)
{
    if (!empty($p['ean'])) {
        $r = eprelGet($apiUrl . '/product/gtin/' . rawurlencode($p['ean']), null);
        if ($r['status'] === 200) {
            $data = json_decode($r['body'], true);
            if (isset($data['eprelRegistrationNumber'])) {
                return array('model' => $data, 'source' => 'EAN ' . $p['ean']);
            }
        }
    }

    if ($apiKey && !empty($p['alza_id'])) {
        $searchUrl = $apiUrl . '/products/' . rawurlencode($productGroup)
            . '?_page=1&_limit=5&includeOldProducts=true'
            . '&modelIdentifier=' . rawurlencode($p['alza_id'])
            . '&supplierOrTrademark=' . rawurlencode($p['znacka']);

        $r = eprelGet($searchUrl, $apiKey);
        if ($r['status'] === 200) {
            $data = json_decode($r['body'], true);
            if (!empty($data['hits'][0]['eprelRegistrationNumber'])) {
                $regNumber = $data['hits'][0]['eprelRegistrationNumber'];

                // Detail podle registračního čísla je veřejný endpoint (klíč netřeba).
                $detailUrl = $apiUrl . '/products/' . rawurlencode($productGroup) . '/' . rawurlencode($regNumber);
                $r2 = eprelGet($detailUrl, null);
                if ($r2['status'] === 200) {
                    $data2 = json_decode($r2['body'], true);
                    if ($data2) {
                        return array(
                            'model' => $data2,
                            'source' => 'hledání podle značky/modelu ("' . $p['alza_id'] . '" / "' . $p['znacka'] . '")',
                        );
                    }
                }
            }
        }
    }

    return null;
}

function fmt($value)
{
    if ($value === null) {
        return 'null';
    }
    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }
    return (string) $value;
}

$produkty = require dirname(__DIR__) . '/data/produkty.php';

header('Content-Type: text/plain; charset=utf-8');

echo "EPREL kontrola parametrů praček - produktová skupina \"$productGroup\" ($environment)\n";
echo str_repeat('=', 78) . "\n\n";

if (!$apiKey) {
    echo "POZOR: chybí api-eprel/credentials.php s \$apiKey - krok 2 (hledání podle\n";
    echo "značky/modelu) se PŘESKAKUJE, zkouší se jen lookup podle EAN (veřejný,\n";
    echo "ale u našich modelů dosud vždy bez výsledku).\n\n";
}

$found = 0;
$notFound = 0;

foreach ($produkty as $slug => $p) {
    echo "--- {$p['nazev']} ($slug) ---\n";

    $result = null;
    try {
        $result = eprelFindModel($apiUrl, $productGroup, $apiKey, $p);
    } catch (Exception $e) {
        echo "  CHYBA: " . $e->getMessage() . "\n\n";
        $notFound++;
        continue;
    }

    if (!$result) {
        echo '  NENALEZENO (zkoušeno: EAN ' . ($p['ean'] ?? '-') . ($apiKey ? ', hledání podle značky/modelu' : ', hledání podle značky/modelu PŘESKOČENO - chybí apiKey') . ")\n\n";
        $notFound++;
        continue;
    }

    $found++;
    $model = $result['model'];
    $regNumber = isset($model['eprelRegistrationNumber']) ? $model['eprelRegistrationNumber'] : '?';

    echo "  Nalezeno přes: {$result['source']}\n";
    echo "  EPREL registrační číslo: $regNumber\n";
    echo "  URL: https://eprel.ec.europa.eu/screen/product/$productGroup/$regNumber\n\n";

    $compare = array(
        'energ_trida'    => array('EPREL energyClass', isset($model['energyClass']) ? $model['energyClass'] : null),
        'spotreba_kwh'   => array('EPREL energyConsPer100Cycle [kWh/100 cyklů]', isset($model['energyConsPer100Cycle']) ? $model['energyConsPer100Cycle'] : null),
        'spotreba_vody'  => array('EPREL waterCons [POZOR - ověřit jednotku, viz hlavička skriptu]', isset($model['waterCons']) ? $model['waterCons'] : null),
        'hlucnost_prani' => array('EPREL noise [dB]', isset($model['noise']) ? $model['noise'] : null),
        'trida_odstred'  => array('EPREL spinClass', isset($model['spinClass']) ? $model['spinClass'] : null),
        'otacky'         => array('EPREL spinSpeedRated', isset($model['spinSpeedRated']) ? $model['spinSpeedRated'] : null),
        'kapacita'       => array('EPREL ratedCapacity [kg]', isset($model['ratedCapacity']) ? $model['ratedCapacity'] : null),
        'sirka'          => array('EPREL dimensionWidth [POZOR - ověřit jednotku]', isset($model['dimensionWidth']) ? $model['dimensionWidth'] : null),
        'hloubka'        => array('EPREL dimensionDepth [POZOR - ověřit jednotku]', isset($model['dimensionDepth']) ? $model['dimensionDepth'] : null),
        'vyska'          => array('EPREL dimensionHeight [POZOR - ověřit jednotku]', isset($model['dimensionHeight']) ? $model['dimensionHeight'] : null),
    );

    $snippetLines = array();
    foreach ($compare as $nasePole => $info) {
        list($label, $eprelValue) = $info;
        $nase = isset($p[$nasePole]) ? $p[$nasePole] : null;
        if ($eprelValue === null) {
            $mark = '?';
        } elseif ((string) $nase === (string) $eprelValue) {
            $mark = '=';
        } else {
            $mark = '!=';
        }
        printf("  [%-2s] %-16s naše: %-10s   %s: %s\n", $mark, $nasePole, fmt($nase), $label, fmt($eprelValue));

        if ($eprelValue !== null) {
            $snippetLines[] = "'$nasePole' => " . var_export($eprelValue, true) . ',';
        }
    }

    echo "\n  Hluk při odstřeďování (hlucnost_odstred): EPREL pro pračky tuhle hodnotu\n";
    echo "  vůbec nemá (jen 'noise' výše a 'noiseClass') - nutno dohledat jinde.\n";

    if ($snippetLines) {
        echo "\n  Úryvek k ruční kontrole a vložení do data/produkty.php:\n";
        foreach ($snippetLines as $line) {
            echo "    $line\n";
        }
    }

    echo "\n";

    // Zdvořilá pauza mezi requesty, ať API nezatěžujeme zbytečně.
    usleep(300000);
}

echo str_repeat('=', 78) . "\n";
echo "Nalezeno: $found, nenalezeno: $notFound, celkem: " . count($produkty) . "\n";
