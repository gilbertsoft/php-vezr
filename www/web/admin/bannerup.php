<div style="margin:20px;">
<?php if (!$_SESSION["login"]) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else { 

// fileRefID --> ID des Datensatzes der Ref
// fileRef --> Ref der Kategorie

// fileRef = 1 --> Allgemeiner Fileupload
// fileRef = 2 --> Pics Product-Kategorien
// fileRef = 3 --> PDF für Job-Beschreibungen (noch nicht impl.)

switch ($mode)
{
    case delete:
	mysql_query("DELETE FROM banner WHERE bannerID = '$bannerID'");
	unlink("D:/private/customers/haempe/domains/vezr.ch/www/web/banner/" . $bannerFile);
    echo '<meta http-equiv="refresh" content="0;URL=?cat=bannerup">';
    break;

    case save_new_file;
    if(file_exists( "D:/private/customers/haempe/domains/vezr.ch/www/web/banner/" . $_FILES['up-file']['name'] ) != 1)
    {
    if($_FILES)
    {
        $name = $_FILES['up-file']['name'];
        mysql_query("INSERT INTO banner (`bannerFile`, `bannerRef`) VALUES ('$name', '$bannerRef')");

        $file =  "D:/private/customers/haempe/domains/vezr.ch/www/web/banner/" . $_FILES['up-file']['name'];
        move_uploaded_file($_FILES['up-file']['tmp_name'], $file);
        
        echo '<meta http-equiv="refresh" content="0;URL=?cat=bannerup">';
    }
    else
    {
        echo 'Kein File angegeben<br><br>';
        echo '<meta http-equiv="refresh" content="2;URL=?cat=bannerup">';
    }
    }
    else
    {
        echo 'File existiert bereits!<br><br>';
        echo '<meta http-equiv="refresh" content="2;URL=?cat=bannerup">';
    }
    break;
    
    default:
    add_form();
    break;
    }
}
function add_form(){
    echo '<form action="?cat=bannerup" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="mode" value="save_new_file">
		<input type="hidden" name="MAX_FILE_SIZE" value="100000000000">
		<b>Datei hochladen:</b><br><br>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="150">Dateiname</td>
				<td><input name="up-file" type="file"></td>
			</tr>
			<tr>
				<td>Link</td>
				<td><input name="bannerRef" type="text" size="35">&nbsp;&nbsp;ohne http://</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="150">&nbsp;</td>
				<td><input type="submit" value="Banner uploaden"></td>
			</tr>
		</table>
		</form><br /><br /><br />';
		
			echo '<strong>Folgende Banner befinden sich im Verzeichnis:</strong><br /><br />
			<table width="620" border="0" cellpadding="3">
			  <tr>
				<td width="170"><strong>Banner Name</strong></td>
				<td width="320"><strong>Banner-Link</strong></td>
				<td width="40"><strong>Views</strong></td>
				<td width="40"><strong>Hits</strong></td>
				<td width="50"><strong>L&ouml;schen</strong></td>
			  </tr>';
			$sql = mysql_query("SELECT * FROM banner");
			
			while($row_file = mysql_fetch_array($sql))
			{			
				echo '
				 <tr>
					<td>
						<a href="../banner/'.$row_file["bannerFile"].'" target="blank">'.$row_file["bannerFile"].'</a>
					</td>
					<td>
						Banner Link: '.$row_file["bannerRef"].'
					</td>
					<td>
						'.$row_file["bannerViews"].'
					</td>
					<td>
						'.$row_file["bannerHits"].'
					</td>
					<td>
						<a href="?cat=bannerup&mode=delete&bannerID='.$row_file["bannerID"].'&bannerFile='.$row_file["bannerFile"].'" onClick="loeschen(this);return false;"><img src="img/delete.png" border="0" /></a>
					</td>
				 </tr>';
			}
			echo '</table>';
					
}
  ?>
</div>
