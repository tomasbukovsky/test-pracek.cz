<?php
$segment_slug     = 'uzke-pracky';
$segment_h1       = 'Úzké pračky (40–45 cm): srovnání 2026';
$page_title       = 'Úzká pračka 2026: srovnání modelů 40 a 45 cm';
$page_description = 'Přehled úzkých praček (šíře 40–45 cm) pro malé koupelny. Srovnání ověřených parametrů z registru EPREL.';

$segment_intro = '
<p>Úzké pračky jsou navrženy pro koupelny s omezenou šíří prostoru. Zatímco standardní pračka má šíři <strong>60 cm</strong>, úzké modely mají šíři <strong>40–45 cm</strong> — to je rozdíl 15–20 cm, který v malé koupelně nebo na chodbě rozhoduje.</p>
<p>Většina úzkých modelů v katalogu má horní plnění (šířka 40–41 cm) — jde spíš o vedlejší efekt kompaktnější konstrukce bubnu než o cíl samotný. Pokud vás zajímá princip horního plnění samotný (ergonomie, možnost přidat prádlo za chodu), ne jen úspora místa, přečtěte si samostatnou stránku <a href="' . url('/pracky-s-hornim-plnenim/') . '">Pračky s horním plněním</a>.</p>
<p>Kompromisem je zpravidla <strong>nižší kapacita</strong> — v katalogu mají úzké modely 6–7 kg oproti 7–11 kg u standardních 60cm praček. Hlavním důvodem volby úzké pračky bývá logicky dostupný prostor, ne preference samotného přístroje. Všechny úzké modely v katalogu mají šířku 45 cm nebo méně.</p>
';

$faq_items = [
  [
    'q' => 'Jaký je rozdíl mezi pračkou 40 cm a 45 cm?',
    'a' => 'Pračky 40–41 cm jsou v katalogu vždy s horním plněním. Modely 45 cm bývají s předním plněním. Pro výklenky nebo mezery v koupelně je každý centimetr důležitý — vždy přesně změřte dostupnou šíři. Podrobnosti k principu horního plnění najdete na stránce <a href="' . url('/pracky-s-hornim-plnenim/') . '">Pračky s horním plněním</a>.',
  ],
  [
    'q' => 'Mají úzké pračky menší kapacitu?',
    'a' => 'Ano, v katalogu mají všechny úzké modely 6–7 kg — např. Haier THASN276TM5-S nebo Candy TCA274TM5-S (oba 41 cm) pojmou 7 kg, zatímco Whirlpool TW621DSFCEE nebo Electrolux EW6TN4262C (oba 40 cm) mají kapacitu 6 kg. Kapacita u úzkých modelů je tak nižší než u standardních 60cm praček (7–11 kg).',
  ],
  [
    'q' => 'Jsou úzké pračky dražší?',
    'a' => 'Zpravidla ano — za stejnou kapacitu a značku je úzké provedení obvykle o něco dražší kvůli speciální konstrukci. Přesné ceny jednotlivých modelů najdete v tabulce výše — rozptyl v katalogu je široký, od necelých 9 000 Kč po téměř 16 000 Kč.',
  ],
];

$related = [
  ['url' => '/pracky-s-hornim-plnenim/', 'nazev' => 'Pračky s horním plněním'],
  ['url' => '/pracky-7-kg/', 'nazev' => 'Pračky 7 kg'],
  ['url' => '/pracky-s-prednim-plnenim/', 'nazev' => 'Pračky s předním plněním'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
