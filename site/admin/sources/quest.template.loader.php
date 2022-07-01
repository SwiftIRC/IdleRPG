<?php
	
	# Nav array
	$nav_array = array(
		'home'		=>	'',
		'player'	=>	'',
		'world'		=>	'',
		'quest'		=>	'active'
	);
	
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
	
	if (!$type) {
		$smarty->assign('tpl_file', 'noquest.tpl');
	} else {
		@$smarty->assign('text', $text);
		@$smarty->assign('type', $type);
		@$smarty->assign('stage', $stage);
		@$smarty->assign('p1', $p1);
		@$smarty->assign('p2', $p2);
		@$smarty->assign('player', $player);
		@$smarty->assign('tpl_file', 'quest.tpl');
		@$smarty->assign('ttc', duration($time - time()));
	}
	
	# Load Smarty template file
	$smarty->assign('link', URL . 'players/');
	$smarty->assign('title', 'Idle Quest');
	$smarty->assign('nav', $nav_array);
	$smarty->display(CURRENT_TEMPLATE_PATH . 'wrapper.tpl');
	
	function duration($s) {
        $s = abs(intval($s));
        if ($s == 0) return "None";
        return sprintf("%d day%s, %02d:%02d:%02d",
                       $s/86400,intval($s/86400)==1?"":"s",
                       ($s%86400)/3600,($s%3600)/60,$s%60);
    }
	
?>
