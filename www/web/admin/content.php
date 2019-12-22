<div style="margin:20px;">
	<h2><a href="?cat=newcontent">> Create Content</a></h2><br />
    <form>
    <table width="400" border="0" cellpadding="3">
    	<tr>
        	<td width="150">Wählen Sie die Rubrik aus</td>
            <td>
                <select size="1" onchange="location = this.options[this.selectedIndex].value;">
                    <option value="#">Rubrik w&auml;hlen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                    <?php 
						$rubrik = mysql_query("SELECT * FROM content");
							while($row_rubrik = mysql_fetch_array($rubrik)) {
								echo '<option value="?cat=content&id='.$row_rubrik["contentID"].'">'.$row_rubrik["contentName"].'</option>';
							}
					?>
                </select>
            </td>
        </tr>
    </table>
    </form><br /><br />
<?php if (!$_SESSION["login"]) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else { 
switch ($mode)
{    
    case update_content:
    mysql_query("UPDATE `content` SET `contentText` = '".mysql_real_escape_string(stripslashes($contentText))."'
				 					   WHERE `contentID` = '$contentID'");
									
    echo '<meta http-equiv="refresh" content="0;URL=?cat=content&id='.$contentID.'">';
    break;
	
	default:
    edit_form($id);
    break;
}

;} 

function edit_form($id)
{
if ($id == '') $id = 1;
$result = mysql_query("SELECT * FROM content WHERE contentID = '$id' LIMIT 1");
$row_content = mysql_fetch_array($result);

echo '<form name="update_content" method="post" action="?cat=content">
      <input type="hidden" name="mode" value="update_content">
	  <input type="hidden" name="contentID" value="'.$id.'">
      <b>Text der Rubrik &quot;'.$row_content["contentName"].'&quot; bearbeiten:</b><br><br>
	  <table width="620" border="0" cellspacing="0" cellpadding="3">
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="150" valign="top">Text<br><br><em>Neue Linie:<br />SHIFT + ENTER<br /><br />Neuer Absatz: ENTER</em></td>
			<td><textarea name="contentText" cols="60" rows="12" id="contentText">'.$row_content["contentText"].'</textarea></td>
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
 ?>
</div>