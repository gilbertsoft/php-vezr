<div style="margin:20px;">
<?php if (!$_SESSION["login"]) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else { 
/*
	Image Types
	1 : XS
	2 : M
	3 : L
*/

switch ($mode)
{
	case delete:
		unlink("D:/private/customers/haempe/domains/vezr.ch/www/web/data/".$imageId."_1.jpg");
		unlink("D:/private/customers/haempe/domains/vezr.ch/www/web/data/".$imageId."_2.jpg");
		unlink("D:/private/customers/haempe/domains/vezr.ch/www/web/data/".$imageId."_3.jpg");
		
		mysql_query("DELETE FROM images 
					 WHERE imageID = '$imageId'
					 LIMIT 1");
		echo '<meta http-equiv="refresh" content="0;URL=?cat=image&ref='.$ref.'">';
		break;
		
	case uploadImage:
		
		$image = new Image($_FILES, $types, $imageDesc);
		mysql_query("UPDATE `images` SET  `imageRef` = '$ref' WHERE `imageID` = '".$image->getImageId()."'");
		echo '<meta http-equiv="refresh" content="0;URL=?cat=image&ref='.$ref.'">';
		break;
		
	case upload_form:
			upload_form($ref);
		break;
		
	case setAsFront:
			mysql_query("UPDATE `images` SET `imageStat` = '0' WHERE imageStat = '1' AND imageRef = '$ref'");
			mysql_query("UPDATE `images` SET `imageStat` = '1' WHERE imageID = '$imageId'"); 
			echo '<meta http-equiv="refresh" content="0;URL=?cat=image&ref='.$ref.'">';
			break;
		
	default:
		upload_form($ref,$types);
		break;
		}

}
function upload_form($ref,$types)
{
	echo '<div style="background:#CCCCCC;width:300px; padding:2px; margin-bottom:10px;">
			<form enctype="multipart/form-data" action="?cat=image" method="post">
				<input type="hidden" name="mode" value="uploadImage">
				<input type="hidden" name="ref" value="'.$ref.'">
				<input type="hidden" name="types" value="123">
				<input type="file" name="imageFile">
				<br>
				<input name="imageDesc" type="text" id="imageDesc">&nbsp; Bildbeschreibung
				<br>
				<input name="submit" type="submit" value="Send File">
		 	</form>
		 </div>
		 Die Bilder werden hier automatisch auf die richtige Gr&ouml;sse umgerechnet. Hauptbild (gelber Hintergrund) = Bild in der &Uuml;bersicht<br /><br />';
	
	showImages($ref);
}

function showImages($ref){
	
	$sql = mysql_query("SELECT * FROM images WHERE imageRef = '$ref'");
	
	$background = 'background:#EEEEEE;';
	
	while($row = mysql_fetch_array($sql)){
	
		if($row["imageStat"] == 1){
			$background = 'background:#FF9900;';
		}
		
		echo '<div style="width:150px; height:190px; float:left; margin:2px; padding:3px; text-align:center; '.$background.'">
				'.$row["imageDescDe"].'<br>
				<img src="../data/'.$row["imageID"].'_2.jpg"><br>
				<a href="?cat=image&mode=setAsFront&ref='.$ref.'&imageId='.$row["imageID"].'">&raquo; als Hauptbild</a><br>
				<a href="?cat=image&mode=delete&ref='.$ref.'&imageId='.$row["imageID"].'" onClick="loeschen(this);return false;">&raquo; Bild löschen</a>
				</div>';
		$background = 'background:#EEEEEE;';
	}	
}
  ?>
</div>
