<!DOCTYPE html>
<html>
   <head>
      <title>Fast Food</title>
      <!-- Mobile Specific Meta -->
      <?php include 'template/libTemplate.php'; ?>
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
             <div class="col-sm-9">
                <div class="main-content">
                   <div class="row">
                       <div id="main-container" class="main-container pull-right" style="width: 100%">
                            <?php  //include ("View/ViewHomePage.php")
                            //$VIEW_CONTENT = "View/pages/home/ViewHomePage.php";
                            require_once('route.php');
                            ?>
                      </div>
                   </div>
                </div>
             </div>
         </div>
     </div>
   </body>
</html>