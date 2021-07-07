
<!--    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
        <link href="css/bootstrapValidator.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrapValidator.js" type="text/javascript"></script>
        <link href="css/cs.css" rel="stylesheet" type="text/css"/>
        
        <title></title>
    </head>
    <body>-->
        <?php
        if (isset($_SESSION['userID'])){
            $userID = $_SESSION['userID'];
        }
        // put your code here
        ?>
         <div class="container">
             <div class="sec-title text-center" style=" padding: 10px 10px 50px 10px">
                
                 <h1 style="color: #9BCE5B;"><strong>Feedback về Fast Food</strong></h1>
            </div>
            <div class="row" >
                <div class=" col-sm-12">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">

                        <form role="form" id="contact-form" class="contact-form" action="?controller=Feedback&action=add" method="post">

                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control " rows="3" name="feedbackcontent" id="feedbackcontent"placeholder="nội dung"></textarea><br>
                                            
                                        </div>
                                            <?php 
                                                echo '<input type="hidden" id="userIdFeedback" name="userIdFeedback" value="'.$userID.'"></form>'; 
                                            ?>
                                        <button type="submit" class="btn btn-success pull-right">Gửi</button>
                                    </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
<!--    </body>
</html>-->
