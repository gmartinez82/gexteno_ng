<?php
session_start();

Login::limpiarConector();
Login::setTipoAcceso('backend');

$conajax = true;

function __autoload($class_name) {
	if(file_exists("../../../lib/".$class_name.'.php'))
		require_once "../../../lib/".$class_name.'.php';
	if(file_exists("../../../lib/model/".$class_name.'.php'))
		require_once "../../../lib/model/".$class_name.'.php';
	if(file_exists("../../../lib/bd/".$class_name.'.php'))
		require_once "../../../lib/bd/".$class_name.'.php';
}

