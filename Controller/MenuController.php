<?php
<<<<<<< HEAD
=======

>>>>>>> chi1
class MenuController {
    
	public function show() {
            $result = Menu::show();
            print_r($result);
            $myJSON = json_encode($result);
            ob_clean();
            echo '-***myJSONFastFood***-';
            echo $myJSON;
            die();
	}
}
<<<<<<< HEAD
?>
=======

?>
>>>>>>> chi1
