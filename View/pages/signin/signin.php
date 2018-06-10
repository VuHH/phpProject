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
  <form action="" method="post" id="formSignIn">
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
      url: '?controller=SignIn&action=loginAction',
      data: $('#formSignIn').serialize(),
      success: function (data) {
        let myArr = data.split("-***myJSONSignIn***-");
        let myJson = JSON.parse(myArr[1]);
        var output = "";
        if (myJson != null) {
            output += '<div class="row">' +
                '<div class="col-sm-12 text-center">' +
                '<a href="?controller=Profile&action=show">' +
                '<i class="fas fa-user" id="userAvatar">&nbsp' + myJson + '&nbsp</i>'+
                '</a>'+
                '<a title="Dang Xuat" href="" onclick="logout()"><i class="fas fa-power-off" style="font-size:15px">&nbsp;</i></a>'+
                '</div>'+
                '</div>'
        }
        $('#notLogin').hide();
        $('#loginMenu').html(output);
        $('#userAvatar').css("font-size", "28px");
        $('#userAvatar').css("color", "#FFF");
        window.location.href = "index.php?controller=HomePage&action=home";
      }
    });
}
</script>
