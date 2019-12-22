<div style="margin:20px;">
<?php if (!$_SESSION["login"]) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else { 

// fileRefID --> ID des Datensatzes der Ref
// fileRef --> Ref der Kategorie

// fileRef = 1 --> Allgemeiner Fileupload
// fileRef = 2 --> Pics Product-Kategorien
// fileRef = 3 --> PDF für Job-Beschreibungen (noch nicht impl.)

$fileRefID = $_REQUEST['fileRefID'] ?? '';
$fileRef = $_REQUEST['fileRef'] ?? '';

switch ($mode)
{
    case 'delete':
	mysqli_query($GLOBALS['dblink'], "DELETE FROM files WHERE fileName = '$fileName'");
	unlink("../data/" . $fileName);
    echo '<meta http-equiv="refresh" content="0;URL=?cat=fileup&fileRefID='.$fileRefID.'&fileRef='.$fileRef.'">';
    break;

    case 'save_new_file';
    if(file_exists( "../data/" . $_FILES['up-file']['name'] ) != 1)
    {
    if($_FILES)
    {
        $name = $_FILES['up-file']['name'];
        mysqli_query($GLOBALS['dblink'], "INSERT INTO files (`fileName`, `fileRefID`, `fileRef`) VALUES ('$name', '$fileRefID', '$fileRef')");

        $file =  "../data/" . $_FILES['up-file']['name'];
        move_uploaded_file($_FILES['up-file']['tmp_name'], $file);
        
        echo '<meta http-equiv="refresh" content="0;URL=?cat=fileup&fileRefID='.$fileRefID.'&fileRef='.$fileRef.'">';
    }
    else
    {
        echo 'Kein File angegeben<br><br>';
        echo '<meta http-equiv="refresh" content="2;URL=?cat=fileup&fileRefID='.$fileRefID.'&fileRef='.$fileRef.'">';
    }
    }
    else
    {
        echo 'File existiert bereits!<br><br>';
        echo '<meta http-equiv="refresh" content="2;URL=?cat=fileup&fileRefID='.$fileRefID.'&fileRef='.$fileRef.'">';
    }
    break;
    
    default:
    add_form($fileRefID, $fileRef);
    break;
    }
}
function add_form($fileRefID, $fileRef){
    echo '<form action="?cat=fileup" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="mode" value="save_new_file">
		<input type="hidden" name="fileRefID" value="'.$_GET['fileRefID'].'">
		<input type="hidden" name="fileRef" value="'.$_GET['fileRef'].'">
		<input type="hidden" name="MAX_FILE_SIZE" value="100000000000">
		<b>Datei hochladen:</b><br><br>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="150">Dateiname</td>
				<td><input name="up-file" type="file"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="150">&nbsp;</td>
				<td><input type="submit" value="Datei uploaden"></td>
			</tr>
		</table>
		</form><br /><br /><br />';
		
		
		if($fileRef == 3) {
			$sql = mysqli_query($GLOBALS['dblink'], "SELECT * FROM files
							    WHERE fileRefID = '$fileRefID' AND fileRef = '$fileRef'");
			$row_file = mysqli_fetch_array($sql);
			if($row_file["fileName"] != ''){
				echo '<strong>Zu diesem Eintrag gehörende Datei:</strong><br /><br />';
				echo '<a href="../data/files/'.$row_file["fileName"].'" target="blank">'.$row_file["fileName"].'</a>';
				echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="?cat=fileup&mode=delete&fileName='.$row_file["fileName"].'" onClick="loeschen(this);return false;"><img src="img/delete.png" border="0" /></a>';
			} 
			else {
				echo 'Es wurde noch keine Datei hochgeladen!';	
			}
		}
		elseif($fileRef == 2) {
			echo '<strong>Folgende Bildergeh&ouml;ren zu dieser Produkt-Kategorie:</strong><br />Die Bilder m&uuml;ssen eine Gr&ouml;sse von 170Px (Breite) mal 120Px (H&ouml;he) aufweisen<br /><br />
			<table width="620" border="0" cellpadding="3">
			  <tr>
				<td width="170"><strong>Dateiname</strong></td>
				<td width="400"><strong>Datei-Link</strong></td>
				<td width="50"><strong>L&ouml;schen</strong></td>
			  </tr>';
			$sql = mysqli_query($GLOBALS['dblink'], "SELECT * FROM files
							    WHERE fileRefID = '$fileRefID' AND fileRef = '$fileRef'");
			while($row_file = mysqli_fetch_array($sql))
			{			
				echo '
				 <tr>
					<td>
						<a href="../data/'.$row_file["fileName"].'" target="blank">'.$row_file["fileName"].'</a>
					</td>
					<td>
						https://www.vezr.ch/web/data/'.$row_file["fileName"].'
					</td>
					<td>
						<a href="?cat=fileup&mode=delete&fileName='.$row_file["fileName"].'&fileRefID='.$row_file["fileRefID"].'&fileRef='.$row_file["fileRef"].'" onClick="loeschen(this);return false;"><img src="img/delete.png" border="0" /></a>
					</td>
				 </tr>';
			}
			echo '</table>';
		}
		else {
			echo '<strong>Folgende Dateien befinden sich im Upload-Verzeichnis:</strong><br /><br />
			<table width="620" border="0" cellpadding="3">
			  <tr>
				<td width="170"><strong>Dateiname</strong></td>
				<td width="400"><strong>Datei-Link</strong></td>
				<td width="50"><strong>L&ouml;schen</strong></td>
			  </tr>';
			$sql = mysqli_query($GLOBALS['dblink'], "SELECT * FROM files
							    WHERE fileRefID = '$fileRefID' AND fileRef = '$fileRef'");
			while($row_file = mysqli_fetch_array($sql))
			{			
				echo '
				 <tr>
					<td>
						<a href="../data/'.$row_file["fileName"].'" target="blank">'.$row_file["fileName"].'</a>
					</td>
					<td>
						https://www.vezr.ch/web/data/'.$row_file["fileName"].'
					</td>
					<td>
						<a href="?cat=fileup&mode=delete&fileName='.$row_file["fileName"].'&fileRefID='.$row_file["fileRefID"].'&fileRef='.$row_file["fileRef"].'" onClick="loeschen(this);return false;"><img src="img/delete.png" border="0" /></a>
					</td>
				 </tr>';
			}
			echo '</table>';
		}			
}
  ?>
</div>
