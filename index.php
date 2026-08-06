<?php
require_once __DIR__ . '/inc/config.php';
require_once __DIR__ . '/inc/functions.php';

$vsechny = produkty();
// TOP 8: jeden zástupce z každé značky (podle nejnižší orientační ceny v rámci značky),
// doplněno o další nejlevnější modely do počtu 8. Bez agregovaných recenzí zatím nelze
// řadit podle skutečné obliby (viz metodika) — cena je jediné transparentní kritérium.
$nejlevnejsi_podle_znacky = [];
foreach (serad_produkty(array_values($vsechny), 'cena_orient', 'asc') as $p) {
    if (!isset($nejlevnejsi_podle_znacky[$p['znacka']])) {
        $nejlevnejsi_podle_znacky[$p['znacka']] = $p;
    }
}
$top = array_values($nejlevnejsi_podle_znacky);
foreach (serad_produkty(array_values($vsechny), 'cena_orient', 'asc') as $p) {
    if (count($top) >= 8) break;
    if (!in_array($p['slug'], array_column($top, 'slug'), true)) {
        $top[] = $p;
    }
}
$top = array_slice($top, 0, 8);

$page_title       = 'Test praček 2026: srovnání modelů | test-pracek.cz';
$page_description = 'Nezávislé srovnání praček podle ověřených parametrů z EPREL a výsledků testů dTest a Stiftung Warentest. Žádné vlastní testování ani vymyšlené recenze.';
$page_canonical   = SITE_URL . '/';
// Vlastní OG obrázek homepage nemáme vyrobený - použijeme fotku prvního produktu v žebříčku.
$page_og_image    = !empty($top) ? $top[0]['obrazek'] : SITE_URL . '/assets/img/logo.png';
// Stejný obrázek je na stránce vykreslený s loading="eager" jako první v pořadí - je to
// pravděpodobně LCP prvek stránky, tak ho necháme prohlížeči začít stahovat co nejdřív.
$page_lcp_image   = !empty($top) ? $top[0]['obrazek'] : null;
$schema_json      = schema_itemlist($top);

require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/header.php';
?>

<div class="container">

  <!-- Breadcrumb: homepage nemá breadcrumb -->

  <!-- ================================================================
       ÚVOD
       ================================================================ -->
  <section class="pilir-intro" aria-labelledby="pilir-h1">
    <h1 id="pilir-h1">Test praček 2026</h1>
    <p>
      Na tomto webu <strong>nenajdete vlastní laboratorní testy</strong>. Sledujeme výsledky
      nezávislých testů (dTest, německý Stiftung Warentest) a sbíráme reálné zkušenosti od
      zákazníků, kteří nám je pošlou — dokud jich pro daný model není dost, píšeme to na
      stránce produktu otevřeně, místo abychom předstírali recenze, které nemáme.
    </p>
    <p>
      Parametry jako energetická třída, spotřeba vody nebo hlučnost přebíráme výhradně
      z veřejného registru EPREL (Evropský registr energetických štítků) a z oficiálních
      feedů prodejců. Nic neodhadujeme. Pokud pro daný model zdroje chybí,
      stránku zkrátíme — nevymýšlíme.
    </p>
    <p>
      Výběr modelů v žebříčku vychází z orientační ceny — dokud nemáme dost reálných recenzí
      na poctivé řazení podle obliby, je cena jediné transparentní kritérium. Pořadí neovlivňuje
      provize z prodeje — vydělávat začneme až tehdy, když vám doporučíme pračku, se kterou
      budete spokojeni. Nakoupit pak můžete v partnerských, prověřených e-shopech. Jak přesně
      vzniká naše hodnocení vysvětluje <a href="<?= url('/metodika/') ?>">stránka Metodika</a>.
    </p>
  </section>

  <!-- ================================================================
       SROVNÁVACÍ TABULKA TOP MODELŮ
       ================================================================ -->
  <section aria-labelledby="tabulka-heading">
    <h2 id="tabulka-heading">Přehled testovaných modelů</h2>
    <p class="text-muted">Parametry z registru EPREL a feedů prodejců. Ceny jsou orientační — aktuální ceny ověřte u prodejce.</p>
    <?php
    $produkty_pole = $top;
    require __DIR__ . '/inc/components/product-table.php';
    ?>
  </section>

  <?php require_once __DIR__ . '/inc/components/disclosure.php'; ?>

  <!-- ================================================================
       BLOK KE KAŽDÉMU PRODUKTU
       ================================================================ -->
  <section aria-labelledby="produkty-heading">
    <h2 id="produkty-heading">Podrobněji k jednotlivým modelům</h2>

    <?php foreach ($top as $i => $p): ?>
    <article class="produkt-blok" id="<?= htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') ?>">
      <h3>
        <?= $i + 1 ?>. <a href="<?= url('/' . htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') . '/') ?>"><?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?></a>
      </h3>

      <div class="produkt-blok__inner">
        <a href="<?= url('/' . htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') . '/') ?>" class="produkt-blok__img" tabindex="-1" aria-hidden="true">
          <img
            src="<?= htmlspecialchars($p['obrazek'], ENT_QUOTES, 'UTF-8') ?>"
            alt="<?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?>"
            width="200" height="200"
            loading="<?= $i === 0 ? 'eager' : 'lazy' ?>"
            <?= $i === 0 ? 'fetchpriority="high"' : '' ?>
          >
        </a>
        <div class="produkt-blok__text">
          <div class="verdikt-box">
            <strong>Verdikt:</strong> <?= htmlspecialchars($p['verdikt'], ENT_QUOTES, 'UTF-8') ?>
          </div>
          <p><?= htmlspecialchars($p['recenze_shrnuti'], ENT_QUOTES, 'UTF-8') ?></p>
          <?php if (!empty($p['recenze_pocet']) && $p['recenze_pocet'] > 0): ?>
          <p class="text-muted"><small>Zdroj: agregace <?= (int)$p['recenze_pocet'] ?> hodnocení ze zdrojů: <?= htmlspecialchars(implode(', ', $p['recenze_zdroje']), ENT_QUOTES, 'UTF-8') ?>.</small></p>
          <?php endif; ?>
          <p>
            <a href="<?= url('/' . htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') . '/') ?>" class="btn btn--secondary">Celá recenze →</a>
            <a href="<?= htmlspecialchars($p['alza_url'], ENT_QUOTES, 'UTF-8') ?>" rel="sponsored nofollow noopener" target="_blank" class="btn btn--primary">Koupit</a>
          </p>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
  </section>

  <!-- ================================================================
       ROZCESTNÍK SEGMENTŮ
       ================================================================ -->
  <section class="segmenty-rozcestnik" aria-labelledby="segmenty-heading">
    <h2 id="segmenty-heading">Hledáte konkrétní typ pračky?</h2>
    <ul class="segmenty-grid">
      <li><a href="<?= url('/pracky-lg/') ?>">Pračky LG</a></li>
      <li><a href="<?= url('/pracky-bosch/') ?>">Pračky Bosch</a></li>
      <li><a href="<?= url('/pracky-samsung/') ?>">Pračky Samsung</a></li>
      <li><a href="<?= url('/pracky-whirlpool/') ?>">Pračky Whirlpool</a></li>
      <li><a href="<?= url('/pracky-aeg/') ?>">Pračky AEG</a></li>
      <li><a href="<?= url('/pracky-beko/') ?>">Pračky Beko</a></li>
      <li><a href="<?= url('/pracky-8-kg/') ?>">Pračky 8 kg</a></li>
      <li><a href="<?= url('/pracky-9-kg/') ?>">Pračky 9 kg</a></li>
      <li><a href="<?= url('/pracky-7-kg/') ?>">Pračky 7 kg</a></li>
      <li><a href="<?= url('/pracky-10-kg/') ?>">Pračky 10 kg</a></li>
      <li><a href="<?= url('/uzke-pracky/') ?>">Úzké pračky (40–45 cm)</a></li>
      <li><a href="<?= url('/pracky-s-prednim-plnenim/') ?>">S předním plněním</a></li>
      <li><a href="<?= url('/pracky-s-hornim-plnenim/') ?>">S horním plněním</a></li>
      <li><a href="<?= url('/vestavne-pracky/') ?>">Vestavné pračky</a></li>
      <li><a href="<?= url('/pracky-se-susickou/') ?>">Se sušičkou</a></li>
    </ul>
  </section>

  <!-- ================================================================
       JAK VYBÍRÁME
       ================================================================ -->
  <section class="jak-vybirame" aria-labelledby="metodika-heading">
    <h2 id="metodika-heading">Jak vybíráme a hodnotíme</h2>
    <p>
      Žádný z produktů na tomto webu jsme osobně netestovali. Naší přidanou hodnotou je,
      že jsme prošli stovky uživatelských hodnocení a z nich vyextrahovaly opakující se vzorce —
      co se chválí konzistentně, co budí výhrady a komu se konkrétní model hodí.
    </p>
    <ul>
      <li><strong>Nezávislé testy:</strong> Tam, kde existuje test dTestu nebo Stiftung Warentest, uvádíme jeho výsledek a datum. Reprodukujeme pouze celkové hodnocení — placený obsah nepřebíráme.</li>
      <li><strong>Technické parametry:</strong> Výhradně z registru EPREL nebo z feedu prodejce. Nic neodhadujeme.</li>
      <li><strong>Ceny:</strong> Orientační, vždy s datem. Web nemá napojení na aktuální ceníky — aktuální cenu vždy ověřte u prodejce.</li>
      <li><strong>Provize z prodeje:</strong> Web vydělává, když kliknete na odkaz do partnerského e-shopu a nakoupíte. Pořadí v žebříčku tím není ovlivněno.</li>
    </ul>
    <p><a href="<?= url('/metodika/') ?>">Celá metodika hodnocení →</a></p>
  </section>

  <!-- ================================================================
       FAQ
       ================================================================ -->
  <?php
  $faq_items = [
    [
      'q' => 'Jaká pračka je nejlepší pro čtyřčlennou domácnost?',
      'a' => 'Pro čtyřčlennou domácnost je vhodná pračka s kapacitou <strong>8–9 kg</strong>. Pokud rodina pere hodně ložního prádla nebo sportovního oblečení, uvažte 9 kg. Přehled modelů podle kapacity najdete v sekcích <a href="' . url('/pracky-8-kg/') . '">pračky 8 kg</a> a <a href="' . url('/pracky-9-kg/') . '">pračky 9 kg</a>.',
    ],
    [
      'q' => 'Co znamená energetická třída A, B, C u praček?',
      'a' => 'Od roku 2021 platí nová stupnice A–G. Třída <strong>A</strong> je nejúspornější, třída <strong>G</strong> nejméně úsporná. Většina praček dostupných na trhu v roce 2026 spadá do tříd B a C. Podrobné vysvětlení včetně příkladu výpočtu roční úspory najdete na stránce <a href="' . url('/energeticke-tridy-pracek/') . '">Energetické třídy praček</a>.',
    ],
    [
      'q' => 'Jsou pračky na tomto webu skutečně otestovány?',
      'a' => '<strong>Ne.</strong> Žádný z hodnocených modelů jsme osobně netestovali ani nepoužívali. Obsah vychází z ověřených technických parametrů (EPREL) a výsledků nezávislých testů (dTest, Stiftung Warentest), kde existují. Reálná hodnocení od zákazníků teprve sbíráme. Tuto skutečnost uvádíme otevřeně, protože považujeme transparentnost za základ důvěry. Více v <a href="' . url('/metodika/') . '">metodice</a>.',
    ],
    [
      'q' => 'Proč na webu nejsou aktuální ceny?',
      'a' => 'Web nemá napojení na živé ceníky. Ceny praček se mění denně a staticky uvedená cena by v řádu dní zastárala a byla by zavádějící. Proto uvádíme pouze orientační cenu k datu jejího zjištění a vždy doporučujeme ověřit aktuální cenu přímo u prodejce.',
    ],
    [
      'q' => 'Vydělává web na odkazech k nákupu a ovlivňuje to hodnocení?',
      'a' => 'Ano, pokud nakoupíte přes odkaz do partnerského e-shopu, web dostane provizi. <strong>Tato provize neovlivňuje pořadí v žebříčku ani obsah recenzí.</strong> Spolupráci s e-shopy transparentně uvádíme u každého odkazu i na samostatné stránce <a href="' . url('/affiliate-informace/') . '">Informace o spolupráci</a>.',
    ],
  ];
  require __DIR__ . '/inc/components/faq.php';
  ?>

  <!-- ================================================================
       AUTORSKÝ BOX
       ================================================================ -->
  <?php require_once __DIR__ . '/inc/components/author-box.php'; ?>

</div><!-- /.container -->

<?php
// Přidat inline CSS pro bloky specifické pro homepage
echo '<style>
.pilir-intro { max-width: 760px; margin-bottom: 2rem; }
.produkt-blok { border-bottom: 1px solid var(--color-border); padding: 2rem 0; }
.produkt-blok:last-child { border-bottom: none; }
.produkt-blok__inner { display: flex; gap: 1.5rem; align-items: flex-start; flex-wrap: wrap; }
.produkt-blok__img { width: 180px; aspect-ratio: 1; flex-shrink: 0; padding: .5rem; border-radius: var(--radius); background: var(--color-bg-alt); }
.produkt-blok__img img { width: 100%; height: 100%; object-fit: contain; }
.produkt-blok__text { flex: 1; min-width: 220px; }
.segmenty-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: .5rem; list-style: none; padding: 0; margin: 1rem 0; }
.segmenty-grid a { display: block; padding: .6rem 1rem; background: var(--color-bg-alt); border-radius: var(--radius); text-decoration: none; font-weight: 500; }
.segmenty-grid a:hover { background: #dde4ea; }
.jak-vybirame ul { padding-left: 1.2rem; }
.jak-vybirame li { margin-bottom: .5rem; }
</style>';

require_once __DIR__ . '/inc/footer.php';
?>
