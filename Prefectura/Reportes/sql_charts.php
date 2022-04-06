<?php
	include("../config/connect.php");

//CONSULTA POR MES O POR DIA SEGUN SOLICITUDES
	//MESES = 1 ES ENERO
	if(isset($_POST["prefectura_m"])){
		$prefectura_m = $_POST["prefectura_m"];
		switch ($prefectura_m) {
			case "0": echo json_encode(null); break;
			case "Global":
				$sql = "SELECT COUNT(tramite_cod) as total , MONTH(fecha) as mes FROM tramite 
						GROUP BY MONTH(fecha)";
				$query=$bdd->query($sql);
				$total_mes = $query->fetchAll(PDO::FETCH_OBJ);
				echo json_encode($total_mes);
				break;
			default:
				$sql = "SELECT COUNT(tramite_cod) as total , MONTH(fecha) as mes FROM tramite 
						WHERE prefectura_cod = :prefectura GROUP BY MONTH(fecha)";
				$query = $bdd->prepare($sql);
			    $query->execute(array(":prefectura"=>$prefectura_m));
			    $total_mes = $query->fetchAll(PDO::FETCH_OBJ); 
				echo json_encode($total_mes);
				break;
		}
	}
	
	//DIAS = 0 ES DOMINGO
	if (isset($_POST["prefectura_d"])) {
		$prefectura_d = $_POST["prefectura_d"];
		switch ($prefectura_d) {
			case "0": echo json_encode(null); break;
			case "Global":
				$sql = "SELECT COUNT(tramite_cod) as total , DATE_FORMAT(fecha,'%w') as dia FROM tramite 
						GROUP BY DATE_FORMAT(fecha,'%w')";
				$query=$bdd->query($sql);
				$total_dia = $query->fetchAll(PDO::FETCH_OBJ);
				echo json_encode($total_dia);
				break;
			default:
				$sql = "SELECT COUNT(tramite_cod) as total , DATE_FORMAT(fecha,'%w') as dia FROM tramite 
						WHERE prefectura_cod = :prefectura GROUP BY DATE_FORMAT(fecha,'%w')";
				$query = $bdd->prepare($sql);
			    $query->execute(array(":prefectura"=>$prefectura_d));
			    $total_dia = $query->fetchAll(PDO::FETCH_OBJ); 
				echo json_encode($total_dia);
				break;
		}
	}
//FIN CONSULTA POR MES O POR DIA SEGUN SOLICITUDES

//CONSULTA POR ESTADO DE SOLICITUDES
	if (isset($_POST["estado"])) {
		if($_POST["estado"]==0){ //ADMINISTRADOR
			$sql = "SELECT COUNT(tramite_cod) as total, estado FROM `tramite` GROUP BY estado";
			$query=$bdd->query($sql);
			$total_estado = $query->fetchAll(PDO::FETCH_OBJ); 
			echo json_encode($total_estado);
		}
		else{ //OPERADOR
			$codigo = $_POST["estado"];
			$sql = "SELECT COUNT(tramite_cod) as total, estado FROM `tramite` 
					WHERE prefectura_cod = :prefectura GROUP BY estado";
			$query = $bdd->prepare($sql);
		    $query->execute(array(":prefectura"=>$codigo));
		    $total_estado = $query->fetchAll(PDO::FETCH_OBJ); 
			echo json_encode($total_estado);
		}
	}
//FIN CONSULTA POR ESTADO DE SOLICITUDES

//CONSULTA POR NUMERO DE SOLITUDES POR PREFECTURA
	if (isset($_POST["prefectura_t"])) {
		$prefectura = $_POST["prefectura_t"];
		if($prefectura!=0){
			$sql = "SELECT COUNT(tramite_cod) as total, tipo_tramite FROM `tramite` 
					WHERE prefectura_cod = :prefectura GROUP BY tipo_tramite";
			$query = $bdd->prepare($sql);
		    $query->execute(array(":prefectura"=>$prefectura));
		    $total_prefectura = $query->fetchAll(PDO::FETCH_OBJ); 
			echo json_encode($total_prefectura);
		}
		else
			echo json_encode(null);
	}
//CONSULTA POR NUMERO DE SOLITUDES POR PREFECTURA
?>