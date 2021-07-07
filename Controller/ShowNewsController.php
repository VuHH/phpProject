<?php

class ShowNewsController {
	public function show() {
            $lst = News::showNews();
            require_once 'View/pages/news/shownews.php';    
	}
}

?>