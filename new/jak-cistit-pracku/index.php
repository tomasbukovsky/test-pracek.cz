<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$page_title       = 'Jak čistit pračku: údržba bubnu, těsnění a zásobníku';
$page_description = 'Jak a jak často čistit pračku, aby nezapáchala a vydržela déle. Čištění bubnu, gumového těsnění, zásobníku na prací prostředky a odvápnění.';
$page_canonical   = SITE_URL . '/jak-cistit-pracku/';
$page_og_image    = SITE_URL . '/assets/img/og-jak-cistit-pracku.jpg';
$schema_json      = schema_article($page_title, $page_description, $page_canonical)
                  . schema_breadcrumb([
                      ['url' => '/', 'nazev' => 'Test praček 2026'],
                      ['url' => '/jak-cistit-pracku/', 'nazev' => 'Jak čistit pračku'],
                    ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page">Jak čistit pračku</li>
    </ol>
  </nav>

  <h1>Jak čistit pračku, aby nezapáchala a vydržela déle</h1>

  <p>
    Nepříjemný zápach z pračky a plíseň na gumovém těsnění nejsou známkou vadného spotřebiče,
    ale důsledkem chybějící pravidelné údržby. Nízkoteplotní programy (30–40 °C), které dnes
    většina domácností používá kvůli úspoře energie, totiž nestačí na to, aby samy vyplavily
    zbytky pracích prostředků, vodní kámen a bakterie z bubnu a těsnění. Pravidelná údržba pár
    minut měsíčně tomu dokáže předejít.
  </p>

  <h2>Gumové těsnění dvířek</h2>
  <p>
    Jde o místo, kde vzniká plíseň nejčastěji — voda a vlhkost tu zůstávají zachycené v záhybech
    gumy i po skončení programu. Po každém praní se vyplatí těsnění otřít suchým hadříkem a nechat
    dvířka pootevřená, aby buben proschl. Jednou za měsíc těsnění důkladně vyčistěte roztokem
    vody a octa nebo běžným čisticím prostředkem na plísně, včetně vnitřní strany záhybu, kam
    se běžně nedostane pohled.
  </p>

  <h2>Zásobník na prací prostředky</h2>
  <p>
    V zásobníku se usazují zbytky prášku, aviváže a vodní kámen, což je další časté místo vzniku
    zápachu. Většina zásobníků jde vyjmout celý a propláchnout pod tekoucí vodou — u zaschlých
    usazenin pomůže krátké namočení v roztoku vody a octa. Doporučená frekvence je jednou za
    2–4 týdny podle intenzity používání.
  </p>

  <h2>Čištění bubnu a odvápnění</h2>
  <p>
    Většina moderních praček má vestavěný program pro čištění bubnu (často označený jako
    „samočištění" nebo „čištění bubnu"), který běží na vysokou teplotu bez prádla. Pokud pračka
    takový program nemá, stejný efekt zajistí prázdný cyklus na 90 °C s odvápňovacím prostředkem
    nebo obyčejnou kyselinou citronovou. Frekvence záleží na tvrdosti vody v lokalitě — v oblastech
    s tvrdší vodou je vhodné odvápnění provádět jednou za 1–2 měsíce, jinak stačí jednou za čtvrt roku.
  </p>

  <h2>Filtr odpadního čerpadla</h2>
  <p>
    Filtr (obvykle za nízkým krytem v dolní části pračky vpředu) zachytává drobné předměty
    a vlákna z prádla a postupně se zanáší. Ucpaný filtr je jedna z nejčastějších příčin, proč
    pračka nevypouští vodu nebo hlásí chybu odčerpání. Před otevřením krytu podložte hadr —
    v hadici zůstává voda, která při otevření vyteče. Kontrola a vyčištění jednou za 2–3 měsíce
    předchází poruchám a prodlužuje životnost čerpadla.
  </p>

  <h2>Praktický harmonogram údržby</h2>
  <ul>
    <li><strong>Po každém praní:</strong> otřít gumové těsnění, nechat pootevřená dvířka a zásuvku na prostředky.</li>
    <li><strong>Jednou za 2–4 týdny:</strong> vyčistit zásobník na prací prostředky.</li>
    <li><strong>Jednou za 1–3 měsíce:</strong> odvápňovací cyklus na 90 °C (frekvence podle tvrdosti vody).</li>
    <li><strong>Jednou za 2–3 měsíce:</strong> zkontrolovat a vyčistit filtr odpadního čerpadla.</li>
  </ul>

  <p>
    Dodržování těchto kroků prodlužuje životnost pračky a snižuje riziko poruch, na které si
    uživatelé v recenzích nejčastěji stěžují (zápach, ucpaný filtr, plíseň na těsnění). Při
    výběru nové pračky proto stojí za to sledovat i to, jak snadno je zásobník a filtr přístupný —
    tuto informaci najdete u jednotlivých modelů v sekcích „Co říkají uživatelé".
  </p>

  <?php require_once dirname(__DIR__) . '/inc/components/disclosure.php'; ?>

  <?php
  $faq_items = [
    [
      'q' => 'Jak často mám čistit pračku?',
      'a' => 'Gumové těsnění otírejte po každém praní, zásobník na prací prostředky čistěte jednou za 2–4 týdny a odvápňovací cyklus na 90 °C provádějte jednou za 1–3 měsíce podle tvrdosti vody ve vaší lokalitě.',
    ],
    [
      'q' => 'Proč pračka zapáchá, i když perete pravidelně?',
      'a' => 'Nejčastější příčinou je praní na nízkých teplotách (30–40 °C), které nestačí vyplavit zbytky pracích prostředků a bakterie z bubnu a těsnění. Pomůže pravidelný odvápňovací cyklus na vysokou teplotu bez prádla.',
    ],
    [
      'q' => 'Mohu použít místo odvápňovače kyselinu citronovou?',
      'a' => 'Ano, kyselina citronová je běžně používaná alternativa k prodávaným odvápňovacím prostředkům — stačí ji nasypat do bubnu nebo zásobníku a spustit prázdný program na 90 °C.',
    ],
  ];
  require dirname(__DIR__) . '/inc/components/faq.php';
  ?>

  <?php require_once dirname(__DIR__) . '/inc/components/author-box.php'; ?>

</div>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
