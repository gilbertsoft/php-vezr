<br /><h1>Links</h1><br /><br />
<?php 
	$sql = mysql_query("SELECT * FROM linkcat ORDER BY linkCatID");
		while($row_linkCat = mysql_fetch_array($sql)) {
			echo '<h2>'.$row_linkCat["linkCatName"].'</h2>';
			$art = $row_linkCat["linkCatID"];
			echo '<br /><table width="604" border="0" cellspacing="2">
					  ';
				$sql2 = mysql_query("SELECT * FROM links WHERE linkCat = '$art'");
					while($row_link = mysql_fetch_array($sql2)) {
					echo '<tr>
							<td width="200">'.$row_link["linkText"].'</td>
						    <td width="400"><a href="http://'.$row_link["linkURL"].'" target="blank">'.$row_link["linkURL"].'</a></td>
					      </tr>';
					}
			echo '</table><br />';
		}

?>
