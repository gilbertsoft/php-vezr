<?php

/*
 * This file is part of the package gilbertsoft/vezr.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('VEZR_APP') or die();

$sql = mysqli_query($GLOBALS['dblink'], "SELECT * FROM content WHERE contentID = $contentID");
$row_content = mysqli_fetch_array($sql);

$titel = $row_content['contentName'];
$text = $row_content['contentText'];

echo '<br /><h1>' . $titel . '</h1><br />' . $text;
