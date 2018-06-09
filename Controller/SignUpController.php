<?php

class SignUpController {
    	public function add() {
            // link test: ?controller=SignUp&action=add
            $username = $_POST["username"];
            $pwd = $_POST["pwd"];
            $email = $_POST["email"];
            $fullname = $_POST["fullname"];
            
//            $username = "test";
//            $pwd = "test";
//            $email = "TEst";
//            $fullname = "test";
            
            echo $username;
            echo $pwd;
            echo $email;
            echo $fullname;
            //1 - Customer is exist
            //2- Update fail
            $isSuccess = Customer::addCustomer($username, $pwd, $email, $fullname);
            //echo $isSuccess;
            $jsonRegister = json_encode($isSuccess);
            ob_clean();
            echo '-***myJSONRegister***-';
            echo $jsonRegister;
            die();
            //require_once('View/pages/blank.php');
            
	}
}
?>
