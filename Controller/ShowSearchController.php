<?php

class ShowSearchController {
	public function show() {
            $search = $_POST['search'];
            $typeSearch = $_POST['typeSearch'];
            if ($typeSearch == "food") {
                $lstFood = Food::searchFood($search);
                $titleSearch = "Thức Ăn";
                
            } else {
                $lstNews = News::searchNews($search);              
                $titleSearch="Tin Tức";
               
            }
            require_once 'View/pages/search/showsearch.php';
            
                
	}
	
}

?>