<?php
include("includes/functions.php");
$bannerID = $_GET['bannerID'];

$result_banner = mysql_query("SELECT *
                              FROM banner
                              WHERE bannerID = '$bannerID'");
$row_banner = mysql_fetch_array($result_banner);
$hits = $row_banner["bannerHits"];

mysql_query("UPDATE `banner` SET `bannerHits` = $hits + 1 WHERE bannerID = '$bannerID'");


echo '<meta http-equiv="refresh" content="0;URL=http://'.$row_banner["bannerRef"].'">';
?>
