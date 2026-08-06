<?php
$segment_slug     = 'pracky-9-kg';
$segment_h1       = 'Pračky 9 kg: srovnání a parametry 2026';
$page_title       = 'Pračky 9 kg 2026: srovnání modelů a parametry';
$page_description = 'Přehled praček s kapacitou 9 kg pro větší domácnosti. Srovnání ověřených parametrů z registru EPREL.';

$segment_intro = '
<p>Pračky s kapacitou <strong>9 kg</strong> jsou vhodné pro velké rodiny (4–5 osob) nebo domácnosti, kde se pere hodně textilu najednou — sportovní vybavení, ložní prádlo, dětské oblečení.</p>
<p>Moderní pračky dávkují vodu podle skutečné náplně, ne podle maximální kapacity — praní menší dávky v 9kg pračce tak zbytečně nezvyšuje spotřebu vody oproti menšímu bubnu.</p>
<p>Třída 9 kg je v katalogu jedna z nejširších — najdete tu deset modelů od pěti značek, od nejdostupnějšího Beka (od 8 499 Kč) po Bosch WGG244Z3BY Serie 6 (15 990 Kč). Podle ověřených dat z EPREL se hlučnost při praní pohybuje mezi 71–75 dB a hloubka kabiny mezi 48–64 cm — trojice modelů LG (FLR5A92WS, FLR7A92WG, FLR9A92WC) má nejmělčí provedení (48 cm), Bosch WGG244Z3BY naopak nejhlubší (64 cm). Parametry z registru EPREL jsou v tabulce.</p>
';

$faq_items = [
  [
    'q' => 'Pro kolik osob je vhodná pračka 9 kg?',
    'a' => 'Pračka 9 kg se doporučuje pro domácnosti <strong>4–5 osob</strong>. Pro menší domácnosti (1–3 osoby) bude kapacita nadstandardní, ale pokud perete méně často a ve větších dávkách, 9 kg se vyplatí.',
  ],
  [
    'q' => 'Spotřebuje 9kg pračka více vody a energie než 8kg?',
    'a' => 'Maximální spotřeba (plná náplň) je mírně vyšší. Ale moderní pračky dávkují vodu podle skutečné náplně — při praní 4 kg prádla v 9kg pračce spotřebuje podobně jako 7kg model se stejnou náplní. Celková roční spotřeba závisí hlavně na tom, jak plně pračku plníte.',
  ],
  [
    'q' => 'Mají všechny 9kg pračky v katalogu stejné otáčky?',
    'a' => 'Ne — otáčky při odstřeďování se u 9kg modelů v katalogu liší od 1160 do 1400 ot./min. Nižší otáčky znamenají mokřejší prádlo po vyprání a delší sušení, bývají ale spojené s nižší cenou. Konkrétní hodnotu najdete u každého modelu v tabulce.',
  ],
];

$related = [
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
  ['url' => '/pracky-10-kg/', 'nazev' => 'Pračky 10 kg'],
  ['url' => '/pracky-se-susickou/', 'nazev' => 'Pračky se sušičkou'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
