<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$page_title       = 'Jaká kapacita pračky je vhodná? 7, 8, 9 nebo 10 kg';
$page_description = 'Kolik kg kapacity pračky potřebujete podle počtu osob v domácnosti. Přehled s odkazy na srovnání konkrétních modelů 7–10 kg.';
$page_canonical   = SITE_URL . '/jaka-kapacita-pracky/';
$page_og_image    = SITE_URL . '/assets/img/og-jaka-kapacita-pracky.jpg';
$schema_json      = schema_article($page_title, $page_description, $page_canonical)
                  . schema_breadcrumb([
                      ['url' => '/', 'nazev' => 'Test praček 2026'],
                      ['url' => '/jaka-kapacita-pracky/', 'nazev' => 'Jaká kapacita pračky'],
                    ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page">Jaká kapacita pračky</li>
    </ol>
  </nav>

  <h1>Jaká kapacita pračky je pro vás vhodná?</h1>

  <p>
    Kapacita bubnu se udává v kg suchého prádla, které pračka zvládne vyprat v jednom cyklu při
    standardním programu. Volba správné kapacity ovlivňuje nejen to, jak často budete prát, ale
    i efektivitu — pračka naplněná jen z poloviny spotřebuje na kus prádla víc energie a vody
    než pračka naplněná na doporučenou míru. Orientační vodítko podle počtu osob v domácnosti:
  </p>

  <table class="params-table" aria-label="Doporučená kapacita pračky podle počtu osob">
    <thead>
      <tr><th scope="col">Počet osob v domácnosti</th><th scope="col">Doporučená kapacita</th></tr>
    </thead>
    <tbody>
      <tr><th scope="row">1–2 osoby</th><td>6–7 kg</td></tr>
      <tr><th scope="row">2–3 osoby</th><td>7 kg</td></tr>
      <tr><th scope="row">3–4 osoby</th><td>8 kg</td></tr>
      <tr><th scope="row">4–5 osob</th><td>9 kg</td></tr>
      <tr><th scope="row">5 a více osob / vysoká spotřeba prádla</th><td>10 kg a více</td></tr>
    </tbody>
  </table>

  <p>
    Toto jsou orientační hodnoty pro běžné praní bavlny a syntetiky. Domácnosti s malými dětmi,
    domácími mazlíčky nebo sportovci perou v praxi častěji a ve větších objemech, než odpovídá
    počtu osob — v takovém případě se vyplatí zvolit o stupeň vyšší kapacitu, než by napovídal
    jen počet členů domácnosti.
  </p>

  <h2>Kapacita a rozměry pračky spolu souvisí</h2>
  <p>
    Vyšší kapacita obvykle znamená větší buben, a tedy i větší hloubku pračky — modely s 9–10 kg
    bývají v průměru hlubší než 7kg varianty stejné značky. Pokud řešíte omezený prostor, může se
    vyplatit hledat kompromis mezi kapacitou a rozměry spíš v segmentu
    <a href="<?= url('/uzke-pracky/') ?>">úzkých praček</a>, kde jsou i menší kapacity za cenu
    menší šíře.
  </p>

  <h2>Srovnání modelů podle kapacity</h2>
  <ul class="segmenty-grid">
    <li><a href="<?= url('/pracky-7-kg/') ?>">Pračky 7 kg</a></li>
    <li><a href="<?= url('/pracky-8-kg/') ?>">Pračky 8 kg</a></li>
    <li><a href="<?= url('/pracky-9-kg/') ?>">Pračky 9 kg</a></li>
    <li><a href="<?= url('/pracky-10-kg/') ?>">Pračky 10 kg</a></li>
  </ul>

  <p>
    Kapacita je jen jedno z kritérií výběru — pokud chcete projít celý postup od začátku,
    přečtěte si pilířový rádce <a href="<?= url('/jak-vybrat-pracku/') ?>">Jak vybrat pračku</a>.
  </p>

  <?php require_once dirname(__DIR__) . '/inc/components/disclosure.php'; ?>

  <?php
  $faq_items = [
    [
      'q' => 'Je lepší koupit pračku s vyšší kapacitou, než reálně potřebuji?',
      'a' => 'Ne nutně. Pračka naplněná jen z části při stejném programu spotřebuje víc energie a vody na kus prádla než pračka naplněná na doporučenou míru. Zbytečně velká kapacita tedy zvyšuje provozní náklady, pokud ji nevyužíváte.',
    ],
    [
      'q' => 'Ovlivňuje kapacita bubnu i dobu praní?',
      'a' => 'U většiny moderních praček s automatickým vážením prádla ano — pračka upravuje délku programu i množství vody podle skutečné náplně, ne podle maximální deklarované kapacity.',
    ],
    [
      'q' => 'Jaký je rozdíl mezi kapacitou pračky a kapacitou sušičky u kombinovaných modelů?',
      'a' => 'U praček se sušičkou 2v1 je kapacita sušení vždy nižší než kapacita praní (typicky o 3–4 kg méně) — sušicí cyklus totiž potřebuje víc prostoru pro cirkulaci vzduchu v bubnu. Přehled takových modelů najdete v segmentu <a href="' . url('/pracky-se-susickou/') . '">Pračky se sušičkou</a>.',
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
