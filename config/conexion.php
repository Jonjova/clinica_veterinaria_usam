<?php 

class conexion{

	public static function conectar(){

		$pdo = new PDO("mysql:host=localhost;dbname=db_clinicaveterinaria;charset=utf8",'root', '0000');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	} 
}

?>