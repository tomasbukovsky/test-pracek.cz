<?php
$segment_slug     = 'pracky-samsung';
$segment_h1       = 'Pračky Samsung: srovnání a recenze 2026';
$page_title       = 'Pračky Samsung 2026: srovnání modelů, recenze a parametry';
$page_description = 'Přehled praček Samsung na českém trhu. Parametry z EPREL, agregace hodnocení zákazníků z Alzy a Heureky.';

$segment_intro = '
<p>Samsung nabízí jedny z nejdostupnějších praček na českém trhu. Zákazníci na Alze a Heurece nejčastěji chválí <strong>příznivý poměr ceny a kapacity</strong> — modely Samsung bývají v daném kapacitním segmentu levnější než srovnatelné AEG nebo Bosch.</p>
<p>Technologicky Samsung staví na <strong>digitálním invertoru</strong> (Digital Inverter Technology), na který poskytuje 11letou záruku na motor. Prémiová řada je doplněna o Wi-Fi ovládání přes aplikaci SmartThings.</p>
<p>Výhrada, která se v hodnoceních zákazníků u Samsungu nejčastěji opakuje, je <strong>hlučnost při odstřeďování</strong> — zejména u modelů se třídou C, kde se hodnoty pohybují kolem 76–78 dB, což je o něco více než srovnatelné tiché modely LG nebo AEG. Třída C je u Samsungu v nižším segmentu cenou za nízkou pořizovací cenu.</p>
<p>Parametry pocházejí z EPREL a feedu Alzy. Ceny jsou orientační.</p>
';

$faq_items = [
  [
    'q' => 'Co je Digital Inverter Technology u praček Samsung?',
    'a' => 'Digital Inverter je označení pro invertorový motor bez kartáčů, který reguluje otáčky plynule podle zátěže. Samsung na tento motor poskytuje záruku 11 let (podmínky u konkrétního modelu ověřte u prodejce).',
  ],
  [
    'q' => 'Jsou pračky Samsung hlučnější než Bosch nebo LG?',
    'a' => 'V průměru mírně ano — zejména u modelů třídy C bývá hlučnost při odstřeďování 76–78 dB, zatímco srovnatelné LG s přímým pohonem dosahují 70–72 dB. V hodnoceních zákazníků je to nejčastěji zmiňovaný rozdíl.',
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
