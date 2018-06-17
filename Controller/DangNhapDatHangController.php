<?php
class DangNhapDatHangController {
	public function signin() {
	//- require_once 'View/pages/GioHang/DangNhapDatHang.php';
            if (!isset($_SESSION)) {
                session_start();
            }
            $userName = NULL;
            $userPass = NULL;
            $customer = NULL;
            $md5Pass = NULL;
            $isValid = TRUE;
            if (isset($_SESSION['errorLogin'])) {
                unset($_SESSION['errorLogin']);
            }
            
            if (isset($_POST["userName"])) {
                $userName = $_POST["userName"];
            }
	    if (isset($_POST["userPass"])) {
                $userPass = $_POST["userPass"];
                $md5Pass = md5($userPass);
                //echo $md5Pass;
            }
	    if ($userName != NULL) {
                $customer = Customer::getCustomer($userName,NULL);
            }

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
                    if ($md5Pass != md5($passCust)) {
                        $_SESSION['errorLogin'] = "Mật khẩu của bạn không đúng.";
                        $isValid = FALSE;
                    }
                }
            }
            
            if ($isValid == TRUE) {
                $_SESSION["userName"] = $customer->getUsernameCustomer();
                $_SESSION["fullName"] = $customer->getCustomerName();
                $_SESSION["userEmail"] = $customer->getCustomerEmail();
                $_SESSION["userAddress"] = $customer->getCustomerAddress();
                $_SESSION["userPhone"] = $customer->getCustomerPhone();
                //header("Location: {$_SERVER['HTTP_REFERER']}");
                //header("Location: {$_SESSION['back']}");
                header("Location: " . 'http://localhost:8080/phpProject1/index.php?controller=Cart&action=AddToCart');

                //header('Location: index.php');
            } else {
                require_once 'View/pages/GioHang/dangnhapdathang.php';
            }
            header("Location: " . 'http://localhost:8080/phpProject1/index.php?controller=Cart&action=AddToCart');
	}
}
?>