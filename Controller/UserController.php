<?php

class UserController {
	public function showAll() {
	    $lstUsers = User::showAll();
		require_once 'View/pages/user/index.php';
	}
	public function addUser() {
	    $id = $_POST["userId"];
	    $name = $_POST["userName"];
	    echo $id;
	    echo $name;
	    $result = User::addUser($id, $name);
	    echo $result;
	}
}

?>