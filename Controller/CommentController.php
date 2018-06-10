<?php

class CommentController {
	public function addComment() {
            $customerID = $_POST['customerID'];
            $foodID = $_POST['foodID'];
            $txtComment = $_POST['txtComment'];
            
            $comment = Comment::addComment($customerID, $foodID, $txtComment);
//            echo $comment;
	}
}

?>