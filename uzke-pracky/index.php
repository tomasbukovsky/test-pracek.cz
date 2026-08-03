<?php
$segment_slug     = 'uzke-pracky';
$segment_h1       = 'Úzké pračky (40–45 cm): srovnání 2026';
$page_title       = 'Úzká pračka 2026: srovnání modelů 40 a 45 cm';
$page_description = 'Přehled úzkých praček (šíře 40–45 cm) pro malé koupelny. Srovnání parametrů z EPREL, recenze zákazníků.';

$segment_intro = '
<p>Úzké pračky jsou navrženy pro koupelny s omezenou šíří prostoru. Zatímco standardní pračka má šíři <strong>60 cm</strong>, úzké modely mají šíři <strong>40–45 cm</strong> — to je rozdíl 15–20 cm, který v malé koupelně nebo na chodbě rozhoduje.</p>
<p>Existují dva typy úzkých praček: <strong>s předním plněním</strong> (obvyklá hloubka 45–61 cm) a <strong>s horním plněním</strong> (šíře 40 cm, hloubka 60 cm — ty jsou ještě kompaktnější). Pračky s předním plněním 45 cm nabízí větší kapacitu a lepší energetické třídy.</p>
<p>Kompromisem je zpravidla <strong>nižší kapacita</strong> nebo vyšší cena — za stejnou kapacitu a třídu se za úzké provedení platí přirážka 500–2 000 Kč. V hodnoceních zákazníků se jako nejčastěji citovaný důvod volby úzké pračky uvádí dostupný prostor, nikoli preference samotného přístroje. Všechny úzké modely v katalogu mají šíři 45 cm nebo méně.</p>
';

$faq_items = [
  [
    'q' => 'Jaký je rozdíl mezi pračkou 40 cm a 45 cm?',
    'a' => 'Pračky 40 cm jsou typicky s horním plněním a mají šíři 40 cm. Modely 45 cm jsou nejčastěji s předním plněním a nabízejí větší kapacitu (6–8 kg). Pro výklenky nebo mezery v koupelně je každý centimetr důležitý — vždy přesně změřte dostupnou šíři.',
  ],
  [
    'q' => 'Mají úzké pračky menší kapacitu?',
    'a' => 'Nutně ne. Samsung WW70J5355DW (45 cm) pojme 7 kg, Beko WTV8612XS0 (45 cm) pojme 8 kg. Kapacita závisí na hloubce bubnu, která u úzkých praček bývá vyrovnána větší hloubkou přístroje. Výběr je ale menší než u standardních 60cm modelů.',
  ],
  [
    'q' => 'Jsou úzké pračky dražší?',
    'a' => 'Zpravidla mírně ano — za stejné parametry je úzké provedení o ~500–2 000 Kč dražší než standardní. Přirážka je za speciální konstrukční provedení. Výjimkou jsou modely s horním plněním (40 cm), které bývají naopak levnější.',
  ],
];

$related = [
  ['url' => '/pracky-7-kg/', 'nazev' => 'Pračky 7 kg'],
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
  ['url' => '/pracky-s-prednim-plnenim/', 'nazev' => 'Pračky s předním plněním'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
