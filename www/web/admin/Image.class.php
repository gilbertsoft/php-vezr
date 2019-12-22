<?php

/*
 * This file is part of the package gilbertsoft/vezr.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

class Image
{
    private $width_org;
    private $height_org;
    private $imageId;

    public function __constructor($files, $types, $imageDesc)
    {
        mysqli_query($GLOBALS['dblink'], "INSERT INTO images (imageDesc) VALUES ('$imageDesc')");
        $this->imageId = mysqli_insert_id($GLOBALS['dblink']);

        list($this->width_org, $this->height_org) = getimagesize($files['imageFile']['tmp_name']);

        $typeArray = str_split($types);
        foreach ($typeArray as $type) {
            $newSize = $this->getNewSize($type);
            $fileName = $this->imageId . '_' . $type . '.jpg';
            $this->makeImage($files, $newSize, $fileName);
        }
    }

    public function getImageId()
    {
        return $this->imageId;
    }
    public function makeImage($files, $newSize, $fileName)
    {
        $blank = imagecreatetruecolor($newSize[0], $newSize[1]);
        $image = imagecreatefromjpeg($files['imageFile']['tmp_name']);

        imagecopyresampled($blank, $image, 0, 0, 0, 0, $newSize[0], $newSize[1], $this->width_org, $this->height_org);

        imagejpeg($blank, $newSize[2] . $fileName, 90);
    }

    public function getNewSize($type)
    {
        $imageConf[1] = [700, 700, '../data/'];		// Normal
        $imageConf[2] = [150, 150, '../data/'];		// Thumb
        $imageConf[3] = [60, 60, '../data/'];		// Thumb small preview

        $max_width = $imageConf[$type][0];
        $max_height = $imageConf[$type][1];

        if ($this->width_org > $max_width) {
            $new_width = $max_width;
            $new_height = round($this->height_org * ($max_width/$this->width_org));

            if ($new_height > $max_height) {
                $new_height = $max_height;
                $new_width = round($this->width_org * ($max_height/$this->height_org));
            }
        } elseif ($this->height_org > $max_height) {
            $new_height = $max_height;
            $new_width = round($this->width_org * ($max_height/$this->height_org));
        } else {
            $new_width = $this->width_org;
            $new_height = $this->height_org;
        }
        return [$new_width, $new_height, $imageConf[$type][2]];
    }
}
