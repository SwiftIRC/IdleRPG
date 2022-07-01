<?php
	
	/**
	 * The base configurations
	 *
	 * This file has the following configurations: MySQL setings, Table Prefix, Secret Keys and Directory Structure
	 */
	
	/**
	 * Enable verbose output of PHP errors
	 */
	define('DEBUG_MODE', false);
	
	/**
	 * The directory the CMS is installed in
	 */
	define('INSTALL_DIR', '/');

	define('SITE_URL', 'idle.reinze.com');
	
	/**
	 * IdleRPG irpg.db file
	 */
	define('IDLE_DB', '/var/www/reinze.com/idle/irpg.db');
	
	/**
	 * IdleRPG questinfo.txt file
	 */
	define('IDLE_QF', '/var/www/reinze.com/idle/questinfo.txt');
	
	/**
	 * IdleRPG irc nick.
	 */
	define('IDLE_NICK', 'IdleBot');
	 
	/**
	 * Constants that define your file structure
	 *
	 * You can set these up however you like, providing all the
	 * neccessary folders and/or files are in the relevant directories.
	 * WARNING: Remember to retain permissions of these files.
	 * 		ALL folders where users can upload files (i.e: /public/uploads/) 
	 * 		must have permissions of at least 0775.
	 *
	 * DEFAULTS:
	 * 		INCLUDES_PATH:			includes/
	 * 		TEMPLATES_PATH:			public/templates/
	 * 		CACHE_PATH:				cache/
	 *		UPLOADS_PATH:			public/uploads/
	 * 		ADMIN_PATH:				admin/
	 */
	define('INCLUDES_PATH', 'includes' . DIRECTORY_SEPARATOR);
	define('TEMPLATES_PATH', 'public' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR);
	define('CACHE_PATH', 'cache' . DIRECTORY_SEPARATOR);
	define('UPLOADS_PATH', 'public' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR);
	define('ADMIN_PATH', 'admin' . DIRECTORY_SEPARATOR);
	
	/**
	 * The choosen template and path
	 */
	define('TEMPLATE', 'Default');
	define('CURRENT_TEMPLATE_PATH', TEMPLATES_PATH . TEMPLATE . DIRECTORY_SEPARATOR);
	
	/**
	 * Sets the default timezone on which PHP operates
	 * http://www.php.net/manual/en/timezones.php
	 */
	date_default_timezone_set('UTC');
	
?>
