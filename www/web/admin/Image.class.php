<?php

class Image{
	
	private $width_org;
	private $height_org;
	private $imageId;
	
	
	public function Image($_FILES, $types, $imageDesc){
		
		mysql_query("INSERT INTO images (imageDesc) VALUES ('$imageDesc')");
		$this->imageId = mysql_insert_id();
		
		list($this->width_org, $this->height_org) = getimagesize($_FILES['imageFile']['tmp_name']);
		
		$typeArray = str_split($types);
		foreach ($typeArray as $type){

			$newSize = $this->getNewSize($type);
			$fileName = $this->imageId."_".$type.".jpg";
			$this->makeImage($_FILES, $newSize, $fileName);
		}
	}
	
	public function getImageId(){
		return $this->imageId;
	}
	public function makeImage($_FILES, $newSize, $fileName){
		$blank = imagecreatetruecolor($newSize[0], $newSize[1]);
		$image = imagecreatefromjpeg($_FILES['imageFile']['tmp_name']);

		imagecopyresampled($blank, $image, 0, 0, 0, 0, $newSize[0], $newSize[1], $this->width_org, $this->height_org);

		imagejpeg($blank, $newSize[2].$fileName , 90);
	}
	
	public function getNewSize($type){
		$imageConf[1] = array(700,700, "D:/private/customers/haempe/domains/vezr.ch/www/web/data/");		// Normal
		$imageConf[2] = array(150,150, "D:/private/customers/haempe/domains/vezr.ch/www/web/data/");		// Thumb
		$imageConf[3] = array(60,60, "D:/private/customers/haempe/domains/vezr.ch/www/web/data/");		// Thumb small preview
		
		
		$max_width = $imageConf[$type][0];
		$max_height = $imageConf[$type][1];
		
		if($this->width_org > $max_width){
			$new_width = $max_width;
			$new_height = round($this->height_org * ($max_width/$this->width_org));
			
			if($new_height > $max_height){
				$new_height = $max_height;
        		$new_width = round($this->width_org * ($max_height/$this->height_org));
			}	
		}
		elseif($this->height_org > $max_height){
			$new_height = $max_height;
			$new_width = round($this->width_org * ($max_height/$this->height_org));
		}
		else{
			$new_width = $this->width_org;
			$new_height = $this->height_org;
		}
		return array($new_width, $new_height, $imageConf[$type][2]);
	}
	
	
}

?>