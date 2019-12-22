<?php
/*
        Captcha v1.o9 - Copyright (c) 2006, Daniel Kauser aka danysahne333
        This program and it's moduls are Open Source in terms of General Public License (GPL) v2.0

        captcha.php     (random text module)

        visit http://www.cb-talk.de/captcha.html for latest version
    */

    // Header
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');    // Datum aus Vergangenheit
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
                                                         // immer geändert
    header('Cache-Control: no-store, no-cache, must-revalidate');  // HTTP/1.1
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');                          // HTTP/1.0

include('includes/functions.php');

//Alle GET-Variablen im Dokument verfügbar machen
$lang = $_GET['lang'] ?? '';
$cat = $_GET['cat'] ?? '';
$mode = $_GET['mode'] ?? '';
$id = $_GET['id'] ?? '';
$contentID = $_GET['contentID'] ?? '';

//NAVIGATION
    $content = '';

    if ($cat == '') {
        $cat = 'home';
    }

    if ($cat == 'home') {
        $content = 'home.php';
    }
    if ($cat == 'news') {
        $content = 'news.php';
    }
    if ($cat == 'aktuell') {
        $content = 'content.php';
    }
    if ($cat == 'about') {
        $content = 'content.php';
    }
    if ($cat == 'programm') {
        $content = 'content.php';
    }
    if ($cat == 'boerse') {
        $content = 'content.php';
    }
    if ($cat == 'newsletter') {
        $content = 'newsletter.php';
    }
    if ($cat == 'links') {
        $content = 'links.php';
    }
    if ($cat == 'guestbook') {
        $content = 'guestbook.php';
    }

    if ($cat == 'impressum') {
        $content = 'impressum.php';
    }
    if ($cat == 'contact') {
        $content = 'contact.php';
    }

    if ($content == '') {
        $content = 'home.php';
    }

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="VEZR, Verein, börsenhändler, Zürich, Börse Zürich, Börse ">
<meta name="description" content="VeZR - Verein ehemaliger Zürcher Ringhändler">
<link rel="stylesheet" type="text/css" media="screen" href="includes/vezr.css" />
<link rel="stylesheet" type="text/css" media="screen" href="includes/lightbox/css/lightbox.css" />
<script language="javascript" type="text/javascript" src="includes/AC_RunActiveContent.js"></script>
<script language="javascript" type="text/javascript" src="includes/swfobject.js"></script>
<script type="text/javascript" src="includes/lightbox/js/prototype.js"></script>
<script type="text/javascript" src="includes/lightbox/js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="includes/lightbox/js/lightbox.js"></script>
<title>VeZR - Verein ehemaliger Zürcher Ringhändler</title>
</head>

<body>
<div id="container">
    <div id="header">
      <div id="logoLink"><a href="?cat=home"><img src="img/logoLink.gif" /></a></div>
      <?php
        if ($cat=='home') {
            echo '
          <div id="headerSound">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="110" height="35">
            <param name=movie value="sound.swf">
            <param name=quality value=high>
            <embed src="sound.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="110" height="35"></embed>
            </object>
          </div>';
        }
      ?>
      <div id="logoRight"><a href="?cat=home"><img src="img/vezrLogo.gif" /></a></div>
      <div id="navMain">
        <a href="?cat=news" class="navi">Aktuell</a>
        <a href="?cat=about" class="navi">&uuml;ber VeZR</a>
        <a href="?cat=programm" class="navi">Programm</a>
        <a href="?cat=boerse" class="navi">B&ouml;rse Z&uuml;rich</a>
        <a href="?cat=guestbook" class="navi">Gästebuch</a>
        <a href="?cat=links" class="navi">Links</a>
      </div>
  </div>
    <div id="main">
      <table width="898" border="0">
          <tr>
            <td id="leftCol" valign="top" rowspan="2"><br /><br /><?php include 'subnav.php'; ?></td>
            <td align="center" valign="top">
                <?php show_banner() ?>
            </td>
          </tr>
           <tr>
            <td id="rightCol" valign="top">
                <?php include $content; ?>
            </td>
          </tr>
      </table>
    </div>
    <div id="footer">&copy; VeZR 2010 - Verein ehemaliger Zürcher Ringhändler&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?cat=impressum">&raquo; Impressum</a> <a href="?cat=contact">&raquo; Kontakt</a> <a href="?cat=newsletter">&raquo; Newsletter</a></div>
</div>
<?php
$chCounter_visible = 0;
$chCounter_status = 'active';
//include('counter/counter.php');

@mysqli_close($GLOBALS['dblink']);
?>
</body>
</html>
