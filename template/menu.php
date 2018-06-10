<div class="modal-search">
   <form class="modal-search-form">
      <div class="modal-search-btn-group">
         <button type="button" class="modal-search-btn-close"><i class="fas fa-close"></i></button>
      </div>
      <div class="modal-search-input-group">
         <input type="text" class="modal-search-input" placeholder="Nhập món ăn cần tìm">
         <button type="submit" class="modal-search-btn-close"><i class="fas fa-search"></i></button>
      </div>
      <div class="modal-search-radio-group">
         <span class="radio-group">
         <input type="radio" id="searchFood" value="radioFood" name="modal-search-radio" checked>
         <label for="searchFood">Món ăn</label>
         </span>
         <span class="radio-group">
         <input type="radio" id="searchNew" value="searchNew" name="modal-search-radio">
         <label for="searchNew">Tin tức</label>
         </span>
      </div>
   </form>
</div>

<div class="navbar-fixed-top main-menu-continer main-menu" style="z-index: 99">
   <button type="button" class="btn menubar-toggle">
   <i class="fa fa-bars"></i>
   </button>
   <div class="navbar navbar-default">
       <div class="navbar-header">
         <a class="navbar-brand" href="#">
            <img src="./images/home/logo.png" alt="Foody Logo" style="margin: 0 auto; display: block;">
         </a>
      </div>
      <div class="navbar-header menu-login">
         <div class="row">
            <div class="col-sm-6">
               <button class="btn btn-primary" style="width: 100%; margin: 0">Đăng ký</button>
            </div>
            <div class="col-sm-6">
               <button class="btn btn-success" style="width: 100%; margin: 0">Đăng nhập</button>
            </div>
         </div>
      </div>
      <div class="navbar-header menu-cart">
         <div class="row">
            <div class="col-sm-12">
               <div class="btn-cart">
                  <p>
                     <span class="fas fa-shopping-cart"></span>
                     <span>0 Giỏ hàng</span>
                  </p>
               </div>
               <div class="btn-search">
                  <p><span class="fas fa-search"></span></p>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar-collapse clearfix" role="navigation">
         <ul id="headernavigation" class="nav navbar-nav">
            <li><a href="#">Trang chủ</a></li>

            <li class="menu-item-has-children">
               <a href="#">Thực đơn</a>
               <span class="toggle_nav_button"></span>
            </li>

            <li><a href="#">Tin tức</a></li>
            <li><a href="?controller=Contact&action=show">Liên hệ</a></li>
         </ul>
      </nav>
   </div>
   <div class="menu-children">
       <?php ?>
   </div>
</div>

<script src="./lib/js/appMenu.js"></script>