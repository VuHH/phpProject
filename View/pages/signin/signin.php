<?php 
if (!isset($_SESSION))
{
    session_start();
}
?>
<h2>Sign In</h2>
<p>Please fill in this form to create an account.</p>
<?php
    if (isset($_SESSION['errorLogin']))
    {
        echo '<span><b style="color: red">'.$_SESSION['errorLogin'].'</b></span>';
    }
?>
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
    <button type="submit" class="btn btn-default">Submit</button>
  </form>