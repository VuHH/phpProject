<head>
    <style>
        .paddingTB60 {padding:60px 0px 60px 0px;}
.gray-bg {background: #F1F1F1 !important;}
.about-title {}
.about-title h1 {color: #535353; font-size:45px;font-weight:600;}
.about-title span {color: #AF0808; font-size:45px;font-weight:700;}
.about-title h3 {color: #535353; font-size:23px;margin-bottom:24px; font-family: arial}
.about-title h5 {color: #535353; font-size:23px;margin-bottom:24px;}
.about-title p {color: #7a7a7a;line-height: 1.8;margin: 0 0 15px;}
.about-paddingB {padding-bottom: 12px;}
.about-img { padding: 100px 0 57px 0}

/* Social Icons */
.about-icons {margin:48px 0px 48px 0px ;}
.about-icons i{margin-right: 10px;padding: 0px; font-size:35px;color:#323232;box-shadow: 0 0 3px rgba(0, 0, 0, .2);}
.about-icons li {margin:0px;padding:0;display:inline-block;}
#social-fb:hover {color: #3B5998;transition:all .001s;}
 #social-tw:hover {color: #4099FF;transition:all .001s;}
 #social-gp:hover {color: #d34836;transition:all .001s;}
 #social-em:hover {color: #f39c12;transition:all .001s;}
        
    </style>
</head>

  <div class="about-section paddingTB60 " style=" padding-left: 50px">  
      <div class="row">
      <div class="col-sm-12">
          
<?php                   

echo '<h1 class = "text-center col-sm-12" style="color: #9BCE5B;" >'.$lstNews->title.'</h1>';
                           
                                
                                    
                                    echo'<div class="col-sm-6">';
                                    echo'<div class="about-title clearfix">';
                                    echo'<p >'.$lstNews->des.'</p>';
                                    echo'</div></div>';

                                    echo'<div class="col-sm-6">';
                                    echo'   <div class="about-img">';
                                    echo'<img src="'.$lstNews->image.'" alt=""/>';
                                    echo'</div></div>';	
                                
                            

        ?>
  </div>
  </div>
  </div>
                            
                            
            

	



	