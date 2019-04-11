<?php

require_once 'parameters.php';

class Database{
	public static function connect(){
		$db = new mysqli(host, user, password, db_name);
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

