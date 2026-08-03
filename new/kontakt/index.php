<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$page_title       = 'Kontakt | ' . SITE_NAME;
$page_description = 'Kontaktní údaje na provozovatele webu ' . SITE_NAME . '.';
$page_canonical   = SITE_URL . '/kontakt/';
$schema_json      = schema_breadcrumb([
                      ['url' => '/', 'nazev' => 'Test praček 2026'],
                      ['url' => '/kontakt/', 'nazev' => 'Kontakt'],
                    ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page">Kontakt</li>
    </ol>
  </nav>

  <h1>Kontakt</h1>

  <p>
    Našli jste na webu chybu, nesrovnalost v parametrech, nebo formulaci, která by mohla
    naznačovat vlastní testování produktu (což tento web nedělá)? Napište.
  </p>

  <ul>
    <li><strong>Provozovatel:</strong> <?= htmlspecialchars(AUTOR_JMENO, ENT_QUOTES, 'UTF-8') ?></li>
    <li><strong>E-mail:</strong> <a href="mailto:<?= htmlspecialchars(AUTOR_EMAIL, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(AUTOR_EMAIL, ENT_QUOTES, 'UTF-8') ?></a></li>
  </ul>

  <p>
    Více o tom, kdo web provozuje a proč, najdete na stránce <a href="<?= url('/o-nas/') ?>">O nás</a>.
    Jak web pracuje se zdroji a hodnocením, popisuje <a href="<?= url('/metodika/') ?>">metodika</a>.
  </p>

</div>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
