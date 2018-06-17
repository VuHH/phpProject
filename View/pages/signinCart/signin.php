<?php

if (!isset($_SESSION))
{
    session_start();
}
?>
<head>
    <style>
        #signIn {
            margin-left: 20px;
            margin-top: 80px;
        }

    </style>
</head>
<div id="signIn">
<h2 style="color: #9BCE5B">Sign In</h2>
<p>Please fill in this form to create an account.</p>
<div class="row"></div>
<?php
//    if (isset($_SESSION['errorLogin']))
//    {
//        echo '<span><b style="color: red">'.$_SESSION['errorLogin'].'</b></span>';
//    }
//?>



<?php if (isset($_SESSION["foods"])) {
    ?>
<div class="row">
        <div class="col-md-12">
            <ul class="btn-breadcrumb nav nav-justified">
                <li class="col-md-6 active">
                    <p>
                        <i class="fas fa-user"></i> ĐĂNG NHẬP BẰNG TÀI KHOẢN </i>
                    </p>
                </li>

                <li class="col-md-6 ">
                    <p>
                        <a href="?controller=MuaHangKhongTaiKhoan&action=show">
                            <i class="fas fa-shopping-cart"></i> Mua hàng không cần tài khoản</i></a>
                    </p>
                </li>
        </div>
    </div>
<?php
} ?>

<div class="row">
    <div class="col-md-12">
<!--        <form action="?controller=SignIn&action=loginAction" method="post">-->
        <form id="formSignIn" style="width: 90%; margin: 0px auto">
          <div class="form-group">
            <label for="email">Tên đăng nhập:</label>
            <input type="text" class="form-control" id="userNameCart" placeholder="Nhập tên đăng nhập" name="userName">
          </div>
          <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control" id="userPassCart" placeholder="Nhập mật khẩu" name="userPass">
          </div>
<!--          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>-->
            <button id="button" type="button" class="btn btn-default" onclick="signInController()">Submit</button>

        <input type="hidden" name="cartSignIn" value="999"/>
        </form>
    </div>
</div>
</div>
<script>
function signInController() {
    $.ajax({
      type: 'post',
      url: 'index.php?controller=SignIn&action=loginAction',
      data: $('#formSignIn').serialize(),
      success: function (data) {
        //console.log(data);
        let myArr = data.split("-***myJSONSignIn***-");
        let myJson = JSON.parse(myArr[1]);
        if (myJson == 0) {
            window.location.href = "index.php?controller=HomePage&action=home";
        } else if (myJson == 999) {
            window.location.href = "index.php?controller=GioHang&action=show";
        }
        else {
            if (myJson == 1) {
                showInfoMessage("Tài khoản của bạn không tồn tại. Vui lòng đăng ký");
            } else if (myJson == 2) {
                showInfoMessage("Tài khoản của bạn đã bị khóa. Vui lòng liên hệ admin.");
            } else {
                showInfoMessage("Mật khẩu của bạn không đúng.");
            }
            window.location.href = "index.php?controller=SignIn&action=show";
        }     
      },
    });
}
</script>

