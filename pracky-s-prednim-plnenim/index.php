<?php
$segment_slug     = 'pracky-s-prednim-plnenim';
$segment_h1       = 'Pračky s předním plněním: srovnání 2026';
$page_title       = 'Pračky s předním plněním 2026: srovnání a parametry';
$page_description = 'Přehled praček s předním plněním — nejrozšířenější typ v ČR. Srovnání parametrů a doporučení podle použití.';

$segment_intro = '
<p>Pračky s <strong>předním plněním</strong> jsou v České republice naprosto dominantní — tvoří přes 90 % prodejů. Buben se plní dveřmi na čelní straně přístroje. Oproti hornímu plnění mají obecně <strong>nižší spotřebu vody a energie</strong> (méně vody je potřeba k namočení prádla, buben ho zvedá a spouští místo míchání), lepší výsledky praní delikátních tkanin a jsou vhodné pro zabudování pod pracovní desku.</p>
<p>Praktická výhrada předního plnění: nelze přidat prádlo poté, co cyklus začal (nebo jen tehdy, když pračka pauzuje a zámek dvířek se odemkne). U moderních modelů s funkcí „PauseWash" nebo podobnou je toto omezení zmírněno.</p>
<p>V tomto segmentu nabízíme přehled všech 29 modelů s předním plněním v katalogu, seřazených podle orientační ceny. Parametry pocházejí z EPREL a feedu prodejce.</p>
';

$faq_items = [
  [
    'q' => 'Jaký je rozdíl mezi předním a horním plněním?',
    'a' => 'Přední plnění: dveře na čelní straně, nižší spotřeba vody a energie, lepší výsledky praní, lze zabudovat pod pracovní desku. Horní plnění: šíře jen 40 cm, lze přidat prádlo kdykoli, jednodušší instalace. V ČR je přední plnění dominantní (90 %+ prodejů).',
  ],
  [
    'q' => 'Lze přidat prádlo do pračky s předním plněním po spuštění?',
    'a' => 'Závisí na modelu. Standardně jsou dveře po spuštění zamčeny (bezpečnostní pojistka — voda). Některé modely mají funkci Pause & Wash, která umožní krátce otevřít dveře na začátku cyklu. Funkci vždy ověřte v parametrech konkrétního modelu.',
  ],
  [
    'q' => 'Jsou pračky s předním plněním úspornější než s horním?',
    'a' => 'Zpravidla ano. Přední plnění spotřebuje méně vody (prádlo se zvedá bubnem místo máchání), což snižuje i spotřebu energie na ohřev vody. Energeticky nejlepší třídy (A) jsou v ČR dostupné výhradně u praček s předním plněním.',
  ],
];

$related = [
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
  ['url' => '/uzke-pracky/', 'nazev' => 'Úzké pračky (45 cm)'],
  ['url' => '/vestavne-pracky/', 'nazev' => 'Vestavné pračky'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
