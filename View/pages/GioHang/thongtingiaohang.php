<?php
// IDEA:

require_once("./Controller/Login.php");
?>
<?php
if (isset($_GET["username"])) {
    $us = $_GET["username"];
}
?>

<?php
if (isset($_GET["sl"])) {
    $sol = $_GET["sl"];
    $tt = $sol * 100000;
} else {
    $sol = 1;
    $tt = $sol * 100000;
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
                                $prodd = Customer::get_user($us);
                                foreach ($prodd as $item) {


                                    # code...
                                    ?>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>Người Nhận</td>
                                                <td><input type="text" value="<?php echo $item["CustomerName"] ?>"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Địa Chỉ</td>
                                                <td><input type="text" value="<?php echo $item["CustomerAddress"] ?>"></td>
                                            </tr>

                                            <tr>
                                                <td>Điện Thoại</td>
                                                <td><input type="text" value="<?php echo $item["CustomerPhone"] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><input type="email" value="<?php echo $item["CustomerEmail"] ?>"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                }
                                ?>
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

                        <div class="row content">
                            <div class="container-fluid">
                                <div class="row item" id="cart_combo_67_1">
                                    <div class="col-md-6 ttsp">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-4 tit">
                                                <a class="btn button-close" onclick="product.remove_product('combo_67_1');">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <span class="pname">Combo Gà Vảy Bắp Sốt Bơ 1 Người</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 wap-price">

                                        <div class="row" method = "Post" >
                                            <div class="col-md-4 dg" style="text-align:center">
                                                <div class="price">
                                                    <label><p>100.000</p></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 sl">
                                                <input name="soluong" type="number"  onchange='Capnhatsl(this)' value="<?php echo '' . $sol . ''; ?>" style="width: 111%;" min="0">
                                            </div>
                                            <div class="col-md-4 tt" style="text-align:center">
                                                <div class="price" id="#">
                                                    <label ><p><?php echo number_format($tt); ?> VNĐ</p></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                            <label ><p><?php echo number_format($tt); ?> VNĐ</p></label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                            <div class="row">
                                <div class="col-md-6 top-mobile">
                                </div>
                                <div class="col-md-6 bot-mobile">
                                    <a href="?controller=ThankYou&action=show"></a><button class="btn btn-success" type="button" style="float: right">đồng ý đặt hàng </button></a>
                                    <button class="btn btn-default" type="button" style="float: right">hủy đơn hàng</button>
                                </div>
                            </div>
                    </div>

                </div>

                <!-- dồng ý đặt hang -->

                </section>
            </div>

            <script type="text/javascript">
                function Capnhatsl(a)
                {
                    window.location = "/phpProject/?controller=ThongTinGiaoHang&action=show&sl=" + a.value;
                }

            </script>


