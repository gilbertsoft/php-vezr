<?php
$sql = mysqli_query($GLOBALS['dblink'], "SELECT * FROM content WHERE contentID = 3");
$row_content = mysqli_fetch_array($sql);
	
$titel = $row_content["contentName"];
$text = $row_content["contentText"];

echo '<br /><h1>'.$titel.'</h1><br />'.$text;
?>
           