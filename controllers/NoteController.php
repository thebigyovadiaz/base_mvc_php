<?php

class NoteController{
	
	public function list(){
		// Model
		require_once 'models/note.php';
		
		// Logica accion del controlador
		$note = new Note();
		$notes = $note->getAll('notas');
		
		// Vista
		require_once 'views/note/list.php';
	}
	
	public function create(){
		// Model
		require_once 'models/note.php';
		
		$note = new Note();
		$note->setUsuario_id(1);
		$note->setTitulo("Nota desde PHP MVC");
		$note->setDescripcion("Descricion de mi nota");
		$save = $note->save();
		
		header("Location: index.php?controller=Note&action=list");
	}
	
	public function delete(){
		
	}
	
}