<?php
	
	# Nav array
	$nav_array = array(
		'home'		=>	'active',
		'player'	=>	'',
		'world'		=>	'',
		'quest'		=>	''
	);
	
	# Load Smarty template file
	$smarty->assign('tpl_file', 'index.tpl');
	$smarty->assign('title', 'SwiftIRC - IdleRPG');
	$smarty->assign('nav', $nav_array);
	$smarty->display(CURRENT_TEMPLATE_PATH . 'wrapper.tpl');
	
?>