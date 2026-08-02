<?php

function shali_make_affiliate_link_for_old($url, $aff_id, $sid = "", $domain = "")
{
    if((StrPos($url, "kasa.cz") !== false) AND (StrPos($url, "kasa.cz") < 13))  //http://www.anrdoezrs.net/links/7649407/type/dlg/http://www.kasa.cz/espresso-krups-xp562030-cerne-nerez/
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "hej.sk") !== false) AND (StrPos($url, "hej.sk") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "trendybaby.cz") !== false) AND (StrPos($url, "trendybaby.cz") < 13))
    {
        //http://tracking.affiliateclub.cz/aff_c?offer_id=437&aff_id=779&url=https%3A%2F%2Fwww.trendybaby.cz%2Fcybex-aton-q-i-size-stardust-black-2017%3Futm_campaign%3DAffilclub%26utm_medium%3Daffiliate%26utm_source%3D{affiliate_id}
        //        $out_url = "http://tracking.affiliateclub.cz/aff_c?offer_id=".$affil_id."&aff_id=779&url=".urlencode($url);  // affiliate club

        return "http://tracking.affiliateclub.cz/aff_c?offer_id=437&aff_id=779&url=".urlencode($url)."%3Futm_campaign%3DAffilclub%26utm_medium%3Daffiliate%26utm_source%3D{affiliate_id}&source=".$domain;
    }
    elseif((StrPos($url, "parfums.cz") !== false) AND (StrPos($url, "parfums.cz") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "notino.cz") !== false) AND (StrPos($url, "notino.cz") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "notino.sk") !== false) AND (StrPos($url, "notino.sk") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "notino.hu") !== false) AND (StrPos($url, "notino.hu") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "iperfumy.pl") !== false) AND (StrPos($url, "iperfumy.pl") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "parfums.sk") !== false) AND (StrPos($url, "parfums.sk") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "insportline.cz") !== false) AND (StrPos($url, "insportline.cz") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "feedo.cz") !== false) AND (StrPos($url, "feedo.cz") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "feedo.sk") !== false) AND (StrPos($url, "feedo.sk") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "feedo.pl") !== false) AND (StrPos($url, "feedo.pl") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "ceneo.pl") !== false) AND (StrPos($url, "ceneo.pl") < 13))
    {
        // http://www.ceneo.pl/21894137#cid=11723&crid=32879&pid=9370
        if($domain == "www.ranking-karm-dla-psow.eu")
        {
           $aff_id = "#crid=140630&pid=9370";
        }

        return $url.$aff_id;  // u Cenea nedávat aff_id jen číslo, ale celé !
    }
    elseif((StrPos($url, "alza.cz") !== false) AND (StrPos($url, "alza.cz") < 13))  // https://www.alza.cz/32-samsung-ue32j567-d2419813.htm?idp=2504
    {
        // U alzy obvykle nevypisuji affiliate_id, protože se mixuje s jinými e-shopy
        if($domain == 'www.test-elektrokol.cz')
        {
            $aff_id = 17420;
        }
        elseif($domain == 'www.test-navigaci.cz')
        {
            $aff_id = 17042;
        }

        if(strpos($url, "?") !== false)
            return $url."&idp=2504&banner_id=".$aff_id;
        else
            return $url."?idp=2504&banner_id=".$aff_id;
    }
    elseif((StrPos($url, "alza.sk") !== false) AND (StrPos($url, "alza.sk") < 13))
    {
        // U alzy obvykle nevypisuji affiliate_id, protože se mixuje s jinými e-shopy
        if($domain == 'www.test-navigacii.eu')
        {
            $aff_id = 17043;
        }


        if(strpos($url, "?") !== false)
            return $url."&idp=2504&banner_id=".$aff_id;
        else
            return $url."?idp=2504&banner_id=".$aff_id;
    }
    elseif((StrPos($url, "alza.hu") !== false) AND (StrPos($url, "alza.hu") < 13))
    {
        if(strpos($url, "?") !== false)
            return $url."&idp=2504&banner_id=".$aff_id;  //3085
        else
            return $url."?idp=2504&banner_id=".$aff_id;
    }
    elseif((StrPos($url, "alza.de") !== false) AND (StrPos($url, "alza.de") < 13))
    {
        if(strpos($url, "?") !== false)
            return $url."&idp=2504&banner_id=".$aff_id;  //3085
        else
            return $url."?idp=2504&banner_id=".$aff_id;
    }
    elseif((StrPos($url, "mall.hu") !== false) AND (StrPos($url, "mall.hu") < 13))
    {
       // return "http://clkuk.tradedoubler.com/click?p(145903)a(".$aff_id.")g(19587536)url(".$url.")";
        return $url;
    }
    elseif((StrPos($url, "mall.cz") !== false) AND (StrPos($url, "mall.cz") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "mall.pl") !== false) AND (StrPos($url, "mall.pl") < 13))
    {
        if ($sid != '')
        {
            $out_sid = "sid/".$sid."/";
        }
        else
        {
            $out_sid = "";
        }
        return "http://www.anrdoezrs.net/links/".$aff_id."/type/dlg/".$out_sid.$url;
    }
    elseif((StrPos($url, "zooplus.pl") !== false) AND (StrPos($url, "zooplus.pl") < 13))
    {
        return "https://www.awin1.com/cread.php?awinmid=10247&awinaffid=344433&clickref=".$sid."&p=".urlencode($url);
    }
    elseif((StrPos($url, "zoohit.cz") !== false) AND (StrPos($url, "zoohit.cz") < 13))
    {
        return "https://www.awin1.com/cread.php?awinmid=10201&awinaffid=344433&clickref=".$sid."&p=".urlencode($url);
    }
    elseif((StrPos($url, "dobra-miska.sk") !== false) AND (StrPos($url, "dobra-miska.sk") < 13))
    {
        return $url."?utm_source=aff&utm_medium=aff&utm_campaign=dgt&a_aid=572766588d771&a_bid=7cfb19b5&chan=granule01";
    }
    elseif(StrPos($url, "heureka.cz") !== false) // má subdomény, neomezovat jen začátek URL
    {
        return $url."#c".$aff_id.":2";
    }
    elseif(StrPos($url, "heureka.sk") !== false)  // má subdomény, neomezovat jen začátek URL
    {
        return $url."#c".$aff_id.":2";
    }
    elseif(StrPos($url, "market24.sk") !== false)  // má subdomény, neomezovat jen začátek URL
    {
        return $url."?utm_source=aff&utm_medium=dgt&utm_campaign=dgt&a_aid=572766588d771&a_bid=51a4eb82&chan=".$aff_id;
    }
    else
    {
        return $url;
    }

}

//http://www.market24.sk/?utm_source=aff&utm_medium=dgt&utm_campaign=dgt&a_aid=572766588d771&a_bid=51a4eb82&chan=autosedac


function shali_check_email($email) {
    $atom = '[-a-z0-9!#$%&\'*+/=?^_`{|}~]'; // znaky tvořící uživatelské jméno
    $domain = '[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])'; // jedna komponenta domény
    return eregi("^$atom+(\\.$atom+)*@($domain?\\.)+$domain\$", $email);
}

function shali_hvezdicky($number)
{
    $out = "";
    for ($i=1; $i<=$number; $i++)
    {
        $out .= "<img src='../star.gif' width='13' height='12' alt='star' />";
    }
    return $out;
}


function shali_set_impression($domain, $aff_id)
{
    if($domain == 'kasa.cz')
    {
        echo "<img src='https://www.ftjcfx.com/image-".$aff_id."-10903718' width='1' height='1' alt='' />\n";
        return 0;
    }
    elseif($domain == 'hej.sk')
    {
        echo "<img src='https://www.ftjcfx.com/image-".$aff_id."-10903718' width='1' height='1' alt='' />\n";
        return 0;
    }
    return 1;
}



function shali_check_email2($email) {
    $email = strtolower($email);
    $reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
    if (preg_match($reg, $email))
        return true;
    else
        return false;
}



function shali_subscribe($email, $website)
{
    $email = strtolower($email);
    $now = date("Y-m-d H:i:s");
    if (!shali_check_email2($email)) {
        return -1;
    }

    $db_admin = $GLOBALS['db_admin'];
    $vysledek = MySQLi_Query($db_admin, "SELECT * FROM odberatele WHERE (email LIKE '$email')");
    if (MySQLi_Num_Rows($vysledek) > 0)
    {
        // uživatel už je v tabulce, pouze záznam upravím
        MySQLi_Query($db_admin, "UPDATE odberatele SET active = 1 WHERE (email LIKE '$email')");
        MySQLi_Query($db_admin, "UPDATE odberatele SET last_updated = '$now' WHERE (email LIKE '$email')");
        $zaznam = MySQLi_Fetch_Array($vysledek);
        if (strpos($zaznam['web'], $website) === false)
        {
            $new_value = $zaznam['web']."|".$website;
            MySQLi_Query($db_admin, "UPDATE odberatele SET web = '$new_value' WHERE (email LIKE '$email')");
        }
    }
    else
    {
        // uživatel je nový, zakládám
        MySQLi_Query($db_admin, "INSERT INTO odberatele (email, web, created, last_updated, active)
                                VALUES ('$email', '$website', '$now', '$now', 1)");

    }
    return 1;


}


function shali_table_exists($db, $table_name)
{
    $vysledek_tmp987 = MySQLi_Query($db, "SHOW TABLES LIKE '$table_name'");
    if (MySQLi_Num_Rows($vysledek_tmp987) > 0) return true;
    else return false;

}

function shali_zapis_log($url, $text)
{
    $now = date("Y-m-d H:i:s");
    $file = fopen("./cron.log", "a");
    fwrite($file, $now." | ".$url." | ".$text."\n");
    fclose($file);
}


function shali_clean_description($string)
{

    $string = strip_tags($string, "<br/><br>");

    $string = str_replace("<br/>", " ", $string);
    $string = trim($string);
    //$string = htmlspecialchars($string, ENT_QUOTES);
    $string = addslashes($string);
    $string = str_replace("  ", " ", $string);
    return $string;


}

function shali_make_alias_8nej ($text)
{
    $prevodni_tabulka = Array(
        'ä'=>'a',
        'Ä'=>'A',
        'á'=>'a',
        'Á'=>'A',
        'à'=>'a',
        'À'=>'A',
        'ã'=>'a',
        'Ã'=>'A',
        'â'=>'a',
        'Â'=>'A',
        'č'=>'c',
        'Č'=>'C',
        'ć'=>'c',
        'Ć'=>'C',
        'ď'=>'d',
        'Ď'=>'D',
        'ě'=>'e',
        'Ě'=>'E',
        'é'=>'e',
        'É'=>'E',
        'ë'=>'e',
        'Ë'=>'E',
        'è'=>'e',
        'È'=>'E',
        'ê'=>'e',
        'Ê'=>'E',
        'í'=>'i',
        'Í'=>'I',
        'ï'=>'i',
        'Ï'=>'I',
        'ì'=>'i',
        'Ì'=>'I',
        'î'=>'i',
        'Î'=>'I',
        'ľ'=>'l',
        'Ľ'=>'L',
        'ĺ'=>'l',
        'Ĺ'=>'L',
        'ń'=>'n',
        'Ń'=>'N',
        'ň'=>'n',
        'Ň'=>'N',
        'ñ'=>'n',
        'Ñ'=>'N',
        'ó'=>'o',
        'Ó'=>'O',
        'ö'=>'o',
        'Ö'=>'O',
        'ô'=>'o',
        'Ô'=>'O',
        'ò'=>'o',
        'Ò'=>'O',
        'õ'=>'o',
        'Õ'=>'O',
        'ő'=>'o',
        'Ő'=>'O',
        'ř'=>'r',
        'Ř'=>'R',
        'ŕ'=>'r',
        'Ŕ'=>'R',
        'š'=>'s',
        'Š'=>'S',
        'ś'=>'s',
        'Ś'=>'S',
        'ť'=>'t',
        'Ť'=>'T',
        'ú'=>'u',
        'Ú'=>'U',
        'ů'=>'u',
        'Ů'=>'U',
        'ü'=>'u',
        'Ü'=>'U',
        'ù'=>'u',
        'Ù'=>'U',
        'ũ'=>'u',
        'Ũ'=>'U',
        'û'=>'u',
        'Û'=>'U',
        'ý'=>'y',
        'Ý'=>'Y',
        'ž'=>'z',
        'Ž'=>'Z',
        'ź'=>'z',
        'Ź'=>'Z',
        ' '=>'-',
        '+'=>'-',
        '@'=>'-',
        '$'=>'-',
        '~'=>'-',
        '^'=>'-',
        '*'=>'-',
        '{'=>'-',
        '}'=>'-',
        '/'=>'-',
        '!'=>'-',
        '§'=>'-',
        '\''=>'',
        '"'=>'',
        ')'=>'',
        '('=>'',
        '.'=>'',
        ','=>'',
        '`'=>'',
        '&'=>'-',
        '|'=>'-'
    );

    $text = strtolower(strtr($text, $prevodni_tabulka));
    $text = str_replace("----", "-", $text);
    $text = str_replace("---", "-", $text);
    $text = str_replace("--", "-", $text);
    $text_final = $text;

    $vysledek_produkty = MySQLi_Query($GLOBALS["db"], "SELECT alias FROM 8_products WHERE (alias = '$text')");
    echo MySQLi_Error($GLOBALS["db"]);

    $i = 1;
    while ((MySQLi_Num_Rows($vysledek_produkty) + MySQLi_Num_Rows($vysledek_produkty)) != 0)
    {
        $text_final = $text."-".$i;
        $vysledek_produkty = MySQLi_Query($GLOBALS["db"], "SELECT alias FROM 8_products WHERE (alias = '$text_final')");

        $i++;
    }
    $text = $text_final;
    return $text;
}

function StrOrizni($string, $cancourek){
    $delka_cancourku = StrLen($cancourek);
    if (SubStr($string, -$delka_cancourku, $delka_cancourku) == $cancourek): $string = SubStr($string, 0, StrLen($string)-$delka_cancourku); endif;
    return $string;
}

function get_footer($lang, $web_id)
{
    $text_01['cz'] = "<h2 id='dale-doporucujeme'>Dále doporučujeme</h2>\n<p>Připravujeme pro vás i mnoho dalších testů, ať už se jedná o domácí elektroniku, dětské zboží, nebo zahradní techniku. Navštivte i naše další testy: ";
    $text_01['sk'] = "<h2 id='dale-doporucujeme'>Ďalej odporúčame</h2>\n<p>Pripravujeme ďalej ";
    $text_01['pl'] = "<h2 id='dale-doporucujeme'>Polecamy również</h2>\n<p>Przygotowujemy także ";
    $text_01['hu'] = "<h2 id='dale-doporucujeme'>Továbbá javasoljuk</h2>\n<p>Továbbá javasoljuk ";


    $vysledek_footer = MySQLi_Query($GLOBALS["db_admin"], "SELECT wl.kam AS kam, w.url AS url, w.conf_name AS anchor, w.last_year AS last_year, w.https AS https, w.lang AS cil_lang
                                                          FROM weby_links AS wl
                                                           LEFT JOIN weby w ON (wl.kam = w.id)
                                                          WHERE (kdo = $web_id)");
    $out_footer = $text_01[$lang];
    while($zaznam_footer = MySQLi_Fetch_Array($vysledek_footer))
    {
        if(is_numeric($zaznam_footer['kam']))
        {
            if($zaznam_footer['https'] == 1) $protocol = "https";
            else $protocol = "http";


            /* anchor text */
            $anchor = $zaznam_footer['anchor'];

            $variant = (($web_id + $zaznam_footer['kam']) % 4); // (($zaznam['kdo'] + $zaznam['kam']) % 3);

            if($variant == 1)
            {
                if($zaznam_footer['cil_lang'] == 'cz') $anchor = str_replace("Test", "Testy", $anchor);
                if($zaznam_footer['cil_lang'] == 'sk') $anchor = str_replace("Test", "Testy", $anchor);
                if($zaznam_footer['cil_lang'] == 'pl') $anchor = str_replace("Ranking", "Test", $anchor);
                if($zaznam_footer['cil_lang'] == 'hu')
                {
                    if(strpos($anchor, " teszt") !== false)
                    {
                        $anchor = str_replace(" teszt", "", $anchor);
                        $anchor = "Legjobb ".$anchor;
                    }
                    elseif(strpos($anchor, "Legjobb") !== false)
                    {
                        $anchor = str_replace("Legjobb ", "", $anchor);
                        $anchor = $anchor." teszt";
                        $anchor = ucfirst($anchor);
                    }
                }
                $anchor = $anchor." ".$zaznam_footer['last_year'];
            }
            elseif($variant == 2)
            {
                if($zaznam_footer['cil_lang'] == 'cz') $anchor = str_replace("Test", "Recenze", $anchor);
                if($zaznam_footer['cil_lang'] == 'sk') $anchor = str_replace("Test", "Recenzie", $anchor);
                if($zaznam_footer['cil_lang'] == 'pl') $anchor = str_replace("Ranking", "Testy", $anchor);
                if($zaznam_footer['cil_lang'] == 'hu')
                {
                    if(strpos($anchor, " teszt") !== false)   // mosógép vélemények 170
                    {
                        $anchor = str_replace("teszt", "vélemények", $anchor);
                    }
                    elseif(strpos($anchor, "Legjobb") !== false)
                    {
                        $anchor = str_replace("Legjobb ", "", $anchor);
                        $anchor = $anchor." vélemények";
                        $anchor = ucfirst($anchor);
                    }
                }
                $anchor = $anchor." ".$zaznam_footer['last_year'];
            }
            elseif($variant == 3)
            {
                $anchor = $anchor; // nepřidává se rok
            }
            else
            {
                $anchor = $anchor." ".$zaznam_footer['last_year'];
            }


            $out_footer .= "\n<a href='".$protocol."://www.".$zaznam_footer['url']."/".$zaznam_footer['last_year']."/'>".$anchor."</a>, ";
        }
        else
        {
            $out_footer .= "\n".$zaznam_footer['kam'].", ";
        }


    }
    $out_footer = StrOrizni($out_footer, ", ");
    $out_footer .= ".</p>\n";
    return $out_footer;

}


function check_ssl($domain) // www.test-pracek.cz nebo test-pracek.cz
{
    $stream = @stream_context_create( array( 'ssl' => array( 'capture_peer_cert' => true ) ) );
    $socket = @stream_socket_client( 'ssl://' . $domain . ':443', $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $stream );

    // If we got a ssl certificate we check here, if the certificate domain
    // matches the website domain.
    if ( $socket ) {
        $cont = stream_context_get_params( $socket );
        $cert_ressource = $cont['options']['ssl']['peer_certificate'];
        $cert = openssl_x509_parse( $cert_ressource );

        $domain_text = $cert['extensions']['subjectAltName'];
        $domain_arr = explode(",", $domain_text);

        /*   echo $domain_text;

           echo "<hr>";

           print_r($domain_arr);*/


        foreach($domain_arr AS $val)
        {
            if (strpos($val, $domain) > 0)
                return true;   // JAKMILe narazím na doménu v aliasech, končím a vracím true
        }

    }

    return false;

}

function placeholder($text)
{
    $out = $text;
    $out = str_replace("%aff_id%", $GLOBALS['aff_id'], $out);
    return $out;

}















