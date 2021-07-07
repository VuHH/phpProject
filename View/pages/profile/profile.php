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
  <button class="tablinks" onclick="openTapLoadData(event, 'History')">Lịch sử giao dịch</button>
  <button class="tablinks" onclick="openTapLoadFeedback(event, 'Feedback')">Feedback</button>
</div>

<div id="Profile" class="tabcontent">
<?php require_once 'profiledetail.php';?>
</div>
<div id="ChPass" class="tabcontent">
<?php require_once 'changepass.php';?>
</div>
<div id="History" class="tabcontent">
<?php 
    require_once 'history.php';
?>
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

function openTapLoadData(evt, cityName) {
    var currentTarget = evt.currentTarget;
     $.ajax({
          type: 'post',
          url: '?controller=ProfileHistory&action=history',
          data: $('#historyForm').serialize(),
          success: function (data) {
            let myArr = data.split("-***myJSONHistory***-");
            let myJson = JSON.parse(myArr[1]);
            var output = "";
            for (var i = 0; i < myJson.length; i++) {
                var total = parseInt(myJson[i].price) * parseInt(myJson[i].quantity);
                var orderDate = patternDate(myJson[i].orderDate);

                
                output += "<tr>" + 
                        "<td>"+orderDate +"</td>"+ 
                        "<td>"+myJson[i].foodName +"</td>" +
                        "<td>"+ total+"</td>" +
                        "</tr>";
            }
            
            
            var i, tabcontent, tablinks;
            tabcontent = $(".tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                $(tabcontent[i]).css("display", "none");
            }
            tablinks = $(".tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            $("#" + cityName).css("display", "block");
            currentTarget.className += " active";
            
            $('#showHistory').html(output);
            
          }
        });
       

       
};
function openTapLoadFeedback(evt, cityName) {
    var currentTarget = evt.currentTarget;
     $.ajax({
          type: 'post',
          url: '?controller=Feedback&action=show',
          data: $('#feedbackForm').serialize(),
          success: function (data) {
            let myArr = data.split("-***myJSONFeedback***-");
            let myJson = JSON.parse(myArr[1]);
            var output = "";
            for (var i = 0; i < myJson.length; i++) {
                if (myJson[i].answerFeedback == null) {
                    var answerFeeback = '';
                }    
                output += "<tr>" +
                            "<td class='text-center'>"+ myJson[i].feedbackDate+"</td>"+
                            "<td class='text-center'>"+ myJson[i].feedbackContent+"</td>"+
                            "<td class='text-center'>"+ answerFeeback+"</td>"+
                            "</tr>";
//                output += "<tr>" + 
//                        "<td>"+orde1rDate +"</td>"+ 
//                        "<td>"+myJson[i].foodName +"</td>" +
//                        "<td>"+ total+"</td>" +
//                        "</tr>";
            }
            
            
            var i, tabcontent, tablinks;
            tabcontent = $(".tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                $(tabcontent[i]).css("display", "none");
            }
            tablinks = $(".tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            $("#" + cityName).css("display", "block");
            currentTarget.className += " active";
            
            $('#feedbackList').html(output);
            
          }
        });
       

       
};
function patternDate(stringDate) {
var dateConvert = new Date(stringDate);
var day = dateConvert.getDay().toString();
var month = dateConvert.getMonth().toString();
var year = dateConvert.getFullYear().toString();
var concatDay = day.concat("/");
var concatMoth = month.concat("/");
var concatYear = concatMoth.concat(year);
var convertDate = concatDay.concat(concatYear);
return convertDate;
}
</script>
