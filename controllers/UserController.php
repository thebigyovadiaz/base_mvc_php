<?php

class UserController {
	
	public function getAll(){
		require_once 'models/user.php';
		
		$user = new User();
		
		$get_all_usuers = $user->getAll('user');
		
		require_once 'views/user/view-all.php';
	}
	
	public function create(){
		require_once 'views/user/create.php';
	}
}