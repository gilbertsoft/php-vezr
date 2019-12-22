
<?php
if ($mode == 'gallery') {
    echo '<h1>Gallerien</h1><br />';

    $sql = mysqli_query($GLOBALS['dblink'], "SELECT * FROM news WHERE newsCat = '3' ORDER BY newsDate DESC");

    while ($row_gallery = mysqli_fetch_array($sql)) {
        $prevID = $row_gallery['newsID'];
        echo '<div class="galleryDiv">';
        $result_prev = mysqli_query($GLOBALS['dblink'], "SELECT * FROM images
									            WHERE imageRef = '$prevID' LIMIT 1");
        $row_prev = mysqli_fetch_array($result_prev);
        echo '<a href="?cat=news&mode=galleryview&galleryID=' . $row_gallery['newsID'] . '"><img class="shopImage" src="data/' . $row_prev['imageID'] . '_2.jpg"></a><br /><br />
				        <span style="margin-top:5px; text-align:center;"><h2><a href="?cat=news&mode=galleryview&galleryID=' . $row_gallery['newsID'] . '">' . $row_gallery['newsTitel'] . '</a></h2></span>
			  </div>';
    }
} elseif ($mode == 'galleryview') {
    $result = mysqli_query($GLOBALS['dblink'], "SELECT * FROM news
						   WHERE newsID = '$galleryID'");
    $row_titel = mysqli_fetch_array($result);
    echo '<h1>Gallerie ' . $row_titel['newsTitel'] . '</h1><br /><br />
		<table width="630" cellspacing="5">
		 <tr>';
    $result_images = mysqli_query($GLOBALS['dblink'], "SELECT * FROM images
										  WHERE imageRef = '$galleryID'");
    $i = 0;
    while ($row_images = mysqli_fetch_array($result_images)) {
        if ($i % 3 == 0 && $i != 0) {
            echo '</tr><tr>';
        }
        echo '<td width="200" class="img_td" align="center" valign="middle"><a href="data/' . $row_images['imageID'] . '_1.jpg" rel="lightbox[' . $galleryID . ']" title="' . $row_images['imageDesc'] . '"><img class="img1" src="data/' . $row_images['imageID'] . '_2.jpg"></a><br />' . $row_images['imageDesc'] . '</td>';
        $i++;
    }
    echo '
	 </tr>
	</table>';
} else {
    echo '<br /><h1>Aktuelles</h1><br />';
    $aktual_time = time();
    //REPORTTEXT AUSLESEN
    if ($mode == 'allnews') {
        $sql = mysqli_query($GLOBALS['dblink'], "SELECT * FROM news
					WHERE newsDate <= '$aktual_time' AND newsCat = '1'
					ORDER BY newsDate DESC");    //newsCat 1 = NEWS
    } else {
        $sql = mysqli_query($GLOBALS['dblink'], "SELECT * FROM news
					WHERE newsDate <= '$aktual_time' AND newsCat = '1'
					ORDER BY newsDate DESC LIMIT 2");    //newsCat 1 = NEWS
    }
    while ($row_reports = mysqli_fetch_array($sql)) {
        $release_date = date('d.m.Y', $row_reports['newsDate']);
        $news_id = $row_reports['newsID'];

        echo '<table width="640" border="0" cellspacing="0" cellpadding="10">
				  <tr valign="top">
					<td valign="top"><h2>' . $row_reports['newsTitel'] . '</h2>
					<span class="small">Erschienen am: ' . $release_date . '</span><br />
					' . $row_reports['newsText'] . '
					</td>
					<td width="170">';

        //REPORTBILDER AUSLESEN
        $sql_images = mysqli_query($GLOBALS['dblink'], "SELECT * FROM images 
													  WHERE $news_id = imageRef
													  ORDER BY imageID");

        while ($row_images = mysqli_fetch_array($sql_images)) {
            echo '<a href="data/' . $row_images['imageID'] . '_1.jpg" rel="lightbox" title="' . $row_images['imageDesc'] . '"><img class="img1" src="data/' . $row_images['imageID'] . '_2.jpg"></a><br>' . $row_images['imageDesc'] . '<br><br>';
        }
        echo	'</td>
			  </tr>
			</table><hr>	
			';
    }
    if ($mode == 'allnews') {
        echo '<a href="?cat=news">&raquo; nur akutelle News anzeigen</a>';
    } else {
        echo '<a href="?cat=news&mode=allnews">&raquo; alle News anzeigen</a>';
    }
}
    ?>
    