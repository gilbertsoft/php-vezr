<div style="margin:20px;">
<?php if (!$_SESSION["login"]) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else { 

 	echo '<h2>Newsletter Adressliste</h2><br /><br />
	Diese Liste kann verwendet werden, um einen Newsletter per Outlook oder �hnlichem zu versenden. Einfach komplette Liste kopieren und in das BCC-Feld einf�gen. Um Adressen ein- und auszutragen verwenden Sie bitte die Newsletter-Site im Frontend.
	<br /><br /><strong>Eingetragene Adressen:</strong><br />';
 	
 	$newslist = mysql_query("SELECT * FROM newsletter");
	while($row_list = mysql_fetch_array($newslist))
	{	
		echo ''.$row_list["newsletterMail"].';<br />'; 
	}
	echo '<br /><br /><a href="?cat=letter">&raquo; zur�ck</a><br />';
}  ?>
</div>

