<?php
//require_once ('Model/FoodDetail.php');
//include 'Model/FoodCategory.php';
//session_start();
//session_destroy();

?>

<div class="row">
    <ul class="btn-breadcrumb nav nav-justified" style="border: 1px solid #9bce5b; text-align: center ;">
   
        <li class="col-md-4 col-xs-4 active" style="background: #9bce5b">

            <p class="padc">PHẦN ĂN ĐÃ CHỌN</p>

        </li>
        <li class="col-md-4" style="border:1px solid #9bce5b">

            <p>THÔNG TIN GIAO HÀNG</p>

        </li>
        <li class="col-md-4"  style="border:1px solid #9bce5b">

            <p>XÁC NHẬN ĐƠN HÀNG</p>

        </li>
    </ul>
</div>

<div class="row sp" style="padding-top: 0px">

    <div class="box-don-hang list-don-hang popup-sp">
        <div class="title clearfix">
            <div class="row">
                <?php
                echo '<div class="col-md-2 ttsp">';
                echo "<a href='?controller=Cart&action=AddToCart&xoa' class='btn button-close'>";
                echo" <i class='fa fa-trash'> </i>
                    </a> ";
                if (isset($_SESSION["foods"]) && isset($_GET["xoa"])) {
                    unset($_SESSION['foods']);
                        echo '<script> window.location = "?Controller=home&action=show"; </script>';
                }
                echo"
                </div>";
                ?>
                <div class="col-md-4 ttsp">THÔNG TIN SẢN PHẨM</div>
                <div class="col-md-2 dg">ĐƠN GIÁ</div>
                <div class="col-md-2 sl">SỐ LƯỢNG</div>
                <div class="col-md-2 tt">THÀNH TIỀN</div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row content">
                <!-- sản phẩm đặt mua 1 -->
                <div class="container-fluid">
                    <div class="row content">
                        <div class="container-fluid" id="update_cart">
                            <br>
                            <?php
//                            if (isset($_SESSION["foods"]) && count($_SESSION["foods"]) > 0) {
                                $total_money = 0;
                                $All_money = 0;
                                $dg = 0;
//                                $j = 0;
//                                foreach ($_SESSION["foods"] as $item) {
//                                     print_r($_SESSION["foods"]);
//                                    $itemID = $item["pro_id"];
//                                    //request model -> Foood ->Show
//                                    $lstFood = current(FoodDetail::showCart($itemID));
//                                    print_r($lstFood);
//                                    $sl = $item["quantity"];
//                                    $dg = $lstFood->price;
//                                    $total_money = $sl * $dg;
//                                    $All_money +=$total_money;
                                
                                    if (isset($lstFood)) {
                                        //print_r($lstFood);
                                        //echo '<br>';
                                        echo '<input type="hidden" id="slCart" value='.count($lstFood).'>';
                                        foreach($lstFood as $foods) 
                                        {
                                            foreach($foods as $food) {
                                                //print_r ($food);

                                                $sl = $food["sl"];
                                                $dg = $food["foodPrice"];
                                                $id = $food["foodId"];
                                                $total_money = $sl * $dg;
                                                $All_money +=$total_money;
                                    ?> 
                                    <div class="row item">

                                        <div class="col-md-6 wap-price">
                                            <div class="row">
                                                <div class="col-md-4 sl">
                                                    <a class="btn button-close">
                                                        <i class="fa fa-trash"></i>
                                                    </a>                                            
                                                </div>
                                                <div class="col-md-4 sl">
                                                    <p><?php echo  $food["foodName"]; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wap-price">
                                            <div class="row"  >
                                                <div class="col-md-4 dg" style="text-align:center">
                                                    <div class="price">
                                                       <label><p><?php echo $dg ?></p></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 sl">
                                                    <input name="soluong" type="number"  
                                                           onchange='Capnhatsl(this)' 
                                                           value="<?php echo $sl ?>" id="<?php echo $id; ?>" 
                                                           style="width: 110%;" min="0">
                                                </div>
                                                <div class="col-md-4 tt" style="text-align:center">
                                                    <div class="price" id="#">
                                                        <label><p><?php echo $total_money; ?></p></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <?php
                                    }
                                }
                                    }
                            ?>
                            <div class="row blink">
                                <div class="col-xs-12 clearfix">
                                    <hr>
                                </div>
                                <div class="link-more">
                                    <a href="https://kfcvietnam.com.vn/vn/thuc-don/5/trang-mieng-thuc-uong.html">
                                    </a>
                                </div>
                            </div>

                            <div class="row total">
                                <div class="col-md-4 col-sm-6">
                                </div>
                                <div class="col-md-6 col-md-push-2 col-sm-6 col-sm-push-0 text-right">
                                    <div class="clearfix b-mobile b-left">
                                        <label class="nhan text-uppercase">TỔNG THANH TOÁN</label>
                                    </div>
                                    <div class="price b-mobile b-right clearfix">
                                        <input type="hidden" name="coupon" id="coupon" value="">
                                        <div id="cart_total_price">
                                            <?php
                                            if(isset($_SESSION["foods"]))
                                            {
                                            ?>
                                            <label ><p> <?php echo $All_money;?> VNĐ</p></label>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="clearfix b-btn-mobile">
                                        <input type="hidden" name="redirurl" value="<? echo $_SERVER['HTTP_REFERER']; ?>" />
                                        <?php 
                                        
				if(isset($_SESSION['userName']) == "")
				{
					echo "<a href='?controller=SignIn&action=showLoginCart'>"
                                    . "<button type='button' class='btn btn-success' id='signInbtn'>Đặt hàng</button></a>";
				}
				else
				{
					echo "<a class='order' href='?controller=ThongTinGiaoHang&action=show'>"
                                        . "<button type='button' class='btn btn-success'>Đặt hàng</button></a>";
				}
                                
				?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row blink ">
                    <div class="col-xs-12 clearfix ">
                        <hr>
                    </div>
                </div>


            </div>
        </div>                
    </div>

</div>


<script type="text/javascript">
    $(document).ready(function() {
        var slCart = $("#slCart").val();
        var numberCart = " " + slCart + " ";
        if (slCart != null) {
            $("#numberCart").text(numberCart);
        }
    });
    function Capnhatsl(a)
    {
        //window.location.href = "?controller=Cart&action=AddToCart&food_id="+a.id+"&sl=" + a.value;
        var object = {
            food_id: a.id,
            sl: a.value
        };
        var url = "?controller=Cart&action=AddToCart";
        $.ajax({
            type: 'post',
            url: url,
            data: object,
            success: function (data) {
                let myArr = data.split("-***myJSONCart1***-");
                let myJson = JSON.parse(myArr[1]);
                //var textURL = myJson[0].textURL;
                //?controller=Cart&action=AddToCart
                window.location.href = myJson;
                
            }
        });
        
    }

</script>




