<?php
/**
 * Patička + GA4 (defer, až po load)
 */
?>
</main>
<footer class="site-footer">
  <div class="container">
    <nav aria-label="Navigace patičky">
      <ul class="footer-links">
        <li><a href="<?= url('/o-nas/') ?>">O nás</a></li>
        <li><a href="<?= url('/metodika/') ?>">Metodika hodnocení</a></li>
        <li><a href="<?= url('/affiliate-informace/') ?>">Affiliate informace</a></li>
        <li><a href="<?= url('/kontakt/') ?>">Kontakt</a></li>
        <li><a href="<?= url('/ochrana-osobnich-udaju/') ?>">Ochrana osobních údajů</a></li>
      </ul>
    </nav>
    <p class="footer-copy">
      &copy; <?= date('Y') ?> <?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?>.
      Web obsahuje affiliate odkazy na Alzu — nákupem přes ně podpoříte provoz webu bez příplatku.
      Hodnocení produktů tím není ovlivněno.
      <a href="<?= url('/affiliate-informace/') ?>">Více info</a>.
    </p>
    <p class="footer-update">Poslední aktualizace: <?= htmlspecialchars(datum_cz(DATUM_AKTUALIZACE), ENT_QUOTES, 'UTF-8') ?></p>
  </div>
</footer>

<!-- Mobilní navigace toggle -->
<script>
(function() {
  var btn = document.querySelector('.nav-toggle');
  var nav = document.getElementById('main-nav');
  if (!btn || !nav) return;
  btn.addEventListener('click', function() {
    var expanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', !expanded);
    nav.classList.toggle('is-open', !expanded);
  });
})();
</script>

<!-- GA4 – načíst defer až po interakci nebo load, aby neblokovalo LCP -->
<script>
window.addEventListener('load', function() {
  var s = document.createElement('script');
  s.async = true;
  s.src = 'https://www.googletagmanager.com/gtag/js?id=<?= GA4_ID ?>';
  document.head.appendChild(s);
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?= GA4_ID ?>');
});
</script>
</body>
</html>
