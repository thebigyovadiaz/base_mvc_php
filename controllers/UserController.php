<?php

class UserController {

	public function index() {
		require_once 'views/user/index.php';
	}
	
	public function create(){
		require_once 'views/user/create.php';
	}

	/**
	 * Acá se hereda de la clase modelo para conectar con base de datos
	 */
	public function getAll(){
		require_once 'models/user.php';
		
		$user = new User();		
		$get_all_usuers = $user->getAll('user');
		
		require_once 'views/user/view-all.php';
	}
}