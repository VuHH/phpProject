<?php 
if (!isset($_SESSION))
{
    session_start();
}
?>
<head>
   <link rel="stylesheet" type="text/css" href="./lib/css/tooltip.css">
</head>
<div class="navbar-fixed-top main-menu-continer main-menu">
   <button type="button" class="btn menubar-toggle">
   <i class="fa fa-bars"></i>
   </button>
   <div id="main-menu" class="navbar navbar-default">
      <div class="navbar-header">
         <a class="navbar-brand" href="#">
         <img src="./images/home/logo.png" alt="Foody Logo" style="margin: 0 auto; display: block">
         </a>
      </div>
      <div class="navbar-header menu-login" id="loginMenu">
        <div id="notLogin">
        <?php
            ob_start(); 
            if (isset($_SESSION['userName']))
            {
            	$username = $_SESSION["userName"];
                ob_start();        
            	echo '<div class="row">';
                echo '<div class="col-sm-12 text-center">';
                echo '<a href="?controller=Profile&action=show">';
                echo'<i class="fas fa-user" style="font-size:28px; color: #FFF">&nbsp;' . $username . '&nbsp;</i>';
                echo'</a>';
                echo '<a title="Dang Xuat" href="" onclick="logout()"><i class="fas fa-power-off" style="font-size:15px">&nbsp;</i></a>';
                echo '</div>';
                echo '</div>';
            }
            else {
                ob_start();
            	echo '<div class="row">';
                echo '<div class="col-sm-6">';
                //echo '<a href="">';
                echo '<button class="btn btn-primary" style="width: 100%; margin: 0" data-toggle="modal" data-target="#registerModal">Đăng ký</button>';
                //echo '</a></div>';
                echo '</div>';
                echo '<div class="col-sm-6">';
                echo '<a href="?controller=SignIn&action=show">';
                echo '<button class="btn btn-success" style="width: 100%; margin: 0" onclick="SignIn()">Đăng nhập</button>';
                echo '</a></div>';
                echo '</div>';
            }
            ?>
          </div>
      </div>
      <div class="navbar-header menu-cart">
         <div class="row">
            <div class="col-sm-12">
               <div class="btn-cart">
                  <p>
                     <a href=" ?controller=GioHang&action=show">
                         <span class="fas fa-shopping-cart">0 Giỏ hàng</span></a>
                  </p>
               </div>
               <div class="btn-search">
                  <p><span class="fas fa-search"></span></p>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar-collapse clearfix" role="navigation">
         <ul id="headernavigation" class="nav navbar-nav">
            <li><a href="#">Trang chủ</a></li>
            <li class="menu-item-has-children">
               <a href="#">Thực đơn</a>
               <span class="toggle_nav_button"></span>
            </li>
            <li><a href="?controller=ShowNews&action=show">Tin tức</a></li>
            <li><a href="?controller=Contact&action=show">Liên hệ</a></li>
            <li><a href="?controller=GioiThieu&action=show">Giới Thiệu</a></li>
         </ul>
      </nav>
   </div>
   <div class="menu-children" id="menu">
   </div>
</div>
<div class="modal-search">
   <form class="modal-search-form" action="?controller=ShowSearch&action=show" method="post">
      <div class="modal-search-btn-group" >
         <button type="button" class="modal-search-btn-close"><i class="fas fa-close"></i></button>
      </div>
      <div class="modal-search-input-group">
         <input type="text" name="search" class="modal-search-input" placeholder="Nhập món ăn cần tìm">
         <button type="submit" class="modal-search-btn-close"><i class="fas fa-search"></i></button>
      </div>
      <div class="modal-search-radio-group">
         <span class="radio-group">
         <input type="radio" id="searchFood" name="typeSearch" value="food" name="modal-search-radio" checked>
         <label for="searchFood" style="color: #FFF">Món ăn</label>
         </span>
         <span class="radio-group">
         <input type="radio" id="searchNew" name="typeSearch" value="new" name="modal-search-radio">
         <label for="searchNew" style="color: #FFF">Tin tức</label>
         </span>
      </div>
   </form>
</div>
<div class="modal fade" id="registerModal" role="dialog">
   <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" onclick="resetForm()" id="close">&times;</button>
            <h4 class="modal-title" style="color: #9BCE5B">Đăng ký</h4>
         </div>
         <div class="modal-body">
            <span id="error"></span>
            <form id="registerForm" class="form-horizontal" action="" method="POST">         
               <div class="form-group">
                  <label class="control-label col-sm-2" >Tên đăng nhập:</label>
                  <div class="col-sm-10" data-tip="Tên đang nhập từ 6-20 ký tụ. Không chứa ký tự đặc biệt">
                      <input type="text" class="form-control" 
                             id="usernameRegister" placeholder="Nhập tên đăng nhập" 
                             name="usernameRegister">
                  </div>
               </div>
               <div class="form-group">
                   <span id="errorPassword"></span>
                  <label class="control-label col-sm-2" 
                         for="pwd">Mật khẩu:</label>
                  <div class="col-sm-10" data-tip="Mật khẩu từ 6-20 ký tụ">          
                     <input type="password" class="form-control" 
                            id="passRegister" placeholder="Nhập mật khẩu" 
                            name="passRegister" required>
                  </div>
               </div>
               <div class="form-group">
                   <span id="errorRePass"></span>
                  <label class="control-label col-sm-2" for="pwd">Xác nhận mật khẩu:</label>
                  <div class="col-sm-10">          
                     <input type="password" class="form-control" 
                            id="rePassRegister" placeholder="Nhập lại mật khẩu" 
                            name="rePassRegister" required>
                  </div>
               </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" >Họ và Tên:</label>
                  <div class="col-sm-10" >
                      <input type="text" class="form-control" 
                             id="fullnameRegister" placeholder="Nhập Họ và Tên" 
                             name="fullnameRegister">
                  </div>
               </div>
               <div class="form-group">
                   <span id="errorEmail"></span>
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">          
                     <input type="email" class="form-control" 
                            id="emailRegister" placeholder="Nhập Email" 
                            name="emailRegister" required>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
             <div class="row">
                 <button type="submit" class="btn btn-success" onclick="validateForm()" data-dismiss="modal">Đăng ký</button>
            <button type="button" class="btn btn-warning" 
                    data-dismiss="modal" style="margin-bottom: 10px;" onclick="resetForm()">Đóng</button>
             </div>
         </div>
      </div>
   </div>
</div>
<script src="./lib/js/validateRegisterForm.js" type="text/javascript"></script>
<script src="./lib/js/appMenu.js" type="text/javascript"></script>
<script src="./lib/js/appSignIn.js" type="text/javascript"></script>
<script src="./lib/js/appLogOut.js" type="text/javascript"></script>
