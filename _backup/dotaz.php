<?

include "./2014/cfg.php";
$db=mysql_connect($myhostName,$myuserName,$myPW);
if (!mysql_select_db($mydbName,$db)) {
    echo HlaskaError('chyba-pripojeni-k-databazi');
    exit();
}
mysql_query("SET CHARACTER SET utf8");

$tablename_products="d_products";
$tablename_content="content_2014";
$lang = "cs";


$vysledek = MySQL_Query("SELECT * FROM $tablename_content");
while($zaznam_content = MySQL_Fetch_Array($vysledek)):
    $index = $zaznam_content['name'];
    $content[$index] = $zaznam_content['value'];
endwhile;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="cs" xml:lang="cs" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="cs" />
    <meta name="Copyright" content="" />
    <meta name="Author" content="xAAx" />
    <meta name="robots" content="noindex, nofollow" />
    <link href="http://www.test-pneumatik.cz/css.css?v=1" rel="stylesheet" type="text/css" />
    <title>Poslat dotaz do online poradny</title>
</head>

<body>
<?
echo $content['ga'];
?>
<div id="main">
    <div class='content'>

        <h1>Poslat dotaz do online poradny</h1>
        <div style="width: 600px; margin: 0px auto;">

<?

        function check_email($email) {
            $atom = '[-a-z0-9!#$%&\'*+/=?^_`{|}~]'; // znaky tvořící uživatelské jméno
            $domain = '[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])'; // jedna komponenta domény
            return eregi("^$atom+(\\.$atom+)*@($domain?\\.)+$domain\$", $email);
        }

        if ($_POST['fullform'] == 1)
        {
        // plnohodnotná registrace - doplnění profilu
        $insert_email = stripslashes(htmlspecialchars(trim($_POST['insert_email'])));
        $insert_text = stripslashes(htmlspecialchars(trim($_POST['insert_text'])));

        if (!check_email($insert_email))
        {
        echo "<div class='error-message'>Zadaný e-mail je neplatný, opravte ho prosím ve formuláři níže.</div><script type='text/javascript'>_gaq.push(['_trackEvent', 'Error message', 'Zadaný e-mail je neplatný, opravte ho prosím ve formuláři níže.', '']);</script>";
        }
        else
        {
        echo "<div class='ok-message'>Dotaz byl úspěšně odeslán.</div>";
        mail("info@aaa-katalog.cz", "Dotaz z webu ".$_SERVER['HTTP_HOST']." ", "E-mail: ".$insert_email."\nDotaz: ".$insert_text." ", "From: info@aaa-katalog.cz\nMIME-Version: 1.0\nContent-Type: text/plain; charset=utf-8\nContent-Transfer-Encoding: 8bit");
            unset($insert_text);
            unset($insert_email);
            echo "<meta http-equiv='refresh' content='2;url=/2014/'>";
        }
        }

        ?>


        <form action="./dotaz.php?send=1" method="post">
            <label for="email">Váš e-mail</label>
            <input style="width: 500px;" id="email" name="insert_email" type="text" value="<?echo $insert_email;?>" />

            <label for="text">Dotaz</label>
            <textarea style="width: 500px;" id="text" name="insert_text" rows='10'><?echo $insert_text;?></textarea>
            <input id="" name="fullform" type="hidden" value="1" />

            <button id="full_form" type="submit">Odeslat</button><br />


        </form>
        </div>

    </div>



</div>
<p style="text-align: right; max-width: 960px; min-width: 880px;margin: 0px auto 0; padding-bottom: 30px;"><a rel="nofollow" style="color: #999999; text-decoration: none;" href="/provozovatel.php">Provozovatel webu</a></p>
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
</body>
</html>