<?php
/**
 * Autorský box
 */
?>
<aside class="author-box" aria-label="O autorovi">
  <div class="author-box__inner">
    <img
      src="/assets/img/autor.jpg"
      alt="Foto autora <?= htmlspecialchars(AUTOR_JMENO, ENT_QUOTES, 'UTF-8') ?>"
      width="80" height="80"
      loading="lazy"
      class="author-box__photo"
    >
    <div class="author-box__text">
      <p class="author-box__name"><strong><?= htmlspecialchars(AUTOR_JMENO, ENT_QUOTES, 'UTF-8') ?></strong></p>
      <p>Editor a analytik spotřební elektroniky. Prošel stovky recenzí a uživatelských hodnocení praček, aby z nich vyextrahoval opakující se vzorce. Žádný z hodnocených produktů osobně netestoval ani nepoužíval — přidaná hodnota spočívá v agregaci cizích zkušeností, ne ve vlastním testování.</p>
      <p><a href="/o-nas/">Více o autorovi a metodice →</a></p>
    </div>
  </div>
  <p class="author-box__updated">Aktualizováno: <?= htmlspecialchars(datum_cz(DATUM_AKTUALIZACE), ENT_QUOTES, 'UTF-8') ?></p>
</aside>
