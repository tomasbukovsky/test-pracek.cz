<?php
$segment_slug     = 'pracky-samsung';
$segment_h1       = 'Pračky Samsung: srovnání a parametry 2026';
$page_title       = 'Pračky Samsung 2026: srovnání modelů a parametry';
$page_description = 'Přehled praček Samsung na českém trhu. Parametry z registru EPREL a feedu prodejce.';

$segment_intro = '
<p>Samsung nabízí jedny z nejdostupnějších praček v katalogu — v přepočtu na kapacitu často levnější než AEG, Bosch nebo LG ve srovnatelné třídě.</p>
<p>Technologicky Samsung staví na <strong>digitálním invertoru</strong> (Digital Inverter Technology), na který výrobce udává 11letou záruku na motor. Prémiová řada je doplněná o Wi-Fi ovládání přes aplikaci SmartThings.</p>
<p>Technické parametry (hlučnost, přesná spotřeba) EPREL u modelů Samsung v katalogu zatím nemá evidované k nezávislému ověření — vycházejí prozatím jen z podkladů dodavatele.</p>
<p>Parametry pocházejí z EPREL a feedu prodejce. Ceny jsou orientační.</p>
';

$faq_items = [
  [
    'q' => 'Co je Digital Inverter Technology u praček Samsung?',
    'a' => 'Digital Inverter je označení pro invertorový motor bez kartáčů, který reguluje otáčky plynule podle zátěže. Samsung na tento motor poskytuje záruku 11 let (podmínky u konkrétního modelu ověřte u prodejce).',
  ],
  [
    'q' => 'Jsou pračky Samsung v katalogu dražší než Bosch nebo LG?',
    'a' => 'Naopak — modely Samsung bývají v katalogu ve srovnatelné kapacitě obvykle levnější než Bosch nebo LG. Přesné porovnání najdete v tabulce výše, kde jsou všechny modely řazené podle ceny.',
  ],
  [
    'q' => 'Je aplikace SmartThings nutná pro používání Samsung pračky?',
    'a' => 'Ne. Aplikace SmartThings je volitelná funkce u modelů s Wi-Fi. Pračka funguje plnohodnotně bez připojení k síti nebo aplikace — Wi-Fi přidává možnost vzdáleného ovládání a notifikací.',
  ],
];

$related = [
  ['url' => '/pracky-7-kg/', 'nazev' => 'Pračky 7 kg'],
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
  ['url' => '/uzke-pracky/', 'nazev' => 'Úzké pračky (45 cm)'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
