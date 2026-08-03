<?
    $cas = MicroTime();
    $mikro = StrTok($cas, " ");
    $sek = (StrTok(" ") % 100);
    $cas = $sek+$mikro;

    include "../../cfg.php";

    // zjištění, ve kterém adresáři na serveru jsem - podle toho poznám rok
    $cesta = dirname(__FILE__);
    $cesta = str_replace("/amp", "", $cesta);
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


    function amp_hvezdicky($number)
    {
        $out = "";
        for ($i=1; $i<=$number; $i++)
        {
            $out .= "<amp-img src='../../star.gif' width='13' height='12'></amp-img>";
        }
        return $out;
    }


    /*
     * <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" lang="<?echo $lang;?>" xml:lang="<?echo $lang;?>" >
    */
?>
<!doctype html>
<html ⚡ lang="<?echo $lang;?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="<?echo $lang;?>" />
    <title><? echo $content['title'];?></title>
    <meta name="Description" content="<? echo date('j. n. Y', time()-(7 * 24 * 60 * 60))." - ".$content['description'];?>" />
    <meta name="Copyright" content="" />
    <meta name="referrer" content="always" />
    <meta name="Author" content="xAAx" />
    <link rel="canonical" href="/<?echo $nadrazenyAdresar;?>/">
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <link rel="icon" type="image/png" href="/favicon.png?v=2" />

    <style amp-custom>
        @media screen, projection {

            body {
                background: none repeat scroll 0 0 #F5F5F5;
                color: #333333;
                font-size: 80%;
                padding: 0;
                text-align: left;
                font-family: Arial, Helvetica, sans-serif;
                margin: 0px;
                line-height: 1.9;
            }

            #main {
                background: none repeat scroll 0 0 #FFFFFF;
                box-shadow: 0 0 18px #BBBBBB;
                margin: 0px auto 0;
                max-width: 960px;
                min-width: 880px;
                overflow: hidden;
                padding: 30px;
                position: relative;
                z-index: 5;
                margin-bottom: 30px;

            }

            h1 {
                font-family: georgia, "times new roman", serif;
                font-weight: 100;
                font-size: 375%;
                text-align: left;
                margin-top: 20px;
                margin-bottom: 30px;
                line-height: 1.2;
            }

            h2 {
                font-family: georgia, "times new roman", serif;
                font-weight: 100;
                font-size: 185%;
                text-align: left;
                margin-top: 20px;
                margin-bottom: 10px;
            }

            h3 {
                font-family: arial, serif;
                font-weight: 150;
                font-size: 135%;
                text-align: left;
                margin-top: 20px;
                margin-bottom: 10px;
            }

            table {
                width: 80%;
                margin: 0px auto;
                padding: 0px;
                border-collapse: collapse;
            }

            table th {
                background: repeat scroll 0 0 #7A7A7A;
                border: medium none;
                box-shadow: 0 1px 1px -1px #FFFFFF inset;
                color: #FFFFFF;
                font-weight: bold;
                padding: 8px;
                padding-left: 0px;
                white-space: nowrap;
                line-height: 1.2;
            }

            table tr:hover {
                background: -moz-linear-gradient(center top, #efefef, #eeeeee) repeat scroll 0 0 #7A7A7A;

            }

            table td {
                border-bottom: 1px solid #eeeeee;
                padding-top: 5px;
                padding-bottom: 3px;
            }

            table td.nazev a {
                color: black;
                text-decoration: none;
            }

            table.udaje {
                background: #ddd;
                width: 100%;
                text-align: center;
                font-weight: bold;
            }

            table.udaje tr:hover {
                background: #ddd;

            }

            .middle-content-box {
                width: 60%;
                margin: 0 auto;
                border: 5px solid #eee;
                padding: 30px;
                padding-top: 0px;

            }

            .middle-content-box h3 {
                text-align: center;
            }

            .info-message {
                background-color: #fee067;
                padding: 5px;
                padding-left: 15px;
                margin-top: 20px;
                font-weight: bold;

            }

            .content {
                width: 80%;
                margin: 0px auto;
            }

            a {
                color: #333333;
                text-decoration: none;
            }

            a:active {
                color: #333333;
            }

            a:visited {
                color: #333333;
            }

            table td a, .crossroad-test p a, #footer a, #menu a {
                color: red;
                text-decoration: underline;
            }

            table td a:active {
                color: #990066;
            }

            table td a:visited,

        , .crossroad-test p a:visited, #footer a:visited, #menu a:visited {
              color: #cc0000;
          }

            #img-top {
                float: right;
                margin-bottom: 30px;
                margin-left: 50px;
            }

            #img-top-banner {
                float: right;
                margin-bottom: 30px;
                margin-left: 50px;
                border: 1px solid #444444;
            }

            .social {
                width: 80%;
                text-align: right;
                margin: 0px auto;
                margin-top: 40px;
                margin-bottom: 20px;
            }

            .social-stream {
                margin-left: 50px;
                margin-bottom: 40px;
                float: right;
            }

            .social div.fb-like {
                padding-right: 15px;
            }

            .social-up {
                height: 28px;
                text-align: left;
            }

            .social-up div.fb-like {
                padding-top: 5px;
                padding-right: 15px;
            }

            th.cena {
                width: 100px;
            }

            .crossroad-test {
                background-color: #f7f7f7;
                padding: 15px;
                margin-bottom: 30px;

            }

            .red-link {
                color: red;
                text-decoration: underline;
            }

            .crossroad-test h2 {
                margin-top: 0px;
            }

            .crossroad-test h2 a {
                color: black;
                text-decoration: underline;
            }

            .crossroad-test h2 a:visited {
                color: black;
            }

            #menu {
                text-align: center;
            }

            .box-udaje {
                width: 80%;
                padding: 10px;
                background-color: #eee;
                margin: 0px auto;
                font-size: 200%;
                font-weight: bold;
                text-align: center;
                font-family: "verdana";

            }

            hr {
                color: white;
            }

            #lean_overlay {
                position: fixed;
                z-index: 100;
                top: 0px;
                left: 0px;
                height: 100%;
                width: 100%;
                background: #000;
                display: none;
            }

            #signup {

                width: 404px;
                padding-bottom: 2px;

                display: none;

                background: #FFF;
                border-radius: 5px;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
                box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.7);
                -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.7);
                -moz-box-shadow: 0 0px 4px rgba(0, 0, 0, 0.7);

            }

            #test {
                width: 600px;
                padding: 30px;
                display: none;

                background: #FFF;
                border-radius: 5px;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
                box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.7);
                -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.7);
                -moz-box-shadow: 0 0px 4px rgba(0, 0, 0, 0.7);

            }

            #test p {
                color: #666;
                text-shadow: none;
            }

            #signup-header {
                background: url(../img/hd-bg.png);
                padding: 5px 18px 14px 18px;
                border-bottom: 1px solid #CCC;
                border-top-left-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -webkit-border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                -moz-border-radius-topright: 5px;
                -webkit-border-top-right-radius: 5px;
            }

            #signup-header p {
                color: #444;
                font-size: 1.3em;
                margin: 0;
                text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5);
                text-shadow: none;
            }

            #signup .txt-fld {
                position: relative;
                width: 364px;
                padding: 14px 20px;
                border-bottom: 1px solid #EEE;
                text-align: right;
            }

            #signup .btn-fld {
                width: 254px;
                overflow: hidden;
                padding: 12px 20px 12px 130px;
            }

            #signup .txt-fld label {
                display: block;
                float: left;
                width: 90px;
                padding-top: 8px;
                color: #222;
                font-size: 1.3em;
                text-align: left;
            }

            #signup .txt-fld input {
                width: 244px;
                padding: 8px;
                border-radius: 4px;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                font-size: 1.2em;
                color: #222;
                background: #F7F7F7;
                font-family: "Helvetica Neue";
                outline: none;
                border-top: 1px solid #CCC;
                border-left: 1px solid #CCC;
                border-right: 1px solid #E7E6E6;
                border-bottom: 1px solid #E7E6E6;
            }

            #signup .txt-fld input.good_input {
                background: #DEF5E1 url(../img/good.png) 236px center no-repeat;
            }

            #signup .txt-fld input.error_input {
                background: #FDE0E0;
            }

            p.error {
                position: absolute;
                bottom: 48px;
                right: 20px;
                width: 262px;
                color: #FFF;
                font-size: 1.1em;
                padding-bottom: 5px;
                background: url(../img/error-arw.png) 20px bottom no-repeat;
                text-align: left;
                margin: 0;
                text-shadow: none;
            }

            p.error span {
                display: inline-block;
                background: #D43636;
                padding: 6px;
                border-radius: 3px;
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
            }

            .txt-fld input:focus, .txt-fld textarea:focus {
                background-color: #FAF9DC;
            }

            button {
                font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
                background: #3F9D4A;
                border: none;
                width: auto;
                overflow: visible;
                font-size: 1.4em;
                color: #FFF;
                padding: 7px 10px;
                border-radius: 4px;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                font-weight: bold;
                text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                cursor: pointer;
            }

            button#full_form {
                margin-top: 10px;
            }

            .modal_close {
                position: absolute;
                top: 12px;
                right: 12px;
                display: block;
                width: 14px;
                height: 14px;
                background: url(../img/modal_close.png);
                z-index: 2;
            }

            input, textarea {
                background: none repeat scroll 0 0 transparent;
                border: 1px solid #D6D6D6;
                font-size: 15px;
                line-height: 17px;
                margin: 0 -16px 0 0;
                outline: medium none;
                padding: 7px;
                box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2) inset;
                display: block;
                width: 300px;
                margin-bottom: 10px;

            }

            label {
                font-weight: bold;
                display: block;
            }

            ol.graphical-list {
                color: #aaaaaa;
                font-size: 30px;
                font-weight: bold;
                font-family: impact;
                line-height: 1;
                margin-top: 0px;
            }

            ol.graphical-list span {
                color: black;
                font-size: 13px;
                font-weight: normal;
                font-family: arial;
                vertical-align: 2px;

            }

            div#box-subscription {
                display: block;
                max-width: 450px;

                font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
                background: #3F9D4A;
                border: none;
                font-size: 1.6em;
                color: #FFF;
                padding: 7px 20px;
                border-radius: 4px;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                font-weight: bold;
                text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                line-height: 1.2;
                cursor: pointer;
            }

            div#box-subscription div#label {

                float: left;
                margin-right: 20px;
                line-height: 1.1;
                font-size: 0.7em;
                font-weight: normal;
                margin-top: 10px;

            }

            div#box-subscription a {
                color: white;
                text-align: center;

            }

            input.subscription {
                background-color: white;
                width: 200px;
                display: inline;
                margin-right: 20px;
                margin-top: 10px;
            }

            input.subscription-submit {
                background-color: #354C8C;
                width: 70px;
                display: inline;
                border: medium none;
                border-radius: 4px;
                color: white;

            }

            a.white {
                color: white;
            }

            .error-message, .ok-message {
                background: url("/img/bullet-cross.png") no-repeat scroll 10px 50% #FDF5F1;
                border: 1px solid #F3D2D2;
                color: #FF0000;
                font-size: 116%;
                font-weight: bold;
                margin: 15px 0;
                padding: 5px 5px 5px 35px;
                display: inline-block;
            }

            .ok-message {
                background: url("/img/bullet-tick.png") no-repeat scroll 10px 50% #F6FBDC;
                border: 1px solid #C6E528;
                color: #008000;
                display: inline-block;
            }

            a.button {
                display: -moz-inline-stack;
                display: inline-block;
                width: 365px;
                height: 70px;
                background: url("http://dabuttonfactory.com/b.png?t=Co%20si%20po%C5%99%C3%ADdit%20i%20nov%C3%A9%20ALU%20DISKY%3F&f=Calibri-Bold&ts=24&tc=ffffff00&tshs=1&tshc=22222200&it=png&c=5&bgt=gradient&bgc=47c&ebgc=238&bs=1&bc=569&hp=30&vp=26") no-repeat;
                line-height: 20px;
                vertical-align: text-middle;
                text-align: center;
                color: #ffffff;
                font-family: Calibri;
                font-size: 24px;
                font-weight: bold;
                font-style: normal;
                text-shadow: #222222 1px 1px 0;
                text-decoration: none;
                padding-top: 15px;
            }

            a.button > span {
                display: -moz-inline-block;
            }

            #little {
                font-size: 14px;
                font-weight: normal;

            }

            .black-footer a {
                color: #333333;
                text-decoration: none;
            }

            table.rozmery-pneumatik {
                width: 100%;

            }

            table.rozmery-pneumatik td {
                padding-bottom: 50px;
            }

            table.rozmery-pneumatik tr:hover {
                background: -moz-linear-gradient(center top, white, white) repeat scroll 0 0 white;
            }

            table.rozmery-pneumatik td {
                border: 0px;
            }

            .provozovatel {text-align: right; max-width: 960px; min-width: 880px;margin: 0px auto 0; padding-bottom: 30px; color: #999999;}
            .provozovatel a {color: #999999; text-decoration: none;}

            .under-table-note{
                padding-top: 10px; font-size: 80%; width: 85%; text-align: right; margin: 0 auto; text-decoration: underline;
            }
            .under-table-note a{
                color: #555;
            }

        } /* end DESKTOP */


        @media only screen and (max-width: 960px) {

            #main {
                max-width: 960px;
                min-width: 320px;
                overflow: hidden;
                padding: 0px;
                padding-right: 10px;
                padding-left: 10px;
                position: relative;
                z-index: 5;
                margin-bottom: 30px;

            }

            h1{
                font-size: 300%;
                margin-bottom: 10px;
            }

            table {width: 100%;}

            .content
            {
                width: 95%;

            }

            #img-top {
                display: none;
            }
            div#box-subscription
            {
                font-size: 1.2em;
                padding: 5px 10px;
                max-width: 290px;
            }

            input.subscription {
                width: 150px;
            }

            input.subscription-submit {

                background-color: #354c8c;
                border: medium none;
                color: white;
                display: inline;

                border-radius: 2px;
                width: 100px;
            }


            .provozovatel {        max-width: 960px; min-width: 320px;  text-align: right; margin: 0px auto 0; padding-bottom: 30px; padding-right: 10px;}
            .provozovatel a {color: #999999; text-decoration: none;}


        }
    </style>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "<? echo $content['title'];?>",
            "description": "<? echo date('j. n. Y', time()-(7 * 24 * 60 * 60))." - ".$content['description'];?>"
        }
    </script>


</head>

<body>

<amp-analytics type="gtag" data-credentials="include">
    <script type="application/json">
        {
            "vars" : {
                "gtag_id": "<? echo $ga_id; ?>",
                "config" : {
                    "<? echo $ga_id; ?>": { "groups": "default" }
                }
            },
            "triggers": {
                "outboundLinks": {
                    "selector": ".red-link",
                    "on": "click",
                    "vars": {
                        "event_category": "Outbound Links",
                        "event_name": "Link ${outboundLink}",
                        "method": "Google"
                    }
                },
                "outboundLinksLabel": {
                    "selector": ".nazev-pneu",
                    "on": "click",
                    "vars": {
                        "event_category": "Outbound Links",
                        "event_name": "Label ${outboundLink}",
                        "method": "Google"
                    }
                }
            }
        }
    </script>
</amp-analytics>

<?
    /*<script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '<? echo $ga_id; ?>']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>


    <script type="text/javascript">
        function recordOutboundLink(link, category, action) {
            try {
                var myTracker=_gat._getTracker("<? echo $ga_id; ?>");
                myTracker._trackEvent(category ,  action );
                setTimeout('document.location = "' + link.href + '"', 100)

                var date = new Date();
                date.setTime(date.getTime() + 29 * 24 * 60 * 60 * 1000);

                document.cookie = "aff=1; expires=" + date.toGMTString() + "; path=/";

            }catch(err){}
        }
    </script>*/
?>
<div id="main">
    <div class='content'>
        <?
            list($width, $height, $type, $attr) = getimagesize("../../main-image.jpg");
            if($width == 193)
            {
                $out_height = $height;
            }
            else
            {
                $ratio = $width / $height;
                $out_height = 193 / $ratio;
                $out_height = (int)$out_height;
            }
        ?>

        <amp-img src='../../main-image.jpg' width='193' height='<? echo $out_height;?>' id='img-top' alt='<? echo $content['img_alt'];?>'></amp-img>
        <? echo $content['h1']."\n";?>
        <p><? echo $content['anotace'];?></p>
    </div>

    <?

        $vysledek_skupiny_produktu = MySQLi_Query($db, "SELECT p.type AS type FROM $tablename_products AS p JOIN order_types o ON (p.type LIKE o.type) GROUP BY type ORDER BY o.id");
        while($zaznam_skupiny_produktu = MySQLi_Fetch_Array($vysledek_skupiny_produktu))
        {
            $vysledek = MySQLi_Query($db, "SELECT * FROM $tablename_products WHERE (type = '".$zaznam_skupiny_produktu[type]."') AND ($sloupec_odkaz != '') ORDER BY rating DESC,sort");
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
                    echo "<a rel='nofollow' title ='".$content['a_title']." ".$nazev."' class='nazev-pneu' href='/e.php?id=".$zaznam['id']."' data-vars-outbound-link='".$counter."'>".$nazev."</a>";
                    echo "</strong></td>";
                    echo "<td class='hodnoceni'>".amp_hvezdicky($zaznam['rating'])."</td>";
                    echo "<td>";
                    echo "<a rel='nofollow' class='red-link' href='/e.php?id=".$zaznam['id']."' data-vars-outbound-link='".$counter."'><strong>".$content['vice-informaci']."</strong></a>";
                    echo "</td>\n";
                    echo "</tr>\n";
                    $counter++;
                endwhile;
                echo "</table>\n\n";
            }
        }

    ?>
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

<?
    $cas2 = MicroTime();
    $mikro2 = StrTok($cas2, " ");
    $sek2 = (StrTok(" ") % 100);
    $cas2 = $sek2+$mikro2;
    $vysl = $cas2-$cas;

    echo "<!-- <p id='nacitani-trvalo'>Načítání trvalo ".SubStr($vysl, 0, 6)." sekund.</p> -->\n" ;
    echo "<!-- <p id='nacitani-trvalo'>server ".gethostbyaddr($_SERVER['SERVER_ADDR'])."</p> -->\n" ;
?>

</body>
</html>