<?php

/*
 * This file is part of the package gilbertsoft/vezr.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

include('includes/functions.php');

$bannerID = $_GET['bannerID'];

$result_banner = mysqli_query($GLOBALS['dblink'], "SELECT *
                              FROM banner
                              WHERE bannerID = '$bannerID'");
$row_banner = mysqli_fetch_array($result_banner);
$hits = $row_banner['bannerHits'];
$bannerID = $row_banner['bannerID'];

mysqli_query($GLOBALS['dblink'], "UPDATE `banner` SET `bannerHits` = $hits + 1 WHERE bannerID = '$bannerID'");

echo '<meta http-equiv="refresh" content="0;URL=http://' . $row_banner['bannerRef'] . '">';
