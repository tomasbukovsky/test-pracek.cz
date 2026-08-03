<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$p = produkt('bosch-wan28263by');
if (!$p) { http_response_code(404); require dirname(__DIR__) . '/404.php'; exit; }

$page_title       = 'Bosch WAN28263BY: recenze, parametry a zkušenosti uživatelů';
$page_description = 'Co říkají uživatelé na Alze a Heurece o pračce Bosch WAN28263BY? Parametry z registru EPREL, klady, zápory a srovnání s alternativami.';
$page_canonical   = SITE_URL . '/' . $p['slug'] . '/';
$page_og_image    = SITE_URL . $p['obrazek'];
$schema_json      = schema_product($p)
                  . schema_breadcrumb([
                      ['url' => '/', 'nazev' => 'Test praček 2026'],
                      ['url' => '/' . $p['slug'] . '/', 'nazev' => $p['nazev']],
                    ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container product-detail">

  <!-- Breadcrumb -->
  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li><a href="<?= url('/pracky-bosch/') ?>">Pračky Bosch</a></li>
      <li aria-current="page"><?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?></li>
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
        src="<?= htmlspecialchars(url($p['obrazek']), ENT_QUOTES, 'UTF-8') ?>"
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
          <tr><th scope="row">Kapacita</th><td><?= (int)$p['kapacita'] ?> kg</td></tr>
          <tr><th scope="row">Maximální otáčky</th><td><?= (int)$p['otacky'] ?> ot./min</td></tr>
          <tr><th scope="row">Energetická třída</th><td><?= htmlspecialchars($p['energ_trida'], ENT_QUOTES, 'UTF-8') ?></td></tr>
          <tr><th scope="row">Spotřeba energie</th><td><?= (int)$p['spotreba_kwh'] ?> kWh / 100 cyklů</td></tr>
          <tr><th scope="row">Třída odstřeďování</th><td><?= htmlspecialchars($p['trida_odstred'], ENT_QUOTES, 'UTF-8') ?></td></tr>
          <tr><th scope="row">Hlučnost (praní)</th><td><?= (int)$p['hlucnost_prani'] ?> dB</td></tr>
          <tr><th scope="row">Hlučnost (odstřeďování)</th><td><?= (int)$p['hlucnost_odstred'] ?> dB</td></tr>
          <tr><th scope="row">Rozměry (Š × H × V)</th><td><?= (int)$p['sirka'] ?> × <?= (int)$p['hloubka'] ?> × <?= (int)$p['vyska'] ?> cm</td></tr>
          <tr><th scope="row">Typ motoru</th><td><?= htmlspecialchars($p['motor'], ENT_QUOTES, 'UTF-8') ?></td></tr>
          <tr><th scope="row">Wi-Fi</th><td><?= $p['wifi'] ? 'Ano' : 'Ne' ?></td></tr>
          <tr><th scope="row">Typ plnění</th><td>Přední</td></tr>
          <tr><th scope="row">EAN</th><td><?= htmlspecialchars($p['ean'], ENT_QUOTES, 'UTF-8') ?></td></tr>
        </tbody>
      </table>

      <p><small>Parametry pocházejí z registru <a href="<?= htmlspecialchars($p['eprel_url'], ENT_QUOTES, 'UTF-8') ?>" rel="noopener noreferrer" target="_blank">EPREL (eprel.ec.europa.eu)</a> a feedu Alzy.</small></p>

      <p class="product-cena">
        <?= formatuj_cenu((int)$p['cena_orient'], $p['cena_datum']) ?>
      </p>
      <p>
        <a href="<?= htmlspecialchars($p['alza_url'], ENT_QUOTES, 'UTF-8') ?>" rel="sponsored nofollow noopener" target="_blank" class="btn btn--primary btn--lg">Koupit na Alze →</a>
      </p>
      <p class="text-muted"><small><a href="<?= url('/affiliate-informace/') ?>">Affiliate odkaz</a> — nákupem podpoříte provoz webu.</small></p>
    </div>
  </div>

  <?php require_once dirname(__DIR__) . '/inc/components/disclosure.php'; ?>

  <!-- ================================================================
       3. CO ŘÍKAJÍ UŽIVATELÉ
       ================================================================ -->
  <section aria-labelledby="recenze-heading">
    <h2 id="recenze-heading">Co říkají uživatelé</h2>

    <p class="text-muted"><small>
      Tato sekce je agregací hodnocení zákazníků ze zdrojů:
      <?= htmlspecialchars(implode(', ', $p['recenze_zdroje']), ENT_QUOTES, 'UTF-8') ?>.
      <?php if (!empty($p['recenze_pocet']) && $p['recenze_pocet'] > 0): ?>
        Čerpáno z <?= (int)$p['recenze_pocet'] ?> hodnocení.
      <?php endif; ?>
      Žádné hodnocení není doslova přebíráno — popisujeme opakující se vzorce.
    </small></p>

    <h3>Co uživatelé nejčastěji chválí</h3>
    <p>
      <?= htmlspecialchars($p['recenze_shrnuti'], ENT_QUOTES, 'UTF-8') ?>
    </p>
    <p>
      V hodnoceních zákazníků se jako nejčastěji zmiňovaná přednost invertorového motoru uvádí
      nízká hlučnost — zejména při praní, kde se hodnota <?= (int)$p['hlucnost_prani'] ?> dB
      opakovaně zmiňuje jako příjemně tichý provoz.
      Uživatelé rovněž oceňují intuitivní ovládací panel a přehlednost displejové indikace zbývajícího času.
    </p>

    <h3>Nejčastější výhrady</h3>
    <p>
      Napříč recenzemi se jako nejčastější výhrada opakuje <strong>délka přívodního kabelu</strong>,
      která je podle hodnotících zákazníků krátká (přibližně 1,5 m) a v některých dispozicích koupelen
      vyžaduje prodlužovací kabel nebo úpravu instalace.
      Menšina hodnocení zmiňuje absenci Wi-Fi jako chybějící funkci oproti konkurenci ve stejné cenové kategorii.
    </p>

    <h3>Pro koho se hodí</h3>
    <p>
      Z celkového obrazu hodnocení plyne, že pračka nejlépe poslouží
      <strong>čtyřčlenné domácnosti</strong>, která klade důraz na tiché praní
      (například byt s otevřenou dispozicí nebo praní přes noc) a na spolehlivost
      značky s dostupným servisem. Méně vhodná je pro uživatele,
      kteří chtějí pračku ovládat přes chytrý telefon, nebo pro domácnosti
      s omezenou délkou dosahu od zásuvky.
    </p>
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
        <tr><th scope="row">Spotřeba energie (váženě, 100 cyklů)</th><td><?= (int)$p['spotreba_kwh'] ?> kWh</td></tr>
        <tr><th scope="row">Roční spotřeba vody</th><td><?= number_format((int)$p['spotreba_vody'], 0, ',', ' ') ?> l</td></tr>
        <tr><th scope="row">Třída účinnosti odstřeďování</th><td><?= htmlspecialchars($p['trida_odstred'], ENT_QUOTES, 'UTF-8') ?></td></tr>
        <tr><th scope="row">Hlučnost při praní</th><td><?= (int)$p['hlucnost_prani'] ?> dB(A) re 1 pW</td></tr>
        <tr><th scope="row">Hlučnost při odstřeďování</th><td><?= (int)$p['hlucnost_odstred'] ?> dB(A) re 1 pW</td></tr>
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
  <section aria-labelledby="alternativy-heading">
    <h2 id="alternativy-heading">Alternativy v podobné kategorii</h2>
    <p>Pokud hledáte srovnání s jinými modely přibližně ve stejné cenové hladině nebo s podobnými parametry:</p>
    <ul>
      <li>
        <a href="<?= url('/lg-f4wv509s1e/') ?>"><strong>LG F4WV509S1E</strong></a> —
        9 kg, Wi-Fi, přímý pohon (10 let záruka motoru), nižší cena.
        Vhodné, pokud preferujete větší kapacitu a chytré funkce.
      </li>
      <li>
        <a href="<?= url('/samsung-ww90t4040ee/') ?>"><strong>Samsung WW90T4040EE</strong></a> —
        9 kg, energetická třída C, mělká hloubka 55 cm.
        Vhodné do menší koupelny nebo tam, kde kapacita převažuje nad spotřebou energie.
      </li>
    </ul>
    <p><a href="<?= url('/pracky-bosch/') ?>">Všechny pračky Bosch v přehledu →</a></p>
  </section>

  <!-- ================================================================
       8. FAQ
       ================================================================ -->
  <?php
  $faq_hlucnost_prani   = (int)$p['hlucnost_prani'];
  $faq_hlucnost_odstred = (int)$p['hlucnost_odstred'];
  $faq_cena_datum       = htmlspecialchars(datum_cz($p['cena_datum']), ENT_QUOTES, 'UTF-8');
  $faq_alza_url         = htmlspecialchars($p['alza_url'], ENT_QUOTES, 'UTF-8');

  $faq_items = [
    [
      'q' => 'Jaká je záruka na Bosch WAN28263BY?',
      'a' => 'Standardní záruční doba je <strong>2 roky</strong> dle zákona. Bosch v ČR nabízí možnost registrace produktu pro prodloužení záruky — ověřte aktuální podmínky na webu Bosch nebo u prodejce.',
    ],
    [
      'q' => 'Je Bosch WAN28263BY vhodný do paneláku?',
      'a' => "Ano. Hlučnost při praní {$faq_hlucnost_prani} dB a při odstřeďování {$faq_hlucnost_odstred} dB (podle deklarace EPREL) řadí tento model k tišším zástupcům dané kategorie. V hodnoceních zákazníků se tiché praní uvádí jako jedna z hlavních předností. Pro instalaci v paneláku je rovněž vhodné ověřit délku přívodního kabelu (~1,5 m) vzhledem k umístění zásuvky.",
    ],
    [
      'q' => 'Kde najdu aktuální cenu Bosch WAN28263BY?',
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
        Koupit <?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?> na Alze →
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
