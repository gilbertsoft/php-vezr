<?php
// START_SESSION
if (!session_start()){
	echo 'Session konnte nicht gestartet werden';
	}

// DB_CONNECT
$username="haempe";
$password="wL75UqDY";
$database="haempe";
mysql_connect("localhost:3309",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

function show_banner(){

	$sql = mysql_query("SELECT * FROM banner ORDER BY RAND() LIMIT 1");
	$banner = mysql_fetch_array($sql);
	$countbanner = mysql_num_rows($sql);
	
	if ($countbanner == 0) {
	
	} else {
	
	$bannerfile = $banner["bannerFile"];
	$bannerlink = $banner["bannerRef"];
	$bannerID = $banner["bannerID"];
	$views = $banner["bannerViews"];
	
	mysql_query("UPDATE `banner` SET `bannerViews` = $views + 1 WHERE bannerID = '$bannerID'");
	
	echo '<a href="banner.php?bannerID='.$bannerID.'" target="blank"><img alt="" border="0" src="banner/'.$bannerfile.'"></a>';
	}
}

?>