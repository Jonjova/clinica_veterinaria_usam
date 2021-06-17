<?php 
require_once 'controller/control.php';
require_once 'config/conexion.php';

if(!isset($_REQUEST["c"])){

	$controller = new control();
	$controller->Index();
}else{

	$action = $_REQUEST["c"];
	$controller = new control();
	call_user_func(array($controller,$action));
}


?>