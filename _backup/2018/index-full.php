<?
$cas = MicroTime();
$mikro = StrTok($cas, " ");
$sek = (StrTok(" ") % 100);
$cas = $sek+$mikro;

include "../cfg.php";

// zjištění, ve kterém adresáři na serveru jsem - podle toho poznám rok
$cesta = dirname(__FILE__);
$cesta_arr = explode("/", $cesta);
$nadrazenyAdresar = end($cesta_arr);


if($zaznam_weby['content_table'] != '')
{
    $tablename_content = $zaznam_weby['content_table']."_".$nadrazenyAdresar;
    if (!shali_table_exists($db, $tablename_content))
    {
        echo "chyba databáze";
        die();
    }
}
else
{
    if($zaznam_weby['lang'] == 'cz')
    {
        $tablename_content = "content_".$nadrazenyAdresar;
    }
    else
    {
        $tablename_content = "content_".$zaznam_weby['lang']."_".$nadrazenyAdresar;
    }
}
// načtení všech textů z tabulky content do pole $content
$vysledek = MySQLi_Query($db, "SELECT * FROM $tablename_content");
echo MySQLi_error($db);
while($zaznam_content = MySQLi_Fetch_Array($vysledek)):
    $index = $zaznam_content['name'];
    $content[$index] = $zaznam_content['value'];
endwhile;


/*
 * <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?echo $lang;?>" xml:lang="<?echo $lang;?>" >
*/
?>
<!DOCTYPE html>
<html lang="<?echo $lang;?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><? echo $content['title'];?></title>
    <meta name="Description" content="<? echo date('j. n. Y', time()-(7 * 24 * 60 * 60))." - ".$content['description'];?>" />
    <meta name="Copyright" content="" />
    <meta name="referrer" content="always" />
    <meta name="Author" content="xAAx" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <link href="https://www.test-pneumatik.cz/css.css?v=4" rel="stylesheet" type="text/css" />
    <link href="./full.css?v=2" rel="stylesheet" type="text/css" />
    <link href="/popup.css" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans:400,700%7COpen+Sans%3A300%2C400%2C600%2C700' />

</head>

<body>

<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '<? echo $ga_id; ?>', 'auto');
    ga('send', 'pageview');
</script>
<script type="text/javascript">
    var trackOutboundLink = function(category, action, url) {
        ga('send', 'event', category, action, url, {
            'transport': 'beacon',
            'hitCallback': function(){document.location = url;}
        });
    }
</script>

<div id="main">
    <div class='content'>
        <? echo $content['h1']."\n";?>
        <p><? echo $content['anotace'];?></p>

    <?

    $vysledek_skupiny_produktu = MySQLi_Query($db, "SELECT p.cat AS type FROM d_products_full_cz AS p JOIN order_types o ON (p.cat LIKE o.type) GROUP BY type ORDER BY o.id");
    echo MySQLi_Error($db);

    echo "<p class='header'>Otestovali jsme pro vás tyto pračky</p>\n";
    while($zaznam_skupiny_produktu = MySQLi_Fetch_Array($vysledek_skupiny_produktu))
    {

        $vysledek_produkty = MySQLi_Query($db, "SELECT id, sort, nazev FROM d_products_full_cz WHERE (cat = '" . $zaznam_skupiny_produktu[type] . "') ORDER BY sort");
        echo MySQLi_Error($db);
        if (MySQLi_Num_Rows($vysledek)!= 0)
        {
            $cat = $zaznam_skupiny_produktu['type'];
            $nazev_tabulky_skupina = "h2_".$zaznam_skupiny_produktu['type'];
            echo "<p>".$content[$nazev_tabulky_skupina].":</p>\n";

            $i = 1;
            echo "<ol>\n";
            while ($zaznam_produkty = MySQLi_Fetch_Array($vysledek_produkty))
            {
                echo "<li><a href='#".$cat."-".$i . "'>" . $zaznam_produkty['nazev'] . "</a></li>\n";
                $i++;
            }
            echo "</ol>\n";
        }
    }

    // započítání návštěvy pro kasa.cz
    shali_set_impression($aff_domain, $aff_id);

    $vysledek_skupiny_produktu = MySQLi_Query($db, "SELECT p.cat AS type FROM d_products_full_cz AS p JOIN order_types o ON (p.cat LIKE o.type) GROUP BY type ORDER BY o.id");
    echo MySQLi_Error($db);

    while($zaznam_skupiny_produktu = MySQLi_Fetch_Array($vysledek_skupiny_produktu))
    {


        $vysledek_produkty = MySQLi_Query($db, "SELECT * FROM d_products_full_cz WHERE (cat = '" . $zaznam_skupiny_produktu[type] . "') ORDER BY sort");
        echo MySQLi_Error($db);
        if (MySQLi_Num_Rows($vysledek)!= 0)
        {
            $cat = $zaznam_skupiny_produktu['type'];
            $nazev_tabulky_skupina = "h2_" . $zaznam_skupiny_produktu['type'];
            echo "<h2>" . $content[$nazev_tabulky_skupina] . "</h2>\n";
            $i = 1;
            while ($zaznam_produkty = MySQLi_Fetch_Array($vysledek_produkty))
            {
                echo "<h3 title='Test pračky " . $zaznam_produkty['nazev'] . "' id='" . $cat."-".$i . "'>" . $i . ".&nbsp;" . $zaznam_produkty['nazev'] . "</h3>\n";

                echo "<div class='box-80 yellow'>\n";
                echo "<p class='header'>Hlavní informace:</p>\n";
                echo "<ul>";
                echo $zaznam_produkty['spec'];
                echo "</ul>";
                echo "</div>\n";

                echo "<div class='product-img'><img src='" . $zaznam_produkty['img_url'] . "' alt='Recenze " . $zaznam_produkty['nazev'] . "' /></div>\n";

                echo "<div class='break'></div>\n";

                echo "<h4>" . $zaznam_produkty['nazev'] . " &ndash; recenze</h4>\n";
                echo "<div class='box-80'>\n";
                echo $zaznam_produkty['plusy_minusy'];
                echo "</div>\n";


                echo "<div class='break'></div>\n";

                echo $zaznam_produkty['recenze'];

                echo "  <a href='" . $zaznam_produkty['link'] . "'>
                    <div class='btn'><p>Více informací</p>
                    </div>
                </a>
            ";
                echo "<div class='break'></div>\n";

                $i++;

            }
        }
    }
















/*    $vysledek_skupiny_produktu = MySQLi_Query($db, "SELECT p.type AS type FROM $tablename_products AS p JOIN order_types o ON (p.type LIKE o.type) GROUP BY type ORDER BY o.id");
    while($zaznam_skupiny_produktu = MySQLi_Fetch_Array($vysledek_skupiny_produktu))
    {
        $vysledek = MySQLi_Query($db, "SELECT * FROM $tablename_products WHERE (type = '".$zaznam_skupiny_produktu['type']."') AND ($sloupec_odkaz != '') ORDER BY rating DESC,sort");
        if (MySQLi_Num_Rows($vysledek)!= 0)
        {
            $cat = $zaznam_skupiny_produktu['type'];
            $nazev_tabulky_skupina = "h2_".$zaznam_skupiny_produktu['type'];
            echo "<div class='content' id='".$zaznam_skupiny_produktu['type']."'><h2>".$content[$nazev_tabulky_skupina]."</h2></div>";

            echo "\n\n<table class='pneumatiky'>\n";
            echo "<tr><th></th><th>".$content['td_nazev']."</th><th>".$content['td_hodnoceni']."</th><th></th></tr>\n";

            $counter = 1;

            while($zaznam = MySQLi_Fetch_Array($vysledek)):
                if (($zaznam[$sloupec_nazev]) != '')
                {
                    $nazev = $zaznam[$sloupec_nazev];
                }
                else
                {
                    $nazev = $zaznam['name'];
                }

                echo "<tr>\n";
                echo "<td>".$counter.".</td>";
                echo "<td class='nazev'><strong>";
                echo "<a rel='nofollow' title ='".$content['a_title']." ".$nazev."' class='nazev-pneu' href='/e.php?id=".$zaznam['id']."' onclick='trackOutboundLink(\"Outbound Links\", \"".$cat." - Link ".$counter."\", \"/e.php?id=".$zaznam['id']."\");'>".$nazev."</a>";
                echo "</strong></td>";
                echo "<td class='hodnoceni'>".shali_hvezdicky($zaznam['rating'])."</td>";
                echo "<td>";
                echo "<a rel='nofollow' href='/e.php?id=".$zaznam['id']."' onclick='trackOutboundLink(\"Outbound Links\", \"".$cat." - Link ".$counter."\", \"/e.php?id=".$zaznam['id']."\");'><strong>".$content['vice-informaci']."</strong></a>";
                echo "</td>\n";
                echo "</tr>\n";
                $counter++;
            endwhile;
            echo "</table>\n\n";
        }
    }*/

    ?>
    </div>
    <?
    /*    <div class="social">
            <div class="fb-like" data-href="http://www.<? echo $domain; ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
            <div class="g-plusone" data-href="http://www.<? echo $domain; ?>" data-size="medium"></div>
        </div>
    */?>
    <div class='content'>

        <br />
        <br />
        <?
        echo $content['long_text'];
        echo get_footer($lang2, $web_id);
        echo $content['footer'];




        ?>
    </div>
</div>
<p class="provozovatel">
    <a rel="nofollow" href="/law.php"><? echo $content['law']; ?></a> |
    <a rel="nofollow" href="/privacy.php"><? echo $content['privacy']; ?></a> |
    <a rel="nofollow" href="/cookies.php"><? echo $content['cookie']; ?></a> |
    <a rel="nofollow" href="/provozovatel.php"><? echo $content['provozovatel']; ?></a></p>



<?
/*
    <script type="text/javascript">
        window.___gcfg = {lang: '<? echo $lang; ?>'};

        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>
*/?>

<!-- Kód Google značky pro remarketing -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1029887221;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1029887221/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- Kód Sklik pro retargeting -->
<script type="text/javascript">
    /* <![CDATA[ */
    var seznam_retargeting_id = 17334;
    /* ]]> */
</script>
<script type="text/javascript"  src="//c.imedia.cz/js/retargeting.js"></script>

<script type="text/javascript" src="https://www.test-pneumatik.cz/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://www.test-pneumatik.cz/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/tb.js"></script>

<?
$cas2 = MicroTime();
$mikro2 = StrTok($cas2, " ");
$sek2 = (StrTok(" ") % 100);
$cas2 = $sek2+$mikro2;
$vysl = $cas2-$cas;

echo "<p id='nacitani-trvalo'>Načítání trvalo ".SubStr($vysl, 0, 6)." sekund.</p>" ;
echo "<!-- <p id='nacitani-trvalo'>server ".gethostbyaddr($_SERVER['SERVER_ADDR'])."</p> -->\n" ;
?>

</body>
</html>