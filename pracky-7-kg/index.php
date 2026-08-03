<?php
$segment_slug     = 'pracky-7-kg';
$segment_h1       = 'Pračky 7 kg: srovnání a recenze 2026';
$page_title       = 'Pračky 7 kg 2026: srovnání modelů, recenze a parametry';
$page_description = 'Přehled praček s kapacitou 7 kg. Pro koho je 7 kg ideální? Srovnání parametrů z EPREL a recenzí zákazníků.';

$segment_intro = '
<p>Pračka s kapacitou <strong>7 kg</strong> je vhodná pro domácnosti 1–3 osob nebo pro ty, kteří perou častěji a v menších dávkách. Sedmikilogové modely bývají mírně levnější než 8kg nebo 9kg alternativy a v menší koupelně mohou mít i nižší hloubku (např. LG F2WV3S7S3E s hloubkou 48 cm).</p>
<p>Ve třídě 7 kg je nabídka nejširší — všechny hlavní značky (Bosch, LG, Samsung, Whirlpool, AEG, Beko) mají v tomto segmentu alespoň jeden model. Zákazníci si zde mohou vybírat od velmi dostupného Beka za ~7 000 Kč po prémiový AEG za ~12 000 Kč.</p>
<p>Parametry, na které se zákazníci v recenzích zaměřují: <strong>hlučnost</strong> (rozsah v 7kg kategorii je 44–51 dB při praní), <strong>hloubka kabiny</strong> (45–64 cm — velký rozptyl) a <strong>energetická třída</strong> (A až C). Podrobné parametry z registru EPREL najdete v tabulce níže.</p>
';

$faq_items = [
  [
    'q' => 'Pro kolik osob je vhodná pračka 7 kg?',
    'a' => 'Pračka 7 kg se doporučuje pro domácnosti <strong>1–3 osob</strong>. Pro čtyřčlennou rodinu, která pere velké prádlo (ložní prádlo, zimní oblečení), bude kapacita 7 kg omezující — tam je vhodnější 8 nebo 9 kg.',
  ],
  [
    'q' => 'Je 7 kg dost pro velké peřiny nebo ložní prádlo?',
    'a' => 'Záleží na konkrétním kusu. Standardní přikrývka (1,5 kg) s polštáři (2× 0,5 kg) a povlečením (1 kg) dohromady ~3,5 kg — to do 7kg pračky vejde. Na péřovou zimní přikrývku (2–3 kg) v kombinaci s ložním prádlem doporučte 8 nebo 9 kg.',
  ],
  [
    'q' => 'Jsou 7kg pračky levnější než 8kg?',
    'a' => 'Zpravidla mírně ano — ve stejné řadě bývá 7kg model o ~500–1 500 Kč levnější než 8kg. Výjimkou jsou specifické typy (úzká pračka 7 kg), kde je cena kvůli konstrukci vyšší.',
  ],
];

$related = [
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
  ['url' => '/uzke-pracky/', 'nazev' => 'Úzké pračky (45 cm)'],
  ['url' => '/pracky-s-prednim-plnenim/', 'nazev' => 'Pračky s předním plněním'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
