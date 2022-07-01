<?php
	
	/**
	 * Rewrites SEF URLs to thier actual files
	 * Last Edited: 31-12-2011 00:58:09 -00:00 (31 December 2011)
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
	
	$rewrite_rules = array(
		'/^\/?$/i'									=>	ABSPATH . ADMIN_PATH . 'sources' . DIRECTORY_SEPARATOR . 'index.template.loader.php',
		'/^players\/?$/i'								=>	ABSPATH . ADMIN_PATH . 'sources' . DIRECTORY_SEPARATOR . 'player.template.loader.php',
		'/^players\/(.*)/i'								=>	ABSPATH . ADMIN_PATH . 'sources' . DIRECTORY_SEPARATOR . 'player.template.loader.php?player=$1',
		'/^world\/?$/i'									=>	ABSPATH . ADMIN_PATH . 'sources' . DIRECTORY_SEPARATOR . 'world.template.loader.php',
		'/^worldmap\.png$/i'								=>	ABSPATH . ADMIN_PATH . 'sources' . DIRECTORY_SEPARATOR . 'make.world.map.php',
		'/^(.*)\/playermap\.png$/i'							=>	ABSPATH . ADMIN_PATH . 'sources' . DIRECTORY_SEPARATOR . 'make.player.map.php?player=$1',
		'/^quest\/?$/i'									=>	ABSPATH . ADMIN_PATH . 'sources' . DIRECTORY_SEPARATOR . 'quest.template.loader.php',
		'/^quest\/questmap.png$/i'								=>	ABSPATH . ADMIN_PATH . 'sources' . DIRECTORY_SEPARATOR . 'make.quest.map.php',
	);
	
	# If query string is not set properly, create one and set $_GET
	if ((!isset($_SERVER['QUERY_STRING']) || empty($_SERVER['QUERY_STRING'])) && strpos($_SERVER['REQUEST_URI'], '?') !== false) {
		$_SERVER['QUERY_STRING'] = parse_url(URL . $_SERVER['REQUEST_URI']);
		$_SERVER['QUERY_STRING'] = isset($_SERVER['QUERY_STRING']['query']) ? $_SERVER['QUERY_STRING']['query'] : '';
		parse_str($_SERVER['QUERY_STRING'], $_GET);
	}
	
	# Determine the path to the script, since we need to separate the path from the data to be rewritten
	$path_to_script = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
	if (substr($path_to_script, -1) != '/')
		$path_to_script .= '/';
		
	# Create our own request URI with the path removed and only the parts to rewrite included
	$request_uri = substr(urldecode($_SERVER['REQUEST_URI']), strlen($path_to_script));
	if (strpos($request_uri, '?') !== false)
		$request_uri = substr($request_uri, 0, strpos($request_uri, '?'));
		
	$rewritten_url = '';
	$url_parts = array();
	
	# Loop through all our rewrite rules
	foreach($rewrite_rules as $rule => $rewrite_to) {
		
		# Found a match
		if (preg_match($rule, $request_uri)) {
			$rewritten_url = preg_replace($rule, $rewrite_to, $request_uri);
			$url_parts = explode('?', $rewritten_url);
			
			# If there is a query string
			if (isset($url_parts[1])) {
				$query_string = explode('&', $url_parts[1]);
				
				# Set $_GET properly for all of the variables. Also set $_REQUEST if it's not
				foreach($query_string as $cur_param) {
					$param_data = explode('=', $cur_param);
					
					# Some parametes don't set a value (eg: script.php?foo), we set them to null
					$param_data[1] = isset($param_data[1]) ? $param_data[1] : null;
					
					# Don't want to be overwriting values in $_REQUEST that were set in POST or COOKIE
					if (!isset($_POST[$param_data[0]]) && !isset($_COOKIE[$param_data[0]]))
						$_REQUEST[$param_data[0]] = urldecode($param_data[1]);
						
					$_GET[$param_data[0]] = urldecode($param_data[1]);
				}
			}
			break;
		}
	}
	
	# Don't know what to rewrite to? show 404
	if (empty($rewritten_url)) {
		# Send header so Search Engines know its a 404 error
		header('HTTP/1.1 404 Not Found');
		
		# Show human readable error message
		die("<h1>404 File Not Found</h1><br />The requested page <em>" . htmlspecialchars('/' . $request_uri) . "</em> could not be found.<br />");
	}
		
	# Change $_SERVER['PHP_SELF'] so that it reflects the file we're actually loading
	$_SERVER['PHP_SELF'] = str_replace('index.php', $url_parts[0], $_SERVER['PHP_SELF']);
	
	if (file_exists($url_parts[0])) {
		require $url_parts[0];
	}
	# File we've rewritten to doesnt exist. Show 404 error
	else {
		# Send header so Search Engines know its a 404 error
		header('HTTP/1.1 404 Not Found');
		
		# Show human readable error message
		die("<h1>404 File Not Found</h1><br />The requested page <em>" . htmlspecialchars('/' . $request_uri) . "</em> could not be found.<br />");
	}
	
?>
