<?
include "./cfg.php";


if($zaznam_weby['lang'] == 'cz')
{
    $tablename_content = "content_2018";
}
else
{
    $tablename_content = "content_".$zaznam_weby['lang']."_2021";
}


$vysledek = MySQLi_Query($db, "SELECT * FROM $tablename_content");
while($zaznam_content = MySQLi_Fetch_Array($vysledek)):
    $index = $zaznam_content['name'];
    $content[$index] = $zaznam_content['value'];
endwhile;

?>
<!DOCTYPE html>
<html lang="<?echo $lang;?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="<?echo $lang;?>" />
    <meta name="Copyright" content="" />
    <meta name="Author" content="xAAx" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <link href="https://www.test-pneumatik.cz/css.css?v=4" rel="stylesheet" type="text/css" />
    <title><? echo $content['cookie'];?></title>
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

<div id="main">
    <div class='content'>

        <h1><? echo $content['cookie'];?></h1>
        <? echo $content['cookie_text'];?>
        <br />
        <br />
        <br />
        <br />
        <br />

    </div>



</div>
</body>
</html>