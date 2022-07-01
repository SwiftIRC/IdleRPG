<?php
	
	$file = fopen(IDLE_QF, "r");
	$type = 0;
	
	while ($line = fgets($file, 1024)) {
		$arg = explode(" ", trim($line));
		if ($arg[0] == "T") {
			unset($arg[0]);
			$text = implode(" ", $arg);
		} elseif ($arg[0] == "Y") {
			$type = $arg[1];
		} elseif ($arg[0] == "P") {
			$p1[0] = $arg[1];
			$p1[1] = $arg[2];
			$p2[0] = $arg[3];
			$p2[1] = $arg[4];
		} elseif ($arg[0] == "S") {
			if ($type == 1) { $time = $arg[1]; }
			elseif ($type == 2) { $stage = $arg[1]; }
		} elseif ($arg[0] == "P1") {
			$player[1]['name'] = $arg[1];
			if ($type == 2) {
				$player[1]['x'] = $arg[2];
				$player[1]['y'] = $arg[3];
			}
		} elseif ($arg[0] == "P2") {
			$player[2]['name'] = $arg[1];
			if ($type == 2) {
				$player[2]['x'] = $arg[2];
				$player[2]['y'] = $arg[3];
			}
		} elseif ($arg[0] == "P3") {
			$player[3]['name'] = $arg[1];
			if ($type == 2) {
				$player[3]['x'] = $arg[2];
				$player[3]['y'] = $arg[3];
			}
		} elseif ($arg[0] == "P4") {
			$player[4]['name'] = $arg[1];
			if ($type == 2) {
				$player[4]['x'] = $arg[2];
				$player[4]['y'] = $arg[3];
			}
		}
	}
	
	$map = ImageCreate(500, 500);
	$magenta = ImageColorAllocate($map, 255, 0, 255);
	ImageColorTransparent($map, $magenta);
	$blue = ImageColorAllocate($map, 0, 128, 255);
	$red = ImageColorAllocate($map, 255, 0, 0);
	
	ImageFilledEllipse($map, $player[1]['x'], $player[1]['y'], 7, 7, $blue);
	ImageFilledEllipse($map, $player[2]['x'], $player[2]['y'], 7, 7, $blue);
	ImageFilledEllipse($map, $player[3]['x'], $player[3]['y'], 7, 7, $blue);
	ImageFilledEllipse($map, $player[4]['x'], $player[4]['y'], 7, 7, $blue);
	
	if ($type == 1) {
		ImageFilledEllipse($map, $p1[0], $p1[1], 9, 9, $red);
	} else {
		ImageFilledEllipse($map, $p2[0], $p2[1], 9, 9, $red);
	}
	
	header("Content-type: image/png");
	ImagePNG($map);
	ImageDestroy($map);
	
?>
