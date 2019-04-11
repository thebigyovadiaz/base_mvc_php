<?php

function controllers_autoload($classname){
	$file = "controllers/".$classname.".php";
	if(file_exists($file)){
		include_once $file;
	}
}

spl_autoload_register('controllers_autoload');
