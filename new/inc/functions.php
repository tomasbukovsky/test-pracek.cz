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

/** Seznam slugů segmentů, které skutečně mají vygenerovanou stránku (min. 5 produktů) */
function segmenty_valid(): array {
    return [
        'pracky-lg', 'pracky-bosch', 'pracky-samsung', 'pracky-whirlpool', 'pracky-aeg', 'pracky-beko',
        'pracky-7-kg', 'pracky-8-kg', 'pracky-9-kg', 'pracky-10-kg',
        'pracky-s-prednim-plnenim', 'uzke-pracky', 'vestavne-pracky', 'pracky-se-susickou',
    ];
}

/** Čitelný název segmentu podle slugu (pro breadcrumb a odkazy) */
function nazev_segmentu(string $slug): string {
    $nazvy = [
        'pracky-lg'                => 'Pračky LG',
        'pracky-bosch'             => 'Pračky Bosch',
        'pracky-samsung'           => 'Pračky Samsung',
        'pracky-whirlpool'         => 'Pračky Whirlpool',
        'pracky-aeg'               => 'Pračky AEG',
        'pracky-beko'              => 'Pračky Beko',
        'pracky-7-kg'              => 'Pračky 7 kg',
        'pracky-8-kg'              => 'Pračky 8 kg',
        'pracky-9-kg'              => 'Pračky 9 kg',
        'pracky-10-kg'             => 'Pračky 10 kg',
        'pracky-s-prednim-plnenim' => 'Pračky s předním plněním',
        'uzke-pracky'              => 'Úzké pračky',
        'vestavne-pracky'          => 'Vestavné pračky',
        'pracky-se-susickou'       => 'Pračky se sušičkou',
    ];
    return $nazvy[$slug] ?? $slug;
}

/** První segment produktu, pro který skutečně existuje stránka (pro breadcrumb) */
function hlavni_segment(array $p): ?string {
    foreach ($p['segmenty'] ?? [] as $seg) {
        if (in_array($seg, segmenty_valid(), true)) return $seg;
    }
    return null;
}

/** Popisek typu plnění pro tabulku parametrů */
function popis_typu_plneni(string $typ): string {
    $popisy = [
        'predni'  => 'Přední',
        'horni'   => 'Horní',
        'susicka' => 'Přední (pračka se sušičkou)',
        'vestavna'=> 'Přední (vestavná)',
    ];
    return $popisy[$typ] ?? 'Přední';
}

/** Zda je motor invertorový (podle textového popisu v datech) */
function je_invertorovy_motor(string $motor): bool {
    return stripos($motor, 'invertor') !== false || stripos($motor, 'pohon') !== false;
}

/** Vygeneruje odstavec "pro koho se produkt hodí" z kapacity a výbavy */
function popis_pro_koho(array $p): string {
    $kapacita = (int)$p['kapacita'];
    if ($kapacita <= 7) {
        $komu = 'dvou- až tříčlennou domácnost';
    } elseif ($kapacita === 8) {
        $komu = 'tří- až čtyřčlennou domácnost';
    } elseif ($kapacita === 9) {
        $komu = 'čtyř- až pětičlennou domácnost';
    } else {
        $komu = 'vícečlennou domácnost s vysokou spotřebou prádla';
    }
    $veta = 'Z celkového obrazu hodnocení plyne, že pračka nejlépe poslouží ' . $komu . ', pro kterou je klíčovým parametrem kapacita ' . $kapacita . ' kg.';
    if (!empty($p['wifi'])) {
        $veta .= ' Ocení ji uživatelé, kteří chtějí praní kontrolovat na dálku přes mobilní aplikaci.';
    } else {
        $veta .= ' Model nemá Wi-Fi připojení, takže se hodí spíš pro ty, kdo chytré ovládání nevyžadují.';
    }
    if (je_invertorovy_motor($p['motor'])) {
        $veta .= ' Invertorový motor zároveň znamená tišší provoz a delší deklarovanou životnost.';
    }
    return $veta;
}

/** Vybere 2–3 alternativní produkty ze stejného segmentu (podle blízkosti orientační ceny) */
function produkt_alternativy(array $p, int $pocet = 2): array {
    $vsechny = produkty();
    $segment = $p['segmenty'][0] ?? null;
    $kandidati = [];
    if ($segment) {
        foreach ($vsechny as $x) {
            if ($x['slug'] !== $p['slug'] && in_array($segment, $x['segmenty'] ?? [], true)) {
                $kandidati[$x['slug']] = $x;
            }
        }
    }
    if (count($kandidati) < $pocet) {
        foreach ($vsechny as $x) {
            if ($x['slug'] !== $p['slug'] && $x['znacka'] === $p['znacka']) {
                $kandidati[$x['slug']] = $x;
            }
        }
    }
    $kandidati = array_values($kandidati);
    usort($kandidati, fn($a, $b) => abs($a['cena_orient'] - $p['cena_orient']) <=> abs($b['cena_orient'] - $p['cena_orient']));
    return array_slice($kandidati, 0, $pocet);
}

/** Generuje JSON-LD Article + Person (autor) schema pro rádcové stránky */
function schema_article(string $nazev, string $popis, string $url): string {
    $schema = [
        '@context'      => 'https://schema.org',
        '@type'         => 'Article',
        'headline'      => $nazev,
        'description'   => $popis,
        'mainEntityOfPage' => $url,
        'author'        => [
            '@type' => 'Person',
            'name'  => AUTOR_JMENO,
            'url'   => SITE_URL . '/o-nas/',
        ],
        'publisher'     => ['@id' => SITE_URL . '/#organization'],
        'dateModified'  => DATUM_AKTUALIZACE,
    ];
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
}

/** Krátký popisek alternativy do odrážky (kapacita, třída, případně Wi-Fi) */
function popis_alternativy(array $alt): string {
    $castky = (int)$alt['kapacita'] . ' kg, energetická třída ' . $alt['energ_trida'];
    if (!empty($alt['wifi'])) $castky .= ', Wi-Fi';
    $castky .= '. Orientační cena ' . number_format((int)$alt['cena_orient'], 0, ',', ' ') . ' Kč.';
    return $castky;
}
