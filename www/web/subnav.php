<?php
if ($cat== 'news' or $cat == 'aktuell') {
	echo '<a href="?cat=news">&raquo; Aktuell</a><br /><br />
	<a href="?cat=news&mode=gallery">&raquo; Gallerien</a><br />';
	$sql = mysql_query("SELECT * FROM content WHERE contentCat = '1'");
		while($row_sql = mysql_fetch_array($sql))
			{
				echo '<a href="?cat=aktuell&contentID='.$row_sql["contentID"].'">&raquo; '.$row_sql["contentName"].'</a><br />';
			}
	}
else if ($cat== 'programm'){
	if ($contentID == '') $contentID = 8;
	echo '<a href="?cat=programm&contentID=8">&raquo; Programm</a><br /><br />';
	$sql = mysql_query("SELECT * FROM content WHERE contentCat = '3'");
		while($row_sql = mysql_fetch_array($sql))
			{
				echo '<a href="?cat=programm&contentID='.$row_sql["contentID"].'">&raquo; '.$row_sql["contentName"].'</a><br />';
			}
	}
else if ($cat== 'about'){
	if ($contentID == '') $contentID = 1;
	echo '<a href="?cat=about&contentID=1">&raquo; Der VeZR</a><br /><br />';
	$sql = mysql_query("SELECT * FROM content WHERE contentCat = '2'");
		while($row_sql = mysql_fetch_array($sql))
			{
				echo '<a href="?cat=about&contentID='.$row_sql["contentID"].'">&raquo; '.$row_sql["contentName"].'</a><br />';
			}
	}
else if ($cat== 'boerse'){
	if ($contentID == '') $contentID = 2;
	echo '<a href="?cat=boerse&contentID=2">&raquo; B&ouml;rse Z&uuml;rich</a><br /><br />';
	$sql = mysql_query("SELECT * FROM content WHERE contentCat = '4'");
		while($row_sql = mysql_fetch_array($sql))
			{
				echo '<a href="?cat=boerse&contentID='.$row_sql["contentID"].'">&raquo; '.$row_sql["contentName"].'</a><br />';
			}
	}
	echo '<br />';
	
	$sql = mysql_query("SELECT * FROM sidebarleft ORDER BY RAND() LIMIT 2");
		while($row_sidebar = mysql_fetch_array($sql))
			{
				echo '<a href="data/sidebarLeft/'.$row_sidebar["sbImageID"].'_2.jpg" rel="lightbox" title=""><img class="lightboxImage" src="data/sidebarLeft/'.$row_sidebar["sbImageID"].'_1.jpg"></a><br /> <br />';
			}
?>