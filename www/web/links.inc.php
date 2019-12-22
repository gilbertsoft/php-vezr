<?php

/*
 * This file is part of the package gilbertsoft/vezr.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

echo '<br /><h1>Links</h1><br /><br />';
$sql = mysqli_query($GLOBALS['dblink'], 'SELECT * FROM linkcat ORDER BY linkCatID');
while ($row_linkCat = mysqli_fetch_array($sql)) {
    echo '<h2>' . $row_linkCat['linkCatName'] . '</h2>';
    $art = $row_linkCat['linkCatID'];
    echo '<br /><table width="604" border="0" cellspacing="2">
					  ';
    $sql2 = mysqli_query($GLOBALS['dblink'], "SELECT * FROM links WHERE linkCat = '$art'");
    while ($row_link = mysqli_fetch_array($sql2)) {
        echo '<tr>
							<td width="200">' . $row_link['linkText'] . '</td>
						    <td width="400"><a href="http://' . $row_link['linkURL'] . '" target="blank">' . $row_link['linkURL'] . '</a></td>
					      </tr>';
    }
    echo '</table><br />';
}
