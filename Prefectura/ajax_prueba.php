<?php  
	try{

		$bdd=new PDO("mysql:host=localhost; dbname=ne_tramites", "root", ""); //conexion a la base de datos

		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$bdd->exec("SET CHARACTER SET utf8");

	}catch(Exeption $e){

		die('Error:' . $e->getMessage());

		echo "Linea del error: " . $e->getLine();

	}

	$cedula=$_POST["cedula"];

	$sql="SELECT * FROM CENSO WHERE CEDULA = :cedu";

	$query=$bdd->prepare($sql);
	$datos=$query->execute(array(":cedu"=>$cedula))->fetch(PDO::FETCH_ASSOC);

	echo json_encode($datos);

?>