<?php
$segment_slug     = 'pracky-beko';
$segment_h1       = 'Pračky Beko: srovnání a parametry 2026';
$page_title       = 'Pračky Beko 2026: srovnání modelů a parametry';
$page_description = 'Přehled praček Beko na českém trhu. Nejlepší poměr ceny a výkonu? Ověřené parametry z registru EPREL.';

$segment_intro = '
<p>Beko je turecká značka (součást Arçelik Group) a v katalogu jde primárně o <strong>nejdostupnější volbu</strong> s přijatelnými parametry — kapacity, které u prémiových značek stojí výrazně více, jsou u Beka dostupné za nižší cenu.</p>
<p>Technologickým základem je motor <strong>EnergySpin</strong>, který Beko používá napříč celou řadou v katalogu. Modely pokrývají kapacity 7–9 kg, včetně vestavného provedení.</p>
<p>Podle ověřených dat z EPREL má Beko v katalogu hlučnost při praní 70–76 dB a hloubku 50–55 cm — mělčí konstrukci než většina konkurence (60+ cm), což se hodí do menších koupelen.</p>
<p>Parametry pocházejí z EPREL a feedu prodejce. Ceny jsou orientační.</p>
';

$faq_items = [
  [
    'q' => 'Je Beko spolehlivá značka?',
    'a' => 'Beko (Arçelik) je jeden z největších výrobců spotřebičů na světě — velikost výrobce ale sama o sobě nic neříká o spolehlivosti konkrétního modelu. Reálná data o poruchovosti nemáme k dispozici; jistotu dává hlavně zákonná 2letá záruka a u motoru EnergySpin prodloužená záruka výrobce (podmínky ověřte u prodejce).',
  ],
  [
    'q' => 'Proč mají některé modely Beko nižší otáčky?',
    'a' => 'Nižší otáčky jsou jedním z kompromisů v ceně — v katalogu se u Beka pohybují od 1151 do 1400 ot./min. Nižší otáčky znamenají mokřejší prádlo po vyprání, což prodlužuje dobu schnutí nebo zatěžuje sušičku. Konkrétní hodnotu najdete u každého modelu v tabulce.',
  ],
  [
    'q' => 'Má Beko vestavné provedení pračky?',
    'a' => 'Ano, v katalogu najdete dva vestavné modely Beko — B3WBT671415W (7 kg) a B3WBT691415W (9 kg), oba s výškou 82 cm pro zabudování pod pracovní desku.',
  ],
];

$related = [
  ['url' => '/pracky-7-kg/', 'nazev' => 'Pračky 7 kg'],
  ['url' => '/uzke-pracky/', 'nazev' => 'Úzké pračky (45 cm)'],
  ['url' => '/vestavne-pracky/', 'nazev' => 'Vestavné pračky'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
