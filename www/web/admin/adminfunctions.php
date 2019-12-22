<?php

/*
 * This file is part of the package gilbertsoft/vezr.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

if (!session_start()) {
    echo 'Session konnte nicht gestartet werden';
}

// DB_CONNECT
if (isset($_SERVER['DDEV_PROJECT'])) {
    $host = 'db';
    $username = 'db';
    $password = 'db';
    $database = 'db';
} else {
    $host = $_SERVER['DB_HOST'];
    $username = $_SERVER['DB_USERNAME'];
    $password = $_SERVER['DB_PASSWORD'];
    $database = $_SERVER['DB_NAME'];
}

$GLOBALS['dblink'] = mysqli_connect($host, $username, $password, $database) or die('Unable to select database');
$_SESSION['login'] = $_SESSION['login'] ?? false;
