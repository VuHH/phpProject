<?php
class MenuController {
    
	public function show() {
            $result = Menu::show();
            //print_r($result);
            $myJSON = json_encode($result, JSON_UNESCAPED_UNICODE);
            //print_r($myJSON);
            ob_clean();
            echo '-***myJSONFastFood***-';
            echo $myJSON;
            die();
	}
}
?>

