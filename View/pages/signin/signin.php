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
        #userName {
            width: 50%;
        }
        #userPass {
            width: 50%;
        }
    </style>
</head>
<div id="signIn">
<h2 style="color: #9BCE5B">Sign In</h2>
<p>Please fill in this form to create an account.</p>
<?php
    if (isset($_SESSION['errorLogin']))
    {
        echo '<span><b style="color: red">'.$_SESSION['errorLogin'].'</b></span>';
    }
?>
  <form id="formSignIn">
    <div class="form-group">
      <label for="email">Tên đăng nhập:</label>
      <input type="text" class="form-control" id="userName" placeholder="Nhập tên đăng nhập" name="userName">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="userPass" placeholder="Nhập mật khẩu" name="userPass">
    </div>
    <button type="button" class="btn btn-warning" onclick="signInController()">Submit</button>
  </form>
</div>
<script>
function signInController() {
    $.ajax({
      type: 'post',
      url: 'index.php?controller=SignIn&action=loginAction',
      data: $('#formSignIn').serialize(),
      success: function (data) {
        window.location.href = "index.php?controller=HomePage&action=home";
      }
    });
}
</script>
