
<?php
//include_once("../Model/config.php");

class CartController {
    // them vao gio hang
    public function AddToCart() {
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        // thêm mới sp vào giỏ hàng
        $i = 0;
        $count = 0;
        if (isset($_POST["ttgh"])) {
            $ttgh = $_POST["ttgh"];
        }
        if (isset($_POST["food_id"]) && !isset($_POST["sl"])) {
            $pro_id = $_POST["food_id"];
            $was_found = false;
            // ktra session đã khởi tạo hay chưa
            if (!isset($_SESSION["foods"]) || count($_SESSION["foods"]) < 1) {
                $_SESSION["foods"] = array(0 => array("pro_id" => $pro_id, "quantity" => 1));
                $count++;
            } else {
                foreach ($_SESSION["foods"] as $item) {
                    $i++;
                    while (list($key, $value) = each($item)) {
                        if ($key == "pro_id" && $value == $pro_id) {
                            // sản phẩm đã tồn tại trong giỏ hàng, tăng sl lên 1
                            array_splice($_SESSION["foods"], $i - 1, 1, array(array("pro_id" => $pro_id, "quantity" => $item["quantity"] + 1)));
                            $was_found = true;
                        }
                    }
                    $count++;
                }
                if ($was_found == false) {
                    array_push($_SESSION["foods"], array("pro_id" => $pro_id, "quantity" => 1));
                    $count++;
                }
            }

            //header("location: ?controller=Cart&action=AddToCart");
            //$textURL = "?controller=Cart&action=show";
            //$myJSON = json_encode($textURL);
            //print_r($myJSON);
            //print_r($_SESSION["foods"]);
            $myJSON = json_encode($count);
            ob_clean();
            echo '-***myJSONCart***-';
            echo $myJSON;
            die();
        }
        if (isset($_POST["food_id"]) && isset($_POST["sl"])) {
            $pro_id = $_POST["food_id"];
            $sl = $_POST["sl"];
            $was_found = false;
            // ktra session đã khởi tạo hay chưa
            if (!isset($_SESSION["foods"]) || count($_SESSION["foods"]) < 1) {
                $_SESSION["foods"] = array(0 => array("pro_id" => $pro_id, "quantity" => 1));
            } else {
                foreach ($_SESSION["foods"] as $item) {
                    $i++;
                    while (list($key, $value) = each($item)) {
                        if ($key == "pro_id" && $value == $pro_id) {
                            // sản phẩm đã tồn tại trong giỏ hàng, tăng sl lên 1
                            array_splice($_SESSION["foods"], $i - 1, 1, array(array("pro_id" => $pro_id, "quantity" => $item["quantity"] = $sl)));
                            $was_found = true;
                        }
                    }
                }
                if ($was_found == false) {
                    array_push($_SESSION["foods"], array("pro_id" => $pro_id, "quantity" => 1));
                }
            }
            if ($ttgh == 1) {
                $textURL1 = "?controller=ThongTinGiaoHang&action=show";
            } else {
                $textURL1 = "?controller=GioHang&action=show";
            }
            $myJSON1 = json_encode($textURL1);
            //print_r($myJSON);
            ob_clean();
            echo '-***myJSONCart1***-';
            echo $myJSON1;
            die();
            //header("location: ?controller=Cart&action=AddToCart");
        }
        

        //require_once 'View/pages/GioHang/giohang.php';
    }
    
    public  function show() {

    }


    //Lấy thông tin chi tiết sản phẩm bằng FoodID
    public function GetFood() {
        $results = $mysqli->query("SELECT FoodID, FoodName FROM food WHERE FoodID='$FoodID' LIMIT 1");
        $obj = $results->fetch_object();
    }

    // xoa gio hang
    public function DeleteItem(){
    if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
    {
    $return_url = base64_decode($_GET["return_url"]); //return url
    session_destroy();
    header('Location:'.$return_url);
        }
    }
}
?>