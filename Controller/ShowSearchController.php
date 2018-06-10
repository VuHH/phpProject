<?php

class ShowSearchController {
	public function show() {
            $search = $_POST['search'];
            $typeSearch = $_POST['typeSearch'];
            if ($typeSearch == "food") {
                $lstFood = Food::searchFood($search);
                $titleSearch = "Thức Ăn";
                require_once 'View/pages/search/showsearch.php';
            } else {
                
            }
            
                
	}
	
}

?>