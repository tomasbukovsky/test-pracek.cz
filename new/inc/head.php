<?php
/**
 * Společný <head> element.
 * Proměnné očekávané před voláním:
 *   $page_title       – <title> stránky (do 60 znaků)
 *   $page_description – meta description (do 155 znaků)
 *   $page_canonical   – kanonická URL (absolutní)
 *   $page_og_image    – URL OG obrázku (volitelné)
 *   $schema_json      – string(y) JSON-LD (volitelné)
 */
?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= htmlspecialchars($page_title ?? SITE_NAME, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description ?? '', ENT_QUOTES, 'UTF-8') ?>">
<?php if (NOINDEX): ?>
<meta name="robots" content="noindex, nofollow">
<?php endif; ?>
<link rel="canonical" href="<?= htmlspecialchars($page_canonical ?? SITE_URL . '/', ENT_QUOTES, 'UTF-8') ?>">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:title" content="<?= htmlspecialchars($page_title ?? SITE_NAME, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:description" content="<?= htmlspecialchars($page_description ?? '', ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:url" content="<?= htmlspecialchars($page_canonical ?? SITE_URL . '/', ENT_QUOTES, 'UTF-8') ?>">
<?php if (!empty($page_og_image)): ?>
<meta property="og:image" content="<?= htmlspecialchars($page_og_image, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($page_title ?? SITE_NAME, ENT_QUOTES, 'UTF-8') ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($page_description ?? '', ENT_QUOTES, 'UTF-8') ?>">

<!-- WebSite + Organization schema (vždy) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "@id": "<?= SITE_URL ?>/#website",
      "url": "<?= SITE_URL ?>/",
      "name": "<?= SITE_NAME ?>",
      "description": "Nezávislá agregace testů a recenzí praček"
    },
    {
      "@type": "Organization",
      "@id": "<?= SITE_URL ?>/#organization",
      "url": "<?= SITE_URL ?>/",
      "name": "<?= SITE_NAME ?>",
      "logo": "<?= SITE_URL ?>/assets/img/logo.png"
    }
  ]
}
</script>

<?php if (!empty($schema_json)) echo $schema_json; ?>

<!-- Critical CSS inline -->
<style>
*,*::before,*::after{box-sizing:border-box}
body{margin:0;font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;font-size:1rem;line-height:1.6;color:#1a1a1a;background:#fff}
a{color:#1a5276;text-decoration:underline}
a:hover{color:#0e3460}
img{max-width:100%;height:auto;display:block}
.container{width:100%;max-width:1100px;margin:0 auto;padding:0 1rem}
h1,h2,h3{line-height:1.2;margin-top:0}
</style>
<link rel="stylesheet" href="<?= url('/assets/style.css') ?>" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="<?= url('/assets/style.css') ?>"></noscript>
</head>
