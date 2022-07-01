<?php
	
	# Nav array
	$nav_array = array(
		'home'		=>	'',
		'player'	=>	'',
		'world'		=>	'active',
		'quest'		=>	''
	);
	
	$file = fopen(IDLE_DB, "r");
	fgets($file);
	
	$map = array();
	
	while ($location = fgets($file)) {
		list ($who,,,,,,,,,,$x,$y) = explode("\t", trim($location));
		
		$map[] = array(
			'x'	=>	$x,
			'y'	=>	$y,
			'who'	=>	$who,
		);
	}
	
	# Load Smarty template file
	$smarty->assign('map', $map);
	$smarty->assign('link', URL);
	$smarty->assign('tpl_file', 'world.tpl');
	$smarty->assign('title', 'World Map');
	$smarty->assign('nav', $nav_array);
	$smarty->display(CURRENT_TEMPLATE_PATH . 'wrapper.tpl');
	
?>
