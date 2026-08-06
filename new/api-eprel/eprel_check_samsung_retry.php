<?php
/**
 * Druhý pokus o dohledání Samsung modelů v EPREL - všech 7 produktů Samsung
 * v katalogu selhalo při hledání pod značkou "Samsung" (viz eprel_check_pracky.php).
 * Tenhle skript zkouší pro každý model NĚKOLIK variant zápisu značky
 * (supplierOrTrademark), protože je možné, že Samsung má v EPREL vyplněnou
 * jinou variantu názvu než "Samsung" (např. "Samsung Electronics").
 *
 * Nic nezapisuje do produkty.php - jen vypíše, co se najde, a hotový PHP
 * úryvek ke kontrole a ručnímu vložení (stejně jako eprel_check_pracky.php).
 *
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

// Varianty zápisu značky, které se zkusí popořadě pro každý model.
$znackaVarianty = array('Samsung', 'Samsung Electronics', 'SAMSUNG ELECTRONICS', 'SAMSUNG');

// Kandidáti: slug v produkty.php => modelIdentifier (alza_id).
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

echo "Druhý pokus - Samsung s variantami značky ($productGroup, $environment)\n";
echo str_repeat('=', 78) . "\n\n";

if (!$apiKey) {
    die("Chybí api-eprel/credentials.php s \$apiKey.\n");
}

foreach ($kandidati as $slug => $model) {
    echo "--- $slug (modelIdentifier=\"$model\") ---\n";

    $found = false;

    foreach ($znackaVarianty as $znacka) {
        $searchUrl = $apiUrl . '/products/' . rawurlencode($productGroup)
            . '?_page=1&_limit=5&includeOldProducts=true'
            . '&modelIdentifier=' . rawurlencode($model)
            . '&supplierOrTrademark=' . rawurlencode($znacka);

        $r = eprelGet($searchUrl, $apiKey);
        if ($r['status'] !== 200) {
            echo "  [\"$znacka\"] HTTP chyba {$r['status']}\n";
            continue;
        }
        $data = json_decode($r['body'], true);
        $hits = isset($data['hits']) ? $data['hits'] : array();

        if (empty($hits)) {
            echo "  [\"$znacka\"] nic\n";
            continue;
        }

        $regNumber = $hits[0]['eprelRegistrationNumber'];
        $detailUrl = $apiUrl . '/products/' . rawurlencode($productGroup) . '/' . rawurlencode($regNumber);
        $r2 = eprelGet($detailUrl, null);
        if ($r2['status'] !== 200) {
            echo "  [\"$znacka\"] nalezeno reg. č. $regNumber, ale detail selhal (HTTP {$r2['status']})\n";
            continue;
        }
        $model2 = json_decode($r2['body'], true);

        echo "  NALEZENO přes supplierOrTrademark=\"$znacka\"! Reg. č.: $regNumber\n";
        echo "  URL: https://eprel.ec.europa.eu/screen/product/$productGroup/$regNumber\n";

        $fields = array('energyClass', 'energyConsPer100Cycle', 'waterCons', 'noise', 'noiseClass',
            'spinClass', 'spinSpeedRated', 'ratedCapacity', 'dimensionWidth', 'dimensionDepth', 'dimensionHeight');
        foreach ($fields as $f) {
            $v = isset($model2[$f]) ? $model2[$f] : null;
            printf("    %-24s %s\n", $f, var_export($v, true));
        }

        $found = true;
        break; // dál už další varianty zkoušet netřeba
    }

    if (!$found) {
        echo "  CELKOVĚ NENALEZENO (zkoušeno " . count($znackaVarianty) . " variant značky)\n";
    }

    echo "\n";
    usleep(300000);
}

echo str_repeat('=', 78) . "\n";
echo "Hotovo.\n";
