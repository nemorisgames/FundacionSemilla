<?php 

class Conexion{

	static public function conectar1(){

		#PDO("nombre del servidor; nombre de la base de datos", "usuario", "contraseña")

		$link = new PDO("mysql:host=localhost;dbname=fundacion_semilla", 
			            "root", 
			            "");

		$link->exec("set names utf8");

		return $link;

	}


	static public function conectar(){

		#PDO("nombre del servidor; nombre de la base de datos", "usuario", "contraseña")

		$link = new PDO("mysql:host=nemorisgames.com:3306;dbname=nemorisg_fundacionsemilla", 
			            "nemorisg_semilla", 
			            "_Semilla123,.");

		$link->exec("set names utf8");

		return $link;

	}



	

}
