<?php
require_once 'ModelBase.php';

class Note extends ModelBase{
	public $usuario_id;
	public $titulo;
	public $descripcion;
	
	public function __construct() {
		parent::__construct();
	}
	
	
	function getUsuario_id() {
		return $this->usuario_id;
	}

	function getTitulo() {
		return $this->titulo;
	}

	function getDescripcion() {
		return $this->descripcion;
	}

	function setUsuario_id($usuario_id) {
		$this->usuario_id = $usuario_id;
	}

	function setTitulo($titulo) {
		$this->titulo = $titulo;
	}

	function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	public function save(){
		$sql = "INSERT INTO notas(usuario_id, titulo, descripcion, fecha) VALUES ({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE());";
	
		$saved = $this->db->query($sql);
		
		return $saved;
	}

}

