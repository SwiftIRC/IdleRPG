<?php
	
	/**
	 * Main public executable wrapper
	 * Set-up and load module to run
	 * Last Edited: 30-12-2011 00:35:46 -00:00 (30 December 2011)
	 *
	 * @author		Wader
	 * @copyright	(c) 2011 Wade Urry
	 * @link		http://www.iwader.co.uk
	 * @version		1.0
	 * @license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
	 */
	 
 	/**
	 * Tells the CMS that its being used.
	 *
	 * This is used as a security precaution throughout
	 * the CMS so files cannot be directly accessed
	 */
	define('IN_CMS', true);
	
	/**
	 * Require the initialization data.
	 *
	 * All further functionality is then handled
	 * from here
	 */
	require('init.php');
	
	# Safely close the PHP process
	exit();

?>
