<?php
/**
 * Třetí pokus o dohledání Samsung modelů v EPREL.
 *
 * Druhý pokus (varianty zápisu značky "Samsung"/"Samsung Electronics"/...)
 * nic nenašel - viz eprel_check_samsung_retry.php. EPREL nemá žádný veřejný
 * číselník/seznam výrobců k procházení (ověřeno v dokumentaci API), takže
 * dalším rozumným krokem není hádat další varianty značky, ale nechat pole
 * supplierOrTrademark úplně PRÁZDNÉ - dokumentace k basic search u něj říká
 * "Optional field, if not passed all trademarks are shown", tedy se prohledají
 * VŠECHNY značky a najde se cokoliv, co odpovídá modelIdentifier, ať už je
 * u toho v EPREL zapsaná jakákoli značka. Pokud se něco najde, skript vypíše
 * i to, pod jakou značkou (supplierOrTrademark) je to v EPREL skutečně vedené.
 *
 * Nic nezapisuje do produkty.php - jen vypíše výsledek ke kontrole.
 * Stejná credentials.php konvence jako ostatní skripty v této složce.
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

$kandidati = array(
    'samsung-ww80cgc04dable'  => 'WW80CGC04DABLE',
    'samsung-ww80cgc04dtele'  => 'WW80CGC04DTELE',
    'samsung-ww90cgc04dtele'  => 'WW90CGC04DTELE',
    'samsung-ww10fg5u34aele'  => 'WW10FG5U34AELE',
    'samsung-ww10fg6u94lbu4'  => 'WW10FG6U94LBU4',
    'samsung-wd90dg5g34bble'  => 'WD90DG5G34BBLE',
    'samsung-ww11dg6b25leu4'  => 'WW11DG6B25LEU4',
);

header('Content-Type: text/plain; charset=utf-8');

echo "Třetí pokus - Samsung, hledání BEZ omezení na značku ($productGroup, $environment)\n";
echo str_repeat('=', 78) . "\n\n";

if (!$apiKey) {
    die("Chybí api-eprel/credentials.php s \$apiKey.\n");
}

foreach ($kandidati as $slug => $model) {
    echo "--- $slug (modelIdentifier=\"$model\", značka neomezena) ---\n";

    $searchUrl = $apiUrl . '/products/' . rawurlencode($productGroup)
        . '?_page=1&_limit=10&includeOldProducts=true'
        . '&modelIdentifier=' . rawurlencode($model);

    $r = eprelGet($searchUrl, $apiKey);
    if ($r['status'] !== 200) {
        echo "  HTTP chyba {$r['status']}\n\n";
        continue;
    }
    $data = json_decode($r['body'], true);
    $hits = isset($data['hits']) ? $data['hits'] : array();

    if (empty($hits)) {
        echo "  NIC (ani bez omezení na značku) - model pravděpodobně v EPREL vůbec není,\n";
        echo "  nebo tam má úplně jiné modelIdentifier, které se neshoduje ani částečně.\n\n";
        continue;
    }

    echo "  Nalezeno shod: " . count($hits) . "\n";
    foreach ($hits as $h) {
        $reg = isset($h['eprelRegistrationNumber']) ? $h['eprelRegistrationNumber'] : '?';
        $znacka = isset($h['supplierOrTrademark']) ? $h['supplierOrTrademark'] : '?';
        $model2 = isset($h['modelIdentifier']) ? $h['modelIdentifier'] : '?';
        echo "    - reg. č. $reg | značka v EPREL: \"$znacka\" | modelIdentifier v EPREL: \"$model2\"\n";
    }
    echo "\n";

    usleep(300000);
}

echo str_repeat('=', 78) . "\n";
echo "Hotovo.\n";
