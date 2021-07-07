<?php 
   if(!isset($_SESSION))
   {
       session_start();
   }
   
   ?>
<head>
   <link rel="stylesheet" type="text/css" href="lib/css/styleRegisterHome.css">
</head>
<form action="index.php?controller=SignUp&action=registerAction" method="post">
   <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Họ và tên</b></label>
      <input type="text" placeholder="Họ và tên" name="userEmail" required>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="userEmail" required>
      <label for="psw"><b>Mật khẩu</b></label>
      <input type="password" placeholder="Mật khẩu" name="userPassword" required>
      <label for="psw-repeat"><b>Lặp lại mật khẩu</b></label>
      <input type="password" placeholder="Lặp lại mật khẩu" name="userRePassword" required>
      <label for="psw-repeat"><b>Giới tính</b></label>
      <table>
         <tr>
            <td>
               <label class="container">Nam
               <input type="checkbox" checked="checked">
               <span class="checkmark"></span>
               </label>
            </td>
            <td>
               <label class="container">Nữ
               <input type="checkbox" checked="">
               <span class="checkmark"></span>
               </label>
            </td>
         </tr>   
      <br>
      <label for="text"><b>Điện Thoại</b></label>
      <input type="text" placeholder="Điện Thoại" name="userAddress" required>
      <label for="text"><b>Địa chỉ</b></label>
      <input type="text" placeholder="Địa chỉ" name="userAddress" required>
      <hr>
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      <button type="submit" class="registerbtn">Register</button>
   </div>
   <div class="container signin">
      <p>Already have an account? <a href="#">Sign in</a>.</p>
   </div>
</form>