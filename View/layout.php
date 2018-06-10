<!DOCTYPE html>
<html>
   <head>
      <title>Fast Food</title>
      <!-- Mobile Specific Meta -->
<<<<<<< HEAD
      <?php include 'template/libTemplate.php'; ?>
=======
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
      
>>>>>>> chi1
   </head>
   <body class="home" cz-shortcut-listen="true">
     <!-- Menu -->
     <div class="container-fluid">
         <div class="row">
             <div class="col-sm-3">
                <?php 
                
                require_once('template/menu.php'); 
                ?>
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
<!--   <footer class="footer" style="margin-top: 50px;">
         <?php include ("template/footer.php");?>
   </footer>-->
   </body>
<<<<<<< HEAD

=======
   
    <script>
        var body = $('.navbar.navbar-default').height();
        $('.main-content').css('min-height', body + 105);
    </script>
>>>>>>> chi1
</html>