<?php
class OrderFood {
    private $OrderID;
    private $OrderDate;
    private $CustomerID;
    private $FoodId;
    private $Quantity;
    
    function __construct($OrderID, $OrderDate, $CustomerID, $FoodId, $Quantity) {
        $this->OrderID = $OrderID;
        $this->OrderDate = $OrderDate;
        $this->CustomerID = $CustomerID;
        $this->FoodId = $FoodId;
        $this->Quantity = $Quantity;
    }
    
    function getOrderID() {
        return $this->OrderID;
    }

    function getOrderDate() {
        return $this->OrderDate;
    }

    function getCustomerID() {
        return $this->CustomerID;
    }

    function getFoodId() {
        return $this->FoodId;
    }

    function getQuantity() {
        return $this->Quantity;
    }

    function setOrderID($OrderID) {
        $this->OrderID = $OrderID;
    }

    function setOrderDate($OrderDate) {
        $this->OrderDate = $OrderDate;
    }

    function setCustomerID($CustomerID) {
        $this->CustomerID = $CustomerID;
    }

    function setFoodId($FoodId) {
        $this->FoodId = $FoodId;
    }

    function setQuantity($Quantity) {
        $this->Quantity = $Quantity;
    }

    public static function showOrder($userId) {
        include 'Model/connectDB.php';
	$conn = connectDB();
        
        $lstOrder = [];
        
        $sql = "SELECT DISTINCT f.FoodName, od.Quantity, f.Price, o.OrderDate 
            FROM food f, orderdetail od, orderfood o
            WHERE f.FoodID = od.FoodId 
            AND o.CustomerID = '".$userId."'";
        //echo $sql;
            $result = $conn->query($sql);
            $item = [];
            if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
                    $item = array(
                        "foodName"=>$row["FoodName"],
                        "quantity"=>$row["Quantity"],
                        "price"=>$row["Price"],
                        "orderDate"=>$row["OrderDate"]);
                        array_push($lstOrder, $item);
                }
            } else {
		echo "0 results";
            }
            
        $conn->close();
        return $lstOrder;
    }
}
?>

