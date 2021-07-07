<?php
function call($controller, $action) {
	// require the file that matches the controller name
	require_once('Controller/' . $controller . 'Controller.php');

	// create a new instance of the needed controller
	switch($controller) {
		case 'HomePage':
			$controller = new HomePageController();
			break;
		case 'User':
			require_once 'Model/User.php';
			$controller = new UserController();
			break;
                case 'Contact':
                        $controller = new ContactController();
			break;
                case 'SignIn':
                    require_once 'Model/Customer.php';
                    $controller = new SignInController();
	            break;
                case 'SignUp':
                    require_once 'Model/Customer.php';
                    $controller = new SignUpController();
	            break;
                case 'Profile':
                    require_once 'Model/Customer.php';
                    $controller = new ProfileController();
	            break;
                case 'Menu':
		    require_once 'Model/Menu.php';
		    $controller = new MenuController();
	            break;
                case 'FoodDetail':
                        require_once 'Model/Food.php';
                        require_once 'Model/Comment.php';
                        $controller = new FoodDetailController();
			break;
                case 'FoodCategory':
                        require_once 'Model/Food.php';
                        $controller = new FoodCategoryController();
                        break;
                case 'Comment':
                    require_once 'Model/Comment.php';
                    require_once 'Model/Food.php';
                    $controller = new CommentController();
                    break;
                case 'GioHang':
                    require_once 'Model/Food.php';
                        $controller = new GioHangController();
			break;
                case 'DangNhapDatHang':
                        $controller = new DangNhapDatHangController();
			break;
                case 'MuaHangKhongTaiKhoan':
                        $controller = new MuaHangKhongTaiKhoanController();
                        break;
                case 'Comment':
			require_once 'Model/Comment.php';
			require_once 'Model/Food.php';
			$controller = new CommentController();
			break;
                case 'ThongTinGiaoHang':
                    require_once 'Model/Food.php';
                        $controller = new ThongTinGiaoHangController();
			break;
                case 'ThankYou':
                        $controller = new ThankYouController();
			break;
                case 'ProfileHistory':
                    require_once 'Model/OrderFood.php';
                    $controller = new ProfileHistoryController();
                    break;
                case 'GioiThieu':
                        $controller = new GioiThieuController();
			break;
                case 'ShowSearch':
                        require_once 'Model/Food.php';
                        require_once 'Model/News.php';
                        $controller = new ShowSearchController();
                        break;
                 case 'NewsDetail':
                        require_once 'Model/News.php';
                        $controller = new NewsDetailController();
                        break;
                case 'ShowNews':
                        require_once 'Model/News.php';
                        $controller = new ShowNewsController();
                        break;
                case 'Feedback':
                    require_once 'Model/Feedback.php';
                        $controller = new FeedbackController();
                        break;
                case 'Cart':
                        require_once 'Model/FoodDetail.php';
                        $controller = new CartController();
                        break;
                case 'SignInCart':
                    require_once 'Model/Customer.php';
                    $controller = new SignInCartController();
	            break;
    }

	// call the action
	$controller->{ $action }();
}

// just a list of the controllers we have and their actions
// we consider those "allowed" values
$controllers = array('HomePage' => ['home', 'error'],
		     'User' => ['showAll', 'addUser'],
                     'Contact' => ['show', 'error'],
                     'SignIn' => ['show', 'loginAction', 'logoutAction', 'showLoginCart','error'],
                     'SignUp' => ['add'],
                     'Profile' => ['show', 'updateProfie', 'changePass'],
                     'Menu' => ['show', 'error'],
                     'FoodDetail' => ['show', 'error'],
                     'FoodCategory' => ['show', 'error'],
                     'Comment' => ['addComment', 'error'],
                     'GioHang' => ['show', 'error'],
                     'DangNhapDatHang' => ['signin', 'error'],
                     'MuaHangKhongTaiKhoan' => ['show', 'error'],
                     'ThongTinGiaoHang' => ['show', 'error'],
                     'ThankYou' => ['show', 'error'],
                     'ProfileHistory' =>['history'],
                     'GioiThieu' => ['show', 'error'],
                     'ShowSearch' => ['show', 'error'],
                     'NewsDetail' => ['show', 'error'],
                     'ShowNews' => ['show', 'error'],
                     'Feedback' => ['add','showadd','show', 'error'],
                     'Cart' => ['AddToCart', 'error', 'show', 'RemoveToCart', 'RemoveAll'],
                     'SignInCart' => ['loginAction', 'show', '']
    );

// check that the requested controller and action are both allowed
// if someone tries to access something else he will be redirected to the error action of the pages controller
if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	} else {
		call('HomePage', 'error');
	}
} else {
	call('HomePage', 'error');
}

?>