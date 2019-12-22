<div style="margin:20px;">
<?php if (!$_SESSION['login']) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else {
    switch ($mode) {
    case 'delete':
    mysqli_query($GLOBALS['dblink'], "DELETE FROM links WHERE linkID = '$linkID'");
   echo '<meta http-equiv="refresh" content="0;URL=?cat=links">';
    break;

    case 'deleteCat':
    mysqli_query($GLOBALS['dblink'], "DELETE FROM linkcat WHERE linkCatID = '$linkCatID'");
   echo '<meta http-equiv="refresh" content="0;URL=?cat=links">';
    break;

    case 'update_link':
    mysqli_query($GLOBALS['dblink'], "UPDATE `links` SET  `linkCat` = '$linkCat',
								   `linkURL` = '$linkURL', 
								   `linkText` = '$linkText'
				 					WHERE `linkID` = '$linkID'");
    echo '<meta http-equiv="refresh" content="0;URL=?cat=links">';
    break;

    case 'update_linkCat':
    mysqli_query($GLOBALS['dblink'], "UPDATE `linkcat` SET  `linkCatName` = '$linkCatName'
				 					WHERE `linkCatID` = '$linkCatID'");
    echo '<meta http-equiv="refresh" content="0;URL=?cat=links">';
    break;

    case 'save_link':
    $sql = "INSERT INTO links (`linkCat` ,`linkURL` ,`linkText`) VALUES ('$linkCat', '$linkURL', '$linkText')";
    mysqli_query($GLOBALS['dblink'], $sql);
    echo '<meta http-equiv="refresh" content="0;URL=?cat=links">';
    break;

    case 'save_cat':
    $sql = "INSERT INTO linkcat (`linkCatName`) VALUES ('$linkCatName')";
    mysqli_query($GLOBALS['dblink'], $sql);
    echo '<meta http-equiv="refresh" content="0;URL=?cat=links">';
    break;

    case 'new_link':
    new_form();
    break;

    case 'new_cat':
    new_catform();
    break;

    case 'edit_link':
    edit_form($_GET[linkID]);
    break;

    case 'edit_linkCat':
    edit_catform($_GET[linkCatID]);
    break;

    default:
    overview();
    break;
}
}

function edit_form($linkID)
{
    $result = mysqli_query($GLOBALS['dblink'], "SELECT * FROM links WHERE linkID = '$linkID' LIMIT 1");
    $row_link = mysqli_fetch_array($result);

    echo '<form name="update_link" method="post" action="?cat=links">
      <input type="hidden" name="mode" value="update_link">
	  <input type="hidden" name="linkID" value="' . $_GET[linkID] . '">
      <b>link bearbeiten:<br><br>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="150">Link Text</td>
			<td><input name="linkText" type="text" size="35" value="' . $row_link['linkText'] . '"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150">Link URL</td>
			<td><input name="linkURL" type="text" size="25" value="' . $row_link['linkURL'] . '">&nbsp;&nbsp;&nbsp ohne http://</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150">Kategorie</td>
			<td>&nbsp;</td>
		</tr>';

    $sql = mysqli_query($GLOBALS['dblink'], 'SELECT * FROM linkcat ORDER BY linkCatID');
    while ($row_linkCat = mysqli_fetch_array($sql)) {
        echo '<tr>
					<td width="150"></td>
					<td><input type="radio" name="linkCat" value="' . $row_linkCat['linkCatID'] . '" id="linkCat"';
        if ($row_link['linkCat'] == $row_linkCat['linkCatID']) {
            echo 'checked';
        }
        echo'>&nbsp; ' . $row_linkCat['linkCatName'] . '</td>
				  </tr>';
    }
    echo '
		<tr>
			<td width="150"><input type="submit" name="Submit" value="Speichern"></td>
			<td>&nbsp;</td>
		</tr>
	  </table>
      </form>';
}

function new_form()
{
    echo '<form name="new_link" method="post" action="?cat=links">
      <input type="hidden" name="mode" value="save_link">
      <b>Neuen Link erstellen:</b><br><br>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="150">Link Text</td>
			<td><input name="linkText" type="text" size="35"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150">Link URL</td>
			<td><input name="linkURL" type="text" size="25">&nbsp;&nbsp;&nbsp ohne http://</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150">Link-Kategorie</td>
			<td>&nbsp;</td>
		</tr>';

    $sql = mysqli_query($GLOBALS['dblink'], 'SELECT * FROM linkcat ORDER BY linkCatID');
    while ($row_linkCat = mysqli_fetch_array($sql)) {
        echo '<tr>
					<td width="150"></td>
					<td><input type="radio" name="linkCat" value="' . $row_linkCat['linkCatID'] . '" id="linkCat">&nbsp; ' . $row_linkCat['linkCatName'] . '</td>
				  </tr>';
    }
    echo '
		<tr>
			<td width="150"><input type="submit" name="Submit" value="Speichern"></td>
			<td>&nbsp;</td>
		</tr>
	  </table>
      </form>';
}

function new_catform()
{
    echo '<form name="new_cat" method="post" action="?cat=links">
      <input type="hidden" name="mode" value="save_cat">
      <b>Neue Kategorie erstellen:</b><br><br>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="150">Kategorie Name</td>
			<td><input name="linkCatName" type="text" size="35"></td>
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
      </form><br /<br />
	  <h2>Folgende Kategorien sind bereits erfasst:</h2><br />';

    $sql = mysqli_query($GLOBALS['dblink'], 'SELECT * FROM linkcat ORDER BY linkCatID');
    while ($row_linkCat = mysqli_fetch_array($sql)) {
        echo '' . $row_linkCat['linkCatName'] . '&nbsp;&nbsp;&nbsp;&nbsp;<a href="?cat=links&mode=edit_linkCat&linkCatID=' . $row_linkCat['linkCatID'] . '"><img src="img/edit.png" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?cat=links&mode=deleteCat&linkCatID=' . $row_linkCat['linkCatID'] . '" onClick="loeschen(this);return false;"><img src="img/delete.png" border="0" /></a><br /><br />';
    }
}

function edit_catform($linkCatID)
{
    $result = mysqli_query($GLOBALS['dblink'], "SELECT * FROM linkcat WHERE linkCatID = '$linkCatID' LIMIT 1");
    $row_linkCat = mysqli_fetch_array($result);

    echo '<form name="update_linkCat" method="post" action="?cat=links">
      <input type="hidden" name="mode" value="update_linkCat">
	  <input type="hidden" name="linkCatID" value="' . $_GET[linkCatID] . '">
      <b>Kategorie bearbeiten:<br><br>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="150">Kategorie Name</td>
			<td><input name="linkCatName" type="text" size="35" value="' . $row_linkCat['linkCatName'] . '"></td>
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
    echo '<h2><a href="?cat=links&mode=new_link">> Neuen Link eintragen</a></h2><br>
	  <h2><a href="?cat=links&mode=new_cat">> Linkkategorien erfassen/bearbeiten</a></h2><br>
	  <b>Vorhandene Links:</b><br><br>
	  Klicke auf den Schreiber um den Link zu bearbeiten oder auf das Kreuz um ihn zu l&ouml;schen.<br><br>';
    $sql = mysqli_query($GLOBALS['dblink'], 'SELECT * FROM links 
							 ORDER BY linkCat');
    while ($row_link = mysqli_fetch_array($sql)) {
        $catID = $row_link['linkCat'];
        $sql2 = mysqli_query($GLOBALS['dblink'], "SELECT * FROM linkcat WHERE linkCatID = '$catID' LIMIT 1");
        $row_cat = mysqli_fetch_array($sql2);
        $art = $row_cat['linkCatName'];
        echo '
	<table width="380" border="0" cellspacing="0" cellpadding="1" style="border: 1px solid #CCCCCC;">
		<tr>
			<td width="300"><h2>' . $row_link['linkText'] . '</h2>' . $row_link['linkURL'] . '&nbsp;&nbsp;&nbsp;&nbsp;<em>[Kategorie: ' . $art . ']</em></td>
			<td><a href="?cat=links&mode=edit_link&linkID=' . $row_link['linkID'] . '"><img src="img/edit.png" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?cat=links&mode=delete&linkID=' . $row_link['linkID'] . '" onClick="loeschen(this);return false;"><img src="img/delete.png" border="0" /></a></td>
		</tr>
	</table><br />';
    }
}  ?>
</div>