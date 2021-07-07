<?php
class Customer {
  private $customerID;
  private $customerName;
  private $usernameCustomer;
  private $customerPassword;
  private $customerEmail;
  private $customerAddress;
  private $customerPhone;
  private $isDisable;
  
  public function __construct($customerID, $customerName, $usernameCustomer, 
          $customerPassword, $customerEmail, $customerAddress, $customerPhone
          , $isDisable) {
	$this->customerID = $customerID;
	$this->customerName = $customerName;
        $this->usernameCustomer = $usernameCustomer; 
        $this->customerPassword = $customerPassword;
        $this->customerEmail = $customerEmail;
        $this->customerAddress = $customerAddress;
        $this->customerPhone = $customerPhone;
        $this->isDisable =  $isDisable;
  }
  
  function getCustomerID() {
      return $this->customerID;
  }

  function getCustomerName() {
      return $this->customerName;
  }

  function getUsernameCustomer() {
      return $this->usernameCustomer;
  }

  function getCustomerPassword() {
      return $this->customerPassword;
  }

  function getCustomerEmail() {
      return $this->customerEmail;
  }

  function getCustomerAddress() {
      return $this->customerAddress;
  }

  function getCustomerPhone() {
      return $this->customerPhone;
  }

  function getIsDisable() {
      return $this->isDisable;
  }

  function setCustomerID($customerID) {
      $this->customerID = $customerID;
  }

  function setCustomerName($customerName) {
      $this->customerName = $customerName;
  }

  function setUsernameCustomer($usernameCustomer) {
      $this->usernameCustomer = $usernameCustomer;
  }

  function setCustomerPassword($customerPassword) {
      $this->customerPassword = $customerPassword;
  }

  function setCustomerEmail($customerEmail) {
      $this->customerEmail = $customerEmail;
  }

  function setCustomerAddress($customerAddress) {
      $this->customerAddress = $customerAddress;
  }

  function setCustomerPhone($customerPhone) {
      $this->customerPhone = $customerPhone;
  }

  function setIsDisable($isDisable) {
      $this->isDisable = $isDisable;
  }

public static function getCustomer($userName,$conn) {
    if ($conn == NULL) {
        include 'Model/connectDB.php';
        $conn = connectDB();
    }
    //echo $userName;
    //echo $userPass;
    $sql = "SELECT * FROM customer WHERE UsernameCustomer = '" .$userName. "'";
    //echo $sql;
    $customer = NULL;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$customer = new Customer($row["CustomerID"], $row["CustomerName"], 
                        $row["UsernameCustomer"], $row["CustomerPassword"], 
                        $row["CustomerEmail"], $row["CustomerAddress"], 
                        $row["CustomerPhone"], $row["IsDisable"]);
	}
        //echo $customer->getUsernameCustomer();
    } else {
	return null;
    }
    
    $conn->close();
    return $customer;
    
}

public static function addCustomer($userName, $userPass, $userEmail, $userFullName) {
    include 'Model/connectDB.php';
    $conn = connectDB();
    $userId = uniqid();
    $md5Pass = md5($userPass);
    $checkCustomer = self::getCustomer($userName,$conn);
    if ($checkCustomer != NULL) {
        return 1;
    } else {  
         $sql = "INSERT INTO customer (CustomerID, CustomerName, UsernameCustomer, "
            . "CustomerPassword, CustomerEmail, IsDisable) VALUES ('".$userId."'"
            . ", '".$userFullName."', '".$userName."', '".$md5Pass."' ,'".$userEmail."' , 1)";
        if ($conn->query($sql) === TRUE) {
            return 0;
	} else {
	    return 2;
	}
    }
    $conn->close();
    
}

public static function updateCustomer($userID,$fullnameProfile, 
                    $emailProfile, $addressProfile, $phoneProfile) {
    
    include 'Model/connectDB.php';
    $conn = connectDB();
    
    $sql = "UPDATE customer set CustomerName = '".$fullnameProfile."', "
            . "CustomerEmail ='".$emailProfile."' , CustomerAddress = '".$addressProfile."', "
            . "CustomerPhone = '".$phoneProfile."' WHERE CustomerID = '".$userID."'";
    
    //echo $sql;
    
    if ($conn->query($sql) === TRUE) {
        return 1;
    } else {
        return 0;
    }
    
}

public static function updatePass($userID,$userPass) {
    include 'Model/connectDB.php';
    $conn = connectDB();
    
    $sql = "UPDATE customer set CustomerPassword='".$userPass."' "
            . "WHERE CustomerID = '".$userID."'";
    
    if ($conn->query($sql) === TRUE) {
        return 1;
    } else {
        return 0;
    }
    
}
    
}


