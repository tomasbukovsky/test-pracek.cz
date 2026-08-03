# Stav projektu test-pracek.cz
Naposledy uloženo: 2026-08-03

---

## ⚠️ Než budeš pokračovat na jiném počítači

**Nic z práce popsané v tomto souboru zatím není commitnuté ani pushnuté na GitHub**
(`github.com/tomasbukovsky/test-pracek.cz`, remote `origin` existuje). Všechno je zatím
jen jako necommitnuté změny lokálně. Pokud chceš pokračovat jinde, je potřeba nejdřív
z tohoto počítače commitnout a pushnout (nebo přenést soubory jinak) — samotný `STAV.md`
kód nepřenáší, jen ho popisuje.

---

## ⚠️ Nejdůležitější aktuální poznámka

Katalog produktů byl **kompletně přestavěn** na reálná data z Alza affiliate feedu
(`https://affiliate.alza.cz/feed.xml?id=40038`). Původních 42 produktů v `data/produkty.php`
bylo z drtivé většiny **vymyšlených** (model `bosch-wan28263by` byl doslova ukázkový příklad
ze zadání, který předchozí session vzala jako reálná data a zbytek katalogu domyslela ve
stejném stylu) — proto Alza odkazy padaly na 404. Nahradil jsem všech 42 produktů reálnými
modely spárovanými z feedu (skutečný EAN, cena, obrázek, produktová URL).

**Nemohl jsem ale nezávisle ověřit finální HTTP 200** na nové odkazy — Alza blokuje
automatizované nástroje (`curl` i WebFetch dostávají 403 Forbidden, běžná bot ochrana).
Odkazy pocházejí přímo z živého feedu (silný důkaz existence), ale doporučuji si pár
náhodných produktových stránek proklikat v běžném prohlížeči, než to vezmeš jako 100% hotové.

---

## Co je hotovo

### Krok 1 — Kostra ✅
- `inc/config.php` — konstanty webu (+ `AUTOR_EMAIL`)
- `inc/functions.php` — pomocné PHP funkce, včetně nových: `nazev_segmentu`, `segmenty_valid`,
  `hlavni_segment`, `popis_typu_plneni`, `je_invertorovy_motor`, `popis_pro_koho`,
  `produkt_alternativy`, `popis_alternativy`, `schema_article`. Funkce jsou psané kompatibilně
  s **PHP 7.0** (žádné arrow funkce, nullable return types ani krátké destrukturování — viz
  poznámka níže o PHP verzi).
- `inc/head.php`, `inc/header.php` (+ dropdown „Rádce"), `inc/footer.php`
- `inc/components/` — product-card, product-table, faq, author-box, disclosure
- `inc/segment-template.php` — sdílený template segmentových stránek
- `inc/product-template.php` — sdílený template produktových stránek (viz Krok 4)
- `assets/style.css` — kompletní CSS (mobile-first, breakpoint 768px)
- `data/produkty.php` — **42 reálných produktů z Alza feedu**: Bosch (7), LG (6), Samsung (7),
  Whirlpool (8), AEG (5), Beko (7), Electrolux (2 — bez vlastního segmentu, jako dřív)

### Krok 2 — Homepage + produktové stránky ✅
- `index.php` — TOP 8 na homepage je teď vybráno **1 nejlevnější model z každé značky** +
  doplnění nejlevnějšími zbylými do počtu 8 (dřív tam bylo natvrdo jen prvních pár produktů —
  bez agregovaných recenzí nemáme jiné transparentní kritérium řazení, viz metodika).

### Krok 3 — Segmentové stránky ✅
14 segmentů: pracky-lg, pracky-bosch, pracky-samsung, pracky-whirlpool, pracky-aeg, pracky-beko,
pracky-7-kg, pracky-8-kg, pracky-9-kg, pracky-10-kg, pracky-s-prednim-plnenim, **uzke-pracky**,
vestavne-pracky, pracky-se-susickou — všechny mají ≥5 reálných produktů.
Segmenty electrolux a horního plnění nemají vlastní stránku (řádově pod 5 produktů), stejně jako předtím.

### Krok 4 — Produktové stránky ✅
Všech 42 produktů má vlastní stránku `/{slug}/index.php` — tenký soubor (3 řádky), který nastaví
`$slug` a načte `inc/product-template.php`. Šablona automaticky odvozuje z `data/produkty.php`:
breadcrumb, sekci „Co říkají uživatelé", 2 alternativy ze stejného segmentu, FAQ, tabulku parametrů
(vč. kapacity sušičky u typu `susicka`).

**Obrázky se teď natahují přímo z Alza CDN** (`cdn.alza.cz/products/...`) — to byl druhý problém,
který jsi nahlásil (chybějící fotky). Řešení: máš affiliate feed od Alzy, který podle tebe obsahuje
i povolené obrázky pro partnery, takže hotlinkování přímo z feedu je legální cesta (na rozdíl od
stahování fotek z webu a rehostování na vlastním serveru bez licence). `obrazek` v datech teď
obsahuje plnou CDN URL, ne lokální cestu — `url()` helper se na ni už nepoužívá.

⚠️ Sekce „Co říkají uživatelé" (`recenze_shrnuti`, `pro`, `proti`) je zatím **obecný placeholder
text** čekající na skutečné recenze z Alzy/Heureky — viz „Co musíš doplnit" níže. Nefabrikoval jsem
konkrétní recenzní tvrzení, protože žádná reálná data o recenzích k dispozici nemám.

### Krok 5 — Rádcové stránky ✅
`/jak-vybrat-pracku/`, `/energeticke-tridy-pracek/`, `/jaka-kapacita-pracky/`, `/jak-cistit-pracku/`
— všechny s `Article` + `Person` schématem.

### Krok 6 — Důvěryhodnostní stránky ✅
`/metodika/`, `/o-nas/`, `/kontakt/`, `/affiliate-informace/`, `/ochrana-osobnich-udaju/`.

### Krok 7 — Technické soubory ✅
- `sitemap.php` (generuje `sitemap.xml`, 66 URL, produkční `SITE_URL`)
- `robots.txt`, `.htaccess` (https+www redirect, staré ročníky → `/`, rewrite sitemapy)

### Krok 8 — Vizuální redesign ✅ (nově dokončeno)
Web byl vizuálně stroký a zastaralý — přestavěna paleta, typografie, hlavička a nově vytvořené
grafické assety:
- **Barvy:** hluboká teal `#0f5257` (primární) + teplá terakota `#d9643a` (akcent/CTA) na
  krémovém podkladu `#fbfaf7` — místo původní korporátní modré (`#1a5276`) a syté červené.
  Všechny tokeny jsou v `:root` v `assets/style.css` (stejné názvy proměnných jako předtím,
  jen nové hodnoty — inline `<style>` bloky v šablonách fungují beze změny).
- **Typografie:** nadpisy na systémovém serifu (`ui-serif, Georgia...`), text zůstává na
  `system-ui` sans — pořád **žádné externí fonty** (výkon/LCP nedotčen).
- **Hlavička:** místo plné tmavé lišty teď světlá, poloprůhledná sticky hlavička s jemným
  blur efektem a spodní linkou.
- **Favicon a logo:** nové SVG assety v `assets/img/`:
  - `icon.svg` (favicon mark, motiv bubnu pračky s odstřeďováním) + rastrované
    `favicon-16.png`, `favicon-32.png`, `favicon-48.png`, `apple-touch-icon.png` (180×180),
    `icon-512.png`
  - `logo.svg` + `logo.png` (vodorovný lockup ikona + „test-pracek.cz", pro `schema.org`
    Organization.logo a sdílení)
  - `inc/head.php` má nové `<link rel="icon">` tagy + `theme-color` meta; `inc/header.php`
    má inline SVG ikonu vedle textového loga
- **Detaily:** větší border-radius (10px), jemnější stíny, hover „nadzvednutí" na
  produktových kartách, boxíky s produktovými fotkami mají **bílé pozadí** (produktové fotky
  z Alzy už bílé pozadí mají, takže na bílém splynou lépe než na předchozím krémovém tónu).
- Statický QA náhled (jen pro kontrolu v této konverzaci, není součástí nasazovaného webu):
  https://claude.ai/code/artifact/4e32f178-b3de-49b6-b645-34481f62a228

⚠️ Nemohl jsem to reálně vykreslit v prohlížeči — na tomto vývojovém stroji není nainstalované
PHP (viz poznámka níže). Vizuál byl ověřen jen přes statický HTML náhled se skutečným CSS.
Po nasazení/na jiném stroji s PHP stojí za to proklikat pár stránek naživo.

---

## Co musíš doplnit TY (provozovatel)

### 1. `inc/config.php`
`GA4_ID`, `AUTOR_ICO`, `AUTOR_EMAIL` (nyní placeholder `info@test-pracek.cz`)

### 2. `data/produkty.php` — u všech 42 produktů
- Hodnoty označené `/* EPREL: ověřit */` (`energ_trida`, `spotreba_kwh`, `spotreba_vody`,
  `hlucnost_prani`, `hlucnost_odstred`, `trida_odstred`, `otacky` u některých) dohledej v
  **https://eprel.ec.europa.eu** podle skutečného EAN (ten je už teď reálný, takže dohledání
  bude fungovat — dřív to nešlo, protože EANy byly vymyšlené).
- `alza_id`, `alza_url` — `banner_id` je nastaveno na tvoje `138051`, `idp=2504` zůstalo
  z ukázky ve feedu — over, že je to tvoje správné `idp`.
- `recenze_pocet`, `recenze_shrnuti`, `pro`, `proti` — přepsat po přečtení skutečných recenzí
  (viz metodika, sekce 1 zadání). Zatím jsou to obecné placeholdery, ne vymyšlené konkrétní citace.

### 3. `assets/img/` — pořád chybí
Favicon a logo jsou už hotové (viz Krok 8). Pořád ale chybí:
- `autor.jpg` — tvoje fotka (čtvercová, min. 160×160 px), zobrazuje se v autorském boxu na
  každé stránce a na `/o-nas/`
- `og-homepage.jpg` (1200×630 px) a volitelně `og-<segment>.jpg` pro sociální sdílení
  jednotlivých stránek — bez nich stránky fungují, jen při sdílení na Facebooku/X nebude
  náhledový obrázek

### 3. Ověření odkazů (kvůli tomu, co jsi nahlásil)
Proklikej si prosím pár produktových stránek v běžném prohlížeči — já jsem nemohl `curl`/WebFetch
kvůli Alza bot ochraně (403) nezávisle ověřit. Odkazy pocházejí přímo z živého affiliate feedu,
takže by měly být v pořádku, ale chci to mít potvrzené reálným kliknutím.

---

## Poznámky

- **PHP verze:** Server běží na starším PHP — testuj kompatibilitu. Kód je teď psaný tak, aby
  fungoval od **PHP 7.0** výš (odstraněny arrow funkce, nullable return types, krátké
  destrukturování polí). Původní kód vyžadoval PHP 7.4+.
- PHP na tomto vývojovém stroji není nainstalované, takže `php -l` nešlo spustit — soubory
  zkontrolované ručně, ne linterem. Spusť `php -l` na produkci/stagingu, jakmile to půjde.
- Cesty na CSS/JS/podstránky jdou přes `url()` helper s `BASE_PATH = '/new'`; obrázky produktů
  jsou teď externí CDN URL (bez `url()`).
- Zadání je v `zadani-test-pracek.md`.
- Přesměrování starých ročníků (`/20XX/ → /`) je v `.htaccess` — ověř po nasazení příkazem z
  sekce 4.4.4 zadání.
