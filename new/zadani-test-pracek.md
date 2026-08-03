# Zadání pro Claude Code: test-pracek.cz

Statický web o pračkách. PHP + HTML, bez databáze, bez frameworku, bez napojení na externí služby za běhu. Deploy přes FTP.

---

## 1. Základní pravidla obsahu — ČTI JAKO PRVNÍ

Tato pravidla mají přednost před vším ostatním v zadání. Porušení = celý web je nepoužitelný.

### 1.1 Nikdy nepředstírej vlastní zkušenost

Autor webu **nikdy žádný z produktů nepoužil ani netestoval**. Veškerý obsah je souhrn cizích zdrojů.

**ZAKÁZANÉ formulace** (a jakékoli jejich obdoby):
- „Pračku jsme testovali…", „Měli jsme ji doma…", „Po třech měsících používání…"
- „Vyzkoušeli jsme…", „Naše měření ukázala…", „V našem testu…"
- Jakékoli první osoba ve významu osobní zkušenosti s produktem
- Vymyšlené detaily typu „hlučnost jsme naměřili 72 dB"

**POVINNÉ formulace** — vždy s uvedením, odkud informace je:
- „Napříč recenzemi na Alze se opakovaně objevuje…"
- „Uživatelé nejčastěji chválí…, naopak výtky směřují k…"
- „Podle výsledků dTestu (test z března 2025)…"
- „V hodnoceních zákazníků se hlučnost při odstřeďování zmiňuje jako nejčastější výhrada."

Autor je **editor a analytik**, ne tester. Jeho přidaná hodnota je, že prošel stovky recenzí a vytáhl z nich vzorce. To se v textu smí a má říkat otevřeně — je to silnější než předstíraná zkušenost.

### 1.2 Zdroje neopisuj, agreguj

Uživatelské recenze **nikdy nekopíruj doslova**. Vždy parafrázuj a agreguj do vzorce („zhruba každý pátý hodnotící zmiňuje X"). Krátký doslovný citát maximálně jeden na produkt, do 15 slov, v uvozovkách, s uvedením zdroje.

Výsledky dTest / Stiftung Warentest: uveď **pouze fakt, že test proběhl, kdy, a jak produkt dopadl v celkovém hodnocení**, plus odkaz na originál. Nikdy nereprodukuj tabulky, dílčí známky ani placený obsah.

### 1.3 Nic si nevymýšlej

Pokud pro produkt nenajdeš dostatek zdrojů, **napiš kratší text**. Nikdy nedoplňuj chybějící informace odhadem. Parametry musí pocházet z feedu Alzy nebo z oficiálního energetického štítku (EPREL), nikdy z odhadu.

Pokud u produktu neexistuje dTest ani Stiftung Warentest, sekci prostě vynech. Nepiš „nebyl testován, ale podle nás…".

### 1.4 Transparentnost je součástí produktu

Každá produktová stránka i každý žebříček musí mít viditelný odkaz na `/metodika/` a affiliate disclosure.

---

## 2. Technická architektura

### 2.1 Struktura souborů

```
/
├── index.php                     # pilíř: Test praček 2026
├── inc/
│   ├── head.php                  # <head>, meta, OG, canonical, schema
│   ├── header.php                # hlavička + navigace
│   ├── footer.php                # patička + GA4
│   ├── config.php                # konstanty (název webu, base URL, GA4 ID, datum aktualizace)
│   ├── functions.php             # pomocné funkce (viz 2.3)
│   └── components/
│       ├── product-card.php      # karta produktu do výpisu
│       ├── product-table.php     # srovnávací tabulka
│       ├── faq.php               # FAQ blok + FAQPage schema
│       ├── author-box.php        # autorský box
│       └── disclosure.php        # affiliate upozornění
├── data/
│   └── produkty.php              # POLE všech produktů (viz 2.2)
├── pracky-lg/index.php           # značkové stránky
├── ...
├── uzke-pracky/index.php         # parametrické stránky
├── ...
├── bosch-wan28263by/index.php    # produktové stránky
├── ...
├── assets/
│   ├── style.css                 # jeden CSS soubor
│   └── img/                      # obrázky produktů (lokálně, ne hotlink)
├── sitemap.xml
├── robots.txt
└── .htaccess
```

### 2.2 Datový model

`data/produkty.php` vrací pole. Toto je **jediný zdroj pravdy pro parametry** — výpisy a tabulky se z něj generují smyčkou, takže se nemůžou rozejít.

```php
<?php
return [
  'bosch-wan28263by' => [
    'slug'         => 'bosch-wan28263by',
    'nazev'        => 'Bosch WAN28263BY',
    'znacka'       => 'Bosch',
    'ean'          => '4242005279357',
    'alza_id'      => 'BOSCPR1234',
    'alza_url'     => 'https://www.alza.cz/...?idp=2504&banner_id=24299',
    'obrazek'      => '/assets/img/bosch-wan28263by.jpg',
    'cena_orient'  => 11490,        // orientační, s datem — NEuvádět jako aktuální
    'cena_datum'   => '2026-08-01',
    'typ'          => 'predni',     // predni | horni | susicka | vestavna
    'kapacita'     => 8,            // kg
    'otacky'       => 1400,
    'energ_trida'  => 'A',
    'spotreba_kwh' => 49,           // kWh/100 cyklů
    'spotreba_vody'=> 47,           // l/cyklus
    'hlucnost'     => 72,           // dB odstřeďování
    'trida_odstred'=> 'B',
    'sirka'        => 60,           // cm
    'hloubka'      => 59,
    'motor'        => 'invertorový',
    'wifi'         => false,
    'segmenty'     => ['pracky-bosch','pracky-8-kg','pracky-s-prednim-plnenim'],
    'verdikt'      => 'Spolehlivá střední třída pro čtyřčlennou domácnost.',
    'pro'          => ['Tichý invertorový motor', '...'],
    'proti'        => ['Krátký přívodní kabel', '...'],
    'dtest'        => [               // null pokud netestováno
      'zdroj'  => 'dTest',
      'datum'  => '2025-03',
      'vysledek' => '...',
      'url'    => 'https://www.dtest.cz/...',
    ],
    'recenze_shrnuti' => '...',       // hlavní editorial text, viz 3.3
    'recenze_pocet'   => 412,         // počet hodnocení, ze kterých se čerpalo
    'recenze_zdroje'  => ['Alza', 'Heureka'],
  ],
  // ...
];
```

**Parametry z EPREL:** energetická třída, spotřeba energie i vody, hlučnost, třída odstřeďování a index opravitelnosti pocházejí z veřejného registru EPREL (`washingmachines2019`). Dohledej je podle EAN a **zapiš natvrdo do pole** — žádné volání API za běhu. U každé produktové stránky uveď, že parametry pocházejí z registru EPREL, a odkaž na `eprel.ec.europa.eu`.

### 2.3 Funkce v `functions.php`

```php
produkty()                       // načte a nacachuje pole
produkty_v_segmentu($segment)    // filtr podle 'segmenty'
produkt($slug)
serad_produkty($pole, $klic)
affiliate_odkaz($produkt, $pozice)  // vrací <a> s rel="sponsored nofollow noopener" target="_blank"
schema_product($produkt)
schema_itemlist($pole)
schema_breadcrumb($cesta)
formatuj_cenu($castka)           // vždy s poznámkou o orientační ceně
```

### 2.4 Ceny — důležité

Web **nemá aktuální ceny**. Proto:
- Cena se zobrazuje jako **orientační**, vždy s viditelným datem: „Orientační cena k 1. 8. 2026: 11 490 Kč. Aktuální cenu najdete u prodejce."
- **Nedělej cenové stránky** typu „nejlepší pračka do 10 000 Kč" — bez aktualizace cen zastarají a jsou zavádějící.
- **Nedávej `Offer` do schema.org.** Zastaralá cena ve strukturovaných datech je porušení pravidel Google Merchant a riziko manuální akce.

---

## 3. Struktura webu

Celkem ~60 stránek. Každá musí mít vlastní důvod existence — žádné kombinatorické varianty.

### 3.1 Pilíř — `/`

**Title:** `Test praček 2026: srovnání 30 nejprodávanějších modelů | test-pracek.cz`
**H1:** `Test praček 2026`

Cílová slova: test praček, testy praček, pračky test, nejlepší pračka, recenze praček

Obsah:
1. Úvodní odstavec (150–200 slov), který **na rovinu vysvětlí, co web je**: souhrn nezávislých testů (dTest, Stiftung Warentest) a agregovaných uživatelských recenzí, ne vlastní laboratorní testování.
2. Srovnávací tabulka TOP 8 modelů (kapacita, otáčky, energ. třída, hlučnost, orientační cena, odkaz)
3. Ke každému z TOP 8 blok 150–250 slov: pro koho se hodí, co se v recenzích opakuje, odkaz na detail
4. Rozcestník na segmenty
5. Blok „Jak vybíráme" s odkazem na `/metodika/`
6. FAQ (4–6 dotazů) + `FAQPage` schema
7. Autorský box, datum aktualizace

`ItemList` schema pro žebříček.

### 3.2 Segmentové stránky (16)

Vznikly na základě reálné hledanosti. Každá: H1 → úvod 200–300 slov → tabulka všech produktů v segmentu → TOP 3 z tohoto segmentu s krátkým odůvodněním → FAQ (2–4 dotazy) → prolinkování na 2–3 sousední segmenty.

| URL | Cílové slovo | Hledanost/měs |
|---|---|---|
| `/pracky-lg/` | pračky LG | 5 400 |
| `/pracky-whirlpool/` | pračky Whirlpool | 3 600 |
| `/pracky-aeg/` | pračky AEG | 2 900 |
| `/pracky-bosch/` | pračky Bosch | 1 900 |
| `/uzke-pracky/` | úzká pračka (+ 40 cm, 45 cm) | 1 300 |
| `/pracky-s-hornim-plnenim/` | pračka s horním plněním | 880 |
| `/vestavne-pracky/` | vestavná pračka | 720 |
| `/pracky-beko/` | pračky Beko | 390 |
| `/pracky-8-kg/` | pračka 8 kg | 390 |
| `/pracky-s-prednim-plnenim/` | pračka s předním plněním | 390 |
| `/pracky-electrolux/` | pračky Electrolux | 210 |
| `/pracky-9-kg/` | pračka 9 kg | 210 |
| `/pracky-7-kg/` | pračka 7 kg | 210 |
| `/pracky-samsung/` | pračky Samsung | 170 |
| `/pracky-10-kg/` | pračka 10 kg | 110 |
| `/pracky-se-susickou/` | pračka se sušičkou | — |

**Pravidlo:** segment se vygeneruje jen tehdy, když do něj spadá **minimálně 5 produktů**. Jinak stránku nevytvářej a odstraň ji i z navigace a sitemapy.

### 3.3 Produktové stránky (30–35)

URL: `/bosch-wan28263by/` (bez prefixu — doména už kategorii nese)

**Title:** `Bosch WAN28263BY: recenze, parametry a zkušenosti uživatelů`

Struktura:
1. **Verdikt** (2–3 věty): pro koho ano, pro koho ne
2. **Rychlé parametry** — tabulka z datového pole
3. **Co říkají uživatelé** (300–500 slov) — hlavní hodnota stránky. Agregace vzorců z recenzí, ne převyprávění jedné. Uveď, z kolika hodnocení a odkud se čerpalo. Struktura: co se chválí nejčastěji → co se kritizuje nejčastěji → pro koho z toho plyne doporučení.
4. **Nezávislé testy** — pouze pokud existují. Zdroj, datum, celkový výsledek, odkaz na originál.
5. **Oficiální parametry z energetického štítku** — z EPREL, s odkazem na registr
6. **Klady a zápory** — seznam
7. **Alternativy** — 2–3 podobné modely z katalogu, interní odkazy
8. **FAQ** (2–3 dotazy)
9. Affiliate CTA + disclosure + datum aktualizace

Délka celkem 800–1 200 slov. **Pokud zdroje nestačí na 800 slov, napiš kratší stránku** — nedoplňuj vatou.

### 3.4 Rádcové stránky (4)

- `/jak-vybrat-pracku/` — pilířový rádce, 1 500+ slov, odkazuje do všech segmentů
- `/energeticke-tridy-pracek/` — jak číst štítek, co znamenají čísla, vazba na EPREL
- `/jaka-kapacita-pracky/` — kolik kg pro kolik osob, odkazy na kapacitní segmenty
- `/jak-cistit-pracku/` — údržba, odkaz na produkty

### 3.5 Důvěryhodnostní stránky (5)

- **`/metodika/`** — nejdůležitější stránka webu. Musí explicitně a bez vytáček popsat: že web netestuje vlastní laboratoří; z jakých zdrojů čerpá (uživatelská hodnocení e-shopů, dTest, Stiftung Warentest, registr EPREL, feed Alzy); jak vzniká pořadí v žebříčcích; jak často se obsah aktualizuje; jak web vydělává (affiliate provize z Alzy) a že to neovlivňuje hodnocení.
- `/o-nas/` — jméno autora, fotka, IČO, čím se zabývá, proč web dělá. `Person` schema.
- `/kontakt/`
- `/affiliate-informace/`
- `/ochrana-osobnich-udaju/` — GDPR, cookies, GA4

---

## 4. SEO požadavky

### 4.1 Strukturovaná data (JSON-LD)

| Typ | Kde |
|---|---|
| `WebSite` + `Organization` | všude (v `head.php`) |
| `BreadcrumbList` | všude kromě homepage |
| `ItemList` | pilíř + segmentové stránky |
| `Product` | produktové stránky — name, brand, gtin13, image, description |
| `FAQPage` | pilíř, segmenty, rádce |
| `Article` + `author` (`Person`) | rádcové stránky |

**ZAKÁZÁNO:** `Review`, `AggregateRating` a `Offer`. Web nemá vlastní testy ani aktuální ceny — označkovat je jako strukturovaná data je riziko manuální akce. Hodnocení z Alzy smíš zmínit v textu jako citovaný fakt, ale ne v JSON-LD jako hodnocení tohoto webu.

### 4.2 Meta a technika

- Unikátní `<title>` (do 60 znaků) a `<meta description>` (do 155) na každé URL — generuj z dat, ne šablonovitě
- Self-referencing canonical na každé stránce
- OG + Twitter Card
- `sitemap.xml` generovaný PHP skriptem z dat, s `lastmod`
- `robots.txt` s odkazem na sitemapu
- Všechny affiliate odkazy: `rel="sponsored nofollow noopener"`, `target="_blank"`
- Trailing slash konzistentně, `.htaccess` řeší non-www→www (nebo naopak) a HTTPS
- Přesměrování starých ročníkových URL řeší samostatně **sekce 4.5** — je to kritická část, nedělej ji od oka

### 4.3 Rychlost (cíl LCP < 1,5 s)

- Jeden CSS soubor, critical CSS inline v `<head>`, zbytek odloženě
- Žádný JS framework. Vanilla JS jen pro filtrování tabulek, pokud vůbec.
- Systémové fonty (`system-ui, -apple-system, Segoe UI, Roboto, sans-serif`) — žádný Google Fonts
- Obrázky lokálně, WebP + AVIF, `width`/`height` v HTML, `loading="lazy"` pod foldem, hero `preload`
- GA4 načítat `defer`, až po interakci nebo po `load`

### 4.4 Migrace starých ročníkových URL

**Stav ověřený v GSC (srpen 2026): na Googlu je indexovaná jediná URL — `https://www.test-pracek.cz/2022/`** (naposledy procházena 22. 7. 2026, stabilně 1 stránka po celé sledované období). Starší ročníky `/2013/`–`/2021/` v indexu nejsou.

Z toho plyne, že **z pohledu indexace není prakticky co ztratit** a migrace je nízkoriziková. Nedělej proto rozsáhlou inventuru URL — je zbytečná. Zůstávají jen tato pravidla:

#### 4.4.1 Redirect mapa

| Stará URL | Cíl | Kód |
|---|---|---|
| `/2022/` | `/` | 301 |
| `/2013/` až `/2021/` (kořeny) | `/` | 301 |
| Případné podstránky ročníků | tematicky odpovídající segment, jinak `/` | 301 |
| Non-www, http varianty | kanonická https://www verze | 301 |

```apache
RewriteEngine On
RewriteCond %{HTTPS} off [OR]
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteRule ^(.*)$ https://www.test-pracek.cz/$1 [R=301,L]

# Podstránky ročníků (pokud nějaké existují) — specifická pravidla PŘED obecným
# RedirectMatch 301 ^/20[0-9]{2}/pracky-s-hornim-plnenim.*$ /pracky-s-hornim-plnenim/

# Kořeny ročníků
RedirectMatch 301 ^/20[0-9]{2}/?$ /
```

#### 4.4.2 Co pořád platí

- **Vždy 301**, nikdy 302
- **Jeden skok na cíl.** Starší ročníky už jednou přesměrované byly, takže hrozí řetěz `/2015/ → /2022/ → /`. Ověř `curl -sIL https://www.test-pracek.cz/2015/` a veď každou starou URL přímo na finální cíl.
- **Cíl musí vracet 200.** Redirect na 404 je horší než ponechaný obsah.
- **Redirecty nechat trvale.** Indexace je mizivá, ale zpětné odkazy na `/2022/` a starší ročníky mohou existovat nezávisle na indexaci — a to je jediné, co má na doméně dnes hodnotu.
- Specifická pravidla vždy před obecnými, jinak je obecné přebije.

#### 4.4.3 Sekvence nasazení

1. Nový web nasadit do dočasného adresáře, ověřit že cílové URL vracejí 200
2. Přepnout a nasadit `.htaccess`
3. Starý obsah nemazat, dokud redirecty prokazatelně nefungují
4. Nahrát novou `sitemap.xml` do GSC — nesmí obsahovat žádnou přesměrovanou URL
5. V GSC požádat o indexaci homepage a klíčových segmentů ručně

#### 4.4.4 Ověření

```bash
for u in /2022/ /2021/ /2019/ /2015/ /2013/; do
  curl -sIL -o /dev/null -w "$u -> %{url_effective} %{http_code} hops=%{num_redirects}\n" "https://www.test-pracek.cz$u"
done
```

Každý řádek musí končit `200 hops=1`.

### 4.5 Rok v obsahu, ne v URL

Rok patří do `<title>`, `<h1>` a textu. **Nikdy do URL.** Jednou ročně se přepíše obsah, URL zůstává a drží nasbíranou autoritu.

---

## 5. Vizuální stránka

Čistý, rychlý, čitelný. Ne šablonovitý „affiliate magazín".

- Max. 2 barvy + neutrální šedá. Žádné přeplácané CTA bannery.
- Srovnávací tabulky jsou hlavní vizuální prvek — udělej je opravdu čitelné, na mobilu horizontálně scrollovatelné se sticky prvním sloupcem.
- Mobile-first, breakpoint na 768 px
- Kontrast min. 4,5:1, focus stavy, sémantický HTML (`<main>`, `<article>`, `<nav>`)

---

## 6. Postup práce

1. Vytvoř kostru: `inc/`, `assets/style.css`, `data/produkty.php` s **3 vzorovými produkty**
2. Postav homepage a jednu produktovou stránku → **zastav a nech zkontrolovat**
3. Po schválení doplň zbytek produktů a segmentové stránky
4. Rádcové a důvěryhodnostní stránky
5. Sitemap, robots, .htaccess, kontrola schema přes validátor
6. Kontrola: prochází každá stránka pravidla ze sekce 1?

---

## 7. Kontrolní seznam před dokončením

- [ ] Nikde není tvrzení nebo náznak vlastního testování produktu
- [ ] Každé tvrzení o vlastnostech má dohledatelný zdroj (feed / EPREL / dTest / agregovaná hodnocení)
- [ ] Žádná doslova zkopírovaná uživatelská recenze
- [ ] Ceny označené jako orientační, s datem
- [ ] Žádné `Review`, `AggregateRating` ani `Offer` schema
- [ ] Každý affiliate odkaz má `rel="sponsored nofollow"`
- [ ] `/metodika/` odkazovaná z každé produktové a segmentové stránky
- [ ] Každý segment má aspoň 5 produktů
- [ ] Unikátní title + description na každé URL
- [ ] Sitemap obsahuje všechny stránky a žádnou navíc
- [ ] Rok není v žádné URL
- [ ] `/2022/` a kořeny ročníků 301 na `/`, právě jeden skok, cíl vrací 200
- [ ] Non-www a http varianty sjednocené na kanonickou verzi
- [ ] Sitemap neobsahuje žádnou přesměrovanou URL
