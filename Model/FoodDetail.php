<?php
class FoodDetail {
    public $id;
    public $name;
    public $des;
    public $image;
    public $price;
    public $type;
	
    function __construct($id, $name, $des, $image, $price, $type) {
        $this->id = $id;
        $this->name = $name;
        $this->des = $des;
        $this->image = $image;
        $this->price = $price;
        $this->type = $type;
    }

    
    public static function show($foodID,$conn) {
            $lstFood = NULL;
            $sql = "SELECT * FROM food WHERE FoodID = '".$foodID."' ";
            //echo $sql;
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                $sql2 = "SELECT * FROM type WHERE TypeID IN ('".$row["TypeID"]."')";
                $resultType = $conn->query($sql2);
                if ($resultType->num_rows > 0) {
                    while($rowType = $resultType->fetch_assoc()) {
                        $lstFood = new FoodDetail(
                                $row["FoodID"], $row["FoodName"], $row["FoodDescribe"], 
                                $row["DirImage"], $row["Price"], $rowType["TypeName"]);
                    }
                }    
                }
            } else {
                    echo "0 results";
            }
//            $conn->close();
            return $lstFood;
	}
        
        public static function showCart($foodID) {

                include 'Model/connectDB.php';  
                $conn = connectDB();

//-         $lstFood;
            $lstFood = [];//+
            $item;//+
            $sql = "SELECT * FROM food WHERE FoodID IN ('".$foodID."')";
            $result = $conn->query($sql);


//-            if ($result->num_rows > 0) {
//-                while($row = $result->fetch_assoc()) {
//-                $sql2 = "SELECT * FROM type WHERE TypeID IN ('".$row["TypeID"]."')";
//-                $resultType = $conn->query($sql2);
//-                if ($resultType->num_rows > 0) {
//-                    while($rowType = $resultType->fetch_assoc()) {
//-                        $lstFood = new FoodDetail(

            if ($result->num_rows > 0) //+
            {
                while($row = $result->fetch_assoc()) //+
                {        //+
                    $item = new FoodDetail(//+
                                $row["FoodID"], $row["FoodName"], $row["FoodDescribe"],//+
 //-                                $row["DirImage"], $row["Price"], $rowType["TypeName"]);
//-                    }
                                $row["DirImage"], $row["Price"], $row["TypeID"]);//+
                    array_push($lstFood, $item);//+

                }
                
            } else {
                    echo "0 results";
            }
		//-$conn->close();
            //+$conn->close();
            return $lstFood;
	}
}

?>