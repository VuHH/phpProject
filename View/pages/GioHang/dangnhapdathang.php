<?php
//Khai báo sử dụng session
$_SESSION['back'] = $_SERVER['HTTP_REFERER'];
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

////Xử lý đăng nhập
//if (isset($_POST['dangnhap'])) {
//    //Kết nối tới database
//    include 'Model/connectDB.php';
//    $conn = connectDB();
//
//    //Lấy dữ liệu nhập vào
//    $UsernameCustomer = addslashes($_POST['txtUsername']);
//    $CustomerPassword = addslashes($_POST['txtPassword']);
//
//    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
//    if (!$username || !$password) {
//        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
//        exit;
//    }
//
//    // mã hóa pasword
//    $CustomerPassword = md5($CustomerPassword);
//
//    //Kiểm tra tên đăng nhập có tồn tại không
//    $query = mysql_query("SELECT UsernameCustomer, CustomerPassword, CustomerAddress, CustomerPhone FROM customer WHERE UsernameCustomer='$username'");
//    if (mysql_num_rows($query) == 0) {
//        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
//        exit;
//    }
//
//    //Lấy mật khẩu trong database ra
//    $row = mysql_fetch_array($query);
//
//    //So sánh 2 mật khẩu có trùng khớp hay không
//    if ($CustomerPassword != $row['CustomerPassword']) {
//        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
//        exit;
//    }
//
//    //Lưu tên đăng nhập
//    $_SESSION['UsernameCustomer'] = $UsernameCustomer;
//    echo "Xin chào " . $UsernameCustomer . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
//    die();
//}
//?>

<form action="">
         <p>Thach: <?php echo $_SESSION['back'] ?></p>

    <div class=" wap-sec-thuc-don b-fix">
        <div class="row">
            <div class="col-md-12">
                <ul class="btn-breadcrumb nav nav-justified">
                    <li class="col-md-4 active">

                        <p>Phần ăn đã chọn</p>

                    </li>
                    <li class="col-md-4 ttgh">

                        <p>Thông tin giao hàng</p>

                    </li>
                    <li class="col-md-4">

                        <p>Xác nhận đơn hàng</p>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- cách thức mua hàng -->

    <div class="row">
        <div class="col-md-12">
            <ul class="btn-breadcrumb nav nav-justified">
                <li class="col-md-6 active">
                    <p>
                        <i class="fas fa-user"></i>Đăng nhập bằng tài khoản KFC</i>
                    </p>
                </li>

                <li class="col-md-6 ">
                    <p>
                        <a href="?controller=MuaHangKhongTaiKhoan&action=show"><i class="fas fa-shopping-cart"></i>Mua hàng không cần tài khoản</i></a>
                    </p>
                </li>
        </div>
    </div>



    <!-- form đăng kí  -->
<!--    <form action="?controller=SignIn&action=loginAction" method="post">
        <div class="row">
            <div class="col-md-6 frmdangki">
                <div class="account-box">
                        <div class="form-group">
                            <input type="text" name="txtUsername" class="form-control" placeholder="Username" required autofocus />
                        </div>
                        <div class="form-group">
                            <input type="password" name='txtPassword' class="form-control" placeholder="Password" required />
                        </div>
                        <button name="dangnhap" class="btn btn-lg btn-block danger-bg" type="submit">
                            Sign in</button>
                    <div class="or-box row-block">
                        <div class="row">
                            <div class="col-md-12 row-block">
                                <a href="#" class="btn btn-danger btn-block">Create New Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>-->
<form action="?controller=SignIn&action=loginAction" method="post">
    <div class="form-group">
      <label for="email">Tên đăng nhập:</label>
      <input type="text" class="form-control" id="userName" placeholder="Nhập tên đăng nhập" name="userName">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="userPass" placeholder="Nhập mật khẩu" name="userPass">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
      <button id="submit" type="submit" class="btn btn-default">Submit</button>
  </form>

        
    </div>

</form>
