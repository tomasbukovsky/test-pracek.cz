<?php
/**
 * Hlavička a navigace
 */
?>
<body>
<a class="skip-link" href="#main-content">Přejít na obsah</a>
<header class="site-header">
  <div class="container header-inner">
    <a href="<?= url('/') ?>" class="site-logo" aria-label="<?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?> – úvod">
      <svg class="site-logo__mark" width="32" height="32" viewBox="0 0 64 64" aria-hidden="true">
        <rect width="64" height="64" rx="16" fill="#0f5257"/>
        <circle cx="14" cy="12" r="3" fill="#fbfaf7" opacity=".9"/>
        <circle cx="24" cy="12" r="3" fill="#fbfaf7" opacity=".55"/>
        <circle cx="32" cy="36" r="18" fill="none" stroke="#fbfaf7" stroke-width="4.5"/>
        <circle cx="32" cy="36" r="9" fill="none" stroke="#d9643a" stroke-width="4.5" stroke-dasharray="34 14" stroke-linecap="round" transform="rotate(-45 32 36)"/>
      </svg>
      test-pracek.cz
    </a>
    <button class="nav-toggle" aria-expanded="false" aria-controls="main-nav" aria-label="Otevřít navigaci">
      <span></span><span></span><span></span>
    </button>
    <nav id="main-nav" aria-label="Hlavní navigace">
      <ul>
        <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
        <li class="nav-dropdown">
          <a href="#" aria-haspopup="true">Podle značky</a>
          <ul>
            <li><a href="<?= url('/pracky-lg/') ?>">LG</a></li>
            <li><a href="<?= url('/pracky-bosch/') ?>">Bosch</a></li>
            <li><a href="<?= url('/pracky-samsung/') ?>">Samsung</a></li>
            <li><a href="<?= url('/pracky-whirlpool/') ?>">Whirlpool</a></li>
            <li><a href="<?= url('/pracky-aeg/') ?>">AEG</a></li>
            <li><a href="<?= url('/pracky-beko/') ?>">Beko</a></li>
            <!-- Electrolux: segment nevzniká (méně než 5 produktů) -->
          </ul>
        </li>
        <li class="nav-dropdown">
          <a href="#" aria-haspopup="true">Podle parametrů</a>
          <ul>
            <li><a href="<?= url('/pracky-7-kg/') ?>">Pračky 7 kg</a></li>
            <li><a href="<?= url('/pracky-8-kg/') ?>">Pračky 8 kg</a></li>
            <li><a href="<?= url('/pracky-9-kg/') ?>">Pračky 9 kg</a></li>
            <li><a href="<?= url('/pracky-10-kg/') ?>">Pračky 10 kg</a></li>
            <li><a href="<?= url('/uzke-pracky/') ?>">Úzké pračky</a></li>
            <li><a href="<?= url('/pracky-s-prednim-plnenim/') ?>">S předním plněním</a></li>
            <!-- Horní plnění: segment nevzniká (méně než 5 produktů) -->
            <li><a href="<?= url('/vestavne-pracky/') ?>">Vestavné pračky</a></li>
            <li><a href="<?= url('/pracky-se-susickou/') ?>">Se sušičkou</a></li>
          </ul>
        </li>
        <li class="nav-dropdown">
          <a href="#" aria-haspopup="true">Rádce</a>
          <ul>
            <li><a href="<?= url('/jak-vybrat-pracku/') ?>">Jak vybrat pračku</a></li>
            <li><a href="<?= url('/energeticke-tridy-pracek/') ?>">Energetické třídy</a></li>
            <li><a href="<?= url('/jaka-kapacita-pracky/') ?>">Jaká kapacita</a></li>
            <li><a href="<?= url('/jak-cistit-pracku/') ?>">Jak čistit pračku</a></li>
          </ul>
        </li>
        <li><a href="<?= url('/metodika/') ?>">Metodika</a></li>
      </ul>
    </nav>
  </div>
</header>
<main id="main-content">
