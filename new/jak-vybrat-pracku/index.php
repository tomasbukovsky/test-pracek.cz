<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$page_title       = 'Jak vybrat pračku 2026: kompletní průvodce výběrem';
$page_description = 'Kapacita, energetická třída, otáčky, typ plnění i motor — praktický průvodce výběrem pračky s odkazy na srovnání konkrétních modelů.';
$page_canonical   = SITE_URL . '/jak-vybrat-pracku/';
$page_og_image    = SITE_URL . '/assets/img/logo.png';
$schema_json      = schema_article($page_title, $page_description, $page_canonical)
                  . schema_breadcrumb([
                      ['url' => '/', 'nazev' => 'Test praček 2026'],
                      ['url' => '/jak-vybrat-pracku/', 'nazev' => 'Jak vybrat pračku'],
                    ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page">Jak vybrat pračku</li>
    </ol>
  </nav>

  <h1>Jak vybrat pračku: kompletní průvodce výběrem</h1>

  <p>
    Výběr pračky se často zužuje na cenu a značku, ale parametry, které nejvíc ovlivní vaši každodenní
    spokojenost, jsou jinde: kapacita bubnu, energetická třída, otáčky při odstřeďování a typ plnění.
    Tento průvodce prochází jednotlivá kritéria v pořadí, v jakém dává smysl je řešit, a u každého
    odkazuje na konkrétní srovnání modelů, které danému parametru vyhovují. Vychází z ověřených
    parametrů v registru EPREL a z technických specifikací výrobců — ne z vlastního testování
    (více v <a href="<?= url('/metodika/') ?>">metodice</a>).
  </p>

  <h2 id="kapacita">1. Kapacita: kolik kg prádla perete najednou</h2>
  <p>
    Kapacita bubnu je parametr, který nejvíc ovlivní, jak často budete prát a jak efektivně využijete
    energii i vodu. Malá pračka na velkou domácnost znamená časté praní menších dávek, což zvyšuje
    celkovou spotřebu. Naopak zbytečně velký buben pro jednu nebo dvě osoby znamená, že pračka
    poloprázdná pere méně efektivně.
  </p>
  <p>
    Orientační vodítko: domácnosti do 3 osob obvykle vystačí s kapacitou 7 kg, čtyřčlenné rodině
    sedí spíš 8–9 kg, vícečlenné domácnosti nebo lidem, kteří perou velké kusy (peřiny, závěsy),
    se vyplatí 10 kg a víc. Podrobný rozpis podle počtu osob v domácnosti najdete v samostatném
    rádci <a href="<?= url('/jaka-kapacita-pracky/') ?>">Jaká kapacita pračky je pro vás vhodná</a>.
  </p>
  <p>Srovnání konkrétních modelů podle kapacity:</p>
  <ul class="segmenty-grid">
    <li><a href="<?= url('/pracky-7-kg/') ?>">Pračky 7 kg</a></li>
    <li><a href="<?= url('/pracky-8-kg/') ?>">Pračky 8 kg</a></li>
    <li><a href="<?= url('/pracky-9-kg/') ?>">Pračky 9 kg</a></li>
    <li><a href="<?= url('/pracky-10-kg/') ?>">Pračky 10 kg</a></li>
  </ul>

  <h2 id="energeticka-trida">2. Energetická třída a spotřeba</h2>
  <p>
    Od roku 2021 platí přepracovaná stupnice energetických tříd A–G, na které je jen málo praček
    hodnoceno nejvyšším písmenem A — je to záměrně nastaveno tak, aby prostor pro zlepšení zůstal
    i do budoucna. Rozdíl mezi třídou B a D se u pračky používané několikrát týdně během let promítne
    do spotřeby elektřiny i vody. Vedle třídy je proto dobré sledovat i konkrétní deklarovanou spotřebu
    v kWh, protože dva modely stejné třídy se v ní mohou lišit.
  </p>
  <p>
    Všechny parametry v tomto tématu čerpáme výhradně z veřejného registru EPREL, kam výrobci
    povinně nahrávají energetické štítky. Jak štítek číst a co jednotlivé řádky znamenají,
    rozebíráme v rádci <a href="<?= url('/energeticke-tridy-pracek/') ?>">Energetické třídy praček vysvětlené</a>.
  </p>

  <h2 id="otacky">3. Otáčky při odstřeďování</h2>
  <p>
    Maximální otáčky odstřeďování (typicky 1000–1600 ot./min) určují, kolik vlhkosti zůstane
    v prádle po vyprání. Vyšší otáčky znamenají sušší prádlo a kratší dobu sušení — ať už na
    sušáku, nebo v sušičce. Cenou za to bývá o něco vyšší hlučnost při odstřeďování, kterou
    najdete u každého modelu v tabulce parametrů i v deklaraci EPREL. Pračky s otáčkami pod
    1200 ot./min se hodí tam, kde je tichý provoz důležitější než rychlost sušení (například
    sdílené zdi s ložnicí).
  </p>

  <h2 id="typ-plneni">4. Typ plnění: přední, nebo horní</h2>
  <p>
    Naprostá většina praček prodávaných v ČR má přední plnění — jsou širší v nabídce programů
    a lépe se kombinují s vestavbou nebo sušičkou nad pračkou. Pračky s horním plněním se nemusí
    ohýbat při vkládání prádla a u řady modelů lze přidat kus prádla i za chodu. Nevýhodou bývá
    menší výběr programů a to, že se na ně nedá nic postavit. Modely s horním plněním jsou navíc
    v katalogu vždy úzké (40–41 cm) — podrobnosti v segmentech
    <a href="<?= url('/pracky-s-hornim-plnenim/') ?>">Pračky s horním plněním</a> a
    <a href="<?= url('/uzke-pracky/') ?>">Úzké pračky</a>.
  </p>

  <h2 id="rozmery">5. Rozměry: úzké a vestavné pračky</h2>
  <p>
    Standardní šíře pračky je 60 cm. Pokud se pračka vejde do niky jen s omezeným prostorem,
    existují i úzké modely se šíří 40–45 cm — obvykle za příplatek a s mírně nižší kapacitou.
    Pro kuchyňské linky a vestavěné skříně jsou určené vestavné pračky s upravenou výškou
    a předním panelem pro montáž dvířek. Přehled obou kategorií:
  </p>
  <ul class="segmenty-grid">
    <li><a href="<?= url('/uzke-pracky/') ?>">Úzké pračky (40–45 cm)</a></li>
    <li><a href="<?= url('/vestavne-pracky/') ?>">Vestavné pračky</a></li>
  </ul>

  <h2 id="motor">6. Motor: invertorový, nebo standardní</h2>
  <p>
    Invertorový motor (u jednotlivých výrobců pod různými názvy — EcoSilence Drive u Bosch,
    přímý pohon u LG, EnergySpin u Beko) nemá uhlíkové kartáče, díky čemuž je konstrukčně tišší
    a méně mechanicky namáhaný než klasický motor. Výrobci na něj obvykle dávají prodlouženou
    záruku (běžně 10 let). Standardní (neinvertorové) motory najdete hlavně u nejlevnějších modelů.
  </p>

  <h2 id="wifi">7. Chytré funkce a Wi-Fi</h2>
  <p>
    Wi-Fi připojení umožňuje spustit program na dálku, sledovat zbývající čas nebo dostat
    upozornění na konci cyklu přes mobilní aplikaci výrobce (ThinQ u LG, SmartThings u Samsung).
    Pro řadu domácností jde o příjemný bonus, ne nutnost — vyžaduje registraci v aplikaci
    a připojení k domácí síti. Zvažte, jestli tuto funkci reálně využijete, protože modely
    s Wi-Fi bývají dražší.
  </p>

  <h2 id="susicka">8. Pračka se sušičkou, nebo samostatná sušička</h2>
  <p>
    Kombinovaná pračka se sušičkou (2v1) šetří místo tam, kde není prostor na dvě samostatná
    zařízení, ale sušicí cyklus bývá energeticky nákladnější (typicky třída D–E) a nelze prát
    a sušit současně dvě různé dávky prádla. Pokud máte prostor, samostatná sušička je z hlediska
    provozních nákladů obvykle výhodnější. Modely 2v1 z katalogu najdete zde:
    <a href="<?= url('/pracky-se-susickou/') ?>">Pračky se sušičkou</a>.
  </p>

  <h2 id="znacky">9. Podle značky</h2>
  <p>
    Pokud už máte s některou značkou zkušenost nebo preferujete dostupnost servisu ve svém okolí,
    má smysl začít výběr přímo v přehledu dané značky:
  </p>
  <ul class="segmenty-grid">
    <li><a href="<?= url('/pracky-lg/') ?>">LG</a></li>
    <li><a href="<?= url('/pracky-bosch/') ?>">Bosch</a></li>
    <li><a href="<?= url('/pracky-samsung/') ?>">Samsung</a></li>
    <li><a href="<?= url('/pracky-whirlpool/') ?>">Whirlpool</a></li>
    <li><a href="<?= url('/pracky-aeg/') ?>">AEG</a></li>
    <li><a href="<?= url('/pracky-beko/') ?>">Beko</a></li>
  </ul>

  <h2 id="recenze">10. Jak číst recenze zákazníků, aby vám k něčemu byly</h2>
  <p>
    Jednotlivá hodnocení na e-shopech mají malou vypovídací hodnotu — spokojený i nespokojený
    zákazník má tendenci psát emotivněji, než odpovídá realitě. Užitečnější je sledovat vzorce
    napříč desítkami až stovkami recenzí: co se opakuje, ne co napsal jeden člověk. Reálná
    hodnocení od zákazníků k jednotlivým modelům na tomto webu zatím sbíráme — pokud některý
    z produktů vlastníte, napište nám zkušenost na kontaktní e-mail u daného modelu. Jak s recenzemi
    chceme pracovat, popisujeme v <a href="<?= url('/metodika/') ?>">metodice</a>.
  </p>

  <h2 id="shrnuti">Shrnutí: na co se ptát před nákupem</h2>
  <ul>
    <li>Kolik kg prádla reálně peru najednou (a jak často)?</li>
    <li>Jakou energetickou třídu a spotřebu má konkrétní model podle EPREL?</li>
    <li>Stačí mi nižší otáčky, nebo chci co nejsušší prádlo po vyprání?</li>
    <li>Vejde se mi standardní šíře 60 cm, nebo potřebuji úzkou/vestavnou variantu?</li>
    <li>Má invertorový motor a je to pro mě důležité kvůli hlučnosti a záruce?</li>
    <li>Využiju reálně Wi-Fi, nebo je to jen příplatek navíc?</li>
  </ul>

  <p>
    Po nákupu se vyplatí věnovat pračce i pravidelnou údržbu — jak na to, popisuje rádce
    <a href="<?= url('/jak-cistit-pracku/') ?>">Jak čistit pračku</a>.
  </p>

  <?php require_once dirname(__DIR__) . '/inc/components/disclosure.php'; ?>

  <?php
  $faq_items = [
    [
      'q' => 'Jaká kapacita pračky je optimální pro čtyřčlennou rodinu?',
      'a' => 'Typicky 8–9 kg. Podrobný rozpis podle počtu osob v domácnosti najdete v rádci <a href="' . url('/jaka-kapacita-pracky/') . '">Jaká kapacita pračky je pro vás vhodná</a>.',
    ],
    [
      'q' => 'Je energetická třída A nebo B vždy lepší volba?',
      'a' => 'Obecně nižší třída (blíž k A) znamená nižší spotřebu, ale rozdíl se vyplatí spíš při častém praní. Pokud perete jednou týdně, rozdíl v provozních nákladech mezi třídou B a C bude za rok minimální — víc pak záleží na kapacitě a otáčkách.',
    ],
    [
      'q' => 'Vyplatí se invertorový motor?',
      'a' => 'Pokud vám záleží na hlučnosti a delší záruce na motor (výrobci běžně nabízí 10 let), ano. Invertorový motor nemá uhlíkové kartáče, což ho konstrukčně předurčuje k tiššímu provozu než klasický motor.',
    ],
    [
      'q' => 'Má smysl kupovat pračku se sušičkou 2v1?',
      'a' => 'Pokud nemáte prostor na dvě samostatná zařízení, ano. Počítejte ale s vyšší spotřebou energie při sušení (obvykle třída D–E) a s tím, že nelze prát a sušit současně dvě různé dávky.',
    ],
    [
      'q' => 'Odkud pocházejí parametry uvedené u jednotlivých praček na tomto webu?',
      'a' => 'Z veřejného registru EPREL (energetické třídy, spotřeba, hlučnost) a z feedu prodejce (cena, dostupnost). Nic neodhadujeme — pokud parametr chybí, sekci raději vynecháme. Více v <a href="' . url('/metodika/') . '">metodice</a>.',
    ],
  ];
  require dirname(__DIR__) . '/inc/components/faq.php';
  ?>

  <?php require_once dirname(__DIR__) . '/inc/components/author-box.php'; ?>

</div>

<style>
.segmenty-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: .5rem; list-style: none; padding: 0; margin: 1rem 0; }
.segmenty-grid a { display: block; padding: .6rem 1rem; background: var(--color-bg-alt); border-radius: var(--radius); text-decoration: none; font-weight: 500; }
.segmenty-grid a:hover { background: #dde4ea; }
</style>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
