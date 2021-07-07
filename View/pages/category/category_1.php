<?php
//session_start();
include_once 'Model/connectDB.php';
?>


<div class="row">
    <div class="col-sm-12">
        <h2 class="text-center category-title">Danh sách món ăn</h2>
        <div class="row food-review">
            <?php
            foreach ($lstFood as $food) {
                echo '<form action="?controller=FoodDetail&action=show" method="post" class="category-form">';
                echo '<div class="col-sm-4">';
                echo '<div class="card myCategory">';
                echo '<button type="submit"><img class="card-img-top" src="' . $food->image . '" alt="' . $food->des . '"></button>';
                echo '<div class="card-body category-line">';
                //1.Tao 1 link add-to-cart?food_id= $food->id
                //2.<a href="/add-to-cart?food_id=$food->id".
                //Tao 1 controller moi de doc food id
                //khi food id. se doc tu db ra
                //Khi co thong tin food tu db
                //Luu vao sesion
                echo '<button type="submit"><h6 class="card-title text-uppercase">', $food->name, '</h6></button>';
                echo '<p class="card-text clearfix">'
                . '<span class="category-price">'
                . '<span class="currency">', $food->price, '</span>'
                . '</span>';
                echo '<a href="?controller=Cart&action=AddToCart&food_id=' . $food->id . '"><i class="fas fa-plus-square fa-lg category-button"></i></a>
                      </p>
                      </div></div></div>';
                echo '<input type="hidden" name="foodID" value="' . $food->id . '" >';

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