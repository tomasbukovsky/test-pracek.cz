<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$page_title       = 'Affiliate informace | ' . SITE_NAME;
$page_description = 'Jak funguje affiliate spolupráce webu ' . SITE_NAME . ' s Alza.cz a proč neovlivňuje hodnocení produktů.';
$page_canonical   = SITE_URL . '/affiliate-informace/';
$schema_json      = schema_breadcrumb([
                      ['url' => '/', 'nazev' => 'Test praček 2026'],
                      ['url' => '/affiliate-informace/', 'nazev' => 'Affiliate informace'],
                    ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page">Affiliate informace</li>
    </ol>
  </nav>

  <h1>Affiliate informace</h1>

  <p>
    <?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?> je financován výhradně prostřednictvím
    affiliate (partnerského) programu Alza.cz. Odkazy vedoucí na Alza.cz na tomto webu obsahují
    sledovací parametr partnerského programu. Pokud přes takový odkaz uskutečníte nákup, provozovatel
    webu obdrží od Alzy provizi. Pro vás jako kupujícího z toho neplyne žádný příplatek — cenu
    platíte stejnou, jako byste na Alzu přišli přímo.
  </p>

  <h2>Jak affiliate odkazy poznáte</h2>
  <p>
    Každý odkaz vedoucí k nákupu je označený jako sponzorovaný pomocí atributu
    <code>rel="sponsored nofollow noopener"</code> a otevírá se v novém okně
    (<code>target="_blank"</code>). U každého takového odkazu je zároveň viditelné upozornění
    na affiliate spolupráci.
  </p>

  <h2>Ovlivňuje provize hodnocení produktů?</h2>
  <p>
    Ne. To, který model se objeví na jaké pozici v žebříčku a jak je v textu popsaný, vychází výhradně
    z postupu popsaného v <a href="<?= url('/metodika/') ?>">metodice</a> — z agregace uživatelských
    recenzí, nezávislých testů a parametrů z registru EPREL. Výše provize u konkrétního produktu
    tento proces nijak neovlivňuje a neexistuje žádná forma placeného zvýhodnění pozice v žebříčku.
  </p>

  <h2>Kdo je provozovatelem</h2>
  <p>
    Provozovatelem webu a příjemcem affiliate provizí je <?= htmlspecialchars(AUTOR_JMENO, ENT_QUOTES, 'UTF-8') ?>.
    Kontaktní údaje najdete na stránce <a href="<?= url('/kontakt/') ?>">Kontakt</a>.
  </p>

</div>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
