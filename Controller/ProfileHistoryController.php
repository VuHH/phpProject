<?php 
class ProfileHistoryController {
    public function history() {
            $userId = $_POST["userIdHistory"];
        
            //$userId = "5b1b5724e3513";
            $result = OrderFood::showOrder($userId);
            print_r($result);
            $myJSONHistory = json_encode($result);
            ob_clean();
            echo '-***myJSONHistory***-';
            echo $myJSONHistory;
            die();
            
        //require_once './View/pages/blank.php';
    }
}

?>

