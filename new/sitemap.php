<?php
/**
 * Generuje sitemap.xml z dat webu. Volá se přes rewrite pravidlo v .htaccess
 * (sitemap.xml -> sitemap.php), aby URL zůstala bez přípony .php.
 *
 * Obsahuje vždy finální produkční URL (SITE_URL), bez ohledu na to, jestli web
 * aktuálně běží testovací na /new/ — do sitemapy nepatří žádná přesměrovaná
 * ani noindexovaná cesta.
 */
require_once __DIR__ . '/inc/config.php';
require_once __DIR__ . '/inc/functions.php';

header('Content-Type: application/xml; charset=UTF-8');

$urls = [];

// Homepage
$urls[] = ['loc' => '/', 'lastmod' => DATUM_AKTUALIZACE];

// Segmentové stránky (jen ty, které skutečně existují)
foreach (segmenty_valid() as $segment) {
    $urls[] = ['loc' => '/' . $segment . '/', 'lastmod' => DATUM_AKTUALIZACE];
}

// Produktové stránky
foreach (produkty() as $p) {
    $urls[] = ['loc' => '/' . $p['slug'] . '/', 'lastmod' => $p['cena_datum']];
}

// Rádcové stránky
foreach (['jak-vybrat-pracku', 'energeticke-tridy-pracek', 'jaka-kapacita-pracky', 'jak-cistit-pracku'] as $slug) {
    $urls[] = ['loc' => '/' . $slug . '/', 'lastmod' => DATUM_AKTUALIZACE];
}

// Důvěryhodnostní stránky
foreach (['metodika', 'o-nas', 'kontakt', 'affiliate-informace', 'ochrana-osobnich-udaju'] as $slug) {
    $urls[] = ['loc' => '/' . $slug . '/', 'lastmod' => DATUM_AKTUALIZACE];
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $u): ?>
  <url>
    <loc><?= htmlspecialchars(SITE_URL . $u['loc'], ENT_QUOTES | ENT_XML1, 'UTF-8') ?></loc>
    <lastmod><?= htmlspecialchars($u['lastmod'], ENT_QUOTES | ENT_XML1, 'UTF-8') ?></lastmod>
  </url>
<?php endforeach; ?>
</urlset>
