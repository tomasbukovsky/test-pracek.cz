<?php
$segment_slug     = 'pracky-10-kg';
$segment_h1       = 'Pračky 10 kg: srovnání a recenze 2026';
$page_title       = 'Pračky 10 kg 2026: srovnání modelů, recenze a parametry';
$page_description = 'Přehled praček s kapacitou 10 kg pro velké domácnosti. Srovnání parametrů z EPREL, recenze zákazníků.';

$segment_intro = '
<p>Pračka s kapacitou <strong>10 kg</strong> je vhodná pro velké domácnosti (5+ osob), sdílenou domácnost nebo pro ty, kteří potřebují prát velké kusy textilu — paravány, závěsy, větší deky nebo velké sportovní vybavení. Desetikilogové modely jsou hojně zastoupeny i v kategorii kombinovaných praček se sušičkou.</p>
<p>V porovnání s 9kg modely jsou 10kg pračky zpravidla o ~1 000–3 000 Kč dražší a mohou mít větší hloubku (59–60 cm). Rozdíl v denním provozu pro 2–3 osoby je minimální — doplatek za kapacitu 10 kg se vrátí jen tehdy, pokud ji skutečně plně využíváte.</p>
<p>Elektrolux EW6F5943TP je prémiová volba s třídou A a Wi-Fi. Samsung WW10T604DLW nabízí podobné parametry za nižší cenu. LG F4WV710S1E kombinuje přímý pohon, Wi-Fi a třídu A. Beko nabízí 10 kg za nejnižší cenu s kompromisem v otáčkách a třídě.</p>
';

$faq_items = [
  [
    'q' => 'Pro koho je 10 kg pračka opravdu potřeba?',
    'a' => 'Kapacitu 10 kg skutečně využijete v domácnosti 5+ osob nebo při pravidelném praní ložního prádla, závěsů nebo velkých sportovních doplňků. Pro 3–4 osoby bývá 9 kg dostačující a levnější.',
  ],
  [
    'q' => 'Jsou 10kg pračky vždy větší a těžší?',
    'a' => 'Zpravidla mírně ano — větší buben vyžaduje větší kabinu. Hloubka 10kg modelů je typicky 59–61 cm oproti 54–56 cm u kompaktních 7–8kg modelů. Výška a šíře jsou standardní (85 × 60 cm).',
  ],
  [
    'q' => 'Mám koupit 10kg pračku nebo 9kg + sušičku?',
    'a' => 'Záleží na prostoru. 10kg pračka se sušičkou (kombinovaný model) zaujme místo jednoho spotřebiče, ale sušení zabere delší čas a spotřebu. Samostatná sušička má vyšší kapacitu a lepší energetickou třídu (A), ale potřebujete prostor pro dva přístroje.',
  ],
];

$related = [
  ['url' => '/pracky-9-kg/', 'nazev' => 'Pračky 9 kg'],
  ['url' => '/pracky-se-susickou/', 'nazev' => 'Pračky se sušičkou'],
  ['url' => '/pracky-lg/', 'nazev' => 'Pračky LG'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
