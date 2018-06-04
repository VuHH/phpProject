<?php
if (isset($_GET['controller']) && isset($_GET['action'])) {
	$controller = $_GET['controller'];
	$action     = $_GET['action'];
} else {
	$controller = 'HomePage';
	$action     = 'home';
}

require_once('View/layout.php');

?>