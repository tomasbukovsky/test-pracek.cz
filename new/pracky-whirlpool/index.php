<?php
$segment_slug     = 'pracky-whirlpool';
$segment_h1       = 'Pračky Whirlpool: srovnání a recenze 2026';
$page_title       = 'Pračky Whirlpool 2026: srovnání modelů, recenze a parametry';
$page_description = 'Přehled praček Whirlpool na českém trhu. Parametry z EPREL, recenze zákazníků z Alzy. Modely s předním i horním plněním.';

$segment_intro = '
<p>Whirlpool je jedním z největších výrobců spotřebičů na světě a na českém trhu nabízí pračky v širokém cenovém rozsahu. Charakteristickým prvkem je technologie <strong>6th Sense</strong>, která automaticky přizpůsobuje program podle náplně — délku cyklu, množství vody i teplotu. Zákazníci ji v recenzích zmiňují jako reálně fungující funkci, nikoli jen marketingovou zkratku.</p>
<p>Portfolio Whirlpool zahrnuje jak pračky s <strong>předním plněním</strong>, tak tradiční <strong>s horním plněním</strong> (šíře 40 cm) — ty jsou oblíbené v malých koupelnách, kde není přístup k pračce zepředu. V hodnoceních zákazníků se jako výhoda horního plnění opakuje možnost přidat kus prádla kdykoli během cyklu.</p>
<p>Výhrada, která se v recenzích Whirlpool opakuje, je občasná hlučnost u starších modelů a větší hloubka kabiny (kolem 60–61 cm) u přednoplnících modelů. Parametry níže pocházejí z EPREL a feedu prodejce.</p>
';

$faq_items = [
  [
    'q' => 'Co je technologie 6th Sense u praček Whirlpool?',
    'a' => 'Technologie 6th Sense automaticky detekuje množství a typ prádla a upravuje délku cyklu, spotřebu vody a teplotu. Cílem je šetřit energii a vodu při zachování výsledku praní. Zákazníci tuto funkci v recenzích hodnotí kladně, zejména při nestandardních náplních.',
  ],
  [
    'q' => 'Jsou pračky Whirlpool s horním plněním vhodné pro každou domácnost?',
    'a' => 'Pračky s horním plněním mají šíři jen 40 cm a vyžadují přístup shora — nejsou vhodné pod pracovní desku ani do skříně. Naopak jsou ideální do úzkých prostorů nebo tam, kde je přístup zepředu omezený. Kapacita a otáčky jsou srovnatelné s přednoplnícími modely.',
  ],
  [
    'q' => 'Má Whirlpool servisní síť v České republice?',
    'a' => 'Ano. Whirlpool provozuje autorizovanou servisní síť, případně je možné kontaktovat servis přes zákaznickou linku. Dostupnost náhradních dílů je v recenzích hodnocena průměrně — pro srovnání je servisní dostupnost u Bosch nebo Miele hodnocena lépe.',
  ],
];

$related = [
  ['url' => '/pracky-7-kg/', 'nazev' => 'Pračky 7 kg'],
  ['url' => '/pracky-9-kg/', 'nazev' => 'Pračky 9 kg'],
  ['url' => '/pracky-se-susickou/', 'nazev' => 'Pračky se sušičkou'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
