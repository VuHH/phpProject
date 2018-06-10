<?php
class SignInController {
	public function show() {
            if (!isset($_SESSION)) {
                session_start();
            }
            if (isset($_SESSION['errorLogin'])) {
                unset($_SESSION['errorLogin']);
            }
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
            $md5Pass = NULL;
            $isValid = TRUE;
            //$userName= "vuho99";
            //$md5Pass = md5("456456");
            if (isset($_SESSION['errorLogin'])) {
                unset($_SESSION['errorLogin']);
            }
            echo 'Test';
            if (isset($_POST["userName"])) {
                $userName = $_POST["userName"];
            }
	    if (isset($_POST["userPass"])) {
                $userPass = $_POST["userPass"];
                $md5Pass = md5($userPass);
                //echo $md5Pass;
            }
            //echo $userName;
	    if ($userName != NULL) {
                $customer = Customer::getCustomer($userName,NULL);
            }
            //print_r($customer);
            if ($customer == NULL) {
                $_SESSION['errorLogin'] = "Tài khoản của bạn không tồn tại. Vui lòng đăng ký";
                $isValid = FALSE;
            } else {
                $isDisable = $customer->getIsDisable();
                $passCust = $customer->getCustomerPassword();
                if ($isDisable != 1) {
                    $_SESSION['errorLogin'] = "Tài khoản của bạn đã bị khóa. Vui lòng liên hệ admin.";
                    $isValid = FALSE;
                } else {
                    if ($md5Pass != $passCust) {
                        $_SESSION['errorLogin'] = "Mật khẩu của bạn không đúng.";
                        $isValid = FALSE;
                    }
                }
            }
            //echo $isValid;
            if ($isValid == TRUE) {
                $_SESSION["userName"] = $customer->getUsernameCustomer();
                $_SESSION["fullName"] = $customer->getCustomerName();
                $_SESSION["userEmail"] = $customer->getCustomerEmail();
                $_SESSION["userAddress"] = $customer->getCustomerAddress();
                $_SESSION["userPhone"] = $customer->getCustomerPhone();
                $_SESSION["userID"] = $customer->getCustomerID();
                $username = $_SESSION["userName"];
                //echo $username;
                $myJSON = json_encode($username);
                ob_clean();
                require_once('View/pages/home/ViewHomePage.php');
                echo '-***myJSONSignIn***-';
                echo $myJSON;
                die();
                    
            } else {
                require_once 'View/pages/signin/signin.php';
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
            $myJSON = json_encode($isValid);
            ob_clean();
                //require_once('View/pages/home/ViewHomePage.php');
            echo '-***myJSONLogout***-';
            echo $myJSON;
            die();
            //header('Location: index.php?controller=HomePage&action=home');
            //require_once('View/pages/home/ViewHomePage.php');
        }
}
?>