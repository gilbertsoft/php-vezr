<div style="margin:20px;">
<?php if (!$_SESSION["login"]) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else { ?>
<table width="660" border="0" cellspacing="20" cellpadding="0">
  <tr>
    <td valign="top">
		<h2>Willkommen<br /><br />
		VeZR - Administration Tool </h2>
		<br />
		Mit diesem Content Management
	System (CMS) k&ouml;nnen Sie ihre Website administrieren. Aus den nebenstehenden User-Zahlen k&ouml;nnen Sie alle relevanten Daten &uuml;ber die Besucher der Website auslesen. Ein Klick auf &quot;Statistik&quot; f&uuml;hrt Sie zu ausf&uuml;hrlicheren Daten &uuml;ber die Besucher.<br />
	<br /><br />
    </td>
    <td width="200" valign="top">
		<h2>User-Zahlen</h2><br />
		<?php
		$chCounter_visible = 1;
		$chCounter_status = 'inactive';
		include( 'D:\private\customers\haempe\domains\vezr.ch\www\web\counter/counter.php' );
		?>
	</td>
  </tr>
</table>

<?php ;	} ?>
<br /><br /><br /><br /><br />&copy; Markus Br&uuml;tsch, 2009
</div>