<?php
	
	/**
	 * Initialization file
	 * Last Edited: 31-12-2011 18:45:10 -00:00 (31 December 2011)
	 *
	 * @author		Wader
	 * @copyright	(c) 2011 Wade Urry
	 * @license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
	 */
	 
	# Check is file is not being accessed directly
	if (!defined('IN_CMS')) {
		print "<h1>Incorrect access</h1>You cannot access this file directly.";
		exit();
	}

	# Buffer output. We only want headers sent at this point.
	ob_start();
		 
	# Defines the Absolute file path from the Systems root directory.
	define('ABSPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
	
	# Load global settings as defined by the user.
	require('conf-global.php');
	
	# Defines the site URL
	define('URL', 'http://' . SITE_URL . INSTALL_DIR);
		
	# Check if debug mode is enabled
	if (DEBUG_MODE == true) {
		ini_set('display_errors', 1);
		error_reporting(E_ALL);
	}
	
	# Load registry to prepare for output
	require(ABSPATH . INCLUDES_PATH . 'registry.php');
	
	# Load rewrite file
	require('rewrite.php');

	# Display output and clean buffer.
	$output = ob_get_contents();
	ob_end_clean();
	print $output;
	
?>
