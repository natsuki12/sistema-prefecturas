<?php
	include("../config/connect.php");

	//CONSULTA POR MES O POR DIA SEGUN PERSONAS CENSADAS
	//MESES = 1 ES ENERO
	if(isset($_POST["municipio_m"])){
		$municipio_m = $_POST["municipio_m"];
		if($municipio_m!=0){
			$sql = "SELECT COUNT(actividad) as total ,MONTH(fecha) as mes FROM `registro_actividad` 
					INNER JOIN parroquia ON registro_actividad.prefectura_cod = parroquia.prefectura_cod 
					WHERE actividad = 'censado' AND parroquia.municipio_cod = :municipio GROUP BY MONTH(fecha)";
			$query = $bdd->prepare($sql);
		    $query->execute(array(":municipio"=>$municipio_m));
		    $total_mes = $query->fetchAll(PDO::FETCH_OBJ); 
			echo json_encode($total_mes);
		}
		else
			echo json_encode(null);
	}
	
	//DIAS = 0 ES DOMINGO
	if (isset($_POST["municipio_d"])) {
		$municipio_d = $_POST["municipio_d"];
		if($municipio_d!=0){
			$sql = "SELECT COUNT(actividad) as total ,DATE_FORMAT(fecha,'%w') as dia FROM `registro_actividad` 
					INNER JOIN parroquia ON registro_actividad.prefectura_cod = parroquia.prefectura_cod 
					WHERE actividad = 'censado' AND parroquia.municipio_cod = :municipio GROUP BY DATE_FORMAT(fecha,'%w')";
			$query = $bdd->prepare($sql);
		    $query->execute(array(":municipio"=>$municipio_d));
		    $total_dia = $query->fetchAll(PDO::FETCH_OBJ); 
			echo json_encode($total_dia);
		}
		else
			echo json_encode(null);
	}
	
?>