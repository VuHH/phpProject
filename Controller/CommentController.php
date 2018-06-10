<?php

class CommentController {
	public function addComment() {
            $customerID = $_POST['customerID'];
            $foodID = $_POST['foodID'];
            $txtComment = $_POST['txtComment'];
            //$customerID = 1;
            //$foodID = 1;
            //$txtComment = "text";
            $comment = Comment::addComment($customerID, $foodID, $txtComment);
            //echo $comment;
	}
}

?>