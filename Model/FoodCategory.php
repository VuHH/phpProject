<?php
class FoodCategory {
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

    
    public static function show($menuTypeID) {
            include 'Model/connectDB.php';
            $conn = connectDB();
            $lstFood = [];
            $item;
            $sql = "SELECT * FROM food WHERE FoodName like '%$search%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                            $item = new FoodCategory(
                                    $row["FoodID"], $row["FoodName"], $row["FoodDescribe"], 
                                    $row["DirImage"], $row["Price"], $row["TypeID"]);
                            array_push($lstFood, $item);
                    }
            } else {
                    echo "0 results";
            }
            
           

            $conn->close();
            return $lstFood;
	}
}

?>