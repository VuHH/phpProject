
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
                <div class="col-md-6 ttsp">THÔNG TIN SẢN PHẨM</div>
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
                            <div class="row item">
                                <div class="col-md-6 col-sm-6 ttsp">
                                    <div class="row">
                                        <div class="col-xs-12 tit">
                                            <a class="btn edit" onclick="">
                                                <i class="fa fa-pen-square" style=""></i>
                                            </a>
                                            <a class="btn button-close">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <!-- <span class="pname">Combo GÃ  Váº£y Báº¯p Sá»t BÆ¡ 2 NgÆ°á»i</span> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6 img">
                                            <img src="https://kfcvietnam.com.vn/uploads/combo/dd9c658e0f389763496a4bd2be025610.png" class="img-responsive" style="height: 170px; width: 240px;">
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <div class="option">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <i class="fa fa-circle"></i>
                                                        <span class="text">3 Miếng Gà Vẩy Bắp Sốt Bơ</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-circle"></i>
                                                        <span class="text">1 Popcorn (Vừa)</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-circle"></i>
                                                        <span class="text">1 Khoai Tây Chiên (Vừa)</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-circle"></i>
                                                        <span class="text">2 Pepsi (Vừa)</span>
                                                    </li>
                                                </ul>
                                            </div>
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
                                    <div class="form-group diemtichluy">
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-push-2 col-sm-6 col-sm-push-0 text-right">
                                    <div class="clearfix b-mobile b-left">
                                        <label class="nhan text-uppercase">TỔNG THANH TOÁN</label>
                                    </div>
                                    <div class="price b-mobile b-right clearfix">
                                        <input type="hidden" name="coupon" id="coupon" value="">
                                        <div id="cart_total_price">
                                            <label ><p><?php echo number_format($tt); ?> VNĐ</p></label>
                                        </div>
                                    </div>
                                    <div class="clearfix b-btn-mobile">
                                        <a href=" ?controller=DangNhapDatHang&action=signin" class="btn btn-success btn-lg btn-dk">ĐẶT HÀNG</a>
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
</div>

</div>


<script type="text/javascript">
    function Capnhatsl(a)
    {
        window.location = "/phpProject/?controller=GioHang&action=show&sl=" + a.value;
    }

</script>


