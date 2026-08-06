<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$page_title       = 'Informace o spolupráci s e-shopy | ' . SITE_NAME;
$page_description = 'Jak funguje spolupráce webu ' . SITE_NAME . ' s partnerskými e-shopy, jak odkazy poznáte a proč neovlivňují hodnocení ani pořadí produktů.';
$page_canonical   = SITE_URL . '/affiliate-informace/';
$schema_json      = schema_breadcrumb([
                      ['url' => '/', 'nazev' => 'Test praček 2026'],
                      ['url' => '/affiliate-informace/', 'nazev' => 'Informace o spolupráci'],
                    ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page">Informace o spolupráci</li>
    </ol>
  </nav>

  <h1>Informace o spolupráci s e-shopy</h1>

  <p>
    <?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?> je financován výhradně prostřednictvím
    partnerských programů prověřených e-shopů. Odkazy k nákupu na tomto webu obsahují sledovací
    parametr partnerského programu. Pokud přes takový odkaz uskutečníte nákup, provozovatel
    webu obdrží provizi. Pro vás jako kupujícího z toho neplyne žádný příplatek — cenu
    platíte stejnou, jako byste do e-shopu přišli přímo.
  </p>

  <h2>Jak odkazy k nákupu poznáte</h2>
  <p>
    Každý odkaz vedoucí k nákupu je označený jako sponzorovaný pomocí atributu
    <code>rel="sponsored nofollow noopener"</code> a otevírá se v novém okně
    (<code>target="_blank"</code>). U každého takového odkazu je zároveň viditelné upozornění
    na partnerskou spolupráci.
  </p>

  <h2>Ovlivňuje provize hodnocení produktů?</h2>
  <p>
    Ne. To, který model se objeví na jaké pozici v žebříčku a jak je v textu popsaný, vychází výhradně
    z postupu popsaného v <a href="<?= url('/metodika/') ?>">metodice</a> — z ověřených parametrů
    registru EPREL, orientační ceny a nezávislých testů. Výše provize u konkrétního produktu
    tento proces nijak neovlivňuje a neexistuje žádná forma placeného zvýhodnění pozice v žebříčku.
  </p>

  <h2>Kdo je provozovatelem</h2>
  <p>
    Provozovatelem webu a příjemcem provizí z partnerských programů je <?= htmlspecialchars(PROVOZOVATEL_JMENO, ENT_QUOTES, 'UTF-8') ?>.
    Kontaktní údaje najdete na stránce <a href="<?= url('/kontakt/') ?>">Kontakt</a>.
  </p>

</div>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
