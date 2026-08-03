<?php
$segment_slug     = 'vestavne-pracky';
$segment_h1       = 'Vestavné pračky: srovnání 2026';
$page_title       = 'Vestavná pračka 2026: srovnání modelů a recenze';
$page_description = 'Přehled vestavných praček pro kuchyňské linky a skříně. Srovnání parametrů, recenze zákazníků, doporučení podle značky.';

$segment_intro = '
<p>Vestavné pračky jsou konstrukčně totožné s volně stojícími modely, ale mají <strong>upravenou výšku (82 cm)</strong> pro zabudování pod standardní pracovní desku nebo do skříně. Na čelní panel lze nainstalovat fasádu shodnou s ostatním nábytkem — přístroj pak zcela splyne s kuchyňskou linkou.</p>
<p>Instalace vestavné pračky je náročnější než standardní: nutná je přesná příprava výklenku, přívod vody a odpad v místě instalace a v mnoha případech i odborná montáž. Výrobci ji zpravidla nedoporučují montovat svépomocí bez zkušeností.</p>
<p>V hodnoceních zákazníků se jako nejčastěji citovaný důvod volby vestavné pračky uvádí <strong>estetika a diskrétní instalace</strong> — zejména v open-space bytech nebo kuchyních, kde by volně stojící pračka vizuálně rušila. Cena je ve srovnání se stejnými volně stojícími modely zpravidla o ~2 000–5 000 Kč vyšší.</p>
';

$faq_items = [
  [
    'q' => 'Jsou vestavné pračky výkonnostně horší než volně stojící?',
    'a' => 'Ne. Vestavné pračky jsou technicky identické se svými volně stojícími protějšky — rozdíl je pouze v výšce (82 vs. 85 cm) a absenci výškově nastavitelných nožiček (ty nejsou ve vestavné verzi potřeba). Parametry praní, spotřeba energie a hlučnost jsou stejné.',
  ],
  [
    'q' => 'Lze vestavnou pračku nainstalovat svépomocí?',
    'a' => 'Přívod vody a odpad instalace jsou technicky stejné jako u volně stojící pračky — pokud jsou rozvody v místě instalace, zvládne to zručný domácí kutil. Komplikace nastávají při přesném ustavení a instalaci fasády — tam doporučujeme odbornou pomoc.',
  ],
  [
    'q' => 'Jaká výška výklenku je potřeba pro vestavnou pračku?',
    'a' => 'Standardní výška vestavné pračky je 82 cm. Výklenek pod pracovní deskou bývá 82–85 cm — záleží na konkrétní kuchyňské lince. Vždy přesně změřte a ověřte v instalační příručce konkrétního modelu.',
  ],
];

$related = [
  ['url' => '/pracky-bosch/', 'nazev' => 'Pračky Bosch'],
  ['url' => '/pracky-aeg/', 'nazev' => 'Pračky AEG'],
  ['url' => '/pracky-8-kg/', 'nazev' => 'Pračky 8 kg'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
