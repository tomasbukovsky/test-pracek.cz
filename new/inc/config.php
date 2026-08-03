<?php
define('SITE_NAME', 'test-pracek.cz');
define('SITE_URL', 'https://www.test-pracek.cz');

// Cesta, na které web aktuálně běží (pro interní odkazy a assety).
// Testovací provoz na www.test-pracek.cz/new/ → '/new'
// Po ostrém nasazení do kořene domény → '' (prázdný řetězec)
define('BASE_PATH', '/new');

// Dokud web běží na testovací cestě (BASE_PATH), nechceme ho v indexu vyhledávačů.
define('NOINDEX', BASE_PATH !== '');

define('GA4_ID', 'G-XXXXXXXXXX'); // doplnit reálné GA4 ID
define('DATUM_AKTUALIZACE', '2026-08-02');
define('AUTOR_JMENO', 'Tomáš Bukovský');
define('AUTOR_ICO', ''); // doplnit IČO
