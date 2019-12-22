<?php
// START_SESSION
if (!session_start()){
    echo 'Session konnte nicht gestartet werden';
    }

// DB_CONNECT
if (isset($_SERVER['DDEV_PROJECT'])) {
    $host = 'db';
    $username = 'db';
    $password = 'db';
    $database = 'db';
} else {
    $host = $_SERVER['DB_HOST'];
    $username = $_SERVER['DB_USERNAME'];
    $password = $_SERVER['DB_PASSWORD'];
    $database = $_SERVER['DB_NAME'];
}

$GLOBALS['dblink'] = mysqli_connect($host, $username, $password, $database) or die("Unable to select database");

function show_banner(){
    $sql = mysqli_query($GLOBALS['dblink'], "SELECT * FROM banner ORDER BY RAND() LIMIT 1");
    $banner = mysqli_fetch_array($sql);
    $countbanner = mysqli_num_rows($sql);

    if ($countbanner == 0) {

    } else {

    $bannerfile = $banner["bannerFile"];
    $bannerlink = $banner["bannerRef"];
    $bannerID = $banner["bannerID"];
    $views = $banner["bannerViews"];

    $format = substr($bannerfile, -3);    // gibt "endung" zurück

    mysqli_query($GLOBALS['dblink'], "UPDATE `banner` SET `bannerViews` = $views + 1 WHERE bannerID = '$bannerID'");

        if ($format == 'swf') {
            echo '
                        <object type="application/x-shockwave-flash" data="banner/'.$bannerfile.'" width="468" height="60" id="xy">
                           <param name="movie" value="banner/'.$bannerfile.'" />
                           <param name="loop" value="true" />
                           <param name="menu" value="false" />
                           <param name="scale" value="showall" />
                           <param name="quality" value="high" />
                           <param name="bgcolor" value="#FFFFFF" />
                           <param name="wmode" value="transparent" />
                           <embed src="banner/'.$bannerfile.'" loop="true" quality="high" scale="showall" menu="false" wmode="transparent"
                               width="468" height="60" type="application/x-shockwave-flash"
                               pluginspage="http://www.macromedia.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">
                            </embed>
                        </object>

                        <a href="banner.php?bannerID='.$bannerID.'" target="_blank" rel="nofollow">
                        <img src="../web/img/spacer.gif" width="468" height="60" style="margin-left:-468px;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0); -moz-opacity: 0.0; -khtml-opacity: 0.0;opacity: 0.0;" />
                        </a>';
        }
        else {
            echo '<a href="banner.php?bannerID='.$bannerID.'" target="blank"><img alt="" border="0" src="banner/'.$bannerfile.'"></a>';
        }
    }
}
