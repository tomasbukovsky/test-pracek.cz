<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$segment_slug     = 'pracky-whirlpool';
$segment_h1       = 'Pračky Whirlpool: srovnání a parametry 2026';
$page_title       = 'Pračky Whirlpool 2026: srovnání modelů a parametry';
$page_description = 'Přehled praček Whirlpool na českém trhu. Ověřené parametry z registru EPREL. Modely s předním i horním plněním.';

$segment_intro = '
<p>Whirlpool je jedním z největších výrobců spotřebičů na světě a v katalogu nabízí pračky v širokém cenovém rozsahu. Charakteristickým prvkem je technologie <strong>6th Sense</strong>, která podle výrobce automaticky přizpůsobuje délku cyklu, množství vody i teplotu podle náplně bubnu.</p>
<p>Portfolio Whirlpool v katalogu zahrnuje jak pračky s <strong>předním plněním</strong>, tak modely <strong>s horním plněním</strong> (šíře 40 cm) — podrobnosti k principu horního plnění najdete na stránce <a href="' . url('/pracky-s-hornim-plnenim/') . '">Pračky s horním plněním</a>.</p>
<p>Parametry níže pocházejí z EPREL a feedu prodejce. Ceny jsou orientační.</p>
';

$faq_items = [
  [
    'q' => 'Co je technologie 6th Sense u praček Whirlpool?',
    'a' => 'Technologie 6th Sense podle výrobce automaticky detekuje množství a typ prádla a upravuje délku cyklu, spotřebu vody a teplotu — cílem je šetřit energii a vodu při zachování výsledku praní.',
  ],
  [
    'q' => 'Jsou pračky Whirlpool s horním plněním vhodné pro každou domácnost?',
    'a' => 'Pračky s horním plněním mají šíři jen 40 cm a vyžadují přístup shora — nejsou vhodné pod pracovní desku ani do skříně. Naopak jsou ideální do úzkých prostorů nebo tam, kde je přístup zepředu omezený. Kapacita a otáčky jsou srovnatelné s přednoplnícími modely.',
  ],
  [
    'q' => 'Má Whirlpool servisní síť v České republice?',
    'a' => 'Ano. Whirlpool provozuje autorizovanou servisní síť, případně je možné kontaktovat servis přes zákaznickou linku. Přesnou dostupnost dílů pro konkrétní model doporučujeme ověřit přímo u výrobce nebo prodejce.',
  ],
];

$related = [
  ['url' => '/pracky-7-kg/', 'nazev' => 'Pračky 7 kg'],
  ['url' => '/pracky-9-kg/', 'nazev' => 'Pračky 9 kg'],
  ['url' => '/pracky-se-susickou/', 'nazev' => 'Pračky se sušičkou'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
