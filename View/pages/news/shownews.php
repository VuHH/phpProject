<div class="row">
    <div class="col-sm-12" style="margin: 5px 0px 10px 5px; text-align: center">
        <h2 style="color:#9BCE5B" >Danh sách tin tức</h2></div>

    <div class="col-sm-12">
        
<?php
    $num = count($lst);
    
    if ($num > 0) {
        
        echo '<div class="row food-review">';
            foreach ($lst as $news) {
                 echo '<form action="?controller=NewsDetail&action=show" method="post" class="category-form">';
                echo '<div class="col-sm-6">';
                echo '<div class="card myCategory">';
                echo '<button type="submit"><img class="card-img-top" src="'.$news->image.'" alt="'.$news->des.'"></button>';
                echo '<div class="card-body category-line">';
                echo '<button type="submit"><h6 class="card-title text-uppercase">',$news->title,'</h6></button>';
                echo '<button type="submit" class="btn btn-info pull-right ">Xem Thêm</button>';
                echo '    </div></div></div>';
                echo '<input type="hidden" name="newsID" value="'.$news->id.'" >';
                echo '</form>';
            }
        echo '</div>';
        
        }
        
        
 ?>
    </div>
</div>