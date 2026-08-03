<?php
$segment_slug     = 'pracky-lg';
$segment_h1       = 'Pračky LG: srovnání a recenze 2026';
$page_title       = 'Pračky LG 2026: srovnání modelů, recenze a parametry';
$page_description = 'Srovnání praček LG dostupných v ČR. Přehled parametrů z EPREL, agregace uživatelských recenzí z Alzy a Heureky. Žádné vlastní testování.';

$segment_intro = '
<p>LG patří k nejprodávanějším značkám praček v České republice. Klíčovou vlastností, která se opakovaně zmiňuje v hodnoceních zákazníků na Alze i Heurece, je technologie <strong>přímého pohonu</strong> (Direct Drive): motor je připojen přímo na buben bez řemenů, což snižuje hlučnost, vibrace a opotřebení. Na tento motor LG poskytuje <strong>10letou záruku</strong>.</p>
<p>Modely LG pokrývají kapacitní rozsah od 7 do 10 kg a většina nabízí i Wi-Fi ovládání přes aplikaci ThinQ. V recenzích zákazníků se jako nejčastěji zmiňovaná výhoda uvádí tichý chod — zejména modely s přímým pohonem bývají hodnoceny jako jedny z nejtiššíchv dané kapacitní kategorii. Výhradou bývá nutnost registrace v aplikaci a občasné problémy s párováním přes Wi-Fi.</p>
<p>Níže najdete přehled všech modelů LG, které jsme zařadili do katalogu, seřazených podle orientační ceny. Parametry pocházejí z registru EPREL a feedu Alzy. Ceny jsou orientační k datu uvedenému v tabulce — aktuální cenu vždy ověřte u prodejce.</p>
';

$faq_items = [
  [
    'q' => 'Je technologie přímého pohonu u LG lepší než klasický motor?',
    'a' => 'Přímý pohon (Direct Drive) eliminuje přenosový řemen, což podle výrobce snižuje hlučnost a vibraci. Tato vlastnost se v uživatelských hodnoceních zmiňuje jako faktická výhoda — zejména při nočním praní. LG na tento typ motoru poskytuje 10letou záruku na motor (nikoli na celý přístroj).',
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
