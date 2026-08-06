<?php
$segment_slug     = 'pracky-se-susickou';
$segment_h1       = 'Pračky se sušičkou: srovnání 2026';
$page_title       = 'Pračka se sušičkou 2026: srovnání kombinovaných modelů';
$page_description = 'Přehled kombinovaných praček se sušičkou. Srovnání parametrů, výhody a nevýhody 2-v-1 řešení.';

$segment_intro = '
<p>Kombinovaná pračka se sušičkou (washer-dryer) integruje obě funkce do jednoho spotřebiče. Je to kompromisní řešení pro domácnosti, kde není prostor na dvě samostatná zařízení — hlavní výhodou je ušetřené místo.</p>
<p>Klíčové limity vycházející z technologie: <strong>kapacita sušení je vždy nižší než praní</strong> (v katalogu typicky 5–7 kg sušení při 7–10 kg praní) a <strong>energetická třída pro sušení bývá B nebo E</strong> — kondenzační sušení v kombinovaném přístroji je energeticky nákladnější než tepelné čerpadlo v samostatné sušičce třídy A.</p>
<p>Pokud máte dostatek prostoru, kombinace samostatné pračky + sušičky s tepelným čerpadlem (třída A) bude z hlediska provozních nákladů výhodnější. Kombinovaný model dává smysl primárně tam, kde prostor pro dvě zařízení prostě není.</p>
';

$faq_items = [
  [
    'q' => 'Lze v kombinované pračce prát a sušit najednou?',
    'a' => 'Ne. Pračka se sušičkou nejprve vypere, poté vysuší — jde o sekvenční procesy v jednom přístroji. Celková doba (praní + sušení) může být 4–6 hodin. Nelze prát v jednom cyklu a sušit jiné prádlo simultánně.',
  ],
  [
    'q' => 'Proč má kombinovaná pračka energetickou třídu D nebo E?',
    'a' => 'Energetická třída u kombinovaných praček hodnotí sušení kondenzačním způsobem — ten je energeticky náročnější než tepelné čerpadlo (které jsou v samostatných sušičkách třídy A). Třída D nebo E pro kombinovaný přístroj proto neznačí špatnou pračku, ale odráží reálnou spotřebu kondenzačního sušení.',
  ],
  [
    'q' => 'Je kombinovaná pračka se sušičkou levnější než dvě zařízení?',
    'a' => 'Pořizovacím nákladem zpravidla ne — kombinovaný model stojí srovnatelně s pračkou + základní sušičkou. Výhodou je ušetřené místo a jeden přístroj ke správě. Nevýhodou jsou vyšší provozní náklady za sušení a delší celková doba cyklu.',
  ],
];

$related = [
  ['url' => '/pracky-9-kg/', 'nazev' => 'Pračky 9 kg'],
  ['url' => '/pracky-10-kg/', 'nazev' => 'Pračky 10 kg'],
  ['url' => '/pracky-lg/', 'nazev' => 'Pračky LG'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
