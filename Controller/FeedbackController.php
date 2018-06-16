<?php

class FeedbackController {
	public function showadd() {
            require_once 'View/pages/feedback/addfeedback.php';
	}
        public function add() {
                     //date("Y/m/d")
            // LAy form Feedback::add
            $content = $_POST["feedbackcontent"];
            //echo ''.$content;
            $id = uniqid();
            $date = date("y-m-d");
            $userID = $_POST["userIdFeedback"];
            //echo ''.$id.''.$content;
            
            $fb= Feedback::add($content, $id, $date, $userID);
            
            
            //  require_once 'View/pages/feedback/addfeedback.php';
	}
        public function show() {
            $userID = $_POST["userIdFeedback"];
            
            //$userID = '5b1fc3aebf00c';
            $lstFeedback = Feedback::showlist($userID);
            //print_r($lstFeedback);
            
            $myJSON = json_encode($lstFeedback);
            //print_r($myJSON);
            ob_clean();
            echo '-***myJSONFeedback***-';
            echo $myJSON;
            die();
        }
}

?>
