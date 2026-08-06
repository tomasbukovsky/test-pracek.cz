<?php
/**
 * Karta produktu do výpisu/žebříčku.
 * Očekává proměnnou $p (pole produktu) a $pozice (int, pro ItemList).
 */
?>
<article class="product-card" itemscope itemtype="https://schema.org/Product">
  <a href="<?= url('/' . htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') . '/') ?>" class="product-card__img-link" tabindex="-1" aria-hidden="true">
    <img
      src="<?= htmlspecialchars($p['obrazek'], ENT_QUOTES, 'UTF-8') ?>"
      alt="<?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?>"
      width="300" height="300"
      loading="lazy"
      itemprop="image"
    >
  </a>
  <div class="product-card__body">
    <h3 class="product-card__title" itemprop="name">
      <a href="<?= url('/' . htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') . '/') ?>"><?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?></a>
    </h3>
    <p class="product-card__verdikt"><?= htmlspecialchars($p['verdikt'], ENT_QUOTES, 'UTF-8') ?></p>
    <dl class="product-card__params">
      <dt>Kapacita</dt><dd><?= (int)$p['kapacita'] ?> kg</dd>
      <dt>Otáčky</dt><dd><?= (int)$p['otacky'] ?> ot./min</dd>
      <dt>Energetická třída</dt><dd><?= htmlspecialchars($p['energ_trida'], ENT_QUOTES, 'UTF-8') ?></dd>
      <dt>Hlučnost (praní)</dt><dd><?= (int)$p['hlucnost_prani'] ?> dB</dd>
    </dl>
    <p class="product-card__cena">
      <?= formatuj_cenu((int)$p['cena_orient'], $p['cena_datum']) ?>
    </p>
    <div class="product-card__cta">
      <a href="<?= url('/' . htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') . '/') ?>" class="btn btn--secondary">Celá recenze</a>
      <a href="<?= htmlspecialchars($p['alza_url'], ENT_QUOTES, 'UTF-8') ?>" rel="sponsored nofollow noopener" target="_blank" class="btn btn--primary">Koupit</a>
    </div>
  </div>
</article>
