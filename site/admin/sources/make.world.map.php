<?php

	$file = fopen(IDLE_DB, "r");
	fgets($file);

	$map = imagecreate(500, 500);

	# Create Colours
	$magenta = ImageColorAllocate($map, 255, 0, 255);
	$blue = ImageColorAllocate($map, 0, 128, 255);
	$red = ImageColorAllocate($map, 211, 0, 0);
	
	ImageColorTransparent($map, $magenta);
	
	while ($line = fgets($file)) {
		list(,,,,,,,,$online,,$x,$y) = explode("\t", trim($line));
		
		if ($online == 1) {
			ImageFilledEllipse($map, $x, $y, 7, 7, $blue); 
		} else {
			ImageFilledEllipse($map, $x, $y, 7, 7, $red);
		}
		
	}
	
	header("Content-type: image/png");
	ImagePNG($map);
	ImageDestroy($map);

?>
