

<?php
		
	
switch ($mode)
{
	case save_gbook:
	
	// Bei Ausgabe des eingegebenen Codes müssen html tags entfernt werden!
	$CAPTCHA_RandomText = "";
	if (isset($_POST['txtCode'])){
	$CAPTCHA_EnteredText = str_replace("<","",str_replace(">","",str_replace("'","",str_replace("[","",str_replace("]","",$_POST['txtCode'])))));
	}
	if (isset($_SESSION['CAPTCHA_RndText'])) {
	$CAPTCHA_RandomText = $_SESSION['CAPTCHA_RndText'];
	}
	
	if ($CAPTCHA_EnteredText == $CAPTCHA_RandomText and isset($_POST['txtCode']) == true and isset($_SESSION['CAPTCHA_RndText'])){
		$second = date("s");
		$minute = date("i");
		$hour = date("H");
		$day = date("d");
		$month = date("m");
		$year = date("Y");
		
		$release_date = mktime($hour,$minute,0,$month,$day,$year);
		$gName = mysql_escape_string($guestName);
		$gText = mysql_escape_string($guestText);
		$sql = "INSERT INTO guestbook (`guestDate` , `guestName` , `guestText`) VALUES ('$release_date', '$gName', '$gText')";
		mysql_query($sql);
		echo '<meta http-equiv="refresh" content="1;URL=?cat=guestbook"><h2>// <a href="?cat=guestbook">GUESTBOOK</a></h2><br><br><br>Dein Eintrag wird gespeichert...';
	} else { 
		echo '<meta http-equiv="refresh" content="1;URL=?cat=guestbook"><h2>// <a href="?cat=guestbook">GUESTBOOK</a></h2><br><br><br>Du hast den Code falsch eingegeben, versuche es erneut...';
    }
	break; 

	default:
    guestbook();
    break;
}

function guestbook()
{
	echo '
	<br /><h1>Gästebuch</h1><br />
	<table width="100%" border="0">
	  <tr>
		<td width="300" valign="top">'; new_entry(); echo '</td>
		<td valign="top">'; overview(); echo '</td>
	  </tr>
	</table>';
}

function new_entry()
{
	$CAPTCHA_TempString="";
	
	// Zufallsfunktion für Zahlen und Buchstaben
		function GetRandomChar() {
	
	// Zufallszahl generieren
		mt_srand((double)microtime()*1000000);
		$CAPTCHA_RandVal = mt_rand(1,2);
	
	// Buchstabensalat generieren jeh nachdem ob Randval 1 oder 2 ist
		switch ($CAPTCHA_RandVal) {
	    case 1:
	  	  // Zahlen 0-9
	        $CAPTCHA_RandVal = mt_rand(48, 57);
	        break;
	    case 2:
	  	  // Grosse Buchstaben
	        $CAPTCHA_RandVal = mt_rand(65, 90);
	        break;
		}
		
	// Zufallscode ausgeben
		return chr($CAPTCHA_RandVal);
	}
	
	// Zufallscode x-stellig ausgeben
		for ($i = 1; $i <= 6; $i++) {
	       $CAPTCHA_TempString .= GetRandomChar();
	}

	// Text in Sessionvariable speichern
	if (isset($CAPTCHA_TempString)) {
		$_SESSION["CAPTCHA_RndText"] = str_replace('I','E',str_replace('0','3',str_replace('1','S',str_replace('B','F',str_replace('O','P',str_replace('4','A',str_replace('D','K',$CAPTCHA_TempString)))))));
	} else {
		die("Zufallscode konnte nicht generiert werden!");
	}
echo '<form name="new_entry" method="post" action="?cat=guestbook&mode=save_gbook">
      <input type="hidden" name="mode" value="save_gbook">
			Name:<br />
			<input name="guestName" type="text" size="23"><br /><br />
			Message:<br />
			<textarea name="guestText" cols="26" rows="5" id="guestText"></textarea><br /><br />
			<img border="0" src="captcha_img.php?PHPSESSID='; echo session_id(); echo '" alt="" /><br /><br />
			Code eingeben &nbsp;<input maxlength="6" name="txtCode" size="15" type="text" /><br /><br />
			<input type="submit" name="Submit" value="Speichern">
		</form>';
}

function overview()
{
	$sql = mysql_query("SELECT * FROM guestbook 
					    ORDER BY guestDate DESC");
     while($row_book = mysql_fetch_array($sql))
	 {
   		 $release_date = date("d.m.Y", $row_book["guestDate"]);
		 echo 'Von <strong>'.$row_book["guestName"].'</strong> am '.$release_date.'<br><br>
		 '.$row_book["guestText"].'<hr /><br>';
	}
}
?>


