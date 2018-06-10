<?php

class FoodDetailController {
	public function show() {
            include 'Model/connectDB.php';
            $conn = connectDB();
            $foodID = $_POST['foodID'];
            $lstFood = FoodDetail::show($foodID, $conn);
            $lstComment = Comment::getAllComment($foodID, $conn);
            require_once 'View/pages/detail/detail.php';
	}
}

?>