<?php
$segment_slug     = 'pracky-bosch';
$segment_h1       = 'Pračky Bosch: srovnání a parametry 2026';
$page_title       = 'Pračky Bosch 2026: srovnání modelů a parametry';
$page_description = 'Přehled praček Bosch dostupných v ČR. Srovnání ověřených parametrů z registru EPREL. Které modely Bosch stojí za pozornost?';

$segment_intro = '
<p>Bosch patří v ČR k nejrozšířenějším značkám praček. Servis zajišťuje síť BSH Domácí spotřebiče (Bosch, Siemens, Neff), která má autorizovaná servisní místa po celé republice.</p>
<p>Většina modelů Bosch v katalogu je vybavena invertorovým motorem EcoSilence Drive nebo SilentPowerDrive. Podle ověřených dat z registru EPREL se hlučnost při praní u bosch modelů v katalogu pohybuje mezi 71–74 dB, hloubka bývá 63–64 cm — o něco víc než standardních 60 cm, což je dobré si před koupí přeměřit.</p>
<p>Parametry v tabulce níže pocházejí z registru EPREL a feedu prodejce. Ceny jsou orientační — aktuální cenu ověřte u prodejce.</p>
';

$faq_items = [
  [
    'q' => 'Jaký je rozdíl mezi pračkami Bosch řady 4, 6 a 8?',
    'a' => 'Řady Bosch se liší výbavou a funkcemi — nižší čísla jsou základní modely, vyšší nabízejí více programů, lepší motory a doplňkové funkce (EcoSilence Drive, Home Connect Wi-Fi, apod.). Základní výkonové parametry (kapacita, třída energie) jsou rozděleny napříč řadami.',
  ],
  [
    'q' => 'Má Bosch vlastní servisní síť v ČR?',
    'a' => 'Ano. BSH Domácí spotřebiče (Bosch, Siemens, Neff) provozuje autorizovanou servisní síť v celé ČR — dostupnost náhradních dílů a servisní podpora i po záruční době patří mezi praktické výhody této značky.',
  ],
  [
    'q' => 'Je EcoSilence Drive u Bosch totéž co invertorový motor?',
    'a' => 'EcoSilence Drive je označení Bosch pro jejich invertorový motor bez kartáčů. Má nižší hlučnost a delší životnost než klasické motory. Na motory EcoSilence Drive poskytuje Bosch záruku motoru 10 let (podmínky ověřte u prodejce).',
  ],
];

$related = [
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
  ['url' => '/pracky-9-kg/', 'nazev' => 'Pračky 9 kg'],
  ['url' => '/uzke-pracky/', 'nazev' => 'Úzké pračky (45 cm)'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
