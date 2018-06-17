<?php
//
if (isset($_GET["username"])) {
    $us = $_GET["username"];
}
?>

<div class="row">
    <section class="sec-thuc-don sec-dktv clearfix">
        <div class=" wap-sec-thuc-don b-fix">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-don-hang text-camon">
                        Vui lòng xem lại thông tin đặt hàng và chọn phương thức thanh toán bên dưới.
                        <br> Thông tin đặt hàng của quý khách như sau: </div>
                    <div class="box-don-hang">
                        <div class="title title-ttkh">
                            <span style="float: left; padding-left: 13px">Địa chỉ giao hàng</span>
                            <a class="btn btn-sua btn-primary" href="#">SỬA</a>
                        </div>

                        <!-- content đặt hàng -->
                        <div class="row">
                            <div class="col-md-5">
                                <?php
//                                $prodd = Customer::get_user($us);
//                                foreach ($prodd as $item) {
//
//
//                                    # code...
//                                    
                                ?>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Người Nhận</td>
                                            <td><input type="text" value="<?php echo $_SESSION["fullName"] ?>"></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Địa Chỉ</td>
                                            <td><input type="text" value="<?php echo $_SESSION["userEmail"] ?>"></td>
                                        </tr>

                                        <tr>
                                            <td>Điện Thoại</td>
                                            <td><input type="text" value="<?php echo $_SESSION["userAddress"] ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><input type="email" value="<?php echo $_SESSION["userPhone"] ?>"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php ?>
                            </div>
                        </div>

                        <!-- thông tin sản phẩm  -->
                    </div>
                    <div class="box-don-hang list-don-hang ttdh popup-sp">
                        <div class="title clearfix">
                            <div class="row">
                                <div class="col-md-6 ttsp">thông tin sản phẩm</div>
                                <div class="col-md-2 dg">đơn giá</div>
                                <div class="col-md-2 sl">Số lượng</div>
                                <div class="col-md-2 tt">Thành tiền</div>
                            </div>
                        </div>
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
                            echo '<input type="hidden" id="slCart" value=' . count($lstFood) . '>';
                            foreach ($lstFood as $foods) {
                                foreach ($foods as $food) {
                                    //print_r ($food);

                                    $sl = $food["sl"];
                                    $dg = $food["foodPrice"];
                                    $id = $food["foodId"];
                                    $total_money = $sl * $dg;
                                    $All_money += $total_money;
                                    ?> 
                                    <div class="row content">
                                        <div class="container-fluid">
                                            <div class="row item" id="cart_combo_67_1">
                                                <div class="col-md-6 ttsp">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div id="trashIcon" style="margin-left: 50px;margin-top: 5px;font-size:24px">
                                                            <a id="<?php echo $id ?>">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                            </div>
                                                        </div>
                                                         <div class="col-xs-6">
                                                            <span class="pname text-center">
                                                                <?php echo  $food["foodName"]; ?> 
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 wap-price">

                                                    <div class="row" method = "Post" >
                                                        <div class="col-md-4 dg" style="text-align:center">
                                                            <div class="price">
                                                                <label><p><?php echo $dg ?></p></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 sl">
                                                            <input name="soluong" type="number"  
                                                                   onchange='Capnhatsl(this)' value="<?php echo $sl ?>" id="<?php echo $id; ?>" style="width: 110%;" min="0">
                                                        </div>
                                                        <div class="col-md-4 tt" style="text-align:center">
                                                            <div class="price" id="#">
                                                                <label ><p><?php echo $total_money; ?></p></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        }
                        //}
                        ?>
                        <div class="row total wap-dktv">
                            <div class="col-md-4 col-sm-6">
                            </div>
                            <div class="col-md-6 col-md-push-1 text-right">
                                <div class="clearfix b-mobile b-left">
                                    <label class="nhan text-uppercase">TỔNG THANH TOÁN</label>
                                </div>
                                <div class="price b-mobile b-right clearfix">
                                    <input type="hidden" name="coupon" id="coupon" value="">
                                    <div id="cart_total_price">
                                        <label ><p><?php echo $All_money; ?></p></label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 top-mobile">
                            </div>
                            <div class="col-md-6 bot-mobile">
                                <a href="?controller=ThankYou&action=show"><button class="btn btn-success" type="button" style="float: right">đồng ý đặt hàng </button></a>
                                <a href="?controller=HomePage&action=home"><button class="btn btn-default" type="button" style="float: right">hủy đơn hàng</button></a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- dồng ý đặt hang -->

                </section>
            </div>

            <script type="text/javascript">
//                function Capnhatsl(a)
//                {
//                    window.location = "/phpProject/?controller=ThongTinGiaoHang&action=show&sl=" + a.value;
//                }
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
            sl: a.value,
            ttgh: 1
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
    $("#trashIcon a").click(function(){
        var foodID =$(this).attr("id");
        var object = {food_id : foodID,ttgh: 1};
        var url = "?controller=Cart&action=RemoveToCart";
        $.ajax({
            type: 'post',
            url: url,
            data: object,
            success: function (data) {
                let myArr = data.split("-***myJSONRemove***-");
                let myJson = JSON.parse(myArr[1]);
                //var textURL = myJson[0].textURL;
                //?controller=Cart&action=AddToCart
                window.location.href = myJson;
                
            }
        });
    });
    
</script>


