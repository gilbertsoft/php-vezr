<div style="margin:20px;">
<?php if (!$_SESSION['login']) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else {
    switch ($mode) {
    case 'delete':
    mysqli_query($GLOBALS['dblink'], "DELETE FROM news WHERE newsID = '$newsID'");
   echo '<meta http-equiv="refresh" content="0;URL=?cat=gallery">';
    break;

    case 'update_news':
    $release_date = mktime($hour, $minute, 0, $month, $day, $year);
    mysqli_query($GLOBALS['dblink'], "UPDATE `news` SET `newsTitel` = '$newsTitel',
								   `newsDate` = '$release_date' 
				 					WHERE `newsID` = '$newsID'");
    echo '<meta http-equiv="refresh" content="0;URL=?cat=gallery">';
    break;

    case 'save_news':
    $release_date = mktime($hour, $minute, 0, $month, $day, $year);
    $sql = "INSERT INTO news (`newsCat` ,`newsTitel` , `newsDate`) VALUES ('$newsCat', '$newsTitel', '$release_date')";
    mysqli_query($GLOBALS['dblink'], $sql);
    echo '<meta http-equiv="refresh" content="0;URL=?cat=gallery">';
    break;

    case 'new_news':
    new_form();
    break;

    case 'edit_news':
    edit_form($_GET['newsID']);
    break;

    default:
    overview();
    break;
}
}

function edit_form($newsID)
{
    $result = mysqli_query($GLOBALS['dblink'], "SELECT * FROM news WHERE newsID = '$newsID' LIMIT 1");
    $row_news = mysqli_fetch_array($result);

    $second = date('s', $row_news['newsDate']);
    $minute = date('i', $row_news['newsDate']);
    $hour = date('H', $row_news['newsDate']);
    $day = date('d', $row_news['newsDate']);
    $month = date('m', $row_news['newsDate']);
    $year = date('Y', $row_news['newsDate']);

    echo '<form name="update_news" method="post" action="?cat=gallery">
      <input type="hidden" name="mode" value="update_news">
	  <input type="hidden" name="newsID" value="' . $_GET['newsID'] . '">
      <b>Gallerydaten bearbeiten:<br><br>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="150">Titel</td>
			<td><input name="newsTitel" type="text" size="25" value="' . $row_news['newsTitel'] . '"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150">Zeit H:M / Datum T:M:J</td>
			<td><input name="second" value="' . $second . '" type="hidden"><input name="hour" value="' . $hour . '" type="text" size="1"> : <input name="minute" value="' . $minute . '" type="text" size="1"> / <input name="day" value="' . $day . '" type="text" size="2"> <input name="month" value="' . $month . '" type="text" size="2"> <input name="year" value="' . $year . '" type="text" size="4"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150"><input type="submit" name="Submit" value="Speichern"></td>
			<td>&nbsp;</td>
		</tr>
	  </table>
      </form>';
}

function new_form()
{
    $second = date('s');
    $minute = date('i');
    $hour = date('H');
    $day = date('d');
    $month = date('m');
    $year = date('Y');

    echo '<form name="new_news" method="post" action="?cat=gallery">
      <input type="hidden" name="mode" value="save_news">
	  <input type="hidden" name="newsCat" value="3">
      <b>Neue Gallery erstellen:<br><br>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="150">Titel</td>
			<td><input name="newsTitel" type="text" size="25"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150">Zeit H:M / Datum T:M:J</td>
			<td><input name="second" value="' . $second . '" type="hidden"><input name="hour" value="' . $hour . '" type="text" size="1"> : <input name="minute" value="' . $minute . '" type="text" size="1"> / <input name="day" value="' . $day . '" type="text" size="2"> <input name="month" value="' . $month . '" type="text" size="2"> <input name="year" value="' . $year . '" type="text" size="4"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150"><input type="submit" name="Submit" value="Speichern"></td>
			<td>&nbsp;</td>
		</tr>
	  </table>
      </form>';
}

function overview()
{
    echo '<h2><a href="?cat=gallery&mode=new_news">> Neue Gallery erstellen</a></h2><br><b>Vorhandene Gallerys:</b><br><br>Klicke auf den Schreiber um die Gallerys zu bearbeiten oder auf das Kreuz um sie zu l&ouml;schen.<br><br>';
    $sql = mysqli_query($GLOBALS['dblink'], 'SELECT * FROM news
					WHERE newsCat = 3
					ORDER BY newsDate DESC');
    while ($row_news = mysqli_fetch_array($sql)) {
        $release_date = date('H:i d.m.Y', $row_news['newsDate']);

        echo '
	<table width="640" border="0" cellspacing="0" cellpadding="1" style="border: 1px solid #CCCCCC;">
		<tr>
			<td><h2>' . $row_news['newsTitel'] . '</h2>' . $release_date . ' &nbsp;&nbsp;&nbsp;&nbsp; <a href="?cat=gallery&mode=edit_news&newsID=' . $row_news['newsID'] . '"><img src="img/edit.png" border="0" /></a>&nbsp;&nbsp;<a href="?cat=image&ref=' . $row_news['newsID'] . '&types=123"><img src="img/cam.png" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="?cat=gallery&mode=delete&newsID=' . $row_news['newsID'] . '" onClick="loeschen(this);return false;"><img src="img/delete.png" border="0" /></a><br /><br />
			' . $row_news['newsText'] . '</td>
		</tr>
	</table><br />';
    }
}  ?>
</div>