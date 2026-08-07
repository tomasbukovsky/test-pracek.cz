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
    return array_filter(produkty(), function ($p) use ($segment) {
        return in_array($segment, isset($p['segmenty']) ? $p['segmenty'] : []);
    });
}

/** Vrátí jeden produkt podle slugu (nebo null, pokud neexistuje) */
function produkt(string $slug) {
    $vsechny = produkty();
    return isset($vsechny[$slug]) ? $vsechny[$slug] : null;
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
        'image'    => $p['obrazek'],
        'description' => $p['verdikt'],
        'sku'      => $p['alza_id'],
    ];
    // gtin13 jen pokud EAN opravdu máme - prázdný/neplatný GTIN by strukturovaná data rozbil.
    if (!empty($p['ean'])) {
        $schema['gtin13'] = $p['ean'];
    }
    // offers - Google vyžaduje u Product buď offers, review, nebo aggregateRating.
    // Recenze/hodnocení nefabrikujeme (nemáme je), takže jde jediná poctivá cesta: orientační
    // cena je reálný údaj z podkladů, platnost omezujeme na 30 dní od data zjištění.
    if (!empty($p['cena_orient']) && !empty($p['alza_url'])) {
        $schema['offers'] = [
            '@type'         => 'Offer',
            'url'           => $p['alza_url'],
            'priceCurrency' => 'CZK',
            'price'         => $p['cena_orient'],
        ];
        if (!empty($p['cena_datum'])) {
            $schema['offers']['priceValidUntil'] = date('Y-m-d', strtotime($p['cena_datum'] . ' +30 days'));
        }
    }
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
    // $cesta = [['url' => '/', 'nazev' => 'Úvod'], ['url' => '/bosch-wge03200by/', 'nazev' => 'Bosch WGE03200BY'], ...]
    $items = [];
    $i = 1;
    foreach ($cesta as $polozka) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i++,
            'name'     => $polozka['nazev'],
            'item'     => SITE_URL . $polozka['url'],
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
        htmlspecialchars(datum_cz_cisly($datum), ENT_QUOTES, 'UTF-8'),
        number_format($castka, 0, ',', ' ')
    );
}

/** Formátuje datum do krátkého českého číselného formátu (den. měsíc. rok) - používá se u cen */
function datum_cz_cisly(string $datum): string {
    list($y, $m, $d) = explode('-', $datum);
    return (int)$d . '. ' . (int)$m . '. ' . $y;
}

/** Formátuje datum do českého formátu */
function datum_cz(string $datum): string {
    $mesice = ['', 'ledna', 'února', 'března', 'dubna', 'května', 'června',
               'července', 'srpna', 'září', 'října', 'listopadu', 'prosince'];
    list($y, $m, $d) = explode('-', $datum);
    return (int)$d . '. ' . $mesice[(int)$m] . ' ' . $y;
}

/** Seznam slugů segmentů, které skutečně mají vygenerovanou stránku (min. 5 produktů) */
function segmenty_valid(): array {
    return [
        'pracky-lg', 'pracky-bosch', 'pracky-samsung', 'pracky-whirlpool', 'pracky-aeg', 'pracky-beko',
        'pracky-7-kg', 'pracky-8-kg', 'pracky-9-kg', 'pracky-10-kg',
        'pracky-s-prednim-plnenim', 'pracky-s-hornim-plnenim', 'uzke-pracky', 'vestavne-pracky', 'pracky-se-susickou',
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
        'pracky-s-hornim-plnenim'  => 'Pračky s horním plněním',
        'uzke-pracky'              => 'Úzké pračky',
        'vestavne-pracky'          => 'Vestavné pračky',
        'pracky-se-susickou'       => 'Pračky se sušičkou',
    ];
    return $nazvy[$slug] ?? $slug;
}

/** První segment produktu, pro který skutečně existuje stránka (nebo null) */
function hlavni_segment(array $p) {
    $seznam = isset($p['segmenty']) ? $p['segmenty'] : [];
    foreach ($seznam as $seg) {
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
    usort($kandidati, function ($a, $b) use ($p) {
        return abs($a['cena_orient'] - $p['cena_orient']) <=> abs($b['cena_orient'] - $p['cena_orient']);
    });
    return array_slice($kandidati, 0, $pocet);
}

/** Generuje JSON-LD Article + Person (autor) schema pro rádcové stránky */
function schema_article(string $nazev, string $popis, string $url, string $obrazek = ''): string {
    $schema = [
        '@context'      => 'https://schema.org',
        '@type'         => 'Article',
        'headline'      => $nazev,
        'description'   => $popis,
        'image'         => $obrazek !== '' ? $obrazek : SITE_URL . '/assets/img/logo.png',
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
