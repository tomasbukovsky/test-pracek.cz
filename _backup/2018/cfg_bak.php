<?


$admin_hostName="wm54.wedos.net";
$admin_dbName="d67093_admin";
$admin_userName="a67093_admin";
$admin_PW="P=kzroqKIXz95uvE";

$db_admin=mysqli_connect($admin_hostName,$admin_userName,$admin_PW);
if (!mysqli_select_db($db_admin, $admin_dbName)) {
    echo "chyba-pripojeni-k-databazi";
    exit();
}
mysqli_query($db_admin, "SET CHARACTER SET utf8");


$domain = str_replace("www.", "", $_SERVER['HTTP_HOST']);

$vysledek_weby = MySQLi_Query($db_admin, "SELECT * FROM weby WHERE (url LIKE '$domain')");
$zaznam_weby = MySQLi_Fetch_Array($vysledek_weby);


if($zaznam_weby['webhosting'] == 'test-pneumatik.cz')
{
    include '/data/web/virtuals/143884/virtual/www/domains/shared-library.php';
}
else
{
    include '/data/web/virtuals/67093/virtual/www/admin-testy/shared-library.php';
}



$web_id = $zaznam_weby['id'];
$lang = $zaznam_weby['conf_lang'];
$lang2 = $zaznam_weby['lang'];
$fb_lang = $zaznam_weby['conf_fb_lang'];
$aff_id = $zaznam_weby['conf_aff_id'];
$mailchimplist_id = $zaznam_weby['conf_mailchimp_id'];
$aff_domain = $zaznam_weby['conf_aff_domain'];
$ga_id = $zaznam_weby['conf_ga_id'];
$slevovy_kod = $zaznam_weby['conf_slevovy_kod'];

if($zaznam_weby['lang'] == 'cz')
{
    $sloupec_nazev = "name";
    $sloupec_odkaz = "url";
}
else
{
    $sloupec_nazev = "name_".$zaznam_weby['lang'];
    $sloupec_odkaz = "url_".$zaznam_weby['lang'];
}


// zaznamen�v�n� zdroj� p�es cookie 30 dn�
if (($_GET['utm_source'] == "google") AND ($_GET['utm_medium'] == "cpc"))
{
    SetCookie ("source", "google-cpc", strtotime( '+30 days' ), "/");
}
elseif (($_GET['utm_source'] == "sklik") AND ($_GET['utm_medium'] == "cpc"))
{
    SetCookie ("source", "sklik-cpc", strtotime( '+30 days' ), "/");
}
elseif (($_GET['utm_source'] == "facebook.com") AND ($_GET['utm_medium'] == "cpc"))
{
    SetCookie ("source", "facebook-cpc", strtotime( '+30 days' ), "/");
}


// p�ipojen� do DB dan�ho webu

$myhostName = $zaznam_weby['db'];
$mydbName = $zaznam_weby['db_name'];
$myuserName = $zaznam_weby['db_user'];
$myPW = $zaznam_weby['db_pwd'];

if (($mydbName == '') OR ($myuserName == '') OR($myPW == ''))
{
    $vysledek_mother_web = MySQLi_Query($db_admin, "SELECT * FROM weby WHERE (url LIKE '$zaznam_weby[url_mother]')");
    $zaznam_mother_web = MySQLi_Fetch_Array($vysledek_mother_web);

    $myhostName = $zaznam_mother_web['db'];
    $mydbName = $zaznam_mother_web['db_name'];
    $myuserName = $zaznam_mother_web['db_user'];
    $myPW = $zaznam_mother_web['db_pwd'];
}


$tablename_products = "d_products";
$db = mysqli_connect($myhostName, $myuserName, $myPW);
if (!mysqli_select_db($db, $mydbName)) {
    echo "chyba-pripojeni-k-databazi";
    exit();
}
mysqli_query($db, "SET CHARACTER SET utf8");

?>