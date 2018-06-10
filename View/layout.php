<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Fast Food</title>
      <meta name="description" content="Fast Food">
      <meta name="author" content="Fast Food">
      <!-- Mobile Specific Meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php include 'template/libTemplate.php';?>
      
      <style>
          .myFooter {
                width: 100%;
                background: #00800094;
                color: white;
          }
          .text-footer {
              color: white;
              padding: 1%;
              margin: 0;
          }
      </style>
      
   </head>
   <body class="home" cz-shortcut-listen="true">
     <!-- Menu -->
     <div class="container-fluid">
         <div class="row">
             <div class="col-sm-3">
                      <?php require_once 'template/menu.php'; ?>
             </div>
             <div class="col-sm-9"  style="padding: 0">
                 <div class="main-content">
                   <div class="row">
                        <div id="main-container" class="main-container pull-right" style="width: 100%">
                            <?php  //include ("View/ViewHomePage.php")
                            //$VIEW_CONTENT = "View/pages/home/ViewHomePage.php";
                            require_once('route.php');
                            ?>
                        </div>
                   </div>
                    <div class="myFooter">
                        <p class="text-center text-footer">Copyright &copy; FastFood Website 2018</p>
                    </div> 
                </div>
             </div>  
         </div>
     </div>
   </body>
   
    <script>
        var body = $('.navbar.navbar-default').height();
        $('.main-content').css('min-height', body + 105);
    </script>
</html>