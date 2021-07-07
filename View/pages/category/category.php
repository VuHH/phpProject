<div class="row">
    <div class="col-sm-12">
        <h2 class="text-center category-title">Danh sách món ăn</h2>
        <div class="row food-review">
        <?php
            $count = 0;
            foreach ($lstFood as $food) {
                $count++;
                echo '<form action="?controller=FoodDetail&action=show" method="post" class="category-form">';
                echo '<div class="col-sm-4">';
                echo '<div class="card myCategory">';
                echo '<button type="submit"><img class="card-img-top" src="'.$food->image.'" alt="'.$food->des.'"></button>';
                echo '<div class="card-body category-line">';
                echo '<input type="hidden" name="foodID" value="'.$food->id.'">';
                echo '<button type="submit"><h6 class="card-title text-uppercase">',$food->name,'</h6></button>';
                echo '<p class="card-text clearfix">'
                . '<span class="category-price">'
                        . '<span class="currency">',$food->price,'</span>'
                . '</span>';
                echo '<div id="solTitle"><a href="#" id="'.$food->id.'">
                        <i class="fas fa-plus-square fa-lg category-button"></i></a></div>
                      </p>
                      </div></div></div>';
//                echo '<input type="hidden" name="foodIDCart" id="foodIDCart_'.$count.'" value="'.$food->id.'" >';
//                echo '<input type="hidden" name="countCart" id="countCart_" value="'.$count.'" >';
                echo '</form>';
            }
        ?>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    
    
    //?controller=Cart&action=AddToCart&food_id=

    $("#solTitle a").click(function() {
        var foodID =$(this).attr("id");
        var object = { food_id : foodID };
        var url = "?controller=Cart&action=AddToCart";
        $.ajax({
            type: 'post',
            url: url,
            data: object,
            success: function (data) {
                let myArr = data.split("-***myJSONCart***-");
                //console.log(myArr[0]);
                let myJson = JSON.parse(myArr[1]);
                if (myJson != 0) {
                    var number = " " +myJson +" ";
                    $("#numberCart").text(number);
                }
                //window.location.href = myJson;
                
            }
        });
        
    });
    
});
</script>