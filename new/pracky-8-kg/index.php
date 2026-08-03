<?php
$segment_slug     = 'pracky-8-kg';
$segment_h1       = 'Pračky 8 kg: srovnání a recenze 2026';
$page_title       = 'Pračky 8 kg 2026: srovnání modelů, recenze a parametry';
$page_description = 'Přehled praček s kapacitou 8 kg — nejprodávanější kategorie. Srovnání parametrů z EPREL, recenze zákazníků, doporučení pro různé typy domácností.';

$segment_intro = '
<p>Pračky s kapacitou <strong>8 kg jsou nejprodávanější kategorií</strong> na českém trhu. Osmikilogový buben pojme prádlo pro 3–4 osoby a zároveň zvládne i větší kusy — přikrývky, záclony nebo sportovní vybavení. Proto ji volí jak rodiny, tak jednotlivci, kteří chtějí pere méně často s větší náplní.</p>
<p>V kategorii 8 kg je výběr největší: jsou zde dostupné modely od nejdostupnějšího Beka (od ~9 000 Kč) přes střední třídu (Bosch, Samsung, Whirlpool) až po prémiové AEG (13 000–15 000 Kč). Energetická třída se v 8kg kategorii pohybuje od A (AEG L7FBE841E) po C (Samsung, Bosch WAN28020BY).</p>
<p>Klíčové parametry pro rozhodování: <strong>hlučnost</strong> (rozsah 45–52 dB při praní — rozdíl je slyšitelný), <strong>hloubka</strong> (48–64 cm — zásadní pro malé koupelny) a <strong>energetická třída</strong>. Parametry z registru EPREL jsou v tabulce níže.</p>
';

$faq_items = [
  [
    'q' => 'Pro kolik osob je vhodná pračka 8 kg?',
    'a' => 'Pračka 8 kg se doporučuje pro domácnosti <strong>3–4 osob</strong>. Je to nejuniverzálnější kapacita — zvládne jak praní prádla pro rodinu, tak velké kusy jako přikrývky nebo sportovní oblečení.',
  ],
  [
    'q' => 'Jaký je rozdíl mezi pračkou 8 kg třídy A a třídy C?',
    'a' => 'Třída A spotřebuje přibližně o 30–40 % méně energie než třída C (hodnoty závisí na konkrétním modelu a EPREL registru). Při průměrné spotřebě 200 cyklů ročně a ceně 5 Kč/kWh to může znamenat úsporu 100–300 Kč ročně — za kolik let se vyplatí, závisí na rozdílu cen modelů.',
  ],
  [
    'q' => 'Proč mají vestavné pračky 8 kg výšku jen 82 cm?',
    'a' => 'Vestavné pračky jsou navrženy pro zabudování pod standardní pracovní desku s výškou 85–87 cm. Výška 82 cm zajišťuje dostatečnou mezeru pro desku a případné tlumicí podložky. Jinými slovy — vestavná 82 cm vs. volně stojící 85 cm není chyba, ale záměrný konstrukční rozměr.',
  ],
];

$related = [
  ['url' => '/pracky-7-kg/', 'nazev' => 'Pračky 7 kg'],
  ['url' => '/pracky-9-kg/', 'nazev' => 'Pračky 9 kg'],
  ['url' => '/vestavne-pracky/', 'nazev' => 'Vestavné pračky'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
