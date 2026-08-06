<?php
$segment_slug     = 'pracky-10-kg';
$segment_h1       = 'Pračky 10 kg: srovnání a parametry 2026';
$page_title       = 'Pračky 10 kg 2026: srovnání modelů a parametry';
$page_description = 'Přehled praček s kapacitou 10 kg pro velké domácnosti. Srovnání ověřených parametrů z registru EPREL.';

$segment_intro = '
<p>Pračka s kapacitou <strong>10 kg</strong> je vhodná pro velké domácnosti (5+ osob), sdílenou domácnost nebo pro ty, kteří potřebují prát velké kusy textilu — paravány, závěsy, větší deky nebo sportovní vybavení. Desetikilové modely jsou hojně zastoupeny i v kategorii kombinovaných praček se sušičkou.</p>
<p>V porovnání s 9kg modely jsou 10kg pračky v katalogu zpravidla dražší a mívají větší hloubku. Podle ověřených dat z EPREL se hlučnost při praní v 10kg kategorii pohybuje mezi 71–74 dB a hloubka mezi 57–64 cm.</p>
<p>Bosch WGH256A0BY Serie 6 je nejvýkonnější 10kg model v katalogu (otáčky až 1580 ot./min, třída odstřeďování A). AEG 8000 PowerCare UniversalDose LFR83146SOC má naopak nejnižší naměřenou spotřebu energie (26 kWh/100 cyklů). LG FSR7A04WC kombinuje přímý pohon, Wi-Fi a nejmělčí provedení v kategorii (57 cm).</p>
';

$faq_items = [
  [
    'q' => 'Pro koho je 10 kg pračka opravdu potřeba?',
    'a' => 'Kapacitu 10 kg skutečně využijete v domácnosti 5+ osob nebo při pravidelném praní ložního prádla, závěsů nebo velkých sportovních doplňků. Pro 3–4 osoby bývá 9 kg dostačující a levnější.',
  ],
  [
    'q' => 'Jsou 10kg pračky vždy větší a těžší?',
    'a' => 'Zpravidla ano — větší buben vyžaduje větší kabinu. Podle EPREL je hloubka 10kg modelů v katalogu 57–64 cm, zatímco standardní hloubka bez ohledu na kapacitu bývá kolem 60 cm. Výška a šířka jsou u volně stojících modelů standardní (85 × 60 cm).',
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
