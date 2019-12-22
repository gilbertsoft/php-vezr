<?php
include('adminfunctions.php');
include_once('Image.class.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="robots" content="noindex, nofollow">
<title>Website Administration Tool +++ VeZR</title>
<link rel="stylesheet" type="text/css" media="screen" href="admin.css" />
<script type="text/javascript">
 <!--
 function loeschen(lnk)
 {
 if(confirm('Wirklich löschen?'))
     {
     theLink.href += '&is_js_confirmed=1';
     //document.location.href=lnk;
     }
 }
 //-->
</script>
<!-- TinyMCE -->
<script type="text/javascript" src="./tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "paste,media",
		paste_auto_cleanup_on_paste : true,
		paste_remove_styles : true,

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,|,justifyleft,justifycenter,justifyright,|,pastetext,removeformat,|,link,unlink,|,code",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",

		theme_advanced_resizing : false,
		content_css : "admin.css",

		convert_urls : false,
		relative_urls : false,
		document_base_url : "https://www.vezr.ch/web/",
		editor_deselector : "mceNoEditor"
	});
</script>
<!-- /TinyMCE -->
</head>
<body>
<?php

if (isset($_GET['logout'])) {
    $_SESSION['login'] = 0;
    unset($_SESSION);
    $_SESSION['login'] = false;
}

$cat = $_GET['cat'] ?? '';
$id = $_GET['id'] ?? '';
$mode = $_GET['mode'] ?? '';

//NAVIGATION
    if ($cat == 'home' or $cat == '') {
        $site = 'home.php';
    }
    if ($cat == 'news') {
        $site = 'news.php';
    }
    if ($cat == 'productcat') {
        $site = 'procat.php';
    }
    if ($cat == 'content') {
        $site = 'content.php';
    }
    if ($cat == 'links') {
        $site = 'links.php';
    }
    if ($cat == 'guestbook') {
        $site = 'guestbook.php';
    }
    if ($cat == 'gallery') {
        $site = 'gallery.php';
    }
    if ($cat == 'contact') {
        $site = 'contact.php';
    }

    if ($cat == 'image') {
        $site = 'image.php';
    }
    if ($cat == 'fileup') {
        $site = 'fileup.php';
    }
    if ($cat == 'bannerup') {
        $site = 'bannerup.php';
    }
    if ($cat == 'newcontent') {
        $site = 'newcontent.php';
    }
    if ($cat == 'letter') {
        $site = 'letter.php';
    }
    if ($cat == 'letterlist') {
        $site = 'letterlist.php';
    }
?>
<div id="container">
	<div id="header"><img src="img/header.gif" />
		<div id="version">Ver 1.9 (03/10)</div>
		<?php if ($_SESSION['login']) { ?>
		<div id="logout"><a href='index.php?logout' class="logout">&raquo; Logout</a></div>
		<div id="status">Status: Logged in</div>
		<div id="navi">
			<a href="?cat=home" class="navi_main_block">Home</a>
            <a href="?cat=news" class="navi_main_block">News</a>
			<a href="?cat=content" class="navi_main_block">Content</a>
            <a href="?cat=gallery" class="navi_main_block">Gallerien</a>
            <a href="?cat=links" class="navi_main_block">Links</a>
            <a href="?cat=guestbook" class="navi_main_block">Gästebuch</a>
            <a href="?cat=contact" class="navi_main_block">Kontakt</a>
			<a href="?cat=fileup&fileRefID=1&fileRef=1" class="navi_main_block">Files</a>
        	<a href="?cat=bannerup" class="navi_main_block">Banner</a>
            <a href="?cat=letter" class="navi_main_block">Newsletter</a></div>
<?php } else {
    $site = 'login.php'; ?>
			<div id="status">Status: Not Logged in</div>
	  <?php
} ?>
	</div>
	<div id="content"><?php include $site; ?></div>
</div>
<?php
@mysqli_close($GLOBALS['dblink']);
?>
</body>
</html>
