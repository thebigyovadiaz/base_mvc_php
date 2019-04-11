<?php
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'config/database.php';

function show_error(){
	$error = new ErrorController();
	$error->index();
}

if (isset($_GET['controller'])){
	$nombre_controlador = ucfirst($_GET['controller']).'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
} else {
	show_error();
	exit();
}

if (class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	} elseif (!isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
	} else {
		show_error();
	}
} else {
	show_error();
}
