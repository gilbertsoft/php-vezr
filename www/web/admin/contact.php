<div style="margin:20px;">
<?php if (!$_SESSION['login']) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else {
    switch ($mode) {
    case 'update_contact':
    mysqli_query($GLOBALS['dblink'], "UPDATE `contact` SET `contactName` = '$contactName',
								      `contactZusatz` = '$contactZusatz', 
								      `contactStrasse` = '$contactStrasse',
									  `contactStadt` = '$contactStadt',
									  `contactTel` = '$contactTel',
									  `contactFax` = '$contactFax',
									  `contactMail` = '$contactMail',
									  `contactMailForm` = '$contactMailForm'
				 					   WHERE `contactID` = '1'");

    echo '<meta http-equiv="refresh" content="0;URL=?cat=contact">';
    break;

    default:
    edit_form();
    break;
}
}

function edit_form()
{
    $sql = mysqli_query($GLOBALS['dblink'], 'SELECT * FROM contact WHERE contactID = 1 LIMIT 1');
    $row_result = mysqli_fetch_array($sql);

    echo '<form name="update_contact" method="post" action="?cat=contact">
      <input type="hidden" name="mode" value="update_contact">
      <strong>Kontaktdaten bearbeiten:</strong><br /><br /><br />
	  <table width="620" border="0" cellspacing="0" cellpadding="3">
		<tr>
			<td width="150">Firmenname</td>
			<td><input name="contactName" type="text" size="55" value="' . $row_result['contactName'] . '"></td>
		</tr>
		<tr>
			<td>Zusatz</td>
			<td><input name="contactZusatz" type="text" size="35" value="' . $row_result['contactZusatz'] . '"></td>
		</tr>
		<tr>
			<td>Strasse</td>
			<td><input name="contactStrasse" type="text" size="35" value="' . $row_result['contactStrasse'] . '"></td>
		</tr>
		<tr>
			<td>PLZ, Ort</td>
			<td><input name="contactStadt" type="text" size="35" value="' . $row_result['contactStadt'] . '"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Tel</td>
			<td><input name="contactTel" type="text" size="35" value="' . $row_result['contactTel'] . '"></td>
		</tr>
		<tr>
			<td>Fax</td>
			<td><input name="contactFax" type="text" size="35" value="' . $row_result['contactFax'] . '"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>E-Mail</td>
			<td><input name="contactMail" type="text" size="35" value="' . $row_result['contactMail'] . '"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>E-Mail Kontaktformular</td>
			<td><input name="contactMailForm" type="text" size="35" value="' . $row_result['contactMailForm'] . '"></td>
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