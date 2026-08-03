<?php
/**
 * Katalog produktů — reálná data z affiliate feedu Alzy (affiliate.alza.cz/feed.xml?id=40038),
 * staženo a spárováno 2026-08-03. Cena, obrázek, EAN a URL pocházejí přímo z feedu.
 * Technické parametry označené poznámkou "EPREL: overit" je nutné dohledat v registru EPREL podle EAN
 * (jsou to buď rozumné odhady na základě typu produktu, nebo nejsou v podkladech k dispozici).
 */
return [
  'bosch-wge03200by' => [
    'slug' => 'bosch-wge03200by', 'nazev' => 'Bosch WGE03200BY Serie 2', 'znacka' => 'Bosch',
    'ean' => '4242005444311', 'alza_id' => 'WGE03200BY',
    'alza_url' => 'https://www.alza.cz/bosch-wge03200by-serie-2-d12365745.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BOPR100/BOPR100.jpg',
    'cena_orient' => 9789, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 8, 'otacky' => 1200,
    'energ_trida' => 'A', 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'SilentPowerDrive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-bosch', 'pracky-8-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Bosch WGE03200BY Serie 2: 8 kg, energetická třída A. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor SilentPowerDrive (invertorový)', 'Energetická třída A (dle popisu výrobce)', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 4242005444311
    // Zdroj: Alza affiliate feed, položka "BOSCH WGE03200BY Serie 2"
  ],

  'bosch-wan24170by' => [
    'slug' => 'bosch-wan24170by', 'nazev' => 'Bosch WAN24170BY Serie 4', 'znacka' => 'Bosch',
    'ean' => '4242005403264', 'alza_id' => 'WAN24170BY',
    'alza_url' => 'https://www.alza.cz/bosch-wan24170by-d8134042.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BOPR083/BOPR083.jpg',
    'cena_orient' => 11490, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 8, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'EcoSilence Drive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-bosch', 'pracky-8-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Bosch WAN24170BY Serie 4: 8 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EcoSilence Drive (invertorový)', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 4242005403264
    // Zdroj: Alza affiliate feed, položka "BOSCH WAN24170BY Serie 4"
  ],

  'bosch-wgg242z2by' => [
    'slug' => 'bosch-wgg242z2by', 'nazev' => 'Bosch WGG242Z2BY Serie 6', 'znacka' => 'Bosch',
    'ean' => '4242005450275', 'alza_id' => 'WGG242Z2BY',
    'alza_url' => 'https://www.alza.cz/bosch-wgg242z2by-d12280578.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BOPR091/BOPR091.jpg',
    'cena_orient' => 13490, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 9, 'otacky' => 1200,
    'energ_trida' => 'A', 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'EcoSilence Drive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-bosch', 'pracky-9-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Bosch WGG242Z2BY Serie 6: 9 kg, energetická třída A. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EcoSilence Drive (invertorový)', 'Energetická třída A (dle popisu výrobce)', 'Kapacita 9 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 4242005450275
    // Zdroj: Alza affiliate feed, položka "BOSCH WGG242Z2BY Serie 6"
  ],

  'bosch-wgg244z3by' => [
    'slug' => 'bosch-wgg244z3by', 'nazev' => 'Bosch WGG244Z3BY Serie 6', 'znacka' => 'Bosch',
    'ean' => '4242005440610', 'alza_id' => 'WGG244Z3BY',
    'alza_url' => 'https://www.alza.cz/bosch-wgg244z3by-d12280582.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BOPR095/BOPR095.jpg',
    'cena_orient' => 15990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 9, 'otacky' => 1400,
    'energ_trida' => 'A', 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'EcoSilence Drive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-bosch', 'pracky-9-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Bosch WGG244Z3BY Serie 6: 9 kg, energetická třída A. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EcoSilence Drive (invertorový)', 'Energetická třída A (dle popisu výrobce)', 'Kapacita 9 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 4242005440610
    // Zdroj: Alza affiliate feed, položka "BOSCH WGG244Z3BY Serie 6"
  ],

  'bosch-wgh256a0by' => [
    'slug' => 'bosch-wgh256a0by', 'nazev' => 'Bosch WGH256A0BY Serie 6', 'znacka' => 'Bosch',
    'ean' => '4242005469406', 'alza_id' => 'WGH256A0BY',
    'alza_url' => 'https://www.alza.cz/bosch-wgh256a0by-serie-6-d12549708.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BOPR111/BOPR111.jpg',
    'cena_orient' => 20490, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 10, 'otacky' => 1600,
    'energ_trida' => 'A', 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'EcoSilence Drive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-bosch', 'pracky-10-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Bosch WGH256A0BY Serie 6: 10 kg, energetická třída A. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EcoSilence Drive (invertorový)', 'Energetická třída A (dle popisu výrobce)', 'Kapacita 10 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 4242005469406
    // Zdroj: Alza affiliate feed, položka "BOSCH WGH256A0BY Serie 6"
  ],

  'bosch-wna13400by' => [
    'slug' => 'bosch-wna13400by', 'nazev' => 'Bosch WNA13400BY Serie 4', 'znacka' => 'Bosch',
    'ean' => '4242005250189', 'alza_id' => 'WNA13400BY',
    'alza_url' => 'https://www.alza.cz/bosch-wna13400by-d6389982.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BOPS006/BOPS006.jpg',
    'cena_orient' => 14890, 'cena_datum' => '2026-08-03',
    'typ' => 'susicka', 'kapacita' => 8, 'kapacita_susicka' => 5, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 180, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 61, 'vyska' => 85, 'motor' => 'EcoSilence Drive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-bosch', 'pracky-8-kg', 'pracky-se-susickou'],
    'verdikt' => 'Bosch WNA13400BY Serie 4: 8 kg, sušení 5 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EcoSilence Drive (invertorový)', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 4242005250189
    // Zdroj: Alza affiliate feed, položka "BOSCH WNA13400BY Serie 4"
  ],

  'bosch-wng254a0by' => [
    'slug' => 'bosch-wng254a0by', 'nazev' => 'Bosch WNG254A0BY Serie 6', 'znacka' => 'Bosch',
    'ean' => '4242005377428', 'alza_id' => 'WNG254A0BY',
    'alza_url' => 'https://www.alza.cz/bosch-wng254a0by-d12280587.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BOPS015/BOPS015.jpg',
    'cena_orient' => 23990, 'cena_datum' => '2026-08-03',
    'typ' => 'susicka', 'kapacita' => 10, 'kapacita_susicka' => 6, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 180, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 61, 'vyska' => 85, 'motor' => 'EcoSilence Drive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-bosch', 'pracky-10-kg', 'pracky-se-susickou'],
    'verdikt' => 'Bosch WNG254A0BY Serie 6: 10 kg, sušení 6 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EcoSilence Drive (invertorový)', 'Kapacita 10 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 4242005377428
    // Zdroj: Alza affiliate feed, položka "BOSCH WNG254A0BY Serie 6"
  ],

  'lg-fa2s8v3gn3w' => [
    'slug' => 'lg-fa2s8v3gn3w', 'nazev' => 'LG FA2S8V3GN3W', 'znacka' => 'LG',
    'ean' => '8806084245236', 'alza_id' => 'FA2S8V3GN3W',
    'alza_url' => 'https://www.alza.cz/lg-fa2s8v3gn3w-d7951214.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/LGPR084/LGPR084.jpg',
    'cena_orient' => 9990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 8, 'otacky' => 1200,
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 45, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'Direct Drive (invertorový)', 'wifi' => true,
    'segmenty' => ['pracky-lg', 'pracky-8-kg', 'pracky-s-prednim-plnenim', 'uzke-pracky'],
    'verdikt' => 'LG FA2S8V3GN3W: 8 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor Direct Drive (invertorový)', 'Wi-Fi ovládání přes mobilní aplikaci', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806084245236
    // Zdroj: Alza affiliate feed, položka "LG FA2S8V3GN3W"
  ],

  'lg-flr5a92ws' => [
    'slug' => 'lg-flr5a92ws', 'nazev' => 'LG FLR5A92WS', 'znacka' => 'LG',
    'ean' => '8806084479068', 'alza_id' => 'FLR5A92WS',
    'alza_url' => 'https://www.alza.cz/lg-flr5a92ws-d7843085.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/LGPR081/LGPR081.jpg',
    'cena_orient' => 12390, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 9, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 45, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'Direct Drive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-lg', 'pracky-9-kg', 'pracky-s-prednim-plnenim', 'uzke-pracky'],
    'verdikt' => 'LG FLR5A92WS: 9 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor Direct Drive (invertorový)', 'Kapacita 9 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806084479068
    // Zdroj: Alza affiliate feed, položka "LG FLR5A92WS"
  ],

  'lg-flr7a92wg' => [
    'slug' => 'lg-flr7a92wg', 'nazev' => 'LG FLR7A92WG', 'znacka' => 'LG',
    'ean' => '8806084543592', 'alza_id' => 'FLR7A92WG',
    'alza_url' => 'https://www.alza.cz/lg-flr7a92wg-d9934673.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/LGPR088/LGPR088.jpg',
    'cena_orient' => 13890, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 9, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 45, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'Direct Drive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-lg', 'pracky-9-kg', 'pracky-s-prednim-plnenim', 'uzke-pracky'],
    'verdikt' => 'LG FLR7A92WG: 9 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor Direct Drive (invertorový)', 'Kapacita 9 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806084543592
    // Zdroj: Alza affiliate feed, položka "LG FLR7A92WG"
  ],

  'lg-flr9a92wc' => [
    'slug' => 'lg-flr9a92wc', 'nazev' => 'LG FLR9A92WC', 'znacka' => 'LG',
    'ean' => '8806084565211', 'alza_id' => 'FLR9A92WC',
    'alza_url' => 'https://www.alza.cz/lg-flr9a92wc-d10907223.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/LGPR089/LGPR089.jpg',
    'cena_orient' => 14990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 9, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 45, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'Direct Drive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-lg', 'pracky-9-kg', 'pracky-s-prednim-plnenim', 'uzke-pracky'],
    'verdikt' => 'LG FLR9A92WC: 9 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor Direct Drive (invertorový)', 'Kapacita 9 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806084565211
    // Zdroj: Alza affiliate feed, položka "LG FLR9A92WC"
  ],

  'lg-fsr7a04wc' => [
    'slug' => 'lg-fsr7a04wc', 'nazev' => 'LG FSR7A04WC', 'znacka' => 'LG',
    'ean' => '8806084138231', 'alza_id' => 'FSR7A04WC',
    'alza_url' => 'https://www.alza.cz/lg-fsr7a04wc-d12310641.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/LGPR091/LGPR091.jpg',
    'cena_orient' => 16890, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 10, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'A', 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'invertorový', 'wifi' => true,
    'segmenty' => ['pracky-lg', 'pracky-10-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'LG FSR7A04WC: 10 kg, energetická třída A. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor invertorový', 'Energetická třída A (dle popisu výrobce)', 'Wi-Fi ovládání přes mobilní aplikaci', 'Kapacita 10 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806084138231
    // Zdroj: Alza affiliate feed, položka "LG FSR7A04WC"
  ],

  'lg-fcr5a06ww' => [
    'slug' => 'lg-fcr5a06ww', 'nazev' => 'LG FCR5A06WW', 'znacka' => 'LG',
    'ean' => '8806084118622', 'alza_id' => 'FCR5A06WW',
    'alza_url' => 'https://www.alza.cz/lg-fcr5a06ww-d7917930.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/LGPS031/LGPS031.jpg',
    'cena_orient' => 15490, 'cena_datum' => '2026-08-03',
    'typ' => 'susicka', 'kapacita' => 10, 'kapacita_susicka' => 6, 'otacky' => 1400,
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 180, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 61, 'vyska' => 85, 'motor' => 'Direct Drive (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-lg', 'pracky-10-kg', 'pracky-se-susickou'],
    'verdikt' => 'LG FCR5A06WW: 10 kg, sušení 6 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor Direct Drive (invertorový)', 'Kapacita 10 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806084118622
    // Zdroj: Alza affiliate feed, položka "LG FCR5A06WW"
  ],

  'samsung-ww80cgc04dable' => [
    'slug' => 'samsung-ww80cgc04dable', 'nazev' => 'Samsung WW80CGC04DABLE', 'znacka' => 'Samsung',
    'ean' => '8806095210230', 'alza_id' => 'WW80CGC04DABLE',
    'alza_url' => 'https://www.alza.cz/samsung-ecobubble-ww80cgc04dable-d8629870.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/SAWM084/SAWM084.jpg',
    'cena_orient' => 8990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 8, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'neuvedeno výrobcem', 'wifi' => false,
    'segmenty' => ['pracky-samsung', 'pracky-8-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Samsung WW80CGC04DABLE: 8 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor neuvedeno výrobcem', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806095210230
    // Zdroj: Alza affiliate feed, položka "SAMSUNG WW80CGC04DABLE"
  ],

  'samsung-ww80cgc04dtele' => [
    'slug' => 'samsung-ww80cgc04dtele', 'nazev' => 'Samsung WW80CGC04DTELE', 'znacka' => 'Samsung',
    'ean' => '8806095210407', 'alza_id' => 'WW80CGC04DTELE',
    'alza_url' => 'https://www.alza.cz/samsung-ecobubble-ww80cgc04dtele-d8629868.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/SAWM085/SAWM085.jpg',
    'cena_orient' => 10990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 8, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'neuvedeno výrobcem', 'wifi' => false,
    'segmenty' => ['pracky-samsung', 'pracky-8-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Samsung WW80CGC04DTELE: 8 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor neuvedeno výrobcem', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806095210407
    // Zdroj: Alza affiliate feed, položka "SAMSUNG WW80CGC04DTELE"
  ],

  'samsung-ww90cgc04dtele' => [
    'slug' => 'samsung-ww90cgc04dtele', 'nazev' => 'Samsung EcoBubble WW90CGC04DTELE', 'znacka' => 'Samsung',
    'ean' => '8806095210827', 'alza_id' => 'WW90CGC04DTELE',
    'alza_url' => 'https://www.alza.cz/samsung-ecobubble-ww90cgc04dtele-d8629869.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/SAWM086/SAWM086.jpg',
    'cena_orient' => 10990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 9, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'neuvedeno výrobcem', 'wifi' => false,
    'segmenty' => ['pracky-samsung', 'pracky-9-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Samsung EcoBubble WW90CGC04DTELE: 9 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor neuvedeno výrobcem', 'Kapacita 9 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806095210827
    // Zdroj: Alza affiliate feed, položka "SAMSUNG EcoBubble WW90CGC04DTELE"
  ],

  'samsung-ww10fg5u34aele' => [
    'slug' => 'samsung-ww10fg5u34aele', 'nazev' => 'Samsung WW10FG5U34AELE', 'znacka' => 'Samsung',
    'ean' => '8806097804758', 'alza_id' => 'WW10FG5U34AELE',
    'alza_url' => 'https://www.alza.cz/samsung-ww10fg5u34aele-d13075460.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/SAWM106/SAWM106.jpg',
    'cena_orient' => 10990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 10, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'invertorový', 'wifi' => true,
    'segmenty' => ['pracky-samsung', 'pracky-10-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Samsung WW10FG5U34AELE: 10 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor invertorový', 'Wi-Fi ovládání přes mobilní aplikaci', 'Kapacita 10 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806097804758
    // Zdroj: Alza affiliate feed, položka "SAMSUNG WW10FG5U34AELE"
  ],

  'samsung-ww10fg6u94lbu4' => [
    'slug' => 'samsung-ww10fg6u94lbu4', 'nazev' => 'Samsung WW10FG6U94LBU4', 'znacka' => 'Samsung',
    'ean' => '8806097804864', 'alza_id' => 'WW10FG6U94LBU4',
    'alza_url' => 'https://www.alza.cz/samsung-ww10fg6u94lbu4-d13075461.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/SAWM105/SAWM105.jpg',
    'cena_orient' => 11590, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 10, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'invertorový', 'wifi' => true,
    'segmenty' => ['pracky-samsung', 'pracky-10-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Samsung WW10FG6U94LBU4: 10 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor invertorový', 'Wi-Fi ovládání přes mobilní aplikaci', 'Kapacita 10 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806097804864
    // Zdroj: Alza affiliate feed, položka "SAMSUNG WW10FG6U94LBU4"
  ],

  'samsung-wd90dg5g34bble' => [
    'slug' => 'samsung-wd90dg5g34bble', 'nazev' => 'Samsung WD90DG5G34BBLE', 'znacka' => 'Samsung',
    'ean' => '8806097053026', 'alza_id' => '8806097053026',
    'alza_url' => 'https://www.alza.cz/samsung-wd90dg5g34bble-d13037077.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/SAWM002HU/SAWM002HU.jpg',
    'cena_orient' => 14990, 'cena_datum' => '2026-08-03',
    'typ' => 'susicka', 'kapacita' => 9, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 180, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 61, 'vyska' => 85, 'motor' => 'invertorový', 'wifi' => true,
    'segmenty' => ['pracky-samsung', 'pracky-9-kg', 'pracky-se-susickou'],
    'verdikt' => 'Samsung WD90DG5G34BBLE: 9 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor invertorový', 'Wi-Fi ovládání přes mobilní aplikaci', 'Kapacita 9 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806097053026
    // Zdroj: Alza affiliate feed, položka "SAMSUNG WD90DG5G34BBLE"
  ],

  'samsung-ww11dg6b25leu4' => [
    'slug' => 'samsung-ww11dg6b25leu4', 'nazev' => 'Samsung EcoBubble WW11DG6B25LEU4', 'znacka' => 'Samsung',
    'ean' => '8806095539737', 'alza_id' => 'WW11DG6B25LEU4',
    'alza_url' => 'https://www.alza.cz/samsung-ecobubble-ww11dg6b25leu4-d12355027.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/SAWM095/SAWM095.jpg',
    'cena_orient' => 13752, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 11, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'neuvedeno výrobcem', 'wifi' => true,
    'segmenty' => ['pracky-samsung', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Samsung EcoBubble WW11DG6B25LEU4: 11 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor neuvedeno výrobcem', 'Wi-Fi ovládání přes mobilní aplikaci', 'Kapacita 11 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8806095539737
    // Zdroj: Alza affiliate feed, položka "SAMSUNG EcoBubble WW11DG6B25LEU4"
  ],

  'whirlpool-wam76wbee' => [
    'slug' => 'whirlpool-wam76wbee', 'nazev' => 'Whirlpool WAM 76WB EE', 'znacka' => 'Whirlpool',
    'ean' => '8003437065170', 'alza_id' => '8003437065170',
    'alza_url' => 'https://www.alza.cz/whirlpool-wam-76wb-ee-d12943478.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/WHPR150/WHPR150.jpg',
    'cena_orient' => 11990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 7, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 45, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'invertorový', 'wifi' => true,
    'segmenty' => ['pracky-whirlpool', 'pracky-7-kg', 'pracky-s-prednim-plnenim', 'uzke-pracky'],
    'verdikt' => 'Whirlpool WAM 76WB EE: 7 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor invertorový', 'Wi-Fi ovládání přes mobilní aplikaci', 'Kapacita 7 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8003437065170
    // Zdroj: Alza affiliate feed, položka "WHIRLPOOL WAM 76WB EE"
  ],

  'whirlpool-wpm87gadsee' => [
    'slug' => 'whirlpool-wpm87gadsee', 'nazev' => 'Whirlpool WPM 87G ADS EE', 'znacka' => 'Whirlpool',
    'ean' => '8003437062568', 'alza_id' => '869991704050',
    'alza_url' => 'https://www.alza.cz/whirlpool-wpm-87g-ads-ee-d13041932.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/WHPR153/WHPR153.jpg',
    'cena_orient' => 12990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 8, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'A', 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'invertorový (6. SMYSL)', 'wifi' => true,
    'segmenty' => ['pracky-whirlpool', 'pracky-8-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Whirlpool WPM 87G ADS EE: 8 kg, energetická třída A. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor invertorový (6. SMYSL)', 'Energetická třída A (dle popisu výrobce)', 'Wi-Fi ovládání přes mobilní aplikaci', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8003437062568
    // Zdroj: Alza affiliate feed, položka "WHIRLPOOL WPM 87G ADS EE"
  ],

  'whirlpool-bi-wmwg71483e' => [
    'slug' => 'whirlpool-bi-wmwg71483e', 'nazev' => 'Whirlpool BI WMWG 71483E EU N', 'znacka' => 'Whirlpool',
    'ean' => '8003437616884', 'alza_id' => '869991620860',
    'alza_url' => 'https://www.alza.cz/whirlpool-bi-wmwg-71483e-eu-n-d7263494.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/WHPR101/WHPR101.jpg',
    'cena_orient' => 11390, 'cena_datum' => '2026-08-03',
    'typ' => 'vestavna', 'kapacita' => 7, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'D', 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 58, 'vyska' => 82, 'motor' => 'neuvedeno výrobcem', 'wifi' => false,
    'segmenty' => ['pracky-whirlpool', 'pracky-7-kg', 'vestavne-pracky'],
    'verdikt' => 'Whirlpool BI WMWG 71483E EU N: 7 kg, energetická třída D. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor neuvedeno výrobcem', 'Energetická třída D (dle popisu výrobce)', 'Kapacita 7 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8003437616884
    // Zdroj: Alza affiliate feed, položka "WHIRLPOOL BI WMWG 71483E EU N"
  ],

  'whirlpool-bi-wmwg81485e' => [
    'slug' => 'whirlpool-bi-wmwg81485e', 'nazev' => 'Whirlpool BI WMWG 81485E EU', 'znacka' => 'Whirlpool',
    'ean' => '8003437643903', 'alza_id' => '869991664650',
    'alza_url' => 'https://www.alza.cz/whirlpool-bi-wmwg-81485e-eu-d9871955.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/WHPR136/WHPR136.jpg',
    'cena_orient' => 12990, 'cena_datum' => '2026-08-03',
    'typ' => 'vestavna', 'kapacita' => 8, 'otacky' => 1400,
    'energ_trida' => 'B', 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 58, 'vyska' => 82, 'motor' => 'invertorový', 'wifi' => false,
    'segmenty' => ['pracky-whirlpool', 'pracky-8-kg', 'vestavne-pracky'],
    'verdikt' => 'Whirlpool BI WMWG 81485E EU: 8 kg, energetická třída B. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor invertorový', 'Energetická třída B (dle popisu výrobce)', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8003437643903
    // Zdroj: Alza affiliate feed, položka "WHIRLPOOL BI WMWG 81485E EU"
  ],

  'whirlpool-bi-wdwg751482' => [
    'slug' => 'whirlpool-bi-wdwg751482', 'nazev' => 'Whirlpool BI WDWG 751482 EU N', 'znacka' => 'Whirlpool',
    'ean' => '8003437616907', 'alza_id' => '869991620880',
    'alza_url' => 'https://www.alza.cz/whirlpool-bi-wdwg-751482-eu-n-d6251806.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/WHPS002/WHPS002.jpg',
    'cena_orient' => 11990, 'cena_datum' => '2026-08-03',
    'typ' => 'susicka', 'kapacita' => 7, 'kapacita_susicka' => 5, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'E', 'spotreba_kwh' => 180, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 61, 'vyska' => 85, 'motor' => 'neuvedeno výrobcem', 'wifi' => false,
    'segmenty' => ['pracky-whirlpool', 'pracky-7-kg', 'pracky-se-susickou'],
    'verdikt' => 'Whirlpool BI WDWG 751482 EU N: 7 kg, sušení 5 kg, energetická třída E. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor neuvedeno výrobcem', 'Energetická třída E (dle popisu výrobce)', 'Kapacita 7 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8003437616907
    // Zdroj: Alza affiliate feed, položka "WHIRLPOOL BI WDWG 751482 EU N"
  ],

  'whirlpool-bi-wdwg861485' => [
    'slug' => 'whirlpool-bi-wdwg861485', 'nazev' => 'Whirlpool BI WDWG 861485 EU', 'znacka' => 'Whirlpool',
    'ean' => '8003437643811', 'alza_id' => '869991664240',
    'alza_url' => 'https://www.alza.cz/whirlpool-bi-wdwg-861485-eu-d9871951.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/WHPR137/WHPR137.jpg',
    'cena_orient' => 13990, 'cena_datum' => '2026-08-03',
    'typ' => 'susicka', 'kapacita' => 8, 'kapacita_susicka' => 6, 'otacky' => 1400,
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 180, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 61, 'vyska' => 85, 'motor' => 'invertorový', 'wifi' => false,
    'segmenty' => ['pracky-whirlpool', 'pracky-8-kg', 'pracky-se-susickou'],
    'verdikt' => 'Whirlpool BI WDWG 861485 EU: 8 kg, sušení 6 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor invertorový', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8003437643811
    // Zdroj: Alza affiliate feed, položka "WHIRLPOOL BI WDWG 861485 EU"
  ],

  'whirlpool-ffwdd1076258bv' => [
    'slug' => 'whirlpool-ffwdd1076258bv', 'nazev' => 'Whirlpool FFWDD 1076258 BV EU', 'znacka' => 'Whirlpool',
    'ean' => '8003437636028', 'alza_id' => '869991651120',
    'alza_url' => 'https://www.alza.cz/whirlpool-ffwdd-1076258-bv-eu-d9871952.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/WHPR139/WHPR139.jpg',
    'cena_orient' => 15490, 'cena_datum' => '2026-08-03',
    'typ' => 'susicka', 'kapacita' => 10, 'kapacita_susicka' => 7, 'otacky' => 1600,
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 180, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 61, 'vyska' => 85, 'motor' => 'SenseInverter (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-whirlpool', 'pracky-10-kg', 'pracky-se-susickou'],
    'verdikt' => 'Whirlpool FFWDD 1076258 BV EU: 10 kg, sušení 7 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor SenseInverter (invertorový)', 'Kapacita 10 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8003437636028
    // Zdroj: Alza affiliate feed, položka "WHIRLPOOL FFWDD 1076258 BV EU"
  ],

  'whirlpool-tdlr7251bs' => [
    'slug' => 'whirlpool-tdlr7251bs', 'nazev' => 'Whirlpool TDLR 7251BS EU/N', 'znacka' => 'Whirlpool',
    'ean' => '8003437065453', 'alza_id' => '8003437065453',
    'alza_url' => 'https://www.alza.cz/whirlpool-tdlr-7251bs-eu-n-d12921083.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/WHPR148/WHPR148.jpg',
    'cena_orient' => 11490, 'cena_datum' => '2026-08-03',
    'typ' => 'horni', 'kapacita' => 7, 'otacky' => 1000, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 40, 'hloubka' => 60, 'vyska' => 90, 'motor' => 'invertorový', 'wifi' => false,
    'segmenty' => ['pracky-whirlpool', 'pracky-7-kg'],
    'verdikt' => 'Whirlpool TDLR 7251BS EU/N: 7 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor invertorový', 'Kapacita 7 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8003437065453
    // Zdroj: Alza affiliate feed, položka "WHIRLPOOL TDLR 7251BS EU/N"
  ],

  'aeg-lfr61842qc' => [
    'slug' => 'aeg-lfr61842qc', 'nazev' => 'AEG LFR61842QC', 'znacka' => 'AEG',
    'ean' => '7332543979196', 'alza_id' => '7332543979196',
    'alza_url' => 'https://www.alza.cz/aeg-lfr61842qc-d7410452.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/AEGPR040/AEGPR040.jpg',
    'cena_orient' => 15990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 8, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'A', 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'neuvedeno výrobcem', 'wifi' => true,
    'segmenty' => ['pracky-aeg', 'pracky-8-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'AEG LFR61842QC: 8 kg, energetická třída A. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor neuvedeno výrobcem', 'Energetická třída A (dle popisu výrobce)', 'Wi-Fi ovládání přes mobilní aplikaci', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 7332543979196
    // Zdroj: Alza affiliate feed, položka "AEG LFR61842QC"
  ],

  'aeg-lfr61942bc' => [
    'slug' => 'aeg-lfr61942bc', 'nazev' => 'AEG 6000 ProSense™ LFR61942BC', 'znacka' => 'AEG',
    'ean' => '7332543974313', 'alza_id' => '7332543974313',
    'alza_url' => 'https://www.alza.cz/aeg-6000-prosense-lfr61942bc-d7555240.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/AEGPR048/AEGPR048.jpg',
    'cena_orient' => 11890, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 9, 'otacky' => 1400,
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'invertorový (ProSense)', 'wifi' => false,
    'segmenty' => ['pracky-aeg', 'pracky-9-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'AEG 6000 ProSense™ LFR61942BC: 9 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor invertorový (ProSense)', 'Kapacita 9 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 7332543974313
    // Zdroj: Alza affiliate feed, položka "AEG 6000 ProSense™ LFR61942BC"
  ],

  'aeg-lfr83166oc' => [
    'slug' => 'aeg-lfr83166oc', 'nazev' => 'AEG 8000 PowerCare UniversalDose LFR83166OC', 'znacka' => 'AEG',
    'ean' => '7332543975440', 'alza_id' => '7332543975440',
    'alza_url' => 'https://www.alza.cz/aeg-8000-powercare-universaldose-lfr83166oc-d7619312.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/AEGPR058/AEGPR058.jpg',
    'cena_orient' => 18990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 10, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'A', 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'neuvedeno výrobcem', 'wifi' => false,
    'segmenty' => ['pracky-aeg', 'pracky-10-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'AEG 8000 PowerCare UniversalDose LFR83166OC: 10 kg, energetická třída A. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor neuvedeno výrobcem', 'Energetická třída A (dle popisu výrobce)', 'Kapacita 10 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 7332543975440
    // Zdroj: Alza affiliate feed, položka "AEG 8000 PowerCare UniversalDose LFR83166OC"
  ],

  'aeg-lfr83146soc' => [
    'slug' => 'aeg-lfr83146soc', 'nazev' => 'AEG 8000 PowerCare UniversalDose LFR83146SOC', 'znacka' => 'AEG',
    'ean' => '7333394123332', 'alza_id' => '914505411',
    'alza_url' => 'https://www.alza.cz/aeg-8000-powercare-universaldose-lfr83146soc-d12914438.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/AEGPR080/AEGPR080.jpg',
    'cena_orient' => 19490, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 10, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'A', 'spotreba_kwh' => 26,
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'neuvedeno výrobcem', 'wifi' => false,
    'segmenty' => ['pracky-aeg', 'pracky-10-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'AEG 8000 PowerCare UniversalDose LFR83146SOC: 10 kg, energetická třída A. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor neuvedeno výrobcem', 'Energetická třída A (dle popisu výrobce)', 'Kapacita 10 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 7333394123332
    // Zdroj: Alza affiliate feed, položka "AEG 8000 PowerCare UniversalDose LFR83146SOC"
  ],

  'aeg-lwr71842bc' => [
    'slug' => 'aeg-lwr71842bc', 'nazev' => 'AEG 7000 ProSteam® LWR71842BC', 'znacka' => 'AEG',
    'ean' => '7332543848065', 'alza_id' => '914610301',
    'alza_url' => 'https://www.alza.cz/aeg-7000-prosteam-lwr71842bc-d7762208.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/AEGPS0024/AEGPS0024.jpg',
    'cena_orient' => 15990, 'cena_datum' => '2026-08-03',
    'typ' => 'susicka', 'kapacita' => 8, 'kapacita_susicka' => 5, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 180, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 61, 'vyska' => 85, 'motor' => 'Ökoinvertor (invertorový)', 'wifi' => false,
    'segmenty' => ['pracky-aeg', 'pracky-8-kg', 'pracky-se-susickou'],
    'verdikt' => 'AEG 7000 ProSteam® LWR71842BC: 8 kg, sušení 5 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor Ökoinvertor (invertorový)', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 7332543848065
    // Zdroj: Alza affiliate feed, položka "AEG 7000 ProSteam® LWR71842BC"
  ],

  'beko-bm3wfsu47415wb' => [
    'slug' => 'beko-bm3wfsu47415wb', 'nazev' => 'Beko BM3WFSU47415WB', 'znacka' => 'Beko',
    'ean' => '8690842633805', 'alza_id' => '7004340002',
    'alza_url' => 'https://www.alza.cz/beko-bm3wfsu47415wb-d12757849.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BEPR159/BEPR159.jpg',
    'cena_orient' => 8490, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 7, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'EnergySpin', 'wifi' => false,
    'segmenty' => ['pracky-beko', 'pracky-7-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Beko BM3WFSU47415WB: 7 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EnergySpin', 'Kapacita 7 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8690842633805
    // Zdroj: Alza affiliate feed, položka "BEKO BM3WFSU47415WB"
  ],

  'beko-b3wfu4741wwg' => [
    'slug' => 'beko-b3wfu4741wwg', 'nazev' => 'Beko B3WFU4741WWG', 'znacka' => 'Beko',
    'ean' => '8690842683732', 'alza_id' => '7002740028',
    'alza_url' => 'https://www.alza.cz/beko-b3wfu4741wwg-d12486728.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BEPR147/BEPR147.jpg',
    'cena_orient' => 9419, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 7, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'EnergySpin', 'wifi' => false,
    'segmenty' => ['pracky-beko', 'pracky-7-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Beko B3WFU4741WWG: 7 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EnergySpin', 'Kapacita 7 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8690842683732
    // Zdroj: Alza affiliate feed, položka "BEKO B3WFU4741WWG"
  ],

  'beko-bm3wfu4821wc' => [
    'slug' => 'beko-bm3wfu4821wc', 'nazev' => 'Beko BM3WFU4821WC', 'znacka' => 'Beko',
    'ean' => '8690842657948', 'alza_id' => '7004440007',
    'alza_url' => 'https://www.alza.cz/beko-bm3wfu4821wc-d12504849.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BEPR149/BEPR149.jpg',
    'cena_orient' => 8090, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 8, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'EnergySpin', 'wifi' => false,
    'segmenty' => ['pracky-beko', 'pracky-8-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Beko BM3WFU4821WC: 8 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EnergySpin', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8690842657948
    // Zdroj: Alza affiliate feed, položka "BEKO BM3WFU4821WC"
  ],

  'beko-bm3wfsu48415wb' => [
    'slug' => 'beko-bm3wfsu48415wb', 'nazev' => 'Beko BM3WFSU48415WB', 'znacka' => 'Beko',
    'ean' => '8690842657931', 'alza_id' => '7004840003',
    'alza_url' => 'https://www.alza.cz/beko-bm3wfsu48415wb-d12757847.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BEPR160/BEPR160.jpg',
    'cena_orient' => 8990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 8, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'EnergySpin', 'wifi' => false,
    'segmenty' => ['pracky-beko', 'pracky-8-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Beko BM3WFSU48415WB: 8 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EnergySpin', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8690842657931
    // Zdroj: Alza affiliate feed, položka "BEKO BM3WFSU48415WB"
  ],

  'beko-bm3wfu4941ww' => [
    'slug' => 'beko-bm3wfu4941ww', 'nazev' => 'Beko BM3WFU4941WW', 'znacka' => 'Beko',
    'ean' => '8690842657979', 'alza_id' => '7004840021',
    'alza_url' => 'https://www.alza.cz/beko-bm3wfu4941ww-d12329746.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BEPR141/BEPR141.jpg',
    'cena_orient' => 8499, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 9, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'EnergySpin', 'wifi' => false,
    'segmenty' => ['pracky-beko', 'pracky-9-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Beko BM3WFU4941WW: 9 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EnergySpin', 'Kapacita 9 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8690842657979
    // Zdroj: Alza affiliate feed, položka "BEKO BM3WFU4941WW"
  ],

  'beko-b3wbt671415w' => [
    'slug' => 'beko-b3wbt671415w', 'nazev' => 'Beko B3WBT671415W', 'znacka' => 'Beko',
    'ean' => '8690842706721', 'alza_id' => '7123983700',
    'alza_url' => 'https://www.alza.cz/beko-b3wbt671415w-d12921894.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BEPR165/BEPR165.jpg',
    'cena_orient' => 11290, 'cena_datum' => '2026-08-03',
    'typ' => 'vestavna', 'kapacita' => 7, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 58, 'vyska' => 82, 'motor' => 'EnergySpin', 'wifi' => false,
    'segmenty' => ['pracky-beko', 'pracky-7-kg', 'vestavne-pracky'],
    'verdikt' => 'Beko B3WBT671415W: 7 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EnergySpin', 'Kapacita 7 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8690842706721
    // Zdroj: Alza affiliate feed, položka "BEKO B3WBT671415W"
  ],

  'beko-b3wbt691415w' => [
    'slug' => 'beko-b3wbt691415w', 'nazev' => 'Beko B3WBT691415W', 'znacka' => 'Beko',
    'ean' => '8690842706691', 'alza_id' => '7123984000',
    'alza_url' => 'https://www.alza.cz/beko-b3wbt691415w-d12757848.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/BEPR161/BEPR161.jpg',
    'cena_orient' => 12190, 'cena_datum' => '2026-08-03',
    'typ' => 'vestavna', 'kapacita' => 9, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 58, 'vyska' => 82, 'motor' => 'EnergySpin', 'wifi' => false,
    'segmenty' => ['pracky-beko', 'pracky-9-kg', 'vestavne-pracky'],
    'verdikt' => 'Beko B3WBT691415W: 9 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor EnergySpin', 'Kapacita 9 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 8690842706691
    // Zdroj: Alza affiliate feed, položka "BEKO B3WBT691415W"
  ],

  'electrolux-ew6f3484c' => [
    'slug' => 'electrolux-ew6f3484c', 'nazev' => 'Electrolux 600 SensiCare EW6F3484C', 'znacka' => 'Electrolux',
    'ean' => '7333394041629', 'alza_id' => '914931020',
    'alza_url' => 'https://www.alza.cz/electrolux-600-sensicare-ew6f3484c-d12386248.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/ELXPR134/ELXPR134.jpg',
    'cena_orient' => 10990, 'cena_datum' => '2026-08-03',
    'typ' => 'predni', 'kapacita' => 8, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 60, 'vyska' => 85, 'motor' => 'SensiCare', 'wifi' => false,
    'segmenty' => ['pracky-8-kg', 'pracky-s-prednim-plnenim'],
    'verdikt' => 'Electrolux 600 SensiCare EW6F3484C: 8 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor SensiCare', 'Kapacita 8 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 7333394041629
    // Zdroj: Alza affiliate feed, položka "ELECTROLUX 600 SensiCare EW6F3484C"
  ],

  'electrolux-ewn7f447wi' => [
    'slug' => 'electrolux-ewn7f447wi', 'nazev' => 'Electrolux 700 SteamCare® EWN7F447WI', 'znacka' => 'Electrolux',
    'ean' => '7333394008967', 'alza_id' => '7333394008967',
    'alza_url' => 'https://www.alza.cz/electrolux-700-steamcare-ewn7f447wi-d7820574.htm?idp=2504&banner_id=138051',
    'obrazek' => 'https://cdn.alza.cz/products/ELXPR110/ELXPR110.jpg',
    'cena_orient' => 13769, 'cena_datum' => '2026-08-03',
    'typ' => 'vestavna', 'kapacita' => 7, 'otacky' => 1400, /* EPREL: ověřit */
    'energ_trida' => 'B', /* EPREL: ověřit */ 'spotreba_kwh' => 60, /* EPREL: ověřit */
    'spotreba_vody' => 9500, /* EPREL: ověřit */ 'hlucnost_prani' => 47, /* EPREL: ověřit */
    'hlucnost_odstred' => 73, /* EPREL: ověřit */ 'trida_odstred' => 'B', /* EPREL: ověřit */
    'sirka' => 60, 'hloubka' => 58, 'vyska' => 82, 'motor' => 'SensiCare', 'wifi' => false,
    'segmenty' => ['pracky-7-kg', 'vestavne-pracky'],
    'verdikt' => 'Electrolux 700 SteamCare® EWN7F447WI: 7 kg. Verdikt čeká na doplnění po prostudování recenzí na Alze a Heurece.',
    'pro' => ['Motor SensiCare', 'Kapacita 7 kg'],
    'proti' => ['Recenze zákazníků zatím nejsou agregované — doplnit z Alzy/Heureky', 'Bez Wi-Fi připojení'],
    'dtest' => null,
    'recenze_shrnuti' => 'Recenze zákazníků k tomuto modelu zatím nebyly zpracované — text doplnit po přečtení skutečných hodnocení na Alze a Heurece (viz metodika, sekce 1 zadání).',
    'recenze_pocet' => 0, 'recenze_zdroje' => ['Alza', 'Heureka'],
    'eprel_url' => 'https://eprel.ec.europa.eu/screen/product/washingmachines2019/', // doplnit přesnou URL podle EAN 7333394008967
    // Zdroj: Alza affiliate feed, položka "ELECTROLUX 700 SteamCare® EWN7F447WI"
  ],

];