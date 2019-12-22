<?php
// START_SESSION
if (!session_start()){
    echo 'Session konnte nicht gestartet werden';
    }

// DB_CONNECT
/*
$username="haempe";
$password="wL75UqDY";
$database="haempe";
mysql_connect("localhost:3309",$username,$password);
*/

$username="c3mysql";
$password="fiTdeBz@6KA";
$database="c3mysql";
mysql_connect("10.71.0.10",$username,$password);

@mysql_select_db($database) or die( "Unable to select database");

?>

