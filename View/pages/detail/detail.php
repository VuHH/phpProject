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
            <div class="row comment">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="img-thumbnail img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">
                                    <strong>my username</strong> <span class="text-muted">commented 5 days ago</span>
                                </div>
                                <div class="card-body">
                                    Panel content
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Enter comment-->
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="reply-comment">
                        <p class="title-reply-comment">Enter a comment</p>
                        <form class="form-reply" method="post" action="?controller=Comment&action=addComment" id="form-reply-comment" name="form-reply-comment">
                            <?php
                                echo '<input type="hidden" name="CustomerID" value="1"/>';
                                echo '<input type="hidden" name="FoodID" value="'.$lstFood->id.'"/>';
                            ?>
                            <textarea placeholder="Enter your comment here..." name="txtComment" id="txtComment" class="input-comment" required></textarea>
                            <button type="submit" name="btnSubmitComment" id="btnSubmitComment" class="submit-comment btn btn-primary">
                                post comment
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>