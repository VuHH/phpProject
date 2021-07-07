<?php
if ($titleSearch == "Thức Ăn") {
    $num = count($lstFood);
    echo '<div class="row">';

    echo '<div class="col-sm-12">';
    echo '<h2 style="color:#9BCE5B" class="text-center category-title">'
    . 'Danh sách tìm kiếm '.$titleSearch.'</h2>';
    if ($num > 0) {
        echo '<div class="row" style="margin: 5px 0px 10px 5px">';
        echo '<h4 class="text-center" style="color:#FCB322">'.$num.' '
            . 'kết quả trả về với từ khóa  <b>'.$search.'</b></h4>';
        echo '</div>';
        echo '<div class="row food-review">';
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
        echo '</div>';
        echo '</div>';
        echo '</div>';
        }
        else {
            echo '<div class="row" style="margin: 5px 0px 10px 5px">';
            echo '<h2 class="text-center"> Không tìm thấy từ khóa "<b>'.$search.'</b>"</h2>' ;
            echo '</div>';
        }
}
            
            //show tin tuc
           else {
               
               $num = count($lstNews);
    echo '<div class="row">';

    echo '<div class="col-sm-12">';
    echo '<h2 style="color:#9BCE5B" class="text-center category-title">'
    . 'Danh sách tìm kiếm '.$titleSearch.'</h2>';
    if ($num > 0) {
        echo '<div class="row" style="margin: 5px 0px 10px 5px">';
        echo '<h4 class="text-center" style="color:#FCB322">'.$num.' '
            . 'kết quả trả về với từ khóa  <b>'.$search.'</b></h4>';
        echo '</div>';
        echo '<div class="row food-review">';
            foreach ($lstNews as $news) {
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
        echo '</div>';
        echo '</div>';
        }
        else {
            echo '<div class="row" style="margin: 5px 0px 10px 5px">';
            echo '<h2 class="text-center"> Không tìm thấy từ khóa "<b>'.$search.'</b>"</h2>' ;
            echo '</div>';
        }
               
               
               
           }
//                
//                $query = "SELECT * FROM news WHERE NewsName like '%$search%'";
//                $img='';
//                $name='';                
//                
//                $description='';
// 
//            // Thực thi câu truy vấn
//                $sql = mysqli_query($conn, $query);
// 
//            // Đếm số đong trả về trong sql.
//                $num = mysqli_num_rows($sql);
// 
//            // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
//                if ($num > 0) {
//                    echo '<div class="container">';
//                // Dùng $num để đếm số dòng trả về.
//                     echo '<h2 class="text-center">'.$idsearch.'</h2>';
//                    echo '<h4 class="text-center">'.$num.' kết quả trả về với từ khóa  <b>'.$search.'</b></h4>';
//                    echo '<div class="row food-review">';
//                    
//                    
// 
//                // Vòng lặp foreach dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
//                        
//                    foreach( $sql as $row ) {
//                        $img=$row['DirImage'];
//                        $name=$row['NewsName'];
//                        $description=$row['Description'];
//                        
//                        
//                        echo '<div class="col-sm-6" style="margin-top: 20px">';    
//                            echo '<div class="card category">';
//                                echo '<img class="card-img-top" src="'.$img.'" alt="img search">';
//                                    echo '<div class="card-body category-line">';    
//                                        echo '<h4 class="card-title text-uppercase">'.$name.'</h4>';
//                                        echo '<p>'.$description.'</p>';
//                                        echo '<form action="" method="post">';
//                                            echo '<button type="submit" class="btn btn-info pull-right ">Xem Thêm</button>';
//                                            echo '</form>';
//                                    echo '</div>';    
//                            echo '</div>';    
//                        echo '</div>';    
//                        
//                        
//                    }
//                    
//                    
//                    echo '</div>';    
//                    echo '</div>';
//                    
//               }
//             
//                else {
//                    echo '<h3 class="text-center"> Khong tim thay ket qua voi tu khoa <b>'.$search.'</b></h3>' ;
//                }
//                
//                
//            }
 ?>
        </div>
    </div>
</div>  
    
        
    

