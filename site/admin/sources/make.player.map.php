<?php
	
	$map = ImageCreate(500, 500);
	
	$user = substr($_GET['player'], 0, 30);
	
	$stringx=$stringy=-1;
	
	$file = file(IDLE_DB);
	unset($file[0]);
	
	foreach ($file as $line) {
		list($username,,,,,,,,,,$x,$y) = explode("\t", trim($line));
		
		if ($username == $user) {
			$stringx = $x;
			$stringy = $y;
			break;
		}
	}
	
	if ($stringx == $stringy && $stringx == -1) {
		ImageString($map, 5, 200, 245, "No Such User", ImageColorAllocate($map, 255, 0, 0));
	} else {
		$width = ImageFontWidth(5);
		$height = ImageFontHeight(5);
		
		if ($x+((strlen($user)+1)*$width) > 500) {
			$stringx = $x - ((strlen($user)+1)*$width)-12;
		}
		
		if ($y+$height > 500) {
			$stringy= $y - ($height/2)-2;
		}
		
		$magenta = ImageColorAllocate($map, 255, 0, 255);
		ImageColorTransparent($map, $magenta);
		$brown = ImageColorAllocate($map, 102, 51, 0);
		$parchment = ImageColorAllocate($map, 255, 255, 204);
		
		// Avoid drawing a brown dot on a brown area
		$rgb = ImageColorAt($map, $x, $y);
		if ($rgb > 0) {
			$temp = $brown;
			$brown = $parchment;
			$parchment = $temp;
		}
		
		// You are here
		ImageFilledEllipse($map, $x, $y, 6, 6, $brown);
		
		// Background for text
		ImageFilledRectangle($map, $stringx+6, $stringy-($height/2), $stringx+6+$width*(strlen($user)+1),$stringy+($height/2), $brown);
		
		// Text itself
		ImageString($map, 5, $stringx+7+($width/2), $stringy-($height/2)-1, $user, $parchment);
	}
	
	header("Content-type: image/png");
	ImagePNG($map);
	ImageDestroy($map);
	
?>
