<?

include "./2015/cfg.php";
$db=mysql_connect($myhostName,$myuserName,$myPW);
if (!mysql_select_db($mydbName,$db)) {
    echo HlaskaError('chyba-pripojeni-k-databazi');
    exit();
}
mysql_query("SET CHARACTER SET utf8");

$tablename_products="d_products";
$tablename_content="content_2015";
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

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link href="http://www.test-pneumatik.cz/css.css?v=4" rel="stylesheet" type="text/css" />
    <title>Slevový kód na nákup</title>
</head>

<body>
<?
echo $content['ga'];
?>
<div id="main">
    <div class='content'>

        <h1>Slevový kód na nákup v e-shopu</h1>
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
                    $mail_text="<html><body>Dobrý den, posíláme slíbené slevové kódy. Platí do konce května 2016. <br /><br /><br /> Jak kódy uplatnit? Stačí kliknout na tento slevový odkaz:
                                                <a href='http://www.anrdoezrs.net/links/7144908/type/dlg/sid/mail-voucher/http://www.kasa.cz/'><big><strong>KASA.cz</big></strong></a> a v objednávce zadat kód:
                                        <ul>
                                        <li>Sleva 200 Kč při nákupu nad 5.000 Kč - slevový kód <strong>AF-200-216</strong></li>
                                        <li>Sleva 100 Kč při nákupu nad 2.500 Kč - slevový kód <strong>AF-100-216</strong></li>
                                        </ul>
                                        </body>
                                        </html>";

                    echo "<div class='ok-message'>Kód byl úspěšně odeslán.</div><script type='text/javascript'>_gaq.push(['_trackEvent', 'Registrace e-mailu', 'ok', '']);</script>";
                    mail($insert_email, "Sleva v e-shopu", $mail_text, "From: info@aaa-katalog.cz\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\nContent-Transfer-Encoding: 8bit");
                    mail("info@aaa-katalog.cz", "Slevovy kod z webu ".$_SERVER['HTTP_HOST']." ", "E-mail: ".$insert_email."\n", "From: info@aaa-katalog.cz\nMIME-Version: 1.0\nContent-Type: text/plain; charset=utf-8\nContent-Transfer-Encoding: 8bit");

                    include './MailChimp.php';
                    $MailChimp = new \Drewm\MailChimp('6da6f4d23adc70c40c8c67082d5341ee-us8');
                    $result = $MailChimp->call('lists/subscribe', array(
                        'id'                => 'd73fdc00c5',
                        'email'             => array('email'=>$insert_email),
                        'merge_vars'        => array('FNAME'=>'', 'LNAME'=>''),
                        'double_optin'      => false,
                        'update_existing'   => true,
                        'replace_interests' => false,
                        'send_welcome'      => false,
                    ));
//                    print_r($result);
                    unset($insert_text);
                    unset($insert_email);

                    echo "<meta http-equiv='refresh' content='2;url=/2015/'>";
                }
            }

            ?>


            <form action="./slevovy-kod.php?send=1" method="post">
                <label for="email">Vyplňte váš e-mail, slevový kód vám ihned zašleme:</label>
                <input style="width: 70%;" id="email" name="insert_email" type="text" value="<?echo $insert_email;?>" />

                <input id="" name="fullform" type="hidden" value="1" />

                <button id="full_form" type="submit">Odeslat</button><br />


            </form>
        </div>

    </div>



</div>
<p class="provozovatel"><a rel="nofollow" href="/provozovatel.php">Provozovatel webu</a></p>
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