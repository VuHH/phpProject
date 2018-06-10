<?php
class ProfileController {
	public function show() {
		//return "View/pages/home/ViewHomePage.php";
	    require_once('View/pages/profile/profile.php');
	}
        
        public function updateProfie() {
		//return "View/pages/home/ViewHomePage.php";
	    //require_once('View/pages/profile/profile.php');
            
            $fullnameProfile = $_POST["fullnameProfile"];
            $emailProfile = $_POST["emailProfile"];
            $addressProfile = $_POST["addressProfile"];
            $phoneProfile = $_POST["phoneProfile"];
            $userId = $_POST["userId"];
            
            $isSuccess = Customer::updateCustomer($userId,$fullnameProfile, 
                    $emailProfile, $addressProfile, $phoneProfile);
            
            if ($isSuccess == 1) {
                $_SESSION["fullName"] = $fullnameProfile;
                $_SESSION["userEmail"] = $emailProfile;
                $_SESSION["userAddress"] = $addressProfile;
                $_SESSION["userPhone"] = $phoneProfile;
            }
            
            require_once('View/pages/profile/profile.php');
	}
        public function changePass() {
            $newPass = $_POST["newPass"];
            $userIdChangePass = $_POST["userIdChangePass"];
            
            $md5NewPass = md5($newPass);
            $chagePass = Customer::updatePass($userIdChangePass, $md5NewPass);
            
            $jsonPassChange = json_encode($chagePass);;
                    
            ob_clean();
            echo '-***myJSONChangePass***-';
            echo $jsonPassChange;
            die();
            
        }
}
?>