<?php

/*
 * This file is part of the package gilbertsoft/vezr.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

echo '<br /><h1>Newsletter</h1><br /><br />';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $email = strtolower($email);
    check_email($email, 'Fehler: Die Email Adresse ist nicht korrekt.');
    $action = $_POST['action'];

    if ($action == 'subc') {
        $result = mysqli_query($GLOBALS['dblink'], "SELECT * FROM newsletter WHERE newsletterMail = '$email'");
        $count_result = mysqli_num_rows($result);

        if ($count_result > 0) {
            echo 'Fehler: Die angegebene Email Adresse ist bereits im Newsletter enthalten';
        } else {
            mysqli_query($GLOBALS['dblink'], "INSERT INTO newsletter (`newsletterMail`) VALUES ('$email')");
            echo '<meta http-equiv="refresh" content="3; URL=?cat=newsletter"><br><br><br>Ihre Emailadresse wurde eingetragen. Sie erhalten ab sofort den VeZR-Newsletter.';
        }
    }

    if ($action == 'unsubc') {
        $result = mysqli_query($GLOBALS['dblink'], "SELECT * FROM newsletter WHERE newsletterMail = '$email'");
        $count_result = mysqli_num_rows($result);

        if ($count_result == 0) {
            echo 'Fehler: Die angegebene Email Adresse ist nicht vorhanden';
        } else {
            mysqli_query($GLOBALS['dblink'], "DELETE FROM newsletter WHERE newsletterMail = '$email'");
            echo '<meta http-equiv="refresh" content="3; URL=?cat=newsletter"><br><br><br>Ihre Emailadresse wurde erfolgreich entfernt.';
        }
    }
} else {
    echo '
		Tragen Sie sich in den VeZR-Newsletter ein und erhalten Sie regelmässig aktuelle News über die Aktivitäten des Vereins.<br />
        <form name="forumul" method="post" action="?cat=newsletter"><br /><br />
            E-Mail&nbsp;&nbsp;<input name="email" type="text" id="email" size="50">
			<input name="action" value="subc" checked="checked" type="radio">Eintragen
            <input name="action" value="unsubc" selected="" type="radio">Austragen<br /><br />
          <input class="submit" type="submit" name="submit" value="Senden / Submit">
        </form><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
}

function check_email($email, $message)
{
    if ($email == '') {
        die($message);
    }
    $test1 = strpos($email, '@');
    $test2 = strpos(substr($email, strpos($email, '@')), '.');
    $test3 = strlen($email);
    $test4 = substr_count($email, '@');
    if ($test1 < 2 or $test2 < 2 or $test3 < 7 or $test4 != 1) {
        die($message);
    }
}
