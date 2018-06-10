<!--Food detail-->
<div class="row">
    <div class="col-sm-4">
        <?php echo '<img class="detail-image" src="'.$lstFood->image.'" alt="'.$lstFood->des.'">'; ?>
    </div>
    <div class="col-sm-4">
        <?php 
            echo '
                    <p class="field-detail">'.$lstFood->type.'</p>
                    <p class="field-detail title">'.$lstFood->name.'</p>
                    <p class="field-detail price">Price: '.$lstFood->price.'</p>
                    <button class="btn btn-primary" type="button">Chọn</button>
                 ';
        ?>
    </div>
    <div class="col-sm-4">
        <?php
            echo '
                    <p class="field-detail menu">
                        Menu <i class="far fa-caret-square-down"></i>
                    </p>
                    <p class="field-detail">Review</p>
                    <p class="field-detail review">'.$lstFood->des.'</p>
        ';
        ?>
    </div>
</div>
<!--Comment-->
<div class="row">
    <div class="col-sm-12">
        <div class="clearfix">
            <?php
            foreach ($lstComment as $comment) {
                ob_start();
                echo 
                '<div class="row comment">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-thumbnail img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            </div>
                            <div class="col-sm-9">
                                <div class="card">
                                    <div class="card-header">';
                                    echo '<strong>'.$comment['CustomerName'].'</strong> <span class="text-muted">commented '.$comment['CommentDate'].'</span>';
                               echo'</div>
                                    <div class="card-body">
                                        '.$comment['CommentContent'].'
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                               
                
                    if($comment['AnwserComment'] != NULL) {
                        ob_start();
                        echo 
                        '<div class="row comment">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img class="img-thumbnail img-responsive user-photo" src="./images/home/logo.png">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="card">
                                            <div class="card-header" style="background: #9bcf5a">';
                                            echo '<strong>Admin</strong> <span class="text-muted">reply '.$comment['AnwserDate'].'</span>';
                                       echo'</div>
                                            <div class="card-body">
                                                '.$comment['AnwserComment'].'
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        
                    }               
                }
            ?>
            
            <!--Enter comment-->
            <?php 
                if (isset($_SESSION['userName']) && isset($_SESSION["userID"])) {
                    $customerID = $_SESSION["userID"];
                    echo '<div class="row">
                            <div class="col-sm-6">
                            <div class="reply-comment">
                            <p class="title-reply-comment">Enter a comment</p>';
                    echo '<form class="form-reply" method="post" action="" id="formReplyComment" name="form-reply-comment">';
                    echo '<input type="hidden" name="customerID" value="'.$customerID.'"/>';
                    echo '<input type="hidden" name="foodID" value="'.$lstFood->id.'"/>';
                    echo '<textarea placeholder="Enter your comment here..." name="txtComment" id="txtComment" class="input-comment" required></textarea>
                    <button type="submit" name="btnSubmitComment" 
                    id="btnSubmitComment" class="submit-comment btn btn-primary">post comment</button></form>';
                }
            ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script src="./././lib/js/appComment.js"></script>