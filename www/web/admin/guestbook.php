<div style="margin:20px;">
<?php if (!$_SESSION['login']) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else {
    switch ($mode) {
    case 'delete':
    mysqli_query($GLOBALS['dblink'], "DELETE FROM guestbook WHERE guestID = '$guestID'");
   echo '<meta http-equiv="refresh" content="0;URL=?cat=guestbook">';
    break;

    default:
    overview();
    break;
}
}

function overview()
{
    echo '<b>Vorhandene Einträge:</b><br><br>';
    $sql = mysqli_query($GLOBALS['dblink'], 'SELECT * FROM guestbook 
							 ORDER BY guestDate DESC');
    while ($row_book = mysqli_fetch_array($sql)) {
        echo '
	<table width="380" border="0" cellspacing="0" cellpadding="1" style="border: 1px solid #CCCCCC;">
		<tr>
			<td width="340"><h2>' . $row_book['guestName'] . '</h2>' . $row_book['guestText'] . '</td>
			<td align="center"><a href="?cat=guestbook&mode=delete&guestID=' . $row_book['guestID'] . '" onClick="loeschen(this);return false;"><img src="img/delete.png" border="0" /></a></td>
		</tr>
	</table><br />';
    }
}  ?>
</div>