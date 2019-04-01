<?php
require_once 'config/database.php';

class ModelBase{
	public $db;
	
	public function __construct() {
		$this->db = database::connect();
	}
	
	public function getAll($table){
		$query = $this->db->query("SELECT * FROM $table ORDER BY id DESC");
		return $query;
	}
	
}
