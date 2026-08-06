<?php
$segment_slug     = 'pracky-lg';
$segment_h1       = 'Pračky LG: srovnání a parametry 2026';
$page_title       = 'Pračky LG 2026: srovnání modelů a parametry';
$page_description = 'Srovnání praček LG dostupných v ČR. Přehled ověřených parametrů z registru EPREL. Žádné vlastní testování.';

$segment_intro = '
<p>LG patří k nejprodávanějším značkám praček v České republice. Charakteristickým prvkem je technologie <strong>přímého pohonu</strong> (Direct Drive): motor je připojen přímo na buben bez řemenů, což podle výrobce snižuje hlučnost, vibrace a opotřebení. Na tento motor LG poskytuje <strong>10letou záruku</strong>.</p>
<p>Modely LG v katalogu pokrývají kapacitní rozsah od 8,5 do 10 kg, většina nabízí i Wi-Fi ovládání přes aplikaci ThinQ. Podle ověřených dat z registru EPREL mají modely LG v katalogu hlučnost při praní 71 dB a hloubku 48–57 cm — tedy spíš mělčí provedení než konkurence s hloubkou přes 60 cm.</p>
<p>Níže najdete přehled všech modelů LG, které jsme zařadili do katalogu, seřazených podle orientační ceny. Parametry pocházejí z registru EPREL a feedu prodejce. Ceny jsou orientační k datu uvedenému v tabulce — aktuální cenu vždy ověřte u prodejce.</p>
';

$faq_items = [
  [
    'q' => 'Je technologie přímého pohonu u LG lepší než klasický motor?',
    'a' => 'Přímý pohon (Direct Drive) eliminuje přenosový řemen, což podle výrobce snižuje hlučnost a vibrace. LG na tento typ motoru poskytuje 10letou záruku na motor (nikoli na celý přístroj).',
  ],
  [
    'q' => 'Jsou pračky LG s Wi-Fi nutně lepší než bez něj?',
    'a' => 'Wi-Fi umožňuje ovládání přes aplikaci ThinQ — spuštění, sledování průběhu cyklu, diagnostiku. Jde o pohodlí, ne o výkonnostní parametr. Pokud Wi-Fi nepotřebujete, modely bez něj bývají levnější při stejných výkonnostních parametrech.',
  ],
  [
    'q' => 'Jaká je záruka na pračky LG?',
    'a' => 'Zákonná záruka je 2 roky. Na motor s přímým pohonem LG poskytuje prodlouženou záruku 10 let — platí pro konkrétní modely, podmínky ověřte u prodejce nebo na webu LG.',
  ],
];

$related = [
  ['url' => '/pracky-9-kg/', 'nazev' => 'Pračky 9 kg'],
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
  ['url' => '/pracky-se-susickou/', 'nazev' => 'Pračky se sušičkou'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
