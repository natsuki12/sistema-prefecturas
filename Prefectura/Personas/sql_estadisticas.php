<?php
	//CONSULTA NÚMERO TOTAL DE CENSADOS 
		//GLOBAL SI ES ADMINISTRADOR
		if ($u_nivel==1) { //AGREGAR EL ID DEL ADMIN
			$sql = "SELECT COUNT(cedula) as total FROM censo";
			$query=$bdd->query($sql);
			$total_censado = $query->fetchAll(PDO::FETCH_OBJ);
		}

		//ESPECIFICO SEGUN OPERADOR
		if ($u_nivel==2) { //AGREGAR EL ID DEL OPERADOR
			$codigo = $u_prefectura;
			$sql = "SELECT COUNT(cedula) as total FROM censo 
					INNER JOIN parroquia ON censo.municipio_cod = parroquia.municipio_cod
					AND censo.parroquia_cod = parroquia.parroquia_cod
					WHERE parroquia.prefectura_cod = :prefectura";
			$query = $bdd->prepare($sql);
		    $query->execute(array(":prefectura"=>$codigo));
		    $total_censado = $query->fetchAll(PDO::FETCH_OBJ); 
		}
	//FIN CONSULTA NUMERO TOTAL DE CENSADOS

	//CONSULTA ESPECIFICA DE CENSADOS POR MUNICIPIO Y PARROQUIA
		//GLOBAL SI ES ADMINISTRADOR
		if ($u_nivel==1) { //AGREGAR EL ID DEL ADMIN
			$sql = "SELECT COUNT(cedula) as total, municipio_cod, parroquia_cod FROM `censo` 
					GROUP BY municipio_cod, parroquia_cod";
			$query=$bdd->query($sql);
			$total_municipio = $query->fetchAll(PDO::FETCH_OBJ);
		}

		//ESPECIFICO SEGUN OPERADOR
		if ($u_nivel==2) { //AGREGAR EL ID DEL OPERADOR
			$codigo = $u_prefectura;
			$sql = "SELECT COUNT(cedula) as total, censo.municipio_cod, censo.parroquia_cod FROM `censo` 
					INNER JOIN parroquia ON censo.municipio_cod = parroquia.municipio_cod 
					WHERE parroquia.prefectura_cod = :prefectura 
					GROUP BY censo.municipio_cod, censo.parroquia_cod";
			$query = $bdd->prepare($sql);
		    $query->execute(array(":prefectura"=>$codigo));
		    $total_municipio = $query->fetchAll(PDO::FETCH_OBJ); 
		}
	//FIN CONSULTA ESPECIFICA DE CENSADOS POR MUNICIPIO Y PARROQUIA
?>