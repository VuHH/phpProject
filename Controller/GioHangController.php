<?php

class GioHangController {
	public function show() {
        include 'Model/connectDB.php';  
        $conn = connectDB();
        if (isset($_SESSION["foods"]) && count($_SESSION["foods"]) > 0) {
//            $total_money = 0;
//            $All_money = 0;
//            $j = 0;
            $lstFood= array();
            //print_r($_SESSION["foods"]);
            foreach ($_SESSION["foods"] as $foods) {
                //$itemsID = $item["pro_id"];

                //print_r($foods);
                //print_r($foods["pro_id"]);
//                echo count(foods);
                $id = $foods["pro_id"];
                $sl = $foods["quantity"];
                $food = Food::showCart($id,$sl,$conn);
                
                array_push($lstFood, $food);
                    //echo $food[0];
                    //echo $food[1];
                    //print_r($foods);
//                    foreach ($item as $key=>$value) {
//                        $id=$item[$key];
//                        $sl=$item[$key];
//                        echo $id;
//                        echo $sl;
//                    }
                //}
                    //echo $key;
                    //echo $value;
//                    $foodId = $item[$key];
//                    echo $foodId;
//                    $sl = $item[$key];
//                    echo $sl;
//                    Food::showCart($itemID,$sl,$conn);
                }
                //request model -> Foood ->Show
                //$sl = $item["quantity"];
                //$lstFood = current(Food::showCart($itemID,$sl,$conn));
                
//                $dg = $lstFood->price;
//                $total_money = $sl * $dg;
//                $All_money +=$total_money;
            }
            $conn->close();
            if (isset($lstFood)) {
                $_SESSION["numberCart"] = count($lstFood);
            }
            
            require_once 'View/pages/GioHang/giohang.php';
	}
    }
?>