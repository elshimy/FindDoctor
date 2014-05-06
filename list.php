<?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_categs = "-1";
if (isset($_GET['Zones'])) {
  $colname_categs = $_GET['Zones'];
}else{
	$colname_categs = $_GET['Govs'];
	}
	 $colname = $_GET['Category'];
	//Category
mysql_select_db($database_conn, $conn);
 mysql_query("SET NAMES 'utf8'"); 
mysql_query('SET CHARACTER SET utf8');
$query_categs = sprintf("SELECT * FROM category_list WHERE LocationID = %s and CategID=%s ", GetSQLValueString($colname_categs, "int"),GetSQLValueString($colname, "int"));
$categs = mysql_query($query_categs, $conn) or die(mysql_error());
$row_categs = mysql_fetch_assoc($categs);
$totalRows_categs = mysql_num_rows($categs);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/temp2.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Find Doctor</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
 <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="styles/style1.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="styles/style1.responsive.css" media="all">
   <script src="scripts/jquery.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/script.responsive.js"></script>

</head>

<body>

<div id="art-main">
<nav class="art-nav clearfix">
    <ul class="art-hmenu"><li><a href="#">للاتصال بنا</a></li><li><a href="#" >عننــا</a></li><li><a href="home.php" class="active">الرئيسية</a></li></ul> 
    </nav>
<header class="art-header clearfix">


    <div class="art-shapes">

<div class="art-object1828982892" data-left="100%"></div>
<div class="art-object197272937" data-left="0%"></div>

            </div>

                        
                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                                 
                <div class="art-postcontent art-postcontent-0 clearfix"><!-- InstanceBeginEditable name="EditRegion3" -->
<div align="right">
<?php if($totalRows_categs > 0){?>

   
  <?php do { ?>
 <table width="90%" border="0" cellpadding="5" cellspacing="5" class="tbl">   <tr>
      <td colspan="2" align="right" class="CategName"><?php echo $row_categs['Name']; ?></td>
      </tr>
   
     <tr> <td width="83%" align="right" class="FormLeft"><?php echo $row_categs['Telephones']; ?></td>
       <td width="17%" align="right" class="FormRight">التليفونات</td>
     </tr>
     <tr> <td align="right"  class="FormLeft"><?php echo $row_categs['Address']; ?></td>
       <td align="right" class="FormRight">العنوان</td>
     </tr></table>
    <?php } while ($row_categs = mysql_fetch_assoc($categs)); ?>



<?php }else{?>
<?php }?>
</div>
<!-- InstanceEndEditable -->
                
                
                
                
                </div>
                                
                </article></div>
                        <div class="art-layout-cell art-sidebar1 clearfix"><div class="art-block clearfix">
        <div class="art-blockcontent"><p>&nbsp;<img width="32" height="32" alt="" src="images/rss_32.png" class="">&nbsp;&nbsp;<img width="32" height="32" alt="" src="images/twitter_32.png">&nbsp;&nbsp;<img width="32" height="32" alt="" src="images/facebook_32.png">&nbsp;&nbsp;<img width="32" height="32" alt="" src="images/flickr_32.png" class="">&nbsp;&nbsp;</p></div>
</div><div class="art-block clearfix">
        <div class="art-blockcontent"><div style="background-color:#EBF0F8;padding:20px;">
<p>02/23/11<br>
<span style="color:#3D91D6;">Suspendisse pharetra</span><br>
Auctor pharetra. Nunc a sollicitudin est.</p>
<br>
<p>01/12/11<br>
<span style="color:#3D91D6;">Donec vel neque</span><br>
Fusce ornare elit nisl, feugiat bibendum lorem.</p>
<br>
<p>02/23/11<br>
<span style="color:#3D91D6;">Curabitur ullamcorper</span><br>
Auctor pharetra. Nunc a sollicitudin est.</p>
<br>
<p><a href="#">All News</a></p>
</div></div>
</div><div class="art-block clearfix">
        <div class="art-blockcontent"><p style="font-size:16px; font-family:'Trebuchet MS'; font-weight:bold;">Subscribe</p>
<div style="padding:5px;background-color:#F0F0F0;">
<p style="font-size:11px;color:#999999;">&nbsp;Name</p>
<p><input value=""></p>
<p style="font-size:11px;color:#999999;">&nbsp;Email</p>
<p><input value=""></p>
<p><br></p>
<p>&nbsp;<a href="" class="art-button">Subscribe</a>&nbsp;<br></p>
<p><br></p>
</div></div>
</div></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<p style="text-align: center;">Copyright © 2013. All Rights Reserved to Find Doctor.</p>
  </div>
</footer>

</div>


</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($categs);
?>
