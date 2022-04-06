<?php

	$host="localhost";
	$db_name="somosnue_prefecturas";
	$user="root";
	$pass="";

	try{

		$bdd=new PDO("mysql:host=".$host."; dbname=".$db_name."", $user, $pass); //conexion a la base de datos

		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$bdd->exec("SET CHARACTER SET utf8");

	}catch(Exeption $e){

		die('Error:' . $e->getMessage());

		echo "Linea del error: " . $e->getLine();

	}
?>