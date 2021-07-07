<?php

class FoodDetailController {
	public function show() {
            include 'Model/connectDB.php';
            $conn = connectDB();
            $foodID = $_POST['foodID'];
            //$foodID = 10;
            $lstFood = Food::showDetail($foodID, $conn);
            $lstComment = Comment::getAllComment($foodID, $conn);
            $conn->close();
            require_once 'View/pages/detail/detail.php';    
	}
}

?>