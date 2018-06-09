<?php

class FoodDetailController {
	public function show() {
            $foodID = $_POST['foodID'];
            $lstFood = FoodDetail::show($foodID);
            require_once 'View/pages/detail/detail.php';
	}
}

?>