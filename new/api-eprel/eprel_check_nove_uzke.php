<?php
/**
 * Kontrolní skript pro NOVÉ kandidáty do segmentu "Úzké pračky" (viz
 * new/uzke-pracky/index.php - segment je definovaný ŠÍŘKOU <= 45 cm,
 * ne hloubkou). Hledá je v EPREL podle značky + modelového označení
 * (stejný postup jako eprel_check_pracky.php, viz tam podrobné komentáře
 * k tomu, jak vyhledávání funguje a jaká má omezení).
 *
 * EAN, cena a obrázek už NEJSOU odhad - jsou vytažené přímo z aktuálního
 * Alza affiliate feedu (Affiliate_18852758_CZ.xml, staženo 2026-08-06).
 * Tenhle skript s produkty.php nic nedělá (nezapisuje) - jen ověřuje
 * technické parametry v EPREL, aby šlo sestavit kompletní a ověřené
 * záznamy ručně/v dalším kroku.
 *
 * KAŽDÝ kandidát se zkouší hledat DVĚMA způsoby (postupně, dokud se něco
 * nenajde):
 *   1) modelIdentifier = retail označení (např. "TW621DSFCEE")
 *   2) modelIdentifier = mpn z Alza feedu (interní kód dodavatele,
 *      např. "913143759" u AEG) - u předchozí dávky (Beko, AEG) se
 *      právě tohle ukázalo jako spolehlivější.
 *
 * Stejná credentials.php konvence jako eprel_check_pracky.php.
 */

set_time_limit(0);

$environment = 'production';
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

function eprelSearchModel($apiUrl, $productGroup, $apiKey, $modelIdentifier, $znacka)
{
    $searchUrl = $apiUrl . '/products/' . rawurlencode($productGroup)
        . '?_page=1&_limit=5&includeOldProducts=true'
        . '&modelIdentifier=' . rawurlencode($modelIdentifier)
        . '&supplierOrTrademark=' . rawurlencode($znacka);

    $r = eprelGet($searchUrl, $apiKey);
    if ($r['status'] !== 200) {
        return array('error' => 'HTTP ' . $r['status']);
    }
    $data = json_decode($r['body'], true);
    $hits = isset($data['hits']) ? $data['hits'] : array();
    return array('hits' => $hits);
}

// Kandidáti - data (ean, cena, obrázek, alza URL) z Affiliate_18852758_CZ.xml, staženo 2026-08-06.
$kandidati = array(
    array(
        'nazev' => 'Whirlpool TW621DSFCEE', 'znacka' => 'Whirlpool',
        'model' => 'TW621DSFCEE', 'mpn' => '859991738730',
        'ean' => null, // feed pro tenhle model gtin neuvádí
        'cena' => 9990, 'dostupnost' => 'preorder',
        'obrazek' => 'https://cdn.alza.cz/products/WHPR158/WHPR158.jpg',
        'alza_url' => 'https://www.alza.cz/whirlpool-tw621dsfcee-d13452897.htm?idp=2504&banner_id=138051',
    ),
    array(
        'nazev' => 'Electrolux 600 SensiCare EW6TN4262C', 'znacka' => 'Electrolux',
        'model' => 'EW6TN4262C', 'mpn' => '7332543799817',
        'ean' => '7332543799817',
        'cena' => 9179, 'dostupnost' => 'in stock',
        'obrazek' => 'https://cdn.alza.cz/products/ELXPR103/ELXPR103.jpg',
        'alza_url' => 'https://www.alza.cz/electrolux-600-sensicare-ew6tn4262c-d7619316.htm?idp=2504&banner_id=138051',
    ),
    array(
        'nazev' => 'AEG 8000 ÖKOMix LTR8E363C', 'znacka' => 'AEG',
        'model' => 'LTR8E363C', 'mpn' => '913143759',
        'ean' => '7333394022901',
        'cena' => 13990, 'dostupnost' => 'in stock',
        'obrazek' => 'https://cdn.alza.cz/products/AEGPR070/AEGPR070.jpg',
        'alza_url' => 'https://www.alza.cz/aeg-8000-okomix-ltr8e363c-d7951217.htm?idp=2504&banner_id=138051',
    ),
    array(
        'nazev' => 'Haier THASN276TM5-S T Series 7', 'znacka' => 'Haier',
        'model' => 'THASN276TM5-S', 'mpn' => '31020209',
        'ean' => '8059019094366',
        'cena' => 11990, 'dostupnost' => 'in stock',
        'obrazek' => 'https://cdn.alza.cz/products/HAIPRIS37/HAIPRIS37.jpg',
        'alza_url' => 'https://www.alza.cz/haier-thasn276tm5-s-t-series-7-d12792159.htm?idp=2504&banner_id=138051',
    ),
    array(
        'nazev' => 'Candy TCA274TM5-S C-Wash 500', 'znacka' => 'Candy',
        'model' => 'TCA274TM5-S', 'mpn' => '31020160',
        'ean' => '8059019093710',
        'cena' => 8989, 'dostupnost' => 'in stock',
        'obrazek' => 'https://cdn.alza.cz/products/CANPR185/CANPR185.jpg',
        'alza_url' => 'https://www.alza.cz/candy-tca274tm5-s-c-wash-500-d12605206.htm?idp=2504&banner_id=138051',
    ),
    array(
        'nazev' => 'AEG 7000 ProSteam LTR7C373C', 'znacka' => 'AEG',
        'model' => 'LTR7C373C', 'mpn' => '913143847',
        'ean' => '7333394048819',
        'cena' => 15990, 'dostupnost' => 'in stock',
        'obrazek' => 'https://cdn.alza.cz/products/ELXPR143/ELXPR143.jpg',
        'alza_url' => 'https://www.alza.cz/aeg-7000-prosteam-ltr7c373c-d12404767.htm?idp=2504&banner_id=138051',
    ),
    array(
        'nazev' => 'Hoover THOS476TM5-S H-Wash 500', 'znacka' => 'Hoover',
        'model' => 'THOS476TM5-S', 'mpn' => '31020200',
        'ean' => '8059019094212',
        'cena' => 8889, 'dostupnost' => 'in stock',
        'obrazek' => 'https://cdn.alza.cz/products/HOOPR10/HOOPR10.jpg',
        'alza_url' => 'https://www.alza.cz/hoover-thos476tm5-s-h-wash-500-d12792172.htm?idp=2504&banner_id=138051',
    ),
);

header('Content-Type: text/plain; charset=utf-8');

echo "EPREL hledání - noví kandidáti do segmentu Úzké pračky ($productGroup, $environment)\n";
echo str_repeat('=', 78) . "\n\n";

if (!$apiKey) {
    die("Chybí api-eprel/credentials.php s \$apiKey - vyhledávání podle značky/modelu\n(restricted endpoint) bez klíče vůbec nejde spustit.\n");
}

foreach ($kandidati as $k) {
    echo "--- {$k['nazev']} ---\n";
    echo "  EAN: " . ($k['ean'] ?? '(feed neuvádí)') . ", cena: {$k['cena']} Kč, dostupnost: {$k['dostupnost']}\n";
    echo "  Zdroj: {$k['alza_url']}\n";

    $hits = array();
    $usedIdentifier = null;

    foreach (array($k['model'], $k['mpn']) as $identifier) {
        $result = eprelSearchModel($apiUrl, $productGroup, $apiKey, $identifier, $k['znacka']);
        if (isset($result['error'])) {
            echo "  Hledání podle \"$identifier\" selhalo: {$result['error']}\n";
            continue;
        }
        if (!empty($result['hits'])) {
            $hits = $result['hits'];
            $usedIdentifier = $identifier;
            break;
        }
    }

    if (!$hits) {
        echo "  NENALEZENO (zkoušeno modelIdentifier=\"{$k['model']}\" i \"{$k['mpn']}\", supplierOrTrademark=\"{$k['znacka']}\")\n\n";
        continue;
    }

    if (count($hits) > 1) {
        echo '  POZOR: nalezeno ' . count($hits) . " shod pro \"$usedIdentifier\", beru první, zkontroluj ručně:\n";
        foreach ($hits as $h) {
            echo '    - reg. č. ' . ($h['eprelRegistrationNumber'] ?? '?') . ', modelIdentifier: ' . ($h['modelIdentifier'] ?? '?') . "\n";
        }
    }

    $regNumber = $hits[0]['eprelRegistrationNumber'];
    $detailUrl = $apiUrl . '/products/' . rawurlencode($productGroup) . '/' . rawurlencode($regNumber);
    $r2 = eprelGet($detailUrl, null);
    if ($r2['status'] !== 200) {
        echo "  Nalezeno (přes \"$usedIdentifier\") reg. č. $regNumber, ale detail se nepodařilo načíst (HTTP {$r2['status']})\n\n";
        continue;
    }

    $model2 = json_decode($r2['body'], true);
    echo "  Nalezeno přes modelIdentifier=\"$usedIdentifier\"! EPREL reg. č.: $regNumber\n";
    echo "  URL: https://eprel.ec.europa.eu/screen/product/$productGroup/$regNumber\n\n";

    $fields = array(
        'modelIdentifier', 'supplierOrTrademark', 'energyClass', 'energyConsPer100Cycle',
        'waterCons', 'noise', 'noiseClass', 'spinClass', 'spinSpeedRated', 'ratedCapacity',
        'dimensionWidth', 'dimensionDepth', 'dimensionHeight', 'type',
    );
    foreach ($fields as $f) {
        $v = isset($model2[$f]) ? $model2[$f] : null;
        if (is_array($v)) {
            $v = json_encode($v, JSON_UNESCAPED_UNICODE);
        }
        printf("    %-24s %s\n", $f, var_export($v, true));
    }

    echo "\n";
    usleep(300000);
}

echo str_repeat('=', 78) . "\n";
echo "Hotovo.\n";
