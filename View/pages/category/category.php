<div class="row">
    <div class="col-sm-12">
<<<<<<< HEAD
        <h2 class="text-center category-title">Danh sÃ¡ch mÃ³n Än</h2>
=======
        <h2 class="text-center category-title">Danh sách món ăn</h2>
>>>>>>> chi1
        <div class="row food-review">
        <?php 
            foreach ($lstFood as $food) {
                echo '<form action="?controller=FoodDetail&action=show" method="post" class="category-form">';
                echo '<div class="col-sm-4">';
                echo '<div class="card myCategory">';
                echo '<button type="submit"><img class="card-img-top" src="'.$food->image.'" alt="'.$food->des.'"></button>';
                echo '<div class="card-body category-line">';
                echo '<button type="submit"><h6 class="card-title text-uppercase">',$food->name,'</h6></button>';
                echo '<p class="card-text clearfix">'
                . '<span class="category-price">'
                        . '<span class="currency">',$food->price,'</span>'
                . '</span>';
                echo '<i class="fas fa-plus-square fa-lg category-button"></i>
                      </p>
                      </div></div></div>';
                echo '<input type="hidden" name="foodID" value="'.$food->id.'" >';
                echo '</form>';
            }
        ?>
        </div>
    </div>
</div>
<script>
//    $('.card-img-top').click(function() {
//        $('.category-form').submit();
//    });
//    
//    $('.card-title').click(function() {
//        $('.category-form').submit();
//    });
</script>