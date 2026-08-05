<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$page_title       = 'O nás: kdo stojí za test-pracek.cz';
$page_description = 'Kdo je autorem webu test-pracek.cz, proč vznikl a jak pracuje s uživatelskými recenzemi a nezávislými testy praček.';
$page_canonical   = SITE_URL . '/o-nas/';

$person_schema = [
    '@context'  => 'https://schema.org',
    '@type'     => 'Person',
    'name'      => AUTOR_JMENO,
    'url'       => SITE_URL . '/o-nas/',
    'jobTitle'  => 'Editor a analytik spotřební elektroniky',
    'worksFor'  => ['@id' => SITE_URL . '/#organization'],
];
$schema_json = '<script type="application/ld+json">' . json_encode($person_schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>'
             . schema_breadcrumb([
                 ['url' => '/', 'nazev' => 'Test praček 2026'],
                 ['url' => '/o-nas/', 'nazev' => 'O nás'],
               ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page">O nás</li>
    </ol>
  </nav>

  <h1>O nás</h1>

  <div class="author-box__inner" style="margin-bottom:1.5rem;">
    <img
      src="<?= url('/assets/img/autor.jpg') ?>"
      alt="Foto autora <?= htmlspecialchars(AUTOR_JMENO, ENT_QUOTES, 'UTF-8') ?>"
      width="160" height="160"
      loading="eager"
      class="author-box__photo"
    >
    <div class="author-box__text">
      <p><strong><?= htmlspecialchars(AUTOR_JMENO, ENT_QUOTES, 'UTF-8') ?></strong></p>
      <p>Provozuji <?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?> jako nezávislý editorský projekt zaměřený
      na srovnávání praček dostupných na českém trhu.</p>
    </div>
  </div>

  <h2>Čím se zabývám</h2>
  <p>
    Sleduji uživatelská hodnocení praček na Alze a Heurece a výsledky nezávislých testů (dTest,
    Stiftung Warentest) a z opakujících se vzorců sestavuji přehledy, které mají lidem ušetřit
    čas strávený čtením stovek jednotlivých recenzí. Technické parametry (energetická třída,
    spotřeba, hlučnost) přebírám výhradně z veřejného registru EPREL, nikdy je neodhaduji.
  </p>

  <h2>Proč tento web existuje</h2>
  <p>
    Rozhodování mezi desítkami modelů praček je zbytečně náročné, protože relevantní informace
    jsou roztroušené mezi e-shopy, technické štítky a testy, ke kterým se běžný spotřebitel
    nedostane snadno. Cílem tohoto webu je dát tyto zdroje dohromady na jedno místo, přehledně
    a bez předstírání, že jde o vlastní laboratorní testování — to tento web nedělá a nikdy dělat
    nebude. Podrobný popis práce se zdroji najdete v <a href="<?= url('/metodika/') ?>">metodice</a>.
  </p>

  <h2>Jak web funguje po finanční stránce</h2>
  <p>
    Nakoupit můžete v partnerských, prověřených e-shopech — z těchto odkazů plyne webu provize
    při nákupu. Nejde o žádné jiné formy zpoplatnění (placené recenze, sponzorované pořadí). Více
    na stránce <a href="<?= url('/affiliate-informace/') ?>">Informace o spolupráci</a>.
  </p>

  <h2>Fakturační údaje</h2>
  <ul>
    <li><strong>Jméno:</strong> <?= htmlspecialchars(AUTOR_JMENO, ENT_QUOTES, 'UTF-8') ?></li>
    <?php if (AUTOR_ICO !== ''): ?>
    <li><strong>IČO:</strong> <?= htmlspecialchars(AUTOR_ICO, ENT_QUOTES, 'UTF-8') ?></li>
    <?php endif; ?>
    <li><strong>Kontakt:</strong> <a href="mailto:<?= htmlspecialchars(AUTOR_EMAIL, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(AUTOR_EMAIL, ENT_QUOTES, 'UTF-8') ?></a></li>
  </ul>

</div>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
