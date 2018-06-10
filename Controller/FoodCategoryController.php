<?php

class FoodCategoryController {
	public function show() {
            $menuTypeID = $_POST['typeID'];
            $lstFood = Food::showCategory($menuTypeID);
            require_once 'View/pages/category/category.php';
	}
}

?>