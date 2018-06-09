<?php 
if (!isset($_SESSION))
{
    session_start();
}
?>
<head>
<style>
body {font-family: Arial;}
.h2 {
    
}
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    padding-left: 20px
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #9BCE5B;;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #9BCE5B;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    margin-right: 20px;
    border: 0px solid #ccc;
    border-top: none;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 28px;
}


</style>
</head>


<div style="text-align: center; padding-top: 10px">
  <img src="./images/profile/avatar.jpg" 
    class=" img-responsive img-thumbnail">
  <?php 
    if (isset($_SESSION['userName'])){
        $username = $_SESSION['userName'];
        echo '<div style="text-align: center;"><b>'.$username.'</b></div>';
    }
  ?>
  
</div>
<div class="tab">
  <button class="tablinks" onclick="openTap(event, 'Profile')" id="defaultOpen">Thông tin khách hàng</button>
  <button class="tablinks" onclick="openTap(event, 'ChPass')">Đổi mật khẩu</button>
  <button class="tablinks" onclick="openTap(event, 'History')">Lịch sử giao dịch</button>
  <button class="tablinks" onclick="openTap(event, 'Feedback')">Feedback</button>
</div>

<div id="Profile" class="tabcontent">
<?php require_once 'profiledetail.php';?>
</div>
<div id="ChPass" class="tabcontent">
<?php require_once 'changepass.php';?>
</div>
<div id="History" class="tabcontent">
<?php require_once 'history.php';?>
</div>
<div id="Feedback" class="tabcontent">
<?php require_once 'feedback.php';?>
</div>


<script>
function openTap(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
