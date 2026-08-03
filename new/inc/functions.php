<?php
/**
 * Pomocné funkce webu test-pracek.cz
 */

/** Vrátí interní URL cestu s prefixem BASE_PATH (viz inc/config.php) */
function url(string $cesta = '/'): string {
    return BASE_PATH . $cesta;
}

/** Načte a cachuje pole produktů */
function produkty(): array {
    static $cache = null;
    if ($cache === null) {
        $cache = require dirname(__DIR__) . '/data/produkty.php';
    }
    return $cache;
}

/** Filtruje produkty podle segmentu */
function produkty_v_segmentu(string $segment): array {
    return array_filter(produkty(), fn($p) => in_array($segment, $p['segmenty'] ?? []));
}

/** Vrátí jeden produkt podle slugu */
function produkt(string $slug): ?array {
    return produkty()[$slug] ?? null;
}

/** Seřadí pole produktů podle klíče */
function serad_produkty(array $pole, string $klic, string $smer = 'asc'): array {
    usort($pole, function ($a, $b) use ($klic, $smer) {
        $av = $a[$klic] ?? 0;
        $bv = $b[$klic] ?? 0;
        return $smer === 'asc' ? ($av <=> $bv) : ($bv <=> $av);
    });
    return $pole;
}

/** Vrátí affiliate odkaz s požadovanými atributy */
function affiliate_odkaz(array $produkt, string $pozice = 'default'): string {
    $url = htmlspecialchars($produkt['alza_url'] ?? '#', ENT_QUOTES, 'UTF-8');
    $nazev = htmlspecialchars($produkt['nazev'] ?? '', ENT_QUOTES, 'UTF-8');
    return sprintf(
        '<a href="%s" rel="sponsored nofollow noopener" target="_blank" data-pozice="%s">%s</a>',
        $url,
        htmlspecialchars($pozice, ENT_QUOTES, 'UTF-8'),
        $nazev
    );
}

/** Generuje JSON-LD schema Product */
function schema_product(array $p): string {
    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'Product',
        'name'     => $p['nazev'],
        'brand'    => ['@type' => 'Brand', 'name' => $p['znacka']],
        'gtin13'   => $p['ean'],
        'image'    => SITE_URL . $p['obrazek'],
        'description' => $p['verdikt'],
    ];
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
}

/** Generuje JSON-LD ItemList pro žebříček */
function schema_itemlist(array $pole): string {
    $items = [];
    $i = 1;
    foreach ($pole as $p) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i++,
            'url'      => SITE_URL . '/' . $p['slug'] . '/',
            'name'     => $p['nazev'],
        ];
    }
    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'ItemList',
        'itemListElement' => $items,
    ];
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
}

/** Generuje JSON-LD BreadcrumbList */
function schema_breadcrumb(array $cesta): string {
    // $cesta = [['url' => '/', 'nazev' => 'Úvod'], ['url' => '/bosch-wan28263by/', 'nazev' => 'Bosch WAN28263BY'], ...]
    $items = [];
    $i = 1;
    foreach ($cesta as $polozka) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i++,
            'item'     => ['@id' => SITE_URL . $polozka['url'], 'name' => $polozka['nazev']],
        ];
    }
    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    ];
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
}

/** Formátuje orientační cenu s povinnou poznámkou */
function formatuj_cenu(int $castka, string $datum): string {
    return sprintf(
        'Orientační cena k %s: <strong>%s Kč</strong>. Aktuální cenu najdete u prodejce.',
        htmlspecialchars(datum_cz($datum), ENT_QUOTES, 'UTF-8'),
        number_format($castka, 0, ',', ' ')
    );
}

/** Formátuje datum do českého formátu */
function datum_cz(string $datum): string {
    $mesice = ['', 'ledna', 'února', 'března', 'dubna', 'května', 'června',
               'července', 'srpna', 'září', 'října', 'listopadu', 'prosince'];
    [$y, $m, $d] = explode('-', $datum);
    return (int)$d . '. ' . $mesice[(int)$m] . ' ' . $y;
}
