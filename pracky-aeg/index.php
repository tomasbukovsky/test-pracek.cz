<?php
$segment_slug     = 'pracky-aeg';
$segment_h1       = 'Pračky AEG: srovnání a recenze 2026';
$page_title       = 'Pračky AEG 2026: srovnání modelů, recenze a parametry';
$page_description = 'Přehled praček AEG na českém trhu. Parametry z EPREL, agregace recenzí zákazníků. Prémiová značka s nejnižší hlučností v kategorii.';

$segment_intro = '
<p>AEG je prémiová značka skupiny Electrolux, v recenzích zákazníků konzistentně hodnocená jako <strong>jedna z nejtišších na trhu</strong>. Hlučnost při odstřeďování se u AEG modelů pohybuje kolem 68–74 dB, zatímco srovnatelné cenově střední modely dosahují 74–78 dB. Pro zákazníky, kteří pere přes noc nebo v otevřeném bytě, je tento rozdíl klíčový.</p>
<p>Technologickým základem je <strong>invertorový motor</strong> s nízkou hlučností a technologie <strong>UltraCare</strong> pro šetrné praní choulostivých materiálů. Prémiové modely jsou vybaveny Wi-Fi a dosahují energetické třídy A — nejlepší dostupné na trhu.</p>
<p>Výhradou, která se v recenzích opakuje nejčastěji, je <strong>vyšší pořizovací cena</strong> a větší hloubka kabiny (kolem 63–64 cm), která nemusí sedět do každé koupelny. AEG rovněž nabízí vestavné provedení a kombinované pračky se sušičkou.</p>
<p>Parametry pocházejí z EPREL a feedu Alzy. Ceny jsou orientační.</p>
';

$faq_items = [
  [
    'q' => 'Proč jsou pračky AEG tak drahé?',
    'a' => 'AEG patří do prémiového segmentu skupiny Electrolux. Vyšší cena odpovídá lepší hlučnosti (68–74 dB vs. průměrných 74–78 dB u střední třídy), lepší energetické třídě (modely třídy A) a technologii UltraCare pro šetrné praní. Jde tedy o reálné parametrické rozdíly, nikoli jen o marketingový prémiový příplatek.',
  ],
  [
    'q' => 'Jsou pračky AEG vhodné do bytu v paneláku?',
    'a' => 'Ano — AEG patří k nejčastěji doporučovaným značkám právě pro bytové domy. Hlučnost 68–71 dB při odstřeďování (dle modelu a EPREL) je výrazně nižší než průměr kategorie. V hodnoceních zákazníků v paneláku se AEG zmiňuje jako výrazně klidnější soused.',
  ],
  [
    'q' => 'Liší se AEG L6, L7 a L9 jen výbavou, nebo i výkonem?',
    'a' => 'Řady AEG se liší výbavou (počet programů, přídavné funkce) i výkonem — vyšší řady nabízejí lepší energetickou třídu a nižší hlučnost. L9 (řada 9000) dosahuje třídy A a 1 600 ot./min, zatímco L6 (řada 6000) bývá ve třídě B s 1 400 ot./min.',
  ],
];

$related = [
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
  ['url' => '/pracky-9-kg/', 'nazev' => 'Pračky 9 kg'],
  ['url' => '/vestavne-pracky/', 'nazev' => 'Vestavné pračky'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
