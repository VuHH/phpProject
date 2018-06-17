<?php

class ThongTinGiaoHangController {
	public function show() {
            if(!isset($_SESSION["fullName"])){//+
                $_SESSION["fullName"] = $_POST["name"]; //+
                $_SESSION["userEmail"] = $_POST["email"];//+
                $_SESSION["userAddress"] = $_POST["Address"];//+
                $_SESSION["userPhone"] = $_POST["Tel"];//+
            }
            include 'Model/connectDB.php';  
        $conn = connectDB();
        if (isset($_SESSION["foods"]) && count($_SESSION["foods"]) > 0) {
//            $total_money = 0;
//            $All_money = 0;
//            $j = 0;
            $lstFood= array();
            //print_r($_SESSION["foods"]);
            foreach ($_SESSION["foods"] as $foods) {
                $id = $foods["pro_id"];
                $sl = $foods["quantity"];
                $food = Food::showCart($id,$sl,$conn);
                
                array_push($lstFood, $food);
                }
            }
            $conn->close();
            require_once 'View/pages/GioHang/thongtingiaohang.php';
	}
    }
?>