<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Food
 *
 * @author BoRyan
 */
class Food {
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
    
    public static function showCategory($menuTypeID) {
            include 'Model/connectDB.php';
            $conn = connectDB();
            $lstFood = [];
            $item;
            $sql = "SELECT * FROM food WHERE TypeID IN ('".$menuTypeID."')";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                            $item = new Food(
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
    public static function showDetail($foodID,$conn) {
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
                        $lstFood = new Food(
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

    public static function searchFood($search) {
        
        include 'Model/connectDB.php';
        $conn = connectDB();
        
        $lstFood = [];
        $sql = "SELECT * FROM food WHERE FoodName like '%$search%'";
        //echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                            $item = new Food(
                                    $row["FoodID"], $row["FoodName"], $row["FoodDescribe"], 
                                    $row["DirImage"], $row["Price"], $row["TypeID"]);
                            array_push($lstFood, $item);
                    }
            } else {
                    //echo "0 results";
            }
//            $conn->close();
            return $lstFood;
        
    }
        
    
}
