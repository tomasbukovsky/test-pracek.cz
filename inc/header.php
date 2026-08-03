<?php
/**
 * Hlavička a navigace
 */
?>
<body>
<a class="skip-link" href="#main-content">Přejít na obsah</a>
<header class="site-header">
  <div class="container header-inner">
    <a href="/" class="site-logo" aria-label="<?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?> – úvod">
      test-pracek.cz
    </a>
    <button class="nav-toggle" aria-expanded="false" aria-controls="main-nav" aria-label="Otevřít navigaci">
      <span></span><span></span><span></span>
    </button>
    <nav id="main-nav" aria-label="Hlavní navigace">
      <ul>
        <li><a href="/">Test praček 2026</a></li>
        <li class="nav-dropdown">
          <a href="#" aria-haspopup="true">Podle značky</a>
          <ul>
            <li><a href="/pracky-lg/">LG</a></li>
            <li><a href="/pracky-bosch/">Bosch</a></li>
            <li><a href="/pracky-samsung/">Samsung</a></li>
            <li><a href="/pracky-whirlpool/">Whirlpool</a></li>
            <li><a href="/pracky-aeg/">AEG</a></li>
            <li><a href="/pracky-beko/">Beko</a></li>
            <!-- Electrolux: segment nevzniká (méně než 5 produktů) -->
          </ul>
        </li>
        <li class="nav-dropdown">
          <a href="#" aria-haspopup="true">Podle parametrů</a>
          <ul>
            <li><a href="/pracky-7-kg/">Pračky 7 kg</a></li>
            <li><a href="/pracky-8-kg/">Pračky 8 kg</a></li>
            <li><a href="/pracky-9-kg/">Pračky 9 kg</a></li>
            <li><a href="/pracky-10-kg/">Pračky 10 kg</a></li>
            <li><a href="/uzke-pracky/">Úzké pračky</a></li>
            <li><a href="/pracky-s-prednim-plnenim/">S předním plněním</a></li>
            <!-- Horní plnění: segment nevzniká (méně než 5 produktů) -->
            <li><a href="/vestavne-pracky/">Vestavné pračky</a></li>
            <li><a href="/pracky-se-susickou/">Se sušičkou</a></li>
          </ul>
        </li>
        <li><a href="/jak-vybrat-pracku/">Jak vybrat</a></li>
        <li><a href="/metodika/">Metodika</a></li>
      </ul>
    </nav>
  </div>
</header>
<main id="main-content">
