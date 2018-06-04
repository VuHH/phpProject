<?php
class HomePageController {
	public function home() {
		//return "View/pages/home/ViewHomePage.php";
	    require_once('View/pages/home/ViewHomePage.php');
	}

	public function error() {
		require_once('views/pages/error.php');
	}
}
?>