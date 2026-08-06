<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$segment_slug     = 'pracky-s-hornim-plnenim';
$segment_h1       = 'Pračky s horním plněním: srovnání 2026';
$page_title       = 'Pračky s horním plněním 2026: srovnání a parametry';
$page_description = 'Přehled praček s horním plněním — bez nutnosti se ohýbat, plnicí otvor nahoře. Srovnání ověřených parametrů z registru EPREL.';

$segment_intro = '
<p>U pračky s <strong>horním plněním</strong> je buben otočený tak, že se prádlo vkládá otvorem nahoře, ne dvířky vpředu. Hlavní praktickou výhodou je, že se při vkládání a vyndávání prádla nemusíte ohýbat — ocení to hlavně lidé se zády, senioři nebo kdokoliv, kdo instaluje pračku do vyššího výklenku, kam by na přední dvířka nedosáhl pohodlně.</p>
<p>U řady modelů lze navíc přidat kus prádla i po spuštění cyklu, dokud program neprobíhá v aktivní fázi praní — u předního plnění to jde jen výjimečně a s omezeními. Kompromisem je menší výběr programů a to, že se na pračku s horním plněním nedá postavit sušička ani nic jiného, protože potřebuje volný přístup shora.</p>
<p>Všechny modely s horním plněním v katalogu mají zároveň úzkou konstrukci (40–41 cm) — je to daň za menší půdorys bubnu, ne záměrná vlastnost horního plnění samotného. Pokud vás zajímá hlavně úspora šířky, ne princip plnění, přehled širší nabídky najdete na stránce <a href="' . url('/uzke-pracky/') . '">Úzké pračky</a>.</p>
';

$faq_items = [
  [
    'q' => 'Je horní plnění lepší než přední?',
    'a' => 'Ani jedno není objektivně lepší — jde o jiný kompromis. Horní plnění vyhrává na ergonomii (nemusíte se ohýbat) a možnosti přidat prádlo za chodu. Přední plnění nabízí širší výběr modelů, programů a kapacit a dá se na něj postavit sušička.',
  ],
  [
    'q' => 'Jde sehnat pračka s horním plněním v běžné šířce 60 cm?',
    'a' => 'V aktuálním katalogu ne — všechny modely s horním plněním, které nabízíme, mají šířku 40–41 cm. Širší modely s horním plněním se na českém trhu vyskytují jen výjimečně.',
  ],
  [
    'q' => 'Lze na pračku s horním plněním postavit sušičku?',
    'a' => 'Ne. Pračka s horním plněním potřebuje volný přístup shora po celou dobu používání, takže na ni nelze nic stavět — ani sušičku, ani poličku. Pokud plánujete sušičku nad pračkou, zvolte model s předním plněním.',
  ],
];

$related = [
  ['url' => '/uzke-pracky/', 'nazev' => 'Úzké pračky (40–45 cm)'],
  ['url' => '/pracky-s-prednim-plnenim/', 'nazev' => 'Pračky s předním plněním'],
  ['url' => '/pracky-7-kg/', 'nazev' => 'Pračky 7 kg'],
];

require dirname(__DIR__) . '/inc/segment-template.php';
