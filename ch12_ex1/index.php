<?php
// Start session management with a persistent cookie
//	$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
	$lifetime = 60 * 60 * 24 * 365 * 2;    // 2 years in seconds
	session_set_cookie_params($lifetime, '/');
//	session_id('pysga1996'); //set custom id for new session, work only when session has not began
	session_start();
	
// Create a cart array if needed
	if (empty($_SESSION['cart'])) $_SESSION['cart'] = array();

// Create a table of products
	$products = array();
	$products['MMS-1754'] = array('name' => 'Flute', 'cost' => '149.50');
	$products['MMS-6289'] = array('name' => 'Trumpet', 'cost' => '199.50');
	$products['MMS-3408'] = array('name' => 'Clarinet', 'cost' => '299.50');

// Include cart functions
	require_once('cart.php');

// Get the action to perform
	if (isset($_POST['action'])) {
		$action = $_POST['action'];
	} else if (isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = 'show_add_item';
	}

// Add or update cart as needed
	switch($action) {
		case 'add':
			add_item($_POST['productkey'], $_POST['itemqty']);
			include('cart_view.php');
			break;
		case 'update':
			$new_qty_list = isset($_POST['newqty']) ? $_POST['newqty'] : array();
			foreach($new_qty_list as $key => $qty) {
				if ($_SESSION['cart12'][$key]['qty'] != $qty) {
					update_item($key, $qty);
				}
			}
			include('cart_view.php');
			break;
		case 'show_cart':
			include('cart_view.php');
			break;
		case 'show_add_item':
			include('add_item_view.php');
			break;
		case 'empty_cart':
			unset($_SESSION['cart12']);
			include('cart_view.php');
			break;
		case 'end_session_and_delete_cookie':
			session_destroy();
			$session_cookie_params = session_get_cookie_params();
			$name = session_name();
			$path = $session_cookie_params['path'];
			$domain = $session_cookie_params['domain'];
			$secure = $session_cookie_params['secure'];
			$httponly = $session_cookie_params['httponly'];
			echo $path, $domain, $secure, $httponly;
			setcookie($name, '', strtotime('-1 year'), $path, $domain, $secure, $httponly);
			include('cart_view.php');
			break;
		case 'regenerate_session_id':
			session_regenerate_id();
			include('cart_view.php');
			break;
	}