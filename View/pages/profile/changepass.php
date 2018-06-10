<h2 style="color: #9BCE5B;">Đổi password</h2>
  <form class="form-horizontal" id="changePassForm">
    <div class="form-group">
        <span id="error"></span>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">New Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="newPass" 
               placeholder="Enter new password" name="newPass" data-tip="Mật khẩu từ 6-20 ký tụ">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="confPass" 
               placeholder="Enter password" name="confPass">
      </div>
    </div>
	    <div class="form-group">
	<label class="control-label col-sm-2" for=""></label>
	<div class="col-sm-10"> 
      <button type="button" class="btn btn-success" onclick="SubmitForm()" >Cập nhật</button>
	 </div>
    </div>
    <?php
        if (isset($_SESSION['userID'])){
            $userID = $_SESSION['userID'];
            echo '<input type="hidden" id="userIdChangePass" name="userIdChangePass" value="'.$userID.'">';
        }
    ?>
</div>
</form>
<script>
    function SubmitForm() {
        var newPass = $("#newPass").val();
        var confPass = $("#confPass").val();
        var isValid = validateRePass(confPass,newPass);
        if (isValid) {
            $.ajax({
                type: 'post',
                url: '?controller=Profile&action=changePass',
                data: $('#changePassForm').serialize(),
                success: function (data) {
                    let myArr = data.split("-***myJSONChangePass***-");
                    let myJson = JSON.parse(myArr[1]);   
                    if (myJson == 1) {
                        showInfoMessage("Cập nhật mật khẩu thành công");
                        $("#newPass").val('');
                        $("#confPass").val('');
                    } else {
                        showInfoMessage("Cập nhật mật khẩu không thành công");
                    }
                }
            }); 
        } else {
            $("#error").html("<b style='color:red'>Vui lòng điền trùng với mật khẩu</b>");
        }
        
    
    }
</script>