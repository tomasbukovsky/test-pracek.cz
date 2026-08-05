<?php
/**
 * Sdílený template pro segmentové stránky.
 *
 * Očekávané proměnné (nastavené v konkrétní stránce před include):
 *   $segment_slug     string  – slug segmentu, např. 'pracky-lg'
 *   $segment_h1       string  – text H1
 *   $page_title       string  – <title> stránky
 *   $page_description string  – meta description
 *   $segment_intro    string  – HTML intro textu (200–300 slov)
 *   $faq_items        array   – viz components/faq.php
 *   $related          array   – [['url' => '/.../', 'nazev' => '...'], ...]
 */

require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$produkty_segmentu = array_values(produkty_v_segmentu($segment_slug));

$page_canonical = SITE_URL . '/' . $segment_slug . '/';
$page_og_image  = SITE_URL . '/assets/img/og-' . $segment_slug . '.jpg';
$schema_json    = schema_itemlist($produkty_segmentu)
                . schema_breadcrumb([
                    ['url' => '/', 'nazev' => 'Test praček 2026'],
                    ['url' => '/' . $segment_slug . '/', 'nazev' => $segment_h1],
                  ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';

// Seřadit: cena vzestupně (null poslední)
usort($produkty_segmentu, function ($a, $b) {
    $ca = $a['cena_orient'] ?: PHP_INT_MAX;
    $cb = $b['cena_orient'] ?: PHP_INT_MAX;
    return $ca <=> $cb;
});

// TOP 3 = první 3 po seřazení
$top3 = array_slice($produkty_segmentu, 0, 3);
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page"><?= htmlspecialchars($segment_h1, ENT_QUOTES, 'UTF-8') ?></li>
    </ol>
  </nav>

  <h1><?= htmlspecialchars($segment_h1, ENT_QUOTES, 'UTF-8') ?></h1>

  <div class="segment-intro">
    <?= $segment_intro /* HTML povoleno – obsah píše provozovatel */ ?>
    <p><small>Metodika výběru a hodnocení: <a href="<?= url('/metodika/') ?>">Jak pracujeme s daty →</a></small></p>
  </div>

  <?php require_once dirname(__DIR__) . '/inc/components/disclosure.php'; ?>

  <!-- Srovnávací tabulka všech produktů v segmentu -->
  <section aria-labelledby="tabulka-heading">
    <h2 id="tabulka-heading">Přehled <?= htmlspecialchars(mb_strtolower($segment_h1), ENT_QUOTES, 'UTF-8') ?></h2>
    <p class="text-muted">Seřazeno podle orientační ceny. Parametry z EPREL a feedu prodejce. Ceny jsou orientační.</p>
    <?php require dirname(__DIR__) . '/inc/components/product-table.php'; ?>
  </section>

  <!-- TOP 3 -->
  <section aria-labelledby="top3-heading">
    <h2 id="top3-heading">TOP 3 doporučení</h2>
    <p class="text-muted">Tři modely nejlépe hodnocené zákazníky v tomto segmentu. Hodnocení vychází z agregace recenzí, ne z vlastního testování.</p>

    <?php foreach ($top3 as $rank => $p): ?>
    <article class="top-item">
      <h3><?= $rank + 1 ?>. <a href="<?= url('/' . htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') . '/') ?>"><?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?></a></h3>
      <div class="verdikt-box"><?= htmlspecialchars($p['verdikt'], ENT_QUOTES, 'UTF-8') ?></div>
      <p><?= htmlspecialchars($p['recenze_shrnuti'], ENT_QUOTES, 'UTF-8') ?></p>
      <p>
        <a href="<?= url('/' . htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') . '/') ?>" class="btn btn--secondary">Celá recenze</a>
        <a href="<?= htmlspecialchars($p['alza_url'], ENT_QUOTES, 'UTF-8') ?>" rel="sponsored nofollow noopener" target="_blank" class="btn btn--primary">Koupit</a>
      </p>
    </article>
    <?php endforeach; ?>
  </section>

  <!-- FAQ -->
  <?php require dirname(__DIR__) . '/inc/components/faq.php'; ?>

  <!-- Prolinkování na sousední segmenty -->
  <?php if (!empty($related)): ?>
  <section aria-labelledby="related-heading">
    <h2 id="related-heading">Mohlo by vás také zajímat</h2>
    <ul class="segmenty-grid">
      <?php foreach ($related as $r): ?>
      <li><a href="<?= htmlspecialchars($r['url'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($r['nazev'], ENT_QUOTES, 'UTF-8') ?></a></li>
      <?php endforeach; ?>
      <li><a href="<?= url('/') ?>">Celý přehled praček 2026</a></li>
    </ul>
  </section>
  <?php endif; ?>

  <p class="metodika-odkaz text-muted"><small>Hodnocení na tomto webu vychází z agregace uživatelských recenzí. <a href="<?= url('/metodika/') ?>">Přečtěte si naši metodiku</a>.</small></p>

  <?php require_once dirname(__DIR__) . '/inc/components/author-box.php'; ?>

</div>

<style>
.top-item { border-bottom: 1px solid var(--color-border); padding: 1.5rem 0; }
.top-item:last-child { border-bottom: none; }
.segmenty-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: .5rem; list-style: none; padding: 0; margin: 1rem 0; }
.segmenty-grid a { display: block; padding: .6rem 1rem; background: var(--color-bg-alt); border-radius: var(--radius); text-decoration: none; font-weight: 500; }
.segmenty-grid a:hover { background: #dde4ea; }
.metodika-odkaz { margin: 1.5rem 0; }
</style>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
