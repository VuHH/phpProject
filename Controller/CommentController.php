<?php

class CommentController {
	public function addComment() {
            $customerID = $_POST['CustomerID'];
            $foodID = $_POST['FoodID'];
            $txtComment = $_POST['txtComment'];
            
            $comment = Comment::addComment($customerID, $foodID, $txtComment);
            echo $comment;
            require_once 'View/pages/detail/detail.php';
	}
        
        public function showComment() {

            
        }
}

?>