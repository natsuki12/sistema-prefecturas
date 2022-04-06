<?php
	//CONSULTA NÚMERO TOTAL DE SOLICITUDES
		//GLOBAL SI ES ADMINISTRADOR
	if(isset($u_nivel)){
		if ($u_nivel==1) { //AGREGAR EL ID DEL ADMIN
			$sql = "SELECT COUNT(tramite_cod) as total, tipo_tramite FROM `tramite` GROUP BY tipo_tramite";
			$query=$bdd->query($sql);
			$total_solicitudes = $query->fetchAll(PDO::FETCH_OBJ);
		}

		//ESPECIFICO SEGUN OPERADOR
		if ($u_nivel==2) { //AGREGAR EL ID DEL OPERADOR
			$codigo = $u_prefectura;
			$sql = "SELECT COUNT(tramite_cod) as total, tipo_tramite FROM `tramite` 
					WHERE prefectura_cod = :prefectura GROUP BY tipo_tramite";
			$query = $bdd->prepare($sql);
		    $query->execute(array(":prefectura"=>$codigo));
		    $total_solicitudes = $query->fetchAll(PDO::FETCH_OBJ); 
		}
	}
	//FIN CONSULTA NUMERO TOTAL DE SOLICITUDES
?>