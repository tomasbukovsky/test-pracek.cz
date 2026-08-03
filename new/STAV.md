# Stav projektu test-pracek.cz
Naposledy uloženo: 2026-08-03

---

## Co je hotovo

### Krok 1 — Kostra ✅
- `inc/config.php` — konstanty webu
- `inc/functions.php` — pomocné PHP funkce
- `inc/head.php` — sdílený `<head>` (meta, OG, schema)
- `inc/header.php` — navigace (sticky, mobile toggle)
- `inc/footer.php` — patička + GA4
- `inc/components/` — product-card, product-table, faq, author-box, disclosure
- `inc/segment-template.php` — sdílený template segmentových stránek
- `assets/style.css` — kompletní CSS (mobile-first, breakpoint 768px)
- `data/produkty.php` — **42 produktů**: Bosch (7), LG (6), Samsung (7), Whirlpool (8), AEG (7), Beko (7), Electrolux (2)

### Krok 2 — Homepage + první produktová stránka ✅
- `index.php` — homepage (úvod, tabulka, bloky, rozcestník, FAQ, autorský box)
- `bosch-wan28263by/index.php` — vzorová produktová stránka

### Krok 3 — Segmentové stránky ✅
14 segmentů (každý s intro textem, tabulkou, TOP 3, FAQ, prolinkováním):
- Značkové: `/pracky-lg/`, `/pracky-bosch/`, `/pracky-samsung/`, `/pracky-whirlpool/`, `/pracky-aeg/`, `/pracky-beko/`
- Kapacitní: `/pracky-7-kg/`, `/pracky-8-kg/`, `/pracky-9-kg/`, `/pracky-10-kg/`
- Typové: `/pracky-s-prednim-plnenim/`, `/uzke-pracky/`, `/vestavne-pracky/`, `/pracky-se-susickou/`

Vynechané segmenty (méně než 5 produktů — dle pravidla v zadání):
- `/pracky-electrolux/` (2 produkty)
- `/pracky-s-hornim-plnenim/` (3 produkty)

---

## Co zbývá udělat (Claude)

### Krok 4 — Produktové stránky (41 zbývajících)
Vzorová stránka `bosch-wan28263by/` existuje. Zbývá vytvořit stránky pro všechny ostatní produkty v `data/produkty.php`. Struktura je vždy stejná — viz zadání sekce 3.3.

### Krok 5 — Rádcové stránky (4)
- `/jak-vybrat-pracku/` — pilířový rádce, 1 500+ slov
- `/energeticke-tridy-pracek/` — jak číst štítek, EPREL
- `/jaka-kapacita-pracky/` — kolik kg pro kolik osob
- `/jak-cistit-pracku/` — údržba

### Krok 6 — Důvěryhodnostní stránky (5)
- `/metodika/` — nejdůležitější stránka webu
- `/o-nas/` — autor, IČO, Person schema
- `/kontakt/`
- `/affiliate-informace/`
- `/ochrana-osobnich-udaju/` — GDPR, cookies, GA4

### Krok 7 — Technické soubory
- `sitemap.xml` (generovaný PHP z dat)
- `robots.txt`
- `.htaccess` (HTTPS, www, 301 přesměrování ročníků `/2022/` → `/`)
- Ověření schema.org validátorem

---

## Co musíš doplnit TY (provozovatel)

### 1. `inc/config.php`
```
GA4_ID    => reálné Google Analytics 4 ID (formát G-XXXXXXXXXX)
AUTOR_ICO => tvoje IČO
```

### 2. `data/produkty.php` — pro všech 42 produktů
Každý produkt má hodnoty označené `/* EPREL: ověřit */`. Dohledej je v registru:
**https://eprel.ec.europa.eu** → kategorie `washingmachines2019` → hledat podle EAN

Hodnoty k ověření u každého produktu:
- `energ_trida` — energetická třída (A–G)
- `spotreba_kwh` — spotřeba energie v kWh/100 cyklů (u sušiček kWh/rok)
- `spotreba_vody` — roční spotřeba vody v litrech
- `hlucnost_prani` — hlučnost při praní v dB
- `hlucnost_odstred` — hlučnost při odstřeďování v dB
- `trida_odstred` — třída účinnosti odstřeďování (A–G)
- `eprel_url` — přesná URL záznamu v EPREL pro daný EAN

Dále doplnit:
- `alza_url` — správná affiliate URL z Alzy **s tvými parametry** (`idp=` a `banner_id=`)
- `alza_id` — ID produktu na Alze (není nutné pro funkci webu, ale hodí se pro tracking)
- `recenze_pocet` — aktuální počet hodnocení zákazníků (zjisti na Alze/Heurece)
- `recenze_shrnuti` — texty jsou zástupné; **nahraď je po přečtení skutečných recenzí** na Alze a Heurece. Pravidla viz sekce 1 zadání (žádné vlastní testování, agregovat vzorce, uvádět zdroj)

### 3. `assets/img/` — obrázky

**Produktové obrázky** (pojmenování přesně dle slugu produktu):
```
bosch-wan28263by.jpg        bosch-waj28022by.jpg        bosch-wan28020by.jpg
bosch-wgg142000e.jpg        bosch-wng254a0by.jpg        bosch-wab28262by.jpg
bosch-wkd28352eu.jpg
lg-f4wv509s1e.jpg           lg-f2wv3s7s3e.jpg           lg-f4wv508s0e.jpg
lg-f4wv710s1e.jpg           lg-f4dr510s0w.jpg
samsung-ww90t4040ee.jpg     samsung-ww70t4020ee.jpg     samsung-ww80t4040ee.jpg
samsung-ww10t604dlw.jpg     samsung-wd10t654dbe.jpg     samsung-ww70j5355dw.jpg
samsung-ww80m644opw.jpg
whirlpool-fscr80420.jpg     whirlpool-fwsg71283bv.jpg   whirlpool-wrsb7259ds.jpg
whirlpool-tdlrb7220l.jpg    whirlpool-aws71200.jpg      whirlpool-fwdg961bsv.jpg
whirlpool-wdwg961485bsu.jpg whirlpool-wfsc71053pe.jpg
aeg-lwr7485m4u.jpg          aeg-l6fbl841e.jpg           aeg-l7fbe841e.jpg
aeg-l9wec163c.jpg           aeg-l7wee965.jpg            aeg-l6fbl741e.jpg
aeg-l8fbe94sc.jpg
beko-b3wft57423pw.jpg       beko-b3wfr59023pw.jpg       beko-b3wfr510023pw.jpg
beko-bwi386d4.jpg           beko-wtv8612xs0.jpg         beko-btv8001bh0.jpg
electrolux-ew6f3844as.jpg   electrolux-ew6f5943tp.jpg
```

**Ostatní obrázky:**
```
autor.jpg          — tvoje fotka (čtvercová, min. 160×160 px)
logo.png           — logo webu (pro schema.org Organization)
og-homepage.jpg    — OG obrázek pro homepage (1200×630 px)
```
OG obrázky pro segmenty (`og-pracky-lg.jpg` atd.) jsou volitelné — pokud chybí, stránky fungují bez nich.

### 4. Texty recenzí (`recenze_shrnuti`)
Všechny texty v `data/produkty.php` u klíče `recenze_shrnuti` jsou zástupné a **musí být přepsány** po přečtení skutečných recenzí na Alze a Heurece. Pravidla:
- Žádné vlastní testování — pouze agregace cizích zdrojů
- Uvádět, odkud informace pochází
- Viz sekce 1 zadání (`zadani-test-pracek.md`)

---

## Segmenty a jejich počty produktů

| Segment | Produktů |
|---|---|
| pracky-s-prednim-plnenim | 29 |
| pracky-7-kg | 13 |
| pracky-8-kg | 12 |
| pracky-9-kg | 12 |
| pracky-whirlpool | 8 |
| pracky-bosch | 7 |
| pracky-samsung | 7 |
| pracky-aeg | 7 |
| pracky-beko | 6 |
| pracky-lg | 5 |
| pracky-se-susickou | 5 |
| vestavne-pracky | 5 |
| pracky-10-kg | 5 |
| uzke-pracky | 5 |
| pracky-s-hornim-plnenim | 3 — segment NEVZNIKL |
| pracky-electrolux | 2 — segment NEVZNIKL |

---

## Poznámky

- PHP soubory: všechny prošly `php -l` bez chyb
- Zadání je v `zadani-test-pracek.md`
- Záloha starého webu je v `_backup/`
- Přesměrování starých ročníků (`/2022/` → `/`) je zatím pouze v dokumentaci zadání — implementovat v `.htaccess` (krok 7)
