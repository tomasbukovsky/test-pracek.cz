<?php
/**
 * Srovnávací tabulka produktů.
 * Očekává $produkty_pole = array produktů.
 */
?>
<div class="table-wrap" role="region" aria-label="Srovnávací tabulka praček" tabindex="0">
<table class="product-table">
  <thead>
    <tr>
      <th scope="col" class="col-sticky">Model</th>
      <th scope="col">Kapacita</th>
      <th scope="col">Otáčky</th>
      <th scope="col">En. třída</th>
      <th scope="col">Hlučnost (praní)</th>
      <th scope="col">Orient. cena</th>
      <th scope="col">Koupit</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($produkty_pole as $p): ?>
    <tr>
      <td class="col-sticky">
        <a href="<?= url('/' . htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') . '/') ?>"><?= htmlspecialchars($p['nazev'], ENT_QUOTES, 'UTF-8') ?></a>
      </td>
      <td><?= (int)$p['kapacita'] ?> kg</td>
      <td><?= (int)$p['otacky'] ?> ot./min</td>
      <td><?= htmlspecialchars($p['energ_trida'], ENT_QUOTES, 'UTF-8') ?></td>
      <td><?= (int)$p['hlucnost_prani'] ?> dB</td>
      <td>
        <?php if ($p['cena_orient']): ?>
          <?= number_format((int)$p['cena_orient'], 0, ',', ' ') ?> Kč
          <small class="cena-datum">(k <?= htmlspecialchars(datum_cz_cisly($p['cena_datum']), ENT_QUOTES, 'UTF-8') ?>)</small>
        <?php else: ?>
          —
        <?php endif; ?>
      </td>
      <td>
        <a href="<?= htmlspecialchars($p['alza_url'], ENT_QUOTES, 'UTF-8') ?>" rel="sponsored nofollow noopener" target="_blank" class="btn btn--primary btn--sm">Koupit</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
<p class="table-note"><small>Ceny jsou orientační k datu uvedenému v tabulce. Aktuální ceny zjistíte u prodejce. Obsahuje <a href="<?= url('/affiliate-informace/') ?>">odkazy na partnerské e-shopy</a>.</small></p>
