<?php
http_response_code(404);

require_once __DIR__ . '/inc/config.php';
require_once __DIR__ . '/inc/functions.php';

$page_title       = 'Stránka nenalezena (404) | ' . SITE_NAME;
$page_description = 'Požadovaná stránka neexistuje nebo byla přesunuta.';
$page_canonical   = SITE_URL . '/';

require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/header.php';
?>

<div class="container">
  <h1>Stránka nenalezena</h1>
  <p>
    Požadovaná stránka neexistuje, nebo byla přesunuta. Zkuste se vrátit na
    <a href="<?= url('/') ?>">úvodní stránku</a> a produkt najít přes přehled nebo vyhledávání
    podle značky.
  </p>
</div>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
