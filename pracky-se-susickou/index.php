<?php
$segment_slug     = 'pracky-se-susickou';
$segment_h1       = 'Pračky se sušičkou: srovnání 2026';
$page_title       = 'Pračka se sušičkou 2026: srovnání kombinovaných modelů';
$page_description = 'Přehled kombinovaných praček se sušičkou. Srovnání parametrů, recenze zákazníků, výhody a nevýhody 2-v-1 řešení.';

$segment_intro = '
<p>Kombinovaná pračka se sušičkou (washer-dryer) integruje obě funkce do jednoho spotřebiče. Je to kompromisní řešení pro domácnosti, kde není prostor na dvě samostatná zařízení. V hodnoceních zákazníků se jako nejčastěji citovaná výhoda uvádí <strong>ušetřené místo</strong>.</p>
<p>Klíčové limity, které zákazníci v recenzích zmiňují: <strong>kapacita sušení je vždy nižší než praní</strong> (typicky 6 kg sušení při 9–10 kg praní) a <strong>energetická třída pro sušení je D nebo E</strong> — sušení je výrazně energeticky nákladnější než u tepelného čerpadla v samostatné sušičce třídy A. Ceny elektřiny to pro část zákazníků dělá nevýhodnou volbou z dlouhodobého pohledu.</p>
<p>Pokud máte dostatek prostoru, kombinace samostatné pračky + sušičky s tepelným čerpadlem (třída A) bude z hlediska provozních nákladů výhodnější. Kombinovaný model dává smysl primárně tehdy, kdy prostor pro dvě zařízení prostě není.</p>
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
