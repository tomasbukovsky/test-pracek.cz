<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$page_title       = 'Metodika: jak vzniká obsah a hodnocení na test-pracek.cz';
$page_description = 'Jak web test-pracek.cz pracuje se zdroji, jak vzniká pořadí v žebříčcích, jak často se obsah aktualizuje a jak web vydělává na spolupráci s e-shopy.';
$page_canonical   = SITE_URL . '/metodika/';
$schema_json      = schema_article($page_title, $page_description, $page_canonical)
                  . schema_breadcrumb([
                      ['url' => '/', 'nazev' => 'Test praček 2026'],
                      ['url' => '/metodika/', 'nazev' => 'Metodika'],
                    ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page">Metodika</li>
    </ol>
  </nav>

  <h1>Metodika: jak vzniká obsah na tomto webu</h1>

  <p>
    Tato stránka popisuje na rovinu, jak <?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?> pracuje —
    protože transparentnost je u webu, který vydělává na spolupráci s e-shopy, podmínkou důvěryhodnosti, ne volitelná položka.
  </p>

  <h2>1. Netestujeme pračky ve vlastní laboratoři</h2>
  <p>
    Autor tohoto webu <strong>nikdy žádnou z uvedených praček osobně nepoužil ani netestoval</strong>.
    Web nemá vlastní testovací laboratoř, neprovádí měření hlučnosti, spotřeby ani životnosti.
    Pokud na stránce narazíte na formulaci, která by naznačovala opak (např. „v našem testu",
    „vyzkoušeli jsme"), jde o chybu a měli byste nám ji nahlásit přes <a href="<?= url('/kontakt/') ?>">kontakt</a>.
  </p>

  <h2>2. Ze kterých zdrojů čerpáme</h2>
  <ul>
    <li><strong>Uživatelská hodnocení e-shopů</strong> (Alza, Heureka) — agregujeme opakující se vzorce z desítek až stovek recenzí u konkrétního modelu. Nikdy nekopírujeme recenze doslova; krátký citát v uvozovkách používáme maximálně jeden na produkt, vždy s uvedením zdroje.</li>
    <li><strong>dTest</strong> a <strong>Stiftung Warentest</strong> — pokud pro model existuje nezávislý test, uvádíme pouze fakt, že test proběhl, kdy a jak produkt dopadl v celkovém hodnocení, s odkazem na originál. Nikdy nereprodukujeme dílčí známky ani placený obsah.</li>
    <li><strong>Registr EPREL</strong> (Evropský registr energetických štítků, <a href="https://eprel.ec.europa.eu" rel="noopener noreferrer" target="_blank">eprel.ec.europa.eu</a>) — odtud pocházejí všechny technické parametry: energetická třída, spotřeba energie a vody, hlučnost, třída odstřeďování.</li>
    <li><strong>Feed partnerského e-shopu</strong> — dostupnost a orientační cena, vždy s datem, kdy byla naposledy ověřena.</li>
  </ul>
  <p>
    Pokud pro produkt zdroje nestačí, píšeme kratší stránku. Chybějící informace nikdy nedoplňujeme
    odhadem ani nedomýšlíme.
  </p>

  <h2>3. Jak vzniká pořadí v žebříčcích (TOP 3, TOP 8)</h2>
  <p>
    Žebříčky na tomto webu <strong>nejsou postavené na vlastním testování ani na váženém skóre</strong>.
    Pořadí vychází z toho, jak často a jak pozitivně se model objevuje napříč agregovanými
    uživatelskými recenzemi, v kombinaci s tím, zda pro něj existuje nezávislý test (dTest,
    Stiftung Warentest). Segmentové přehledy dále řadíme podle orientační ceny, aby bylo srovnání
    přehledné bez ohledu na subjektivní pořadí.
  </p>
  <p>
    Na webu nikdy nenajdete strukturovaná data typu <code>Review</code>, <code>AggregateRating</code>
    ani <code>Offer</code> — jde o data, která by měla popisovat vlastní hodnocení nebo aktuální
    cenu, a to web nemá.
  </p>

  <h2>4. Jak často se obsah aktualizuje</h2>
  <p>
    Datum poslední aktualizace je uvedené v patičce každé stránky a v autorském boxu. Parametry
    z EPREL a ceny z feedu prodejce procházíme kontrolou průběžně; sekce s recenzemi aktualizujeme,
    když se v agregovaných hodnoceních objeví nový výrazný vzorec (nová opakující se výtka nebo
    pochvala).
  </p>

  <h2>5. Jak web vydělává a proč to neovlivňuje hodnocení</h2>
  <p>
    Nakoupit můžete v partnerských, prověřených e-shopech — pokud přes tyto odkazy nakoupíte,
    dostaneme provizi, aniž by vás to stálo cokoliv navíc. To je jediný způsob, jak web vydělává;
    nejsou tu placené recenze ani sponzorované pořadí. <strong>Výše ani existence provize
    neovlivňuje, jak je produkt v textu popsaný ani na jaké pozici se v žebříčku objeví</strong>
    — pořadí vychází výhradně z bodu 3 výše. Podrobnosti o spolupráci s e-shopy najdete na stránce
    <a href="<?= url('/affiliate-informace/') ?>">Informace o spolupráci</a>.
  </p>

  <?php require_once dirname(__DIR__) . '/inc/components/author-box.php'; ?>

</div>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
