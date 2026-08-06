<?php
define('SITE_NAME', 'test-pracek.cz');
define('SITE_URL', 'https://www.test-pracek.cz');

// Cesta, na které web aktuálně běží (pro interní odkazy a assety).
// Ostrý provoz v kořeni domény → '' (prázdný řetězec)
define('BASE_PATH', '');

// Dokud web běžel na testovací cestě (BASE_PATH), byl v indexu vyhledávačů zakázaný.
// Po ostrém nasazení (BASE_PATH === '') je NOINDEX automaticky vypnutý.
define('NOINDEX', BASE_PATH !== '');

define('GA4_ID', 'G-7KH3EPBX3C');
define('DATUM_AKTUALIZACE', '2026-08-02');

// Editor - píše a odpovídá za obsah, recenze a doporučení (author box, Person schema).
define('AUTOR_JMENO', 'Radim Horáček');

// Provozovatel - právní/fakturační identita webu (Kontakt, Affiliate informace, fakturační údaje).
// Záměrně jiná osoba než editor.
define('PROVOZOVATEL_JMENO', 'Tomáš Bukovský');
define('PROVOZOVATEL_ICO', '70412651');

define('AUTOR_EMAIL', 'info@test-pracek.cz');
