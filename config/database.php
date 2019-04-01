<?php

class database{
	public static function connect(){
		$conection = new mysqli("localhost", "root", "", "notas_master");
		$conection->query("SET NAMES 'utf8'");
		
		return $conection;
	}
}
