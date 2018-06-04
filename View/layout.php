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
   </head>
   <body class="home" cz-shortcut-listen="true">
     <!-- Menu -->
     <?php require_once 'template/menu.php'; ?>
      <!-- End Header --> 
      <!-- Content -->
      <div class="container-fluid main-content">
         <div class="row">
            <!-- Main Container -->
            <div id="main-container" class="main-container pull-right">
         <?php  //include ("View/ViewHomePage.php")
                  //$VIEW_CONTENT = "View/pages/home/ViewHomePage.php";
                  require_once('route.php');
          ?>
            </div>
         </div>
      </div>
      <!-- End Content -->
      <!-- Sidebar -->
      <!-- End Sidebar -->
      <!-- Footer -->
   </body>
</html>