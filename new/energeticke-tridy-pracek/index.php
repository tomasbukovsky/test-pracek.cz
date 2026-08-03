<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$page_title       = 'Energetické třídy praček vysvětlené: jak číst štítek (EPREL)';
$page_description = 'Co znamená energetická třída A–G u pračky, jak číst energetický štítek a kde ověřit oficiální hodnoty v registru EPREL.';
$page_canonical   = SITE_URL . '/energeticke-tridy-pracek/';
$page_og_image    = SITE_URL . '/assets/img/og-energeticke-tridy-pracek.jpg';
$schema_json      = schema_article($page_title, $page_description, $page_canonical)
                  . schema_breadcrumb([
                      ['url' => '/', 'nazev' => 'Test praček 2026'],
                      ['url' => '/energeticke-tridy-pracek/', 'nazev' => 'Energetické třídy praček'],
                    ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page">Energetické třídy praček</li>
    </ol>
  </nav>

  <h1>Energetické třídy praček vysvětlené</h1>

  <p>
    Energetický štítek pračky je jediný zdroj, ze kterého má smysl čerpat parametry jako spotřeba
    energie, spotřeba vody nebo hlučnost — na rozdíl od marketingových materiálů jde o údaje, které
    výrobce povinně nahlašuje do veřejného registru EPREL (Evropský registr energetických štítků,
    <a href="https://eprel.ec.europa.eu" rel="noopener noreferrer" target="_blank">eprel.ec.europa.eu</a>).
    Všechny parametry uvedené u produktů na tomto webu z tohoto registru vycházejí.
  </p>

  <h2>Stupnice A–G — proč skoro nic není v A</h2>
  <p>
    V březnu 2021 vstoupila v platnost přepracovaná stupnice energetických tříd, která zpřísnila
    hranice tak, aby nejvyšší třídy (A, B) dosahoval jen omezený počet nejúspornějších modelů —
    záměrně, aby stupnice měla rezervu pro budoucí zlepšování a nedocházelo k tomu, že během
    pár let bude „v A" naprostá většina trhu. V praxi se u praček dnes běžně prodávaných
    nejčastěji setkáte s třídami B až D, špičkové modely dosahují na A.
  </p>
  <p>
    Rozdíl mezi sousedními třídami (např. B a C) znamená rozdíl ve spotřebě energie na 100 pracích
    cyklů, který je uvedený přímo na štítku v kWh. Při pravidelném praní (několikrát týdně) se
    tento rozdíl za dobu životnosti pračky promítne do účtu za elektřinu citelněji, než by se
    na první pohled zdálo.
  </p>

  <h2>Co všechno štítek udává</h2>
  <ul>
    <li><strong>Energetická třída (A–G)</strong> — souhrnné hodnocení spotřeby energie.</li>
    <li><strong>Spotřeba energie</strong> — v kWh na 100 pracích cyklů (u kombinovaných praček se sušičkou v kWh/rok, protože zahrnuje i sušení).</li>
    <li><strong>Spotřeba vody</strong> — roční spotřeba v litrech při standardním používání.</li>
    <li><strong>Třída účinnosti odstřeďování (A–G)</strong> — jak dobře pračka odstřeďuje vodu z prádla; vyšší třída znamená sušší prádlo po vyprání a kratší dobu případného sušení.</li>
    <li><strong>Hlučnost při praní a odstřeďování</strong> — v dB(A) re 1 pW, zvlášť pro obě fáze cyklu.</li>
    <li><strong>Kapacita</strong> — maximální náplň v kg, pro kterou byly ostatní hodnoty naměřeny.</li>
  </ul>

  <h2>Energetická třída vs. třída odstřeďování — není to totéž</h2>
  <p>
    Tyto dvě hodnoty se často pletou, ale popisují různé věci. Energetická třída se týká spotřeby
    energie během celého pracího cyklu. Třída účinnosti odstřeďování popisuje jen to, jak účinně
    pračka v závěrečné fázi odstřeďuje vodu z prádla — tedy jak vlhké prádlo bude po vyndání z bubnu.
    Pračka může mít vysokou energetickou třídu a přitom průměrnou třídu odstřeďování, a naopak.
    Pro rozhodování, jak dlouho vám bude trvat sušení prádla, je tedy důležitější sledovat právě
    třídu odstřeďování a maximální otáčky, ne jen energetickou třídu samotnou.
  </p>

  <h2>Jak parametry používáme na tomto webu</h2>
  <p>
    U každého produktu dohledáváme jeho přesný záznam v registru EPREL podle EAN kódu a hodnoty
    zapisujeme natvrdo — bez automatického připojování na API za běhu webu. Pokud se u produktu
    objeví poznámka o ověření, znamená to, že hodnota čeká na kontrolu proti aktuálnímu záznamu
    v registru. Popis celého procesu najdete v <a href="<?= url('/metodika/') ?>">metodice</a>.
  </p>

  <p>Srovnání konkrétních modelů podle kapacity, kde energetickou třídu uvidíte přímo v tabulce:</p>
  <ul class="segmenty-grid">
    <li><a href="<?= url('/pracky-7-kg/') ?>">Pračky 7 kg</a></li>
    <li><a href="<?= url('/pracky-8-kg/') ?>">Pračky 8 kg</a></li>
    <li><a href="<?= url('/pracky-9-kg/') ?>">Pračky 9 kg</a></li>
    <li><a href="<?= url('/pracky-10-kg/') ?>">Pračky 10 kg</a></li>
  </ul>

  <?php require_once dirname(__DIR__) . '/inc/components/disclosure.php'; ?>

  <?php
  $faq_items = [
    [
      'q' => 'Kde najdu oficiální energetický štítek konkrétní pračky?',
      'a' => 'V registru <a href="https://eprel.ec.europa.eu" rel="noopener noreferrer" target="_blank">EPREL</a> podle EAN kódu produktu — odkaz na konkrétní záznam uvádíme i u každé produktové stránky na tomto webu.',
    ],
    [
      'q' => 'Proč má tak málo praček energetickou třídu A?',
      'a' => 'Stupnice A–G se v roce 2021 přepracovala tak, aby nejvyšší třídy dosahovala jen menšina nejúspornějších modelů — s rezervou pro budoucí zlepšování, aby se stupnice nemusela znovu měnit za pár let.',
    ],
    [
      'q' => 'Je vyšší třída odstřeďování vždy lepší?',
      'a' => 'Vyšší třída odstřeďování znamená sušší prádlo po vyprání a kratší dobu sušení, ale obvykle jde ruku v ruce s vyššími otáčkami a o něco vyšší hlučností — u praček určených do místností se sdílenou zdí to stojí za zvážení.',
    ],
  ];
  require dirname(__DIR__) . '/inc/components/faq.php';
  ?>

  <?php require_once dirname(__DIR__) . '/inc/components/author-box.php'; ?>

</div>

<style>
.segmenty-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: .5rem; list-style: none; padding: 0; margin: 1rem 0; }
.segmenty-grid a { display: block; padding: .6rem 1rem; background: var(--color-bg-alt); border-radius: var(--radius); text-decoration: none; font-weight: 500; }
.segmenty-grid a:hover { background: #dde4ea; }
</style>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
