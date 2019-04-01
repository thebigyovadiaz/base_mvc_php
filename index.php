<h1>Welcome to my web with MVC</h1>
<?php
require_once 'autoload.php';

if(isset($_GET['controller'])){
	$controller_name = $_GET['controller'].'Controller';
}else{
	echo "Page Not Found";
	exit();
}

if(class_exists($controller_name)){	
	$controller = new $controller_name();
	
	if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
		$action = $_GET['action'];
		$controller->$action();
	}else{
		echo "Page Not Found";
	}
}else{
	echo "Page Not Found";
}
