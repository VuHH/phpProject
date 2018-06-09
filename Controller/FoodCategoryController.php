<?php

class FoodCategoryController {
	public function show() {
            $menuTypeID = $_POST['typeID'];
            $lstFood = FoodCategory::show($menuTypeID);
            require_once 'View/pages/category/category.php';
	}
}

?>