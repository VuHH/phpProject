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
                case 'FoodDetail':
                        require_once 'Model/FoodDetail.php';
                        $controller = new FoodDetailController();
			break;
                case 'FoodCategory':
                        require_once 'Model/FoodCategory.php';
                        $controller = new FoodCategoryController();
			break;
                case 'Menu':
			require_once 'Model/Menu.php';
			$controller = new MenuController();
			break;
                case 'Comment':
			require_once 'Model/Comment.php';
			$controller = new CommentController();
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
                     'FoodDetail' => ['show', 'error'],
                     'FoodCategory' => ['show', 'error'],
                     'Menu' => ['show', 'error'],
                     'Comment' => ['addComment', 'error']
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