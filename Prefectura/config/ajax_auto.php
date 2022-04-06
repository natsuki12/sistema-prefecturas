<?php
	require("connect.php");
	$proceso=$_POST["proceso"];
	switch ($proceso) {
		case 0 :
			$cedula=$_POST["cedula"];
			$sql="SELECT * FROM CENSO WHERE CEDULA = :cedu";
			$query=$bdd->prepare($sql);
			$query->execute(array(":cedu"=>$cedula));
			if ($query->rowCount()>=1) {
				$datos=$query->fetch(PDO::FETCH_ASSOC);
				echo json_encode($datos);
			}else{
				$no= array(0 => 'No se encuentra censado en el sistema, haga click <a href="censo.php">aquí</a>.');
				echo json_encode($no);
			}
			break;

		case 1 :
			$municipio=$_POST["municipio"];
			$sql="SELECT PARROQUIA_NOMBRE, PARROQUIA_COD FROM PARROQUIA WHERE MUNICIPIO_COD= :muni";
			$query=$bdd->prepare($sql);
			$query->execute(array(":muni"=>$municipio));
			$datos=$query->fetchALL(PDO::FETCH_OBJ);
			echo json_encode($datos);
			break;
		default:
			# code...
			break;
	}
?>