<?php
$segment_slug     = 'pracky-bosch';
$segment_h1       = 'Pračky Bosch: srovnání a recenze 2026';
$page_title       = 'Pračky Bosch 2026: srovnání modelů, recenze a parametry';
$page_description = 'Přehled praček Bosch dostupných v ČR. Srovnání parametrů z EPREL, agregace recenzí z Alzy a Heureky. Které modely Bosch stojí za pozornost?';

$segment_intro = '
<p>Bosch je jednou z nejdůvěryhodnějších značek v kategorii praček v českém prostředí. Zákazníci ji opakovaně zmiňují v souvislosti se <strong>spolehlivostí a dostupným servisem</strong> — v hodnoceních se jako jeden z hlavních důvodů volby Bosch uvádí existence husté servisní sítě.</p>
<p>Řada praček Bosch pokrývá kapacity 7–9 kg, přičemž většina modelů je vybavena <strong>invertorem</strong>. Klíčový parametr, který v uživatelských recenzích ovlivňuje spokojenost, je hlučnost. Modely Bosch s invertorem bývají v hodnoceních zákazníků hodnoceny jako tišší než srovnatelné standardní motory.</p>
<p>Specifická výhrada, která se v recenzích zákazníků opakuje napříč modely Bosch, je <strong>délka přívodního kabelu</strong> (kolem 1,5 m), která v některých koupelnách vyžaduje prodlužovací kabel nebo úpravu instalace.</p>
<p>Parametry v tabulce níže pocházejí z registru EPREL a feedu Alzy. Ceny jsou orientační — aktuální cenu ověřte u prodejce.</p>
';

$faq_items = [
  [
    'q' => 'Jaký je rozdíl mezi pračkami Bosch řady 4, 6 a 8?',
    'a' => 'Řady Bosch se liší výbavou a funkcemi — nižší čísla jsou základní modely, vyšší nabízejí více programů, lepší motory a doplňkové funkce (EcoSilence Drive, Home Connect Wi-Fi, apod.). Základní výkonové parametry (kapacita, třída energie) jsou rozděleny napříč řadami.',
  ],
  [
    'q' => 'Má Bosch vlastní servisní síť v ČR?',
    'a' => 'Ano. BSH Domácí spotřebiče (Bosch, Siemens, Neff) provozuje autorizovanou servisní síť v celé ČR. To je jedna z nejčastěji zmiňovaných výhod v recenzích zákazníků — dostupnost náhradních dílů a servisní podpora i po záruční době.',
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
