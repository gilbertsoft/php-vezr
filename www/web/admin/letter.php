<div style="margin:20px;">
<?php if (!$_SESSION["login"]) { ?>
Sie sind nicht berechtigt diese Seite aufzurufen!
<?php } else { 
	// Absender Email
	$from_email="VeZR Newsletter <info@vezr.ch>";
	// Antwort Email
	$replayto="<info@vezr.ch>";

 	echo '<h2>Newsletter versenden</h2>
	<a href="?cat=letterlist">&raquo; Mail-Liste ansehen</a>
	<br /><br />
	Füllen Sie hier den Betreff sowie den Newsletter-Text ein. Beim Absenden wird eine Email an alle Mitglieder der Newsletter-Liste versendet. Bitte schreiben Sie den Text in einem Editor vor, sodass er nicht verloren ist, falls beim versenden ein Fehler auftritt.<br /><br />';
 	
	if(isset($_POST['submit'])){
						$subject =$_POST["subject"];
						$message=$_POST["mensaje"];
						
						$text = $message;
						$text = str_replace( "<p>", "", $text );
						$text = str_replace( "</p>", "", $text );
						
						$adresses = mysql_query("SELECT * FROM newsletter");
						while($row_letter = mysql_fetch_array($adresses))
						{	
							$email = $row_letter["newsletterMail"];          //e-mail adressen, an die eine Nachricht bei Neueintrag erfolgt	
							mail($email, $subject, $text,"From: $from_email\nReply-To: $replayto\nContent-Type: text/plain");
							flush();
						}
						
						echo '<meta http-equiv="refresh" content="3; URL=?cat=letter"><br><br><br>Der Newsletter wurde erfolgreich versendet.';
					}
					
					else {
						echo '
						<form name="forumul" method="post" action="?cat=letter">
							Betreff<br />
						    <input name="subject" type="text" size="40"><br /><br />
						    Ihre Nachricht<br />
							<textarea name="mensaje" type="text" id="message" cols="60" rows="10" class="mceNoEditor"></textarea><br /><br />
						  <input class="submit" type="submit" name="submit" value="Senden / Submit">
						</form>'; 
				} 
 
}  ?>
</div>

