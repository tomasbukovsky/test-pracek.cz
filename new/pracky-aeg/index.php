<?php
$segment_slug     = 'pracky-aeg';
$segment_h1       = 'Pračky AEG: srovnání a parametry 2026';
$page_title       = 'Pračky AEG 2026: srovnání modelů a parametry';
$page_description = 'Přehled praček AEG na českém trhu. Ověřené parametry z registru EPREL — hlučnost, energetická třída a spotřeba u prémiové značky.';

$segment_intro = '
<p>AEG je prémiová značka skupiny Electrolux. Technologickým základem je invertorový motor a u vybraných modelů technologie <strong>UltraCare</strong> pro šetrné praní choulostivých materiálů.</p>
<p>Podle ověřených dat z EPREL se hlučnost při praní u aeg modelů v katalogu pohybuje mezi 72–79 dB — to je v rámci katalogu spíš vyšší hodnota, ne nejtišší volba, jak by se dalo u prémiové značky čekat. Prémiové modely dosahují energetické třídy A a bývají vybavené Wi-Fi.</p>
<p>Kompromisem bývá vyšší pořizovací cena a větší hloubka kabiny (60–64 cm). AEG v katalogu nabízí i úzké modely s horním plněním pro malé koupelny.</p>
<p>Parametry pocházejí z EPREL a feedu prodejce. Ceny jsou orientační.</p>
';

$faq_items = [
  [
    'q' => 'Proč jsou pračky AEG tak drahé?',
    'a' => 'AEG patří do prémiového segmentu skupiny Electrolux. Vyšší cena souvisí hlavně s technologií UltraCare pro šetrné praní a u vybraných modelů s energetickou třídou A a Wi-Fi ovládáním — hlučnost přitom podle EPREL není u AEG modelů v katalogu nijak výrazně nižší než u konkurence.',
  ],
  [
    'q' => 'Jsou pračky AEG nejtišší volbou do bytu v paneláku?',
    'a' => 'Podle ověřených dat z EPREL se hlučnost při praní u aeg modelů v katalogu pohybuje mezi 72–79 dB, což není nejtišší volba v nabídce. Pokud je pro vás tichý provoz klíčový, porovnejte konkrétní hodnoty jednotlivých modelů v tabulce výše — rozdíly mezi značkami jsou menší, než se často předpokládá.',
  ],
  [
    'q' => 'Liší se AEG modely v katalogu jen cenou, nebo i výkonem?',
    'a' => 'I výkonem — dražší modely mívají vyšší otáčky při odstřeďování a nižší spotřebu energie. Konkrétní srovnání otáček, spotřeby a hlučnosti najdete přímo v tabulce parametrů výše.',
  ],
];

$related = [
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
  ['url' => '/pracky-9-kg/', 'nazev' => 'Pračky 9 kg'],
  ['url' => '/vestavne-pracky/', 'nazev' => 'Vestavné pračky'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
