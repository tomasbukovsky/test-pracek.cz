<?php
require_once dirname(__DIR__) . '/inc/config.php';
require_once dirname(__DIR__) . '/inc/functions.php';

$page_title       = 'Ochrana osobních údajů a cookies | ' . SITE_NAME;
$page_description = 'Jaké osobní údaje web ' . SITE_NAME . ' zpracovává, jak používá cookies a Google Analytics 4.';
$page_canonical   = SITE_URL . '/ochrana-osobnich-udaju/';
$schema_json      = schema_breadcrumb([
                      ['url' => '/', 'nazev' => 'Test praček 2026'],
                      ['url' => '/ochrana-osobnich-udaju/', 'nazev' => 'Ochrana osobních údajů'],
                    ]);

require_once dirname(__DIR__) . '/inc/head.php';
require_once dirname(__DIR__) . '/inc/header.php';
?>

<div class="container">

  <nav class="breadcrumb" aria-label="Drobečková navigace">
    <ol>
      <li><a href="<?= url('/') ?>">Test praček 2026</a></li>
      <li aria-current="page">Ochrana osobních údajů</li>
    </ol>
  </nav>

  <h1>Ochrana osobních údajů a cookies</h1>

  <p>
    <?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?> nemá registraci uživatelů, přihlašování
    ani formulář, který by shromažďoval osobní údaje k jinému účelu než k odpovědi na váš dotaz
    (viz stránka <a href="<?= url('/kontakt/') ?>">Kontakt</a>). Níže popisujeme, jaké údaje web
    přesto zpracovává prostřednictvím technických nástrojů.
  </p>

  <h2>Google Analytics 4</h2>
  <p>
    Web používá Google Analytics 4 (GA4) ke sledování anonymní návštěvnosti — počtu zobrazení
    stránek, přibližné doby strávené na webu a toho, odkud návštěvníci přicházejí. GA4 pracuje
    s cookies a podobnými technologiemi, které ukládají identifikátor prohlížeče, ne vaše jméno
    ani jiné přímo identifikující údaje. Skript GA4 se načítá až po dokončení načtení stránky
    (viz technická poznámka v patičce zdrojového kódu), aby neovlivňoval rychlost načítání.
  </p>
  <p>
    Data zpracovává společnost Google Ireland Limited v souladu se svými
    <a href="https://policies.google.com/privacy" rel="noopener noreferrer" target="_blank">zásadami ochrany soukromí</a>.
    Sběru dat pro GA4 se můžete bránit rozšířením prohlížeče
    <a href="https://tools.google.com/dlpage/gaoptout" rel="noopener noreferrer" target="_blank">Google Analytics Opt-out</a>
    nebo nastavením prohlížeče blokujícím cookies třetích stran.
  </p>

  <h2>Odkazy na partnerské e-shopy</h2>
  <p>
    Odkazy vedoucí k nákupu obsahují sledovací parametr partnerského programu, díky kterému
    partnerský e-shop pozná, že návštěvník přišel z tohoto webu, a přizná provizi. Tento mechanismus
    nezpracovává žádné vaše osobní údaje na straně tohoto webu — sledování probíhá až po
    kliknutí na straně partnerského e-shopu. Podrobnosti najdete na stránce
    <a href="<?= url('/affiliate-informace/') ?>">Informace o spolupráci</a>.
  </p>

  <h2>Jaké údaje web nezpracovává</h2>
  <ul>
    <li>Web nemá registraci uživatelů ani přihlašování.</li>
    <li>Web neukládá platební ani fakturační údaje — veškeré nákupy probíhají na webu partnerského e-shopu.</li>
    <li>Web neprodává ani nepředává údaje třetím stranám nad rámec standardního zpracování Google Analytics 4.</li>
  </ul>

  <h2>Vaše práva</h2>
  <p>
    Pokud nám napíšete e-mail (viz <a href="<?= url('/kontakt/') ?>">Kontakt</a>), zpracováváme
    vaši e-mailovou adresu a obsah zprávy pouze za účelem odpovědi na váš dotaz. Máte právo
    požádat o informaci, jaké údaje o vás zpracováváme, o jejich opravu nebo výmaz — stačí napsat
    na kontaktní e-mail.
  </p>

</div>

<?php require_once dirname(__DIR__) . '/inc/footer.php'; ?>
