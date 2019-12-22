<div style="margin:20px;">

<?php if (!$_SESSION['login']) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else {
    switch ($mode) {
    case 'delete':
    mysqli_query($GLOBALS['dblink'], "DELETE FROM content WHERE contentID = '$contentID'");
    echo '<meta http-equiv="refresh" content="0;URL=?cat=newcontent">';
    break;

    case 'new_content':
    mysqli_query($GLOBALS['dblink'], "INSERT INTO content (`contentName` ,`contentCat` ,`contentFlag`) VALUES ('$contentName', '$contentCat', '0')");

    echo '<meta http-equiv="refresh" content="0;URL=?cat=newcontent">';
    break;

    case 'update':
    mysqli_query($GLOBALS['dblink'], "UPDATE `content` SET `contentName` = '$contentName',
									  `contentCat` = '$contentCat'	
				 					   WHERE `contentID` = '$contentID'");

    echo '<meta http-equiv="refresh" content="0;URL=?cat=newcontent">';
    break;

    case 'edit_content':
    edit_form($contentID);
    break;

    default:
    new_form();
    break;
}
}

function edit_form($contentID)
{
    $result = mysqli_query($GLOBALS['dblink'], "SELECT * FROM content WHERE contentID = '$contentID' LIMIT 1");
    $row_content = mysqli_fetch_array($result);

    echo '<form name="update" method="post" action="?cat=newcontent">
      <input type="hidden" name="mode" value="update">
	  <input type="hidden" name="contentID" value="' . $contentID . '">
      <b>Content-Page ' . $row_content['contentName'] . '&quot; bearbeiten:</b><br><br>
	   <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="150">Titel / Name</td>
			<td><input name="contentName" type="text" size="25" value="' . $row_content['contentName'] . '"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150">Gehört zu</td>
			<td><input type="radio" name="contentCat" value="1" id="contentCat" ';
    if ($row_content['contentCat'] == 1) {
        echo 'checked';
    }
    echo '>&nbsp; Aktuell</td>
		</tr>
		<tr>
			<td width="150">&nbsp;</td>
			<td><input type="radio" name="contentCat" value="2" id="contentCat" ';
    if ($row_content['contentCat'] == 2) {
        echo 'checked';
    }
    echo '>&nbsp; &Uuml;ber VeZR</td>
		</tr>
		<tr>
			<td width="150">&nbsp;</td>
			<td><input type="radio" name="contentCat" value="3" id="contentCat" ';
    if ($row_content['contentCat'] == 3) {
        echo 'checked';
    }
    echo '>&nbsp; Programm</td>
		</tr>
		<tr>
			<td width="150">&nbsp;</td>
			<td><input type="radio" name="contentCat" value="4" id="contentCat" ';
    if ($row_content['contentCat'] == 4) {
        echo 'checked';
    }
    echo '>&nbsp; B&ouml;rse Z&uuml;rich</td>
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
    echo '<form name="create_content" method="post" action="?cat=newcontent">
      <input type="hidden" name="mode" value="new_content">
      <b>Neue Content-Page erstellen:</b><br><br>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="150">Titel / Name</td>
			<td><input name="contentName" type="text" size="25"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150">Gehört zu</td>
			<td><input type="radio" name="contentCat" value="1" id="contentCat">&nbsp; Aktuell</td>
		</tr>
		<tr>
			<td width="150">&nbsp;</td>
			<td><input type="radio" name="contentCat" value="2" id="contentCat">&nbsp; &Uuml;ber VeZR</td>
		</tr>
		<tr>
			<td width="150">&nbsp;</td>
			<td><input type="radio" name="contentCat" value="3" id="contentCat">&nbsp; Programm</td>
		</tr>
		<tr>
			<td width="150">&nbsp;</td>
			<td><input type="radio" name="contentCat" value="4" id="contentCat">&nbsp; B&ouml;rse Z&uuml;rich</td>
		</tr>
		<tr>
			<td width="150"><input type="submit" name="Submit" value="Speichern"></td>
			<td>&nbsp;</td>
		</tr>
	  </table>
      </form><br /><br /><br />
	  <strong>Vorhandene Content-Pages</strong><br /><br />
	  <table width="600" border="0" cellspacing="2">
	  	<tr>
		  <td width="150"><strong>Page-Name</strong></td>
		  <td width="150"><strong>Content-Kategorie</strong></td>
		  <td><strong>bearbeiten / l&ouml;schen</strong></td>
	    </tr>
  		';

    $result = mysqli_query($GLOBALS['dblink'], "SELECT * FROM content WHERE contentFlag = '0'");
    while ($row_content = mysqli_fetch_array($result)) {
        if ($row_content['contentCat'] == 1) {
            $art = 'Aktuell';
        }
        if ($row_content['contentCat'] == 2) {
            $art = '&Uuml;ber VeZR';
        }
        if ($row_content['contentCat'] == 3) {
            $art = 'Programm';
        }
        if ($row_content['contentCat'] == 4) {
            $art = 'B&ouml;rse Z&uuml;rich';
        }

        echo
            '<tr><td width="150">' . $row_content['contentName'] . '</td>
    		 <td>' . $art . '</td>
			 <td><a href="?cat=newcontent&mode=edit_content&contentID=' . $row_content['contentID'] . '"><img src="img/edit.png" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="?cat=newcontent&mode=delete&contentID=' . $row_content['contentID'] . '" onClick="loeschen(this);return false;"><img src="img/delete.png" border="0" /></a></td></tr>';
    }
    echo '
		
	  </table>';
}

 ?>
</div>
