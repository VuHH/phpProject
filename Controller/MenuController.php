<?php
class MenuController {
    
	public function show() {
            $test = $_POST["menu"];
            $result = Menu::show();
            //print_r($result);
            $myJSON = json_encode($result);
            ob_clean();
            echo '-***myJSONFastFoodMenu***-';
            echo $myJSON;
            die();
	}
}
?>

