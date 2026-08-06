<?php
/**
 * Sdílený template pro produktové stránky.
 *
 * Očekávaná proměnná (nastavená v konkrétní stránce před include):
 *   $slug   string  – slug produktu, klíč v data/produkty.php
 */

require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$p = produkt($slug);
if (!$p) { http_response_code(404); require dirname(__DIR__) . '/404.php'; exit; }

$breadcrumb_segment = hlavni_segment($p);

$page_title       = $p['nazev'] . ': technické parametry a cena';
$page_description = 'Ověřené parametry pračky ' . $p['nazev'] . ' z registru EPREL — kapacita, energetická třída, hlučnost. Klady, zápory a srovnání s podobnými modely.';
$page_canonical   = SITE_URL . '/' . $p['slug'] . '/';
$page_og_image    = $p['obrazek'];

$breadcrumb_cesta = [['url' => '/', 'nazev' => 'Test praček 2026']];
if ($breadcrumb_segment) {
    $breadcrumb_cesta[] = ['url' => '/' . $breadcrumb_segment . '/', 'nazev' => nazev_segmentu($breadcrumb_segment)];
}
$breadcrumb_cesta[] = ['url' => '/' . $p['slug'] . '/', 'nazev' => $p['nazev']];

$schema_json = schema_product($p) . schema_breadcrumb($breadcrumb_cesta);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';

$alternativy = produkt_alternativy($p, 2);
?>

<div class="container product-detail">

  <!-- Breadcrumb -->
  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <?php foreach ($breadcrumb_cesta as $i => $krok): ?>
        <?php if ($i === count($breadcrumb_cesta) - 1): ?>
        <li aria-current="page"><?= htmlspecialchars($krok['nazev'], ENT_QUOTES, 'UTF-8') ?></li>
        <?php else: ?>
        <li><a href="<?= url($krok['url']) ?>"><?= htmlspecialchars($krok['nazev'], ENT_QUOTES, 'UTF-8') ?></a></li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ol>
  </nav>

  <h1><?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?>: recenze a zkušenosti uživatelů</h1>

  <!-- ================================================================
       1. VERDIKT
       ================================================================ -->
  <div class="verdikt-box" role="note" aria-label="Verdikt">
    <strong>Verdikt:</strong> <?= htmlspecialchars($p['verdikt'], ENT_QUOTES, 'UTF-8') ?>
  </div>

  <div class="product-detail__header">
    <div class="product-detail__img">
      <img
        src="<?= htmlspecialchars($p['obrazek'], ENT_QUOTES, 'UTF-8') ?>"
        alt="Pračka <?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?>"
        width="280" height="280"
        loading="eager"
      >
    </div>
    <div class="product-detail__intro">

      <!-- ================================================================
           2. RYCHLÉ PARAMETRY
           ================================================================ -->
      <h2>Rychlé parametry</h2>
      <table class="params-table" aria-label="Technické parametry <?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?>">
        <tbody>
          <tr><th scope="row">Kapacita</th><td><?= (int)$p['kapacita'] ?> kg<?= !empty($p['kapacita_susicka']) ? ' (sušení ' . (int)$p['kapacita_susicka'] . ' kg)' : '' ?></td></tr>
          <tr><th scope="row">Maximální otáčky</th><td><?= (int)$p['otacky'] ?> ot./min</td></tr>
          <tr><th scope="row">Energetická třída</th><td><?= htmlspecialchars($p['energ_trida'], ENT_QUOTES, 'UTF-8') ?></td></tr>
          <tr><th scope="row">Spotřeba energie</th><td><?= (int)$p['spotreba_kwh'] ?> kWh<?= $p['typ'] === 'susicka' ? ' / rok' : ' / 100 cyklů' ?></td></tr>
          <tr><th scope="row">Třída odstřeďování</th><td><?= htmlspecialchars($p['trida_odstred'], ENT_QUOTES, 'UTF-8') ?></td></tr>
          <tr><th scope="row">Hlučnost (praní)</th><td><?= (int)$p['hlucnost_prani'] ?> dB</td></tr>
          <tr><th scope="row">Rozměry (Š × H × V)</th><td><?= (int)$p['sirka'] ?> × <?= (int)$p['hloubka'] ?> × <?= (int)$p['vyska'] ?> cm</td></tr>
          <tr><th scope="row">Typ motoru</th><td><?= htmlspecialchars($p['motor'], ENT_QUOTES, 'UTF-8') ?></td></tr>
          <tr><th scope="row">Wi-Fi</th><td><?= $p['wifi'] ? 'Ano' : 'Ne' ?></td></tr>
          <tr><th scope="row">Typ plnění</th><td><?= popis_typu_plneni($p['typ']) ?></td></tr>
          <tr><th scope="row">EAN</th><td><?= htmlspecialchars($p['ean'], ENT_QUOTES, 'UTF-8') ?></td></tr>
        </tbody>
      </table>

      <p><small>Parametry pocházejí z registru <a href="<?= htmlspecialchars($p['eprel_url'], ENT_QUOTES, 'UTF-8') ?>" rel="noopener noreferrer" target="_blank">EPREL (eprel.ec.europa.eu)</a> a feedu prodejce.</small></p>

      <p class="product-cena">
        <?= formatuj_cenu((int)$p['cena_orient'], $p['cena_datum']) ?>
      </p>
      <p>
        <a href="<?= htmlspecialchars($p['alza_url'], ENT_QUOTES, 'UTF-8') ?>" rel="sponsored nofollow noopener" target="_blank" class="btn btn--primary btn--lg">Koupit →</a>
      </p>
    </div>
  </div>

  <?php require_once dirname(__DIR__) . '/inc/components/disclosure.php'; ?>

  <!-- ================================================================
       3. CO ŘÍKAJÍ UŽIVATELÉ
       ================================================================ -->
  <section aria-labelledby="recenze-heading">
    <h2 id="recenze-heading">Shrnutí modelu</h2>

    <p class="text-muted"><small>
      K tomuto modelu zatím nemáme žádné reálné hodnocení od zákazníků — sekce níže vychází
      z ověřených technických parametrů, ne z recenzí. Vlastníte tuhle pračku? Napište nám na
      <a href="mailto:<?= htmlspecialchars(AUTOR_EMAIL, ENT_QUOTES, 'UTF-8') ?>?subject=<?= rawurlencode('Recenze: ' . $p['nazev']) ?>">
        <?= htmlspecialchars(AUTOR_EMAIL, ENT_QUOTES, 'UTF-8') ?>
      </a> — vaši zkušenost rádi doplníme.
    </small></p>

    <p><?= htmlspecialchars($p['recenze_shrnuti'], ENT_QUOTES, 'UTF-8') ?></p>
    <?php if (!empty($p['pro'])): ?>
    <p>Mezi hlavní přednosti patří: <?= htmlspecialchars(implode('; ', $p['pro']), ENT_QUOTES, 'UTF-8') ?>.</p>
    <?php endif; ?>

    <h3>Na co si dát pozor</h3>
    <?php if (!empty($p['proti'])): ?>
    <p><?= htmlspecialchars(implode('; ', $p['proti']), ENT_QUOTES, 'UTF-8') ?>.</p>
    <?php endif; ?>

    <h3>Pro koho se hodí</h3>
    <p><?= htmlspecialchars(popis_pro_koho($p), ENT_QUOTES, 'UTF-8') ?></p>
  </section>

  <!-- ================================================================
       4. NEZÁVISLÉ TESTY
       ================================================================ -->
  <?php if (!empty($p['dtest'])): ?>
  <section aria-labelledby="dtest-heading">
    <h2 id="dtest-heading">Nezávislé testy</h2>
    <p>
      <?= htmlspecialchars($p['dtest']['zdroj'], ENT_QUOTES, 'UTF-8') ?>
      (test z <?= htmlspecialchars($p['dtest']['datum'], ENT_QUOTES, 'UTF-8') ?>):
      <?= htmlspecialchars($p['dtest']['vysledek'], ENT_QUOTES, 'UTF-8') ?>
      — <a href="<?= htmlspecialchars($p['dtest']['url'], ENT_QUOTES, 'UTF-8') ?>" rel="noopener noreferrer" target="_blank">originál testu</a>.
    </p>
  </section>
  <?php endif; ?>

  <!-- ================================================================
       5. OFICIÁLNÍ PARAMETRY Z EPREL
       ================================================================ -->
  <section aria-labelledby="eprel-heading">
    <h2 id="eprel-heading">Oficiální parametry z energetického štítku</h2>
    <p>
      Níže uvedené parametry pocházejí z veřejného registru EPREL
      (<a href="<?= htmlspecialchars($p['eprel_url'], ENT_QUOTES, 'UTF-8') ?>" rel="noopener noreferrer" target="_blank">eprel.ec.europa.eu</a>,
      kategorie <em>washingmachines2019</em>, EAN: <?= htmlspecialchars($p['ean'], ENT_QUOTES, 'UTF-8') ?>).
      Jedná se o hodnoty z úředně deklarovaného energetického štítku výrobce.
    </p>
    <table class="params-table" aria-label="Parametry z energetického štítku EPREL">
      <tbody>
        <tr><th scope="row">Energetická třída (nová stupnice A–G)</th><td><?= htmlspecialchars($p['energ_trida'], ENT_QUOTES, 'UTF-8') ?></td></tr>
        <tr><th scope="row">Spotřeba energie</th><td><?= (int)$p['spotreba_kwh'] ?> kWh<?= $p['typ'] === 'susicka' ? ' / rok' : ' (váženě, 100 cyklů)' ?></td></tr>
        <tr><th scope="row">Roční spotřeba vody</th><td><?= number_format((int)$p['spotreba_vody'], 0, ',', ' ') ?> l</td></tr>
        <tr><th scope="row">Třída účinnosti odstřeďování</th><td><?= htmlspecialchars($p['trida_odstred'], ENT_QUOTES, 'UTF-8') ?></td></tr>
        <tr><th scope="row">Hlučnost při praní</th><td><?= (int)$p['hlucnost_prani'] ?> dB(A) re 1 pW</td></tr>
      </tbody>
    </table>
  </section>

  <!-- ================================================================
       6. KLADY A ZÁPORY
       ================================================================ -->
  <section aria-labelledby="pro-kontra-heading">
    <h2 id="pro-kontra-heading">Klady a zápory</h2>
    <div class="pro-kontra">
      <div class="pro-kontra__pro">
        <h3>✓ Klady</h3>
        <ul>
          <?php foreach ($p['pro'] as $item): ?>
          <li><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="pro-kontra__kontra">
        <h3>✗ Zápory</h3>
        <ul>
          <?php foreach ($p['proti'] as $item): ?>
          <li><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <!-- ================================================================
       7. ALTERNATIVY
       ================================================================ -->
  <?php if (!empty($alternativy)): ?>
  <section aria-labelledby="alternativy-heading">
    <h2 id="alternativy-heading">Alternativy v podobné kategorii</h2>
    <p>Pokud hledáte srovnání s jinými modely přibližně ve stejné cenové hladině nebo s podobnými parametry:</p>
    <ul>
      <?php foreach ($alternativy as $alt): ?>
      <li>
        <a href="<?= url('/' . $alt['slug'] . '/') ?>"><strong><?= htmlspecialchars($alt['nazev'], ENT_QUOTES, 'UTF-8') ?></strong></a> —
        <?= htmlspecialchars(popis_alternativy($alt), ENT_QUOTES, 'UTF-8') ?>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php if ($breadcrumb_segment): ?>
    <p><a href="<?= url('/' . $breadcrumb_segment . '/') ?>">Všechny <?= htmlspecialchars(mb_strtolower(nazev_segmentu($breadcrumb_segment)), ENT_QUOTES, 'UTF-8') ?> v přehledu →</a></p>
    <?php endif; ?>
  </section>
  <?php endif; ?>

  <!-- ================================================================
       8. FAQ
       ================================================================ -->
  <?php
  $faq_hlucnost_prani   = (int)$p['hlucnost_prani'];
  $faq_cena_datum       = htmlspecialchars(datum_cz_cisly($p['cena_datum']), ENT_QUOTES, 'UTF-8');
  $faq_alza_url         = htmlspecialchars($p['alza_url'], ENT_QUOTES, 'UTF-8');
  $faq_nazev            = htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8');

  $faq_items = [
    [
      'q' => "Jaká je záruka na {$faq_nazev}?",
      'a' => 'Standardní záruční doba je <strong>2 roky</strong> dle zákona. Výrobce může nabízet možnost registrace produktu pro prodloužení záruky na vybrané díly (např. motor) — aktuální podmínky ověřte na webu výrobce nebo u prodejce.',
    ],
    [
      'q' => "Je {$faq_nazev} vhodná do paneláku?",
      'a' => "Hlučnost při praní {$faq_hlucnost_prani} dB (podle deklarace EPREL) je orientačním vodítkem pro posouzení, zda pračka bude v bytovém domě rušit sousedy. Nižší hodnoty obecně znamenají tišší provoz. Pro instalaci v paneláku je vhodné také ověřit rozměry a umístění přívodu vody a odpadu.",
    ],
    [
      'q' => "Kde najdu aktuální cenu {$faq_nazev}?",
      'a' => "Orientační cena na tomto webu je k {$faq_cena_datum}. Aktuální cenu ověřte přímo u prodejce — na <a href=\"{$faq_alza_url}\" rel=\"sponsored nofollow noopener\" target=\"_blank\">Alze</a> nebo na Heurece.",
    ],
  ];
  $faq_id_prefix = 'produkt-faq';
  require dirname(__DIR__) . '/inc/components/faq.php';
  ?>

  <!-- ================================================================
       9. AFFILIATE CTA + DATUM
       ================================================================ -->
  <section class="product-cta-section" aria-label="Kde koupit">
    <h2>Kde koupit</h2>
    <p>
      <a href="<?= htmlspecialchars($p['alza_url'], ENT_QUOTES, 'UTF-8') ?>" rel="sponsored nofollow noopener" target="_blank" class="btn btn--primary btn--lg">
        Koupit <?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?> →
      </a>
    </p>
    <?php require_once dirname(__DIR__) . '/inc/components/disclosure.php'; ?>
  </section>

  <!-- Metodika odkaz (povinný na každé produktové stránce) -->
  <p class="metodika-odkaz text-muted">
    <small>Jak vznikají hodnocení na tomto webu? <a href="<?= url('/metodika/') ?>">Přečtěte si naši metodiku</a>.</small>
  </p>

  <?php require_once dirname(__DIR__) . '/inc/components/author-box.php'; ?>

</div><!-- /.container -->

<style>
.product-cena { font-size: .95rem; margin: .75rem 0; }
.btn--lg { padding: .75rem 1.5rem; font-size: 1rem; }
.product-cta-section { margin: 2rem 0; padding: 1.5rem; background: var(--color-bg-alt); border-radius: var(--radius); }
.metodika-odkaz { margin: 1.5rem 0; }
</style>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
