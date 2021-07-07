

<div class ="row">
    <div class="wap-sec-thuc-don b-fix">
        <div class="row">
            <div class="col-md-12">                                                                                                                                           
                <ul class="btn-breadcrumb nav nav-justified" style="text-align: center">
                    <li class="col-md-4 active">

                        <p>PHẦN ĂN ĐÃ CHỌN</p> 

                    </li>
                    <li class="col-md-4 ttgh">

                        <p>THÔNG TIN GIAO HÀNG</p>

                    </li>
                    <li class="col-md-4">

                        <p>XÁC NHẬN ĐƠN HÀNG</p>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- cách thức mua hàng -->

    <div class="row">
        <div class="col-md-12">
            <ul class="btn-breadcrumb nav nav-justified">
                <li class="col-md-6" style="text-align: center">
                    <p>
                        <a href="?controller=SignIn&action=showLoginCart">
                            <i class="fas fa-user"></i> ĐĂNG NHẬP BẰNG TÀI KHOẢN</i></a>
                    </p>
                </li>

                <li class="col-md-6 active" style="text-align: center">
                    <p style="padding-top: 10px">
                        <i class="fas fa-shopping-cart"> MUA HÀNG KHÔNG CẦN TÀI KHOẢN</i>
                    </p>
                </li>
        </div>
    </div>
</div>
<!-- end -->

<!-- form nhap -->
<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
            <div class="panel-body">
                <form role="form" action="?controller=ThongTinGiaoHang&action=show" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Address" name="Address" type="Address" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Tel" name="Tel" type="" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="email" name="email" type="email" value="">
                        </div>

                        <div class="btn-giaohang" style=" text-align: center">
                            <button type="submit" class="btn btn-success"  style="width:100%">Giao hàng đến địa chỉ này</button>
                        </div>

                        <!-- Change this to a button or input when using this as a form -->

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
