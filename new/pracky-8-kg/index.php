<?php
$segment_slug     = 'pracky-8-kg';
$segment_h1       = 'Pračky 8 kg: srovnání a parametry 2026';
$page_title       = 'Pračky 8 kg 2026: srovnání modelů a parametry';
$page_description = 'Přehled praček s kapacitou 8 kg — nejprodávanější kategorie. Srovnání ověřených parametrů z registru EPREL, doporučení pro různé typy domácností.';

$segment_intro = '
<p>Pračky s kapacitou <strong>8 kg jsou nejprodávanější kategorií</strong> na českém trhu. Osmikilogový buben pojme prádlo pro 3–4 osoby a zároveň zvládne i větší kusy — přikrývky, záclony nebo sportovní vybavení.</p>
<p>V kategorii 8 kg je výběr největší: v katalogu najdete modely od nejdostupnějšího Beka (od 8 090 Kč) přes střední třídu (Bosch, LG, Electrolux) až po AEG LFR61842QC (15 990 Kč). Energetická třída se v 8kg kategorii v katalogu pohybuje od A (Bosch, LG, Beko, AEG) po B (Samsung).</p>
<p>Podle ověřených dat z EPREL se hlučnost při praní v 8kg kategorii pohybuje mezi 71–76 dB a hloubka kabiny mezi 49–63 cm — LG má v této kapacitě nejmělčí provedení (49 cm), Bosch naopak nejhlubší (63 cm). Parametry z registru EPREL jsou v tabulce níže.</p>
';

$faq_items = [
  [
    'q' => 'Pro kolik osob je vhodná pračka 8 kg?',
    'a' => 'Pračka 8 kg se doporučuje pro domácnosti <strong>3–4 osob</strong>. Je to nejuniverzálnější kapacita — zvládne jak praní prádla pro rodinu, tak velké kusy jako přikrývky nebo sportovní oblečení.',
  ],
  [
    'q' => 'Jaký je rozdíl mezi pračkou 8 kg třídy A a třídy B?',
    'a' => 'Nižší třída (A) znamená nižší spotřebu energie na 100 pracích cyklů — konkrétní hodnotu v kWh najdete u každého modelu v tabulce parametrů, protože se liší model od modelu i v rámci stejné třídy. Při pravidelném praní se rozdíl za dobu životnosti pračky promítne do účtu za elektřinu.',
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
