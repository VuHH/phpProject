<?php 
if (!isset($_SESSION))
{
    session_start();
//                    $_SESSION["userName"] = $customer->getUsernameCustomer();
//                $_SESSION["fullName"] = $customer->getCustomerName();
//                $_SESSION["userEmail"] = $customer->getCustomerEmail();
//                $_SESSION["userAddress"] = $customer->getCustomerAddress();
//                $_SESSION["userPhone"] = $customer->getCustomerPhone();
    
}
?>
<h2 style="color: #9BCE5B;">Thông tin khách hàng</h2>
<?php 
    if (isset($isSuccess)) {
        echo '<script> $(function() {'
        . 'showInfoMessage("Cập nhật thành công"); });</script>';
    }
?>
  <form class="form-horizontal" method="POST" action="?controller=Profile&action=updateProfie">
    <div class="form-group">
      <label class="control-label col-sm-2" for="">Họ và Tên</label>
      <div class="col-sm-10">
          <?php 
            if (isset($_SESSION['fullName'])){
                $fullName = $_SESSION['fullName'];
                if ($fullName != NULL) {
                    echo '<input type="text" class="form-control" id="fullnameProfile"'
                    . 'name="fullnameProfile" value="'.$fullName.'">';  
                }else {
                    echo '<input type="text" class="form-control" id="fullnameProfile"'
                    . 'name="fullnameProfile" placeholder="Họ và tên">';  
                }
            } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="fullnameProfile" name="fullnameProfile" placeholder="Họ và tên">';
            }
            //print_r($_SESSION['userAddress']);
            //print_r($_SESSION['userPhone']);
         ?>
          
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">Email</label>
      <div class="col-sm-10">
          <?php 
            if (isset($_SESSION['userEmail'])){
                $email = $_SESSION['userEmail'];
                if ($email != NULL) {
                    echo '<input type="email" class="form-control" '
                    . 'id="emailProfile" name="emailProfile" value="'.$email.'">';
                } else {
                    echo '<input type="email" class="form-control" '
                    . 'id="emailProfile" name="emailProfile" placeholder="Email">';
                }
            } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="emailProfile" name="emailProfile" placeholder="Email">';
                }
                
          ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">Địa chỉ</label>
      <div class="col-sm-10">
        <?php 
            if (isset($_SESSION['userAddress'])){
                $address = $_SESSION['userAddress'];
                if ($address != NULL) {
                    echo '<input type="text" class="form-control" '
                    . 'id="addressProfile" name="addressProfile" value="'.$address.'">';
                } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="addressProfile" name="addressProfile" placeholder="Địa chỉ">';
                }
            } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="addressProfile" name="addressProfile" placeholder="Địa chỉ">';
                }
        ?>

      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="">Điện thoại</label>
      <div class="col-sm-10">          
        <?php 
            if (isset($_SESSION['userPhone'])){
                $phone = $_SESSION['userPhone'];
                if ($phone != NULL) {
                     echo '<input type="text" class="form-control" '
                    . 'id="phoneProfile" name="phoneProfile" value="'.$phone.'">';
                } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="phoneProfile" name="phoneProfile" placeholder="Điện Thoại">';
                }

            } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="phoneProfile" name="phoneProfile" placeholder="Điện Thoại">';
                }
        ?>
      </div>
    </div>
    <?php
        if (isset($_SESSION['userID'])){
            $userID = $_SESSION['userID'];
            echo '<input type="hidden" id="userId" name="userId" value="'.$userID.'">';
        }
    ?>
    <div class="form-group">
	<label class="control-label col-sm-2" for=""></label>
	<div class="col-sm-10"> 
            <button type="button" class="btn btn-success" 
                    onclick="updateInfor()" value="" id="btnSubmit">Cập nhật</button>
            <button type="submit" class="btn btn-warning" onclick="" id="btnCancel">Save</button>
            <button type="button" class="btn btn-success" onclick="cancelUpdate()" id="btnSave">Cancel</button>
	 </div>
    </div>
</form>
<script>
$(function() {
    $("#fullnameProfile").attr("disabled", "disabled"); 
    $("#emailProfile").attr("disabled", "disabled");
    $("#addressProfile").attr("disabled", "disabled"); 
    $("#phoneProfile").attr("disabled", "disabled");
    $("#btnSave").hide();
    $("#btnCancel").hide();
});
function updateInfor() {
    $("#btnSubmit").prop('value', 'Lưu');
    $("#fullnameProfile").prop("disabled",false);
    $("#emailProfile").prop("disabled",false);
    $("#addressProfile").prop("disabled",false);
    $("#phoneProfile").prop("disabled",false);
    $("#phoneProfile").prop("disabled",false);
    
    
    $("#btnCancel").show();
    $("#btnSave").show();
    $("#btnSubmit").hide();
}

function cancelUpdate(){
    $("#fullnameProfile").attr("disabled", "disabled"); 
    $("#emailProfile").attr("disabled", "disabled");
    $("#addressProfile").attr("disabled", "disabled"); 
    $("#phoneProfile").attr("disabled", "disabled");
    $("#btnCancel").hide();
    $("#btnSave").hide();
    $("#btnSubmit").show();
}

</script>