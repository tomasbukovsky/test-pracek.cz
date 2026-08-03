<?php
$segment_slug     = 'pracky-9-kg';
$segment_h1       = 'Pračky 9 kg: srovnání a recenze 2026';
$page_title       = 'Pračky 9 kg 2026: srovnání modelů, recenze a parametry';
$page_description = 'Přehled praček s kapacitou 9 kg pro větší domácnosti. Srovnání parametrů z EPREL a recenzí zákazníků z Alzy a Heureky.';

$segment_intro = '
<p>Pračky s kapacitou <strong>9 kg</strong> jsou vhodné pro velké rodiny (4–5 osob) nebo domácnosti, kde se pere hodně textilu najednou — sportovní vybavení, ložní prádlo, dětské oblečení. Devítikilogový buben je asi o 30 % větší než 7kg, ale cena bývá jen o ~1 000–2 000 Kč vyšší.</p>
<p>V hodnoceních zákazníků, kde se porovnává 8 a 9 kg, zákazníci zpětně chválí, že zvolili větší kapacitu — méně praní týdně znamená nižší celkové provozní náklady. Argument „velká pračka spotřebuje více vody" je v recenzích zpochybňován: moderní pračky dávkují vodu podle náplně.</p>
<p>Třída 9 kg zahrnuje šest modelů od pěti značek — od nejdostupnějšího Beka (cca 9 000 Kč) po prémiový AEG L9WEC163C s třídou A a otáčkami 1 600 ot./min (18 000 Kč). Parametry z registru EPREL jsou v tabulce.</p>
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
    'q' => 'Proč má Beko 9 kg jen 1 000 ot./min?',
    'a' => 'Model Beko B3WFR59023PW má nižší otáčky jako cenový kompromis. Při 1 000 ot./min je prádlo po vyprání mokřejší, což prodlužuje sušení. Je to faktická nevýhoda, kterou je potřeba zohlednit při rozhodování — ale cena modelu je výrazně nižší než srovnatelné 9kg modely s 1 400 ot./min.',
  ],
];

$related = [
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
  ['url' => '/pracky-10-kg/', 'nazev' => 'Pračky 10 kg'],
  ['url' => '/pracky-se-susickou/', 'nazev' => 'Pračky se sušičkou'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
