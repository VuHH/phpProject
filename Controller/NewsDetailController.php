<?php

class NewsDetailController {
	public function show() {
            include 'Model/connectDB.php';
            $conn = connectDB();
            $NewsID = $_POST['newsID'];
            //$foodID = 10;
            $lstNews = News::showDetail($NewsID, $conn);
            
            require_once 'View/pages/news/newsdetail.php';    
	}
}

?>