<?php

/*
 * This file is part of the package gilbertsoft/vezr.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('VEZR_APP') or die();

?><h1>Kontakt</h1><br /><br />
<table width="700" border="0" cellspacing="6" cellpadding="6">
  <tr>
    <td width="350"><h2>Onlineanfrage</h2><br />
<?php

if (isset($_POST['submit'])) {
    $result_user = mysqli_query($GLOBALS['dblink'], "SELECT * FROM contact
								 WHERE contactID = '1'
								 LIMIT 1");

    $row_user = mysqli_fetch_array($result_user);

    $admin = $row_user['contactMailForm'];      				 //e-mail adressen, an die eine Nachricht bei Neueintrag erfolgt
                        $subject = 'VeZR Web-Message';          //Mail-Subject
                        $message = "von:\n\n";                               //$message ist der Inhalt dieser Mail
                        foreach ($_POST as $name => $value) {    //Hier werden alle vom Formular mitgegebenen Variablen mit ihrem Wert ausgelesen und der Nachricht mitgegeben (\n mache einen Zeilenumbruch dazwischen)
                        if ($value=='keine' || $value=='') {
                        } else {
                            $message.="$name: $value\n";
                        }
                        }
    mail($admin, $subject, $message, 'From: ' . $_POST['email']);       //Hier erfolgt der Versand des e-mails

    echo '<meta http-equiv="refresh" content="3; URL=?cat=contact"><br><br><br>Danke für Ihre Anfrage, wir werden schnellstmöglich mit Ihnen Kontakt aufnehmen.';
} else {
    echo '
						<form name="forumul" method="post" action="?cat=contact">
							Ihr Name<br />
						    <input name="name" type="text" id="name" size="30"><br /><br />
							Ihre E-Mail<br />
							<input name="email" type="text" id="email" size="30"><br /><br />
						    Ihre Nachricht<br />
							<textarea name="message" type="text" id="message" cols="40" rows="8"></textarea><br /><br />
						  <input class="submit" type="submit" name="submit" value="Senden / Submit">
						</form>';
}
?>
    </td>
    <td valign="top">
        <h2>Kontaktadresse</h2><br />
        <?php
            $sql = mysqli_query($GLOBALS['dblink'], 'SELECT * FROM contact WHERE contactID = 1 LIMIT 1');
            $row_result = mysqli_fetch_array($sql);
            echo '' . $row_result['contactName'] . '<br />' . $row_result['contactZusatz'] . '<br />' . $row_result['contactStrasse'] . '&nbsp;' . $row_result['contactStadt'] . '<br /><br /><a href="mailto:' . $row_result['contactMail'] . '">' . $row_result['contactMail'] . '</a><br /><br />Fon ' . $row_result['contactTel'] . '<br />';
        ?>
    </td>
  </tr>
</table>
