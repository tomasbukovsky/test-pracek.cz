<?

/*
 * 
test praček s horním plněním

test praček s předním plněním

test praček se sušičkou

test ...
 * 
 */    


    include "./cfg.php";
    $db=mysql_connect($myhostName,$myuserName,$myPW);
    if (!mysql_select_db($mydbName,$db)) {
    	echo HlaskaError('chyba-pripojeni-k-databazi'); 
    	exit();
    }
mysql_query("SET CHARACTER SET utf8");

  	$tablename_products="d_products";
   	$tablename_content="content_2015";
    	$lang = "cs";


    if (($_COOKIE["aff"] == 1) AND ($lang == "cs"))
    {
      $heureka = true;
    }
    else
    {
      $heureka = false;
    }
    $heureka = false;


if (($_GET['utm_source'] == "google") AND ($_GET['utm_medium'] == "cpc"))
{
    SetCookie ("source", "adwords", strtotime( '+30 days' ), "/");
}
elseif (($_GET['utm_source'] == "sklik") AND ($_GET['utm_medium'] == "cpc"))
{
    SetCookie ("source", "sklik", strtotime( '+30 days' ), "/");
}

    

  	
    $vysledek = MySQL_Query("SELECT * FROM $tablename_content");
    while($zaznam_content = MySQL_Fetch_Array($vysledek)):
      $index = $zaznam_content['name'];
      $content[$index] = $zaznam_content['value'];
    endwhile;
      
    function hvezdicky($number)
    {
        $out = "";
        for ($i=1; $i<=$number; $i++)
        {
          $out .= "<img src='./star.gif' width='13' height='12' />";
        }
        return $out;
    }



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?echo $lang;?>" xml:lang="<?echo $lang;?>" >
	<head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="<?echo $lang;?>" />
	<meta name="Copyright" content="" />
	<meta name="Author" content="xAAx" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="<? echo date('j. n. Y', time()-(7 * 24 * 60 * 60))." - ".$content['description'];?>" />	

<? if (($_GET['variant'] > 0) OR ($_GET['ab_cena'] == 1))
   {
?>
<link rel="canonical" href="http://<?echo $_SERVER['SERVER_NAME'];?>/2013/"/>
<?
  }

?>

        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <link href="http://www.test-pneumatik.cz/css.css?v=4" rel="stylesheet" type="text/css" />

        <title><? echo $content['title'];?></title>

</head>

<body>
<?
echo $content['ga'];
?>
<div id="fb-root"></div>
<script>(function(d, s, id) 
{
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/cs_CZ/all.js#xfbml=1&appId=154107951296955";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="main">
<div class='content'>


  <img src='./img-top.jpg' width='193' id='img-top' alt='<? echo $content['img_alt'];?>' />
    
  <? echo $content['h1'];?>
  <p><? echo $content['anotace'];?></p>



<!--      <a href="../dotaz.php"><div id="box-subscription"><big>E-mailová poradna ZDARMA.</big><br /><small>Chcete poradit s výběrem? <span style='text-decoration: underline;'>Napište nám dotaz</span>.</small></div></a>
-->
        <a href="../slevovy-kod.php"><div id="box-subscription"><br /><big>Chcete slevový kód do e-shopu?</big><br /><br /></div></a>
   </div>

<?

  // započítání návštěvy pro kasa.cz
 echo "<img src='http://www.ftjcfx.com/image-7144908-10903718' width='1' height='1' border='0'/>";
 
 
  
  if (($heureka == true) AND ($lang == "cs"))
  {
    echo "<script type='text/javascript' src='http://www.heureka.cz/direct/bannery/?id=16833335:2:".$heureka_cz_id."'></script>";
  }
  
  if ($lang == "sk")
  {
    // echo "<script type='text/javascript' src='http://www.heureka.sk/direct/bannery/?pid=1:200:522'></script>";
  }

  
        
          $vysledek = MySQL_Query("SELECT * FROM $tablename_products WHERE type='predni' ORDER BY rating DESC,sort");
          if (MySQL_Num_Rows($vysledek)!= 0)
        	{
             		echo $content['h2_predni'];
                        echo "<table class='pneumatiky'>\n";
             		echo "<tr>\n
                     <th></th><th>".$content['td_nazev']."</th><th>".$content['td_hodnoceni']."</th>";

                echo "<th></th>\n
                     </tr>\n";
             	  $counter=1;
           //  	  $affil_code="#a_aid=4d9ac73ea96be&amp;a_bid=258dc43e&amp;chan=winter";
             	  
                while($zaznam = MySQL_Fetch_Array($vysledek)):
                  echo "<tr>\n";
                  echo "<td>".$counter.".</td>";
                  echo "<td class='nazev'><strong>";
                    if ($lang == "cs") 
                      {
                       if ($heureka == true)
                       {
                         echo "<a title ='".$content['a_title']." ".$zaznam['name']."' class='nazev-pneu' href='".$zaznam['url_heureka']."#c".$heureka_cz_id.":2' onclick=\"recordOutboundLink(this, 'Outbound Links Heureka', 'Label ".$counter."');return false;\">";
                       }
                       else
                       {
                         echo "<a rel='nofollow' title ='".$content['a_title']." ".$zaznam['name']."' class='nazev-pneu' href='/e.php?id=".$zaznam['id']."&amp;row=1&amp;sid=".$sid."' onclick=\"recordOutboundLink(this, 'Outbound Links', 'Label ".$counter."');return false;\">";
                       } 
                      }
                      elseif ($lang == "sk")
                      {
                         echo "<a title ='".$content['a_title']." ".$zaznam['name']."' class='nazev-pneu' href='".$zaznam['url_heureka_sk'].$heureka_cz_id.":2' >";
                      }
                    echo $zaznam['name'];
                    if (($lang == "cs") OR ($lang == "sk")) { echo "</a>"; }
                    echo "</strong></td>";
                  echo "<td class='hodnoceni'>".hvezdicky($zaznam['rating'])."</td>";
                  echo "<td>";
                    if ($lang == "cs") 
                      { 
                       if ($heureka == true)
                       {
                        echo "<a href='".$zaznam['url_heureka']."#c".$heureka_cz_id.":2' onclick=\"recordOutboundLink(this, 'Outbound Links Heureka', 'Link ".$counter."');return false;\"><strong>".$content['vice-informaci']."</strong></a>";
                        } 
                       else
                       {
                        echo "<a rel='nofollow' href='/e.php?id=".$zaznam['id']."&amp;row=1&amp;sid=".$sid."' onclick=\"recordOutboundLink(this, 'Outbound Links', 'Link ".$counter."');return false;\"><strong>".$content['vice-informaci']."</strong></a>";
                       } 
                      }
                      elseif ($lang == "sk")
                      {
                        echo "<a href='".$zaznam['url_heureka_sk'].$heureka_cz_id.":2' ><strong>".$content['vice-informaci']."</strong></a>";
                      }
                  echo "</td>\n";
                  echo "</tr>\n";
                  $counter++;
                endwhile;
                echo "</table>\n";
          }
    

          
          
          
          $vysledek = MySQL_Query("SELECT * FROM $tablename_products WHERE type='horni' ORDER BY rating DESC,sort");
          if (MySQL_Num_Rows($vysledek)!= 0) 
        	{
             		echo $content['h2_horni'];
                        echo "<table class='pneumatiky'>\n"; 
             		echo "<tr>\n
                     <th></th><th>".$content['td_nazev']."</th><th>".$content['td_hodnoceni']."</th>";

                echo "<th></th>\n
                     </tr>\n";
             	  $counter=1;
           //  	  $affil_code="#a_aid=4d9ac73ea96be&amp;a_bid=258dc43e&amp;chan=winter";
             	  
                while($zaznam = MySQL_Fetch_Array($vysledek)):
                  echo "<tr>\n";
                  echo "<td>".$counter.".</td>";
                  echo "<td class='nazev'><strong>";
                    if ($lang == "cs") 
                      {
                       if ($heureka == true)
                       {
                         echo "<a title ='".$content['a_title']." ".$zaznam['name']."' class='nazev-pneu' href='".$zaznam['url_heureka']."#c".$heureka_cz_id.":2' onclick=\"recordOutboundLink(this, 'Outbound Links Heureka', 'Label ".$counter."');return false;\">";
                       }
                       else
                       {
                         echo "<a rel='nofollow' title ='".$content['a_title']." ".$zaznam['name']."' class='nazev-pneu' href='/e.php?id=".$zaznam['id']."&amp;row=1&amp;sid=".$sid."' onclick=\"recordOutboundLink(this, 'Outbound Links', 'Label ".$counter."');return false;\">";
                       } 
                      }
                      elseif ($lang == "sk")
                      {
                         echo "<a title ='".$content['a_title']." ".$zaznam['name']."' class='nazev-pneu' href='".$zaznam['url_heureka_sk'].$heureka_cz_id.":2' >";
                      }
                    echo $zaznam['name'];
                    if (($lang == "cs") OR ($lang == "sk")) { echo "</a>"; }
                    echo "</strong></td>";
                  echo "<td class='hodnoceni'>".hvezdicky($zaznam['rating'])."</td>";
                  echo "<td>";
                    if ($lang == "cs") 
                      { 
                       if ($heureka == true)
                       {
                        echo "<a href='".$zaznam['url_heureka']."#c".$heureka_cz_id.":2' onclick=\"recordOutboundLink(this, 'Outbound Links Heureka', 'Link ".$counter."');return false;\"><strong>".$content['vice-informaci']."</strong></a>";
                        } 
                       else
                       {
                        echo "<a rel='nofollow' href='/e.php?id=".$zaznam['id']."&amp;row=1&amp;sid=".$sid."' onclick=\"recordOutboundLink(this, 'Outbound Links', 'Link ".$counter."');return false;\"><strong>".$content['vice-informaci']."</strong></a>";
                       } 
                      }
                      elseif ($lang == "sk")
                      {
                        echo "<a href='".$zaznam['url_heureka_sk'].$heureka_cz_id.":2' ><strong>".$content['vice-informaci']."</strong></a>";
                      }
                  echo "</td>\n";
                  echo "</tr>\n";
                  $counter++;
                endwhile;
                echo "</table>\n";
          }          
 
          
          $vysledek = MySQL_Query("SELECT * FROM $tablename_products WHERE type='susicka' ORDER BY rating DESC,sort");
          if (MySQL_Num_Rows($vysledek)!= 0) 
        	{
             		echo $content['h2_susicka'];
                        echo "<table class='pneumatiky'>\n"; 
             		echo "<tr>\n
                     <th></th><th>".$content['td_nazev']."</th><th>".$content['td_hodnoceni']."</th>";

                echo "<th></th>\n
                     </tr>\n";
             	  $counter=1;
           //  	  $affil_code="#a_aid=4d9ac73ea96be&amp;a_bid=258dc43e&amp;chan=winter";
             	  
                while($zaznam = MySQL_Fetch_Array($vysledek)):
                  echo "<tr>\n";
                  echo "<td>".$counter.".</td>";
                  echo "<td class='nazev'><strong>";
                    if ($lang == "cs") 
                      {
                       if ($heureka == true)
                       {
                         echo "<a title ='".$content['a_title']." ".$zaznam['name']."' class='nazev-pneu' href='".$zaznam['url_heureka']."#c".$heureka_cz_id.":2' onclick=\"recordOutboundLink(this, 'Outbound Links Heureka', 'Label ".$counter."');return false;\">";
                       }
                       else
                       {
                         echo "<a rel='nofollow' title ='".$content['a_title']." ".$zaznam['name']."' class='nazev-pneu' href='/e.php?id=".$zaznam['id']."&amp;row=1&amp;sid=".$sid."' onclick=\"recordOutboundLink(this, 'Outbound Links', 'Label ".$counter."');return false;\">";
                       } 
                      }
                      elseif ($lang == "sk")
                      {
                         echo "<a title ='".$content['a_title']." ".$zaznam['name']."' class='nazev-pneu' href='".$zaznam['url_heureka_sk'].$heureka_cz_id.":2' >";
                      }
                    echo $zaznam['name'];
                    if (($lang == "cs") OR ($lang == "sk")) { echo "</a>"; }
                    echo "</strong></td>";
                  echo "<td class='hodnoceni'>".hvezdicky($zaznam['rating'])."</td>";
                  echo "<td>";
                    if ($lang == "cs") 
                      { 
                       if ($heureka == true)
                       {
                        echo "<a href='".$zaznam['url_heureka']."#c".$heureka_cz_id.":2' onclick=\"recordOutboundLink(this, 'Outbound Links Heureka', 'Link ".$counter."');return false;\"><strong>".$content['vice-informaci']."</strong></a>";
                        } 
                       else
                       {
                        echo "<a rel='nofollow' href='/e.php?id=".$zaznam['id']."&amp;row=1&amp;sid=".$sid."' onclick=\"recordOutboundLink(this, 'Outbound Links', 'Link ".$counter."');return false;\"><strong>".$content['vice-informaci']."</strong></a>";
                       } 
                      }
                      elseif ($lang == "sk")
                      {
                        echo "<a href='".$zaznam['url_heureka_sk'].$heureka_cz_id.":2' ><strong>".$content['vice-informaci']."</strong></a>";
                      }
                  echo "</td>\n";
                  echo "</tr>\n";
                  $counter++;
                endwhile;
                echo "</table>\n";
          }        
  
?>
<div class="social">
  <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
  <div class="g-plusone" data-size="medium"></div>
</div>

<div class='content'>
  <? echo $content['kotvy'];?>


<?
echo $content['long_text'];
echo $content['footer'];

?>
  </div>
</div>

<p class="provozovatel"><a rel="nofollow" href="/provozovatel.php">Provozovatel webu</a></p>

<!--<p style="text-align: right; max-width: 960px; min-width: 880px;margin: 0px auto 0; padding-bottom: 30px;"><a rel="nofollow" style="color: #999999; text-decoration: none;" href="/provozovatel.php">Provozovatel webu</a></p>
-->

<script type="text/javascript">
  window.___gcfg = {lang: 'cs'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
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