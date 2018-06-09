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
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Họ và Tên</label>
      <div class="col-sm-10">
          <?php 
            if (isset($_SESSION['fullName'])){
                $fullName = $_SESSION['fullName'];
                if ($fullName != NULL) {
                    echo '<input type="text" class="form-control" id="fullname"'
                    . 'name="fullname" value="'.$fullName.'">';  
                }else {
                    echo '<input type="text" class="form-control" id="fullname"'
                    . 'name="fullname" placeholder="Họ và tên">';  
                }
            } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="fullname" name="fullname" placeholder="Họ và tên">';
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
                    . 'id="email" name="email" value="'.$email.'">';
                } else {
                    echo '<input type="email" class="form-control" '
                    . 'id="email" name="email" placeholder="Email">';
                }
            } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="email" name="email" placeholder="Địa chỉ">';
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
                    . 'id="address" name="address" value="'.$address.'">';
                } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="address" name="address" placeholder="Địa chỉ">';
                }
            } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="address" name="address" placeholder="Địa chỉ">';
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
                    . 'id="phone" name="phone" value="'.$phone.'">';
                } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="phone" name="phone" placeholder="Điện Thoại">';
                }

            } else {
                    echo '<input type="text" class="form-control" '
                    . 'id="phone" name="phone" placeholder="Điện Thoại">';
                }
        ?>
      </div>
    </div>
    <div class="form-group">
	<label class="control-label col-sm-2" for=""></label>
	<div class="col-sm-10"> 
      <button type="button" class="btn btn-success">Cập nhật</button>
	 </div>
    </div>
</form>
<script>
$(function() {
    $("#fullname").attr("disabled", "disabled"); 
    $("#email").attr("disabled", "disabled");
    $("#address").attr("disabled", "disabled"); 
    $("#phone").attr("disabled", "disabled"); 
});
</script>