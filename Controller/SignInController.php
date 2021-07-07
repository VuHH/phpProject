<?php
class SignInController {
	public function show() {
            if (!isset($_SESSION)) {
                session_start();
            }
//            if (isset($_SESSION['errorLogin'])) {
//                unset($_SESSION['errorLogin']);
//            }
	    //$lstUsers = User::showAll();
	    require_once 'View/pages/signin/signin.php';
	}
        
	public function loginAction() {
            if (!isset($_SESSION)) {
                session_start();
            }
            $userName = NULL;
            $userPass = NULL;
            $customer = NULL;
            $cartSignIn = NULL;
            $error = 0;
            //$md5Pass = NULL;
            $isValid = TRUE;
            //$userName= "vuho99";
            //$md5Pass = md5("456456");
            //echo 'Test';
            if (isset($_POST["userName"])) {
                $userName = $_POST["userName"];
            }
	    if (isset($_POST["userPass"])) {
                $userPass = $_POST["userPass"];
                $md5Pass = md5($userPass);
                //echo $md5Pass;
            }
            if (isset($_POST["cartSignIn"])) {
                $cartSignIn = $_POST["cartSignIn"];
            }
            
            //echo $userName;
	    if ($userName != NULL) {
                $customer = Customer::getCustomer($userName,NULL);
            }
            //print_r($customer);
            if ($customer == NULL) {
                $error = 1;
                $isValid = FALSE;
            } else {
                $isDisable = $customer->getIsDisable();
                $passCust = $customer->getCustomerPassword();
                if ($isDisable != 1) {
                    $error = 2;
                    $isValid = FALSE;
                } else {
                    if ($md5Pass != $passCust) {
                        $error = 3;
                        $isValid = FALSE;
                    }
                }
            }
            if (isset($cartSignIn)) {
                $error = $cartSignIn; 
            }
            //echo $isValid;
            if ($isValid == TRUE) {
                //echo 'True';
                $_SESSION["userName"] = $customer->getUsernameCustomer();
                $_SESSION["fullName"] = $customer->getCustomerName();
                $_SESSION["userEmail"] = $customer->getCustomerEmail();
                $_SESSION["userAddress"] = $customer->getCustomerAddress();
                $_SESSION["userPhone"] = $customer->getCustomerPhone();
                $_SESSION["userID"] = $customer->getCustomerID();
                
                //$username = $_SESSION["userName"];
                //echo $isValid;
                $myJSON = json_encode($error);
                ob_clean();
                echo '-***myJSONSignIn***-';
                echo $myJSON;
                die();
            } else {
                //echo $isValid;
                $myJSON = json_encode($error);
                ob_clean();
                echo '-***myJSONSignIn***-';
                echo $myJSON;
                die();   
            }
	}
        public function logoutAction() {
            if(!isset($_SESSION))
            {
               session_start();
            }

            if (isset($_SESSION['userName'])) {
                unset($_SESSION['userName']);
                unset($_SESSION['userEmail']);
                unset($_SESSION['userAddress']);
                unset($_SESSION['userPhone']);
                unset($_SESSION['userID']);
            }
            $isValid = 1;
            echo $isValid;
//            
//            $myJSON = json_encode($isValid);
//            ob_clean();
//                //require_once('View/pages/home/ViewHomePage.php');
//            echo '-***myJSONLogout***-';
//            echo $myJSON;
//            die();
            //header('Location: index.php?controller=HomePage&action=home');
            //require_once('View/pages/home/ViewHomePage.php');
        }
        public function showLoginCart() {
            require_once 'View/pages/signinCart/signin.php';
        }
}
?>