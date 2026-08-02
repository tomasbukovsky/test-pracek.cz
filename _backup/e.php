<?php

$cas = MicroTime();
$mikro = StrTok($cas, " ");
$sek = (StrTok(" ") % 100);
$cas = $sek+$mikro;

$id = (integer)$_GET['id'];
include "./cfg.php";


$vysledek = MySQLi_Query($db, "SELECT * FROM $tablename_products WHERE (id=$id)");
$zaznam_product = MySQLi_Fetch_Array($vysledek);


$sid = "";
if ($_COOKIE["source"] == "google-cpc")
{
    $sid = "google-cpc";
}
elseif ($_COOKIE["source"] == "sklik-cpc")
{
    $sid = "sklik-cpc";
}
elseif ($_COOKIE["source"] == "facebook-cpc")
{
    $sid = "facebook-cpc";
}

$url_out = shali_make_affiliate_link_for_old($zaznam_product[$sloupec_odkaz], $aff_id, $sid, $_SERVER['HTTP_HOST']);



?>
<!DOCTYPE html>
<html lang="<?echo $lang;?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="<?echo $lang;?>" />
    <meta name="robots" content="NOINDEX, NOFOLLOW" />
    <meta name="referrer" content="always" />
    <meta http-equiv="refresh" content="0;url=<?echo $url_out;?>" />
    <?
    if($zaznam_weby['lang'] == 'cz')
    {
        echo "    <title>Čekejte prosím...</title>\n";
    }
    elseif($zaznam_weby['lang'] == 'sk')
    {
        echo "    <title>Čakajte prosím...</title>\n";
    }
    elseif($zaznam_weby['lang'] == 'pl')
    {
        echo "    <title>Proszę czekać...</title>\n";
    }
    else
    {
        echo "    <title>Exit</title>\n";
    }
    ?>

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

<?
 //echo $url_out;

?>
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
<?
$cas2 = MicroTime();
$mikro2 = StrTok($cas2, " ");
$sek2 = (StrTok(" ") % 100);
$cas2 = $sek2+$mikro2;
$vysl = $cas2-$cas;

//echo "<p id='nacitani-trvalo'>Načítání trvalo ".SubStr($vysl, 0, 6)." sekund.</p>" ;
?>

</body>
</html>