<?php
	require("../config/connect.php");

	$vida=55; //limite min para pedir fe de vida

	/////////////////////////////////////////datos del solicitante ///////////////////////////////////////////////
	
	if (isset($_POST["btnsubmit"])) {
		$solicitud=$_POST["solicitud"];
		$cedula_s=$_POST["cedula_s"];
		$municipio_s=$_POST["municipio_s"];
		$parroquia_s=$_POST["parroquia_s"];
		$direccion1_s=$_POST["direccion1_s"];
		if ($_POST["direccion2_s"]!=null) {
			$direccion2_s=$_POST["direccion2_s"];
		}else{
			$direccion2_s=null;
		}
		
		/////////////////////////////////////// comprobar si la ci existe y es mayor de edad //////////////////////////

		$bdd->beginTransaction();

		$sql="SELECT * FROM CENSO WHERE CEDULA=:cedu";
		$query=$bdd->prepare($sql);
		$query->bindValue(":cedu",$cedula_s);
		$query->execute();

		if ($query->rowCount()>0) {

			// existe
			$s_datos=$query->fetch(PDO::FETCH_ASSOC);
			$profesion_s=$s_datos["profesion"];
			$fecha= new DateTime($s_datos["fecha_nacimiento"]);
			$actual= new DateTime(date("Y-m-d"));
			$dif=$fecha->diff($actual);

			// datos del solicitante
			$nombre1_s=$s_datos["nombre1"];
			$apellido1_s=$s_datos["apellido1"];

			if ($dif->y>=18) {

				//es mayor
				//actualizar direccion
				$sql="UPDATE CENSO SET MUNICIPIO_COD=:muni, PARROQUIA_COD=:parro, DIRECCION1=:dir1, DIRECCION2=:dir2 WHERE CEDULA=:cedu";
				$query=$bdd->prepare($sql);
				$query->execute(array(":muni"=>$municipio_s, ":parro"=>$parroquia_s, ":dir1"=>$direccion1_s, ":dir2"=>$direccion2_s, ":cedu"=>$cedula_s));

				//obtiene al prefecto
				$sql="SELECT prefectura.prefectura_prefecto, prefectura.prefectura_cod FROM municipio INNER JOIN parroquia ON municipio.municipio_cod=parroquia.municipio_cod INNER JOIN prefectura ON parroquia.prefectura_cod=prefectura.prefectura_cod WHERE municipio.municipio_cod=$municipio_s AND parroquia.parroquia_cod=$parroquia_s";
	 			$dato=$bdd->query($sql)->fetch(PDO::FETCH_OBJ);
				$prefecto=$dato->prefectura_prefecto;
				$prefectura=$dato->prefectura_cod;

				switch ($solicitud) {
			
				//mudanza
				case 'F-PF-01':
				////////////////////////////////// Recoge los valores del formulario /////////////////////////////////
					$marca_v=$_POST["marca_v"];
					$modelo_v=$_POST["modelo_v"];
					$ano_v=$_POST["ano_v"];
					$color_v=$_POST["color_v"];
					$serial_v=$_POST["serial_v"];
					$placa_v=$_POST["placa_v"];
					$nombre_c=$_POST["nombre_c"];
					$cedula_c=$_POST["cedula_c"];
					$carnet_c=$_POST["codigo_c"];
					$telefono_c=$_POST["telefono_c"];
					$estado_n=$_POST["estado_n"];
					$direccion_n=$_POST["direccion_n"];
					$residencia_a=$_POST["residencia_a"];
					
					try{

						///////////////////////////////// INSERT DEL VEHICULO Y CONDUCTOR //////////////////////////////

						$sql="INSERT INTO VEHICULO (PLACA, MARCA, MODELO, COLOR, YEAR, CARROCERIA_SERIAL, CONDUCTOR, CEDULA, TELEFONO, CARNET_CIRCULACION) VALUES (:placa, :marca, :modelo, :color, :year, :carroceria, :conductor, :cedula, :telefono, :carnet)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":placa"=>$placa_v, ":marca"=>$marca_v, ":modelo"=>$modelo_v, ":color"=>$color_v, ":year"=>$ano_v, ":carroceria"=>$serial_v, ":conductor"=>$nombre_c, ":cedula"=>$cedula_c, ":telefono"=>$telefono_c, ":carnet"=>$carnet_c));

						$v_id=$bdd->lastInsertId(); /// toma el id del vehiculo recien agregado

						//////////////////////////////// INSERT DATOS EN LA TABLA TRAMITES ///////////////////////////////

						$sql="INSERT INTO TRAMITE (MUNICIPIO_COD, PREFECTURA_COD, TIPO_TRAMITE, CEDULA_SOLICITANTE, PREFECTO, FECHA) VALUES (:muni, :prefectura, :tramite, :cedula, :prefecto, NOW())";
						$query=$bdd->prepare($sql);
						$query->execute(array(":muni"=>$municipio_s, ":prefectura"=>$prefectura, ":tramite"=>$solicitud, ":cedula"=>$cedula_s, ":prefecto"=>$prefecto));

						$t_id=$bdd->lastInsertId(); /// toma el id del tramite

						/////////////////////////////// INSERT DATOS EN LA TABLA TRAMITES INFO /////////////////////////////

						$sql="INSERT INTO TRAMITE_INFO (TRAMITE_COD, TIPO_TRAMITE, VEHICULO_COD, DIRECCION_NUEVA, ESTADO_NUEVO, ESTADIA) VALUES (:tramite, :tipo, :v_cod, :dirn, :estado, :estadia)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":tramite"=>$t_id, ":tipo"=>$solicitud, ":v_cod"=>$v_id, ":dirn"=>$direccion_n, ":estado"=>$estado_n, ":estadia"=>$residencia_a));

						$bdd->commit();
						include("pdf/mudanza.php");
						//echo "fino mudanza";/////////////////////////////////////////////////////////////////////////////////borrar

					} catch (PDOException $e){
						$bdd->rollback(); 
						echo $e->getMessage()." Linea: ".$e->getLine();
					}
					break;

				//regimen de equipaje
				case 'F-PF-02':
				////////////////////////////////// Recoge los valores del formulario /////////////////////////////////
					$marca_v=$_POST["marca_v"];
					$modelo_v=$_POST["modelo_v"];
					$ano_v=$_POST["ano_v"];
					$color_v=$_POST["color_v"];
					$serial_v=$_POST["serial_v"];
					$placa_v=$_POST["placa_v"];
					$nombre_c=$_POST["nombre_c"];
					$cedula_c=$_POST["cedula_c"];
					$carnet_c=$_POST["codigo_c"];
					$telefono_c=$_POST["telefono_c"];
					$estado_n=$_POST["estado_n"];
					$direccion_n=$_POST["direccion_n"];
					$residencia_a=$_POST["residencia_a"];
					
					try{

						///////////////////////////////// INSERT DEL VEHICULO Y CONDUCTOR //////////////////////////////

						$sql="INSERT INTO VEHICULO (PLACA, MARCA, MODELO, COLOR, YEAR, CARROCERIA_SERIAL, CONDUCTOR, CEDULA, TELEFONO, CARNET_CIRCULACION) VALUES (:placa, :marca, :modelo, :color, :year, :carroceria, :conductor, :cedula, :telefono, :carnet)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":placa"=>$placa_v, ":marca"=>$marca_v, ":modelo"=>$modelo_v, ":color"=>$color_v, ":year"=>$ano_v, ":carroceria"=>$serial_v, ":conductor"=>$nombre_c, ":cedula"=>$cedula_c, ":telefono"=>$telefono_c, ":carnet"=>$carnet_c));

						$v_id=$bdd->lastInsertId(); /// toma el id del vehiculo recien agregado

						//////////////////////////////// INSERT DATOS EN LA TABLA TRAMITES ///////////////////////////////

						$sql="INSERT INTO TRAMITE (MUNICIPIO_COD, PREFECTURA_COD, TIPO_TRAMITE, CEDULA_SOLICITANTE, PREFECTO, FECHA) VALUES (:muni, :prefectura, :tramite, :cedula, :prefecto, NOW())";
						$query=$bdd->prepare($sql);
						$query->execute(array(":muni"=>$municipio_s, ":prefectura"=>$prefectura, ":tramite"=>$solicitud, ":cedula"=>$cedula_s, ":prefecto"=>$prefecto));

						$t_id=$bdd->lastInsertId(); /// toma el id del tramite

						//////////////////////////// INSERT DATOS EN LA TABLA TRAMITES INFO /////////////////////////////

						$sql="INSERT INTO TRAMITE_INFO (TRAMITE_COD, TIPO_TRAMITE, VEHICULO_COD, DIRECCION_NUEVA, ESTADO_NUEVO, ESTADIA) VALUES (:tramite, :tipo, :v_cod, :dirn, :estado, :estadia)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":tramite"=>$t_id, ":tipo"=>$solicitud, ":v_cod"=>$v_id, ":dirn"=>$direccion_n, ":estado"=>$estado_n, ":estadia"=>$residencia_a));

						$bdd->commit();
						// echo "fino buena conducta";
						include("pdf/EQUIPAJE.php");



					} catch (PDOException $e){
						$bdd->rollback(); 
						echo $e->getMessage()." Linea: ".$e->getLine();
					}
					break;
				
				//permiso de viaje
				case 'F-PF-03':
				////////////////////////////////// Recoge los valores del formulario /////////////////////////////////
					try{
						////////////// INFORMACION HIJO ///////////////////////////
						$nombre1_h=$_POST["nombre1_h"];
						if ($_POST["nombre2_h"]!=null) {
							$nombre2_h=$_POST["nombre2_h"];
						}else{
							$nombre2_h=null;
						}
						$apellido1_h=$_POST["apellido1_h"];
						if ($_POST["apellido2_h"]!=null) {
							$apellido2_h=$_POST["apellido2_h"];
						}else{
							$apellido2_h=null;
						}
						if ($_POST["cedula_h"]!=null) {
							$cedula_h=$_POST["cedula_h"];
						}else{
							$cedula_h=$cedula_s;
						}
						$fecha_h=$_POST["fecha_n_h"];

						/////////////// INFORMACION DEL ACOMPAÑANTE ///////////////
						$nombre1_a=$_POST["nombre1_a"];
						if ($_POST["nombre2_a"]!=null) {
							$nombre2_a=$_POST["nombre2_a"];
						}else{
							$nombre2_a=null;
						}
						$apellido1_a=$_POST["apellido1_a"];
						if ($_POST["apellido2_a"]!=null) {
							$apellido2_a=$_POST["apellido2_a"];
						}else{
							$apellido2_a=null;
						}
						$cedula_a=$_POST["cedula_a"];
						$telefono_a=$_POST["telefono_a"];
						$fecha_a=$_POST["fecha_n_a"];
						$municipio_a=$_POST["municipio_a"];
						$parroquia_a=$_POST["parroquia_a"];
						$direccion1_a=$_POST["direccion1_a"];
						if ($_POST["direccion2_a"]!=null) {
							$direccion2_a=$_POST["direccion2_a"];
						}else{
							$direccion2_a=null;
						}

						/////////////////// DIRECCION DEL VIAJE ///////////////////
						$estado_v=$_POST["estado_v"];
						$direccion_v=$_POST["direccion_v"];


						//////////////////// verificando si el acompañante es mayor de edad ///////////////////
						$fec_a= new DateTime($fecha_a);
						$dif=$fec_a->diff($actual);
						$fec_h= new DateTime($fecha_h);
						$dif2=$fec_a->diff($actual);

						if (($dif->y>=18)&&($dif2->y<18)) {
							/////////////////////////////////// INSERT TABLA HIJO ////////////////////////////////
							$sql="INSERT INTO HIJO (HIJO_NOMBRE1, HIJO_NOMBRE2, HIJO_APELLIDO1, HIJO_APELLIDO2, HIJO_NACIMIENTO, HIJO_CEDULA, HIJO_REPRESENTANTE_CI) VALUES (:nom1, :nom2, :apell1, :apell2, :naci, :cedula, :repreci)";
							$query=$bdd->prepare($sql);
							$query->execute(array(":nom1"=>$nombre1_h, ":nom2"=>$nombre2_h, ":apell1"=>$apellido1_h, ":apell2"=>$apellido2_h, ":naci"=>$fecha_h, ":cedula"=>$cedula_h, ":repreci"=>$cedula_s));
							$hijo_id=$bdd->lastInsertId();

							////////////////////////////////// INSERT TABLA ACOMPAÑANTE //////////////////////////
							$sql="INSERT INTO ACOMPANANTE (ACOMPANANTE_NOMBRE1, ACOMPANANTE_NOMBRE2, ACOMPANANTE_APELLIDO1, ACOMPANANTE_APELLIDO2, ACOMPANANTE_CEDULA, ACOMPANANTE_NACIMIENTO, ACOMPANANTE_TELEFONO, ACOMPANANTE_MUNICIPIO_COD, ACOMPANANTE_PARROQUIA_COD, ACOMPANANTE_DIRECCION1, ACOMPANANTE_DIRECCION2) VALUES (:nom1, :nom2, :apell1, :apell2, :cedula, :naci, :tele, :muni, :parro, :dir1, :dir2)";
							$query=$bdd->prepare($sql);
							$query->execute(array(":nom1"=>$nombre1_a, ":nom2"=>$nombre2_a, ":apell1"=>$apellido1_a, ":apell2"=>$apellido2_a, ":cedula"=>$cedula_a, ":naci"=>$fecha_a, ":tele"=>$telefono_a, ":muni"=>$municipio_a, ":parro"=>$parroquia_a, ":dir1"=>$direccion1_a, ":dir2"=>$direccion2_a));
							$acompanante_id=$bdd->lastInsertId();

							////////////////////////////////// INSERT TABLA TRAMITE //////////////////////////////

							$sql="INSERT INTO TRAMITE (MUNICIPIO_COD, PREFECTURA_COD, TIPO_TRAMITE, CEDULA_SOLICITANTE, PREFECTO, FECHA) VALUES (:muni, :prefectura, :tramite, :cedula, :prefecto, NOW())";
							$query=$bdd->prepare($sql);
							$query->execute(array(":muni"=>$municipio_s, ":prefectura"=>$prefectura, ":tramite"=>$solicitud, ":cedula"=>$cedula_s, ":prefecto"=>$prefecto));
							$t_id=$bdd->lastInsertId(); /// toma el id del tramite

							////////////////////////////////// INSERT TABLA TRAMITE INFO //////////////////////////
							$sql="INSERT INTO TRAMITE_INFO (TRAMITE_COD, TIPO_TRAMITE, HIJO_COD, ACOMPANANTE_COD, ESTADO_VIAJE, DIRECCION_VIAJE) VALUES (:tramite, :tipo, :hijo, :acompanante, :estado, :dir)";
							$query=$bdd->prepare($sql);
							$query->execute(array(":tramite"=>$t_id, ":tipo"=>$solicitud, ":hijo"=>$hijo_id, ":acompanante"=>$acompanante_id, ":estado"=>$estado_v, ":dir"=>$direccion_v));

							$bdd->commit();
							include("pdf/AUTORIZACION-VIAJE.php");
							//echo "fino acompañante";/////////////////////////////////////////////////borrar

						}else{
							$bdd->rollback();
							echo "el acompañante menor o el hijo es mayor";
						}
						
					}catch(PDOException $e){
						$bdd->rollback();
						echo $e->getMessage()." Linea: ".$e->getLine();
					}
					break;

				//fe de vida
				case 'F-PF-04':
				////////////////////////////////// Recoge los valores del formulario /////////////////////////////////
					if ($dif->y>=$vida) {
						/////////////TESTIGO 1 /////////////
						$nombre1_t1=$_POST["nombre1_t1"];

						if ($_POST["nombre2_t1"]!=null) {
							$nombre2_t1=$_POST["nombre2_t1"];
						}else{
							$nombre2_t1=null;
						}

						$apellido1_t1=$_POST["apellido2_t1"];

						if ($_POST["apellido2_t1"]!=null) {
							$apellido2_t1=$_POST["apellido2_t1"];
						}else{
							$apellido2_t1=null;
						}

						$apellido2_t1=$_POST["apellido2_t1"];
						$cedula_t1=$_POST["cedula_t1"];
						$profesion_t1=$_POST["profesion_t1"];
						$municipio_t1=$_POST["municipio_t1"];
						$parroquia_t1=$_POST["parroquia_t1"];
						$direccion1_t1=$_POST["direccion1_t1"];

						if ($_POST["direccion2_t1"]!=null) {
							$direccion2_t1=$_POST["direccion2_t1"];
						}else{
							$direccion2_t1=null;
						}

						$telefono1_t1=$_POST["telefono1_t1"];

						if ($_POST["telefono2_t1"]!=null) {
							$telefono2_t1=$_POST["telefono2_t1"];
						}else{
							$telefono2_t1=null;
						}

						/////////////TESTIGO 2 /////////////
						$nombre1_t2=$_POST["nombre1_t2"];
						if ($_POST["nombre2_t2"]!=null) {
							$nombre2_t2=$_POST["nombre2_t2"];
						}else{
							$nombre2_t2=null;
						}
						$apellido1_t2=$_POST["apellido1_t2"];
						if ($_POST["apellido2_t2"]!=null) {
							$apellido2_t2=$_POST["apellido2_t2"];
						}else{
							$apellido2_t2=null;
						}
						$cedula_t2=$_POST["cedula_t2"];
						$profesion_t2=$_POST["profesion_t2"];
						$municipio_t2=$_POST["municipio_t2"];
						$parroquia_t2=$_POST["parroquia_t2"];
						$direccion1_t2=$_POST["direccion1_t2"];

						if ($_POST["direccion2_t2"]!=null) {
							$direccion2_t2=$_POST["direccion2_t2"];
						}else{
							$direccion2_t2=null;
						}

						$telefono1_t2=$_POST["telefono1_t2"];

						if ($_POST["telefono2_t2"]!=null) {
							$telefono2_t2=$_POST["telefono2_t2"];
						}else{
							$telefono2_t2=null;
						}

						try{
							////////////////////////////////////// INSERT TESTIGO 1//////////////////////////////////////
							$sql="INSERT INTO TESTIGO (NOMBRE1, NOMBRE2, APELLIDO1, APELLIDO2, CEDULA, PROFESION, DIRECCION1, DIRECCION2, PARROQUIA_COD, MUNICIPIO_COD, TELEFONO1, TELEFONO2) VALUES (:nomb1, :nomb2, :apell1, :apell2, :cedula, :profe, :dir1, :dir2, :parroquia, :municipio, :tel1, :tel2)";
							$query=$bdd->prepare($sql);
							$query->execute(array(":nomb1"=>$nombre1_t1, ":nomb2"=>$nombre2_t1, ":apell1"=>$apellido1_t1, ":apell2"=>$apellido2_t1, ":cedula"=>$cedula_t1, ":profe"=>$profesion_t1, ":dir1"=>$direccion1_t1, ":dir2"=>$direccion2_t1, ":parroquia"=>$parroquia_t1, ":municipio"=>$municipio_t1, ":tel1"=>$telefono1_t1, ":tel2"=>$telefono2_t1));
							$t1_id=$bdd->lastInsertId();

							///////////////////////////////////// INSERT TESTIGO 2////////////////////////////////////
							$sql="INSERT INTO TESTIGO (NOMBRE1, NOMBRE2, APELLIDO1, APELLIDO2, CEDULA, PROFESION, DIRECCION1, DIRECCION2, PARROQUIA_COD, MUNICIPIO_COD, TELEFONO1, TELEFONO2) VALUES (:nomb1, :nomb2, :apell1, :apell2, :cedula, :profe, :dir1, :dir2, :parroquia, :municipio, :tel1, :tel2)";
							$query=$bdd->prepare($sql);
							$query->execute(array(":nomb1"=>$nombre1_t2, ":nomb2"=>$nombre2_t2, ":apell1"=>$apellido1_t2, ":apell2"=>$apellido2_t2, ":cedula"=>$cedula_t2, ":profe"=>$profesion_t2, ":dir1"=>$direccion1_t2, ":dir2"=>$direccion2_t2, ":parroquia"=>$parroquia_t2, ":municipio"=>$municipio_t2, ":tel1"=>$telefono1_t2, ":tel2"=>$telefono2_t2));
							$t2_id=$bdd->lastInsertId();

							///////////////// ///////////////// INSERT TABLA TRAMITE /////////////////////////////////////
							$sql="INSERT INTO TRAMITE (MUNICIPIO_COD, PREFECTURA_COD, TIPO_TRAMITE, CEDULA_SOLICITANTE, PREFECTO, FECHA) VALUES (:muni, :prefe, :tipo, :cedula, :prefecto, NOW())";
							$query=$bdd->prepare($sql);
							$query->execute(array(":muni"=>$municipio_s, ":prefe"=>$prefectura, ":tipo"=>$solicitud, ":cedula"=>$cedula_s, ":prefecto"=>$prefecto));
							$tramite_id=$bdd->lastInsertId();

							///////////////////////////////// INSERT TABLA TRAMITE INFO  /////////////////////////////////
							$sql="INSERT INTO TRAMITE_INFO (TRAMITE_COD, TIPO_TRAMITE, TESTIGO1_COD, TESTIGO2_COD) VALUES (:idtramite, :tipo, :idt1, :idt2)";
							$query=$bdd->prepare($sql);
							$query->execute(array(":idtramite"=>$tramite_id, ":tipo"=>$solicitud, ":idt1"=>$t1_id, ":idt2"=>$t2_id));

							$bdd->commit();
							include("pdf/FE-VIDA.php");
							//echo "fino fe de vida";///////////////////////////////////////////////////////////////borrar
						}catch (PDOException $e){
							$bdd->rollback(); 
							echo $e->getMessage()." Linea: ".$e->getLine();
						}
					}else{
						$bdd->rollback();
						echo "es menor";
					}
					break;

				//dependencia
				case 'F-PF-05':
				////////////////////////////////// Recoge los valores del formulario /////////////////////////////////
					try{
						$nombre1_d=$_POST["nombre1_d"];
						$nombre2_d=$_POST["nombre2_d"];
						$apellido1_d=$_POST["apellido1_d"];
						$apellido2_d=$_POST["apellido2_d"];
						$cedula_d=$_POST["cedula_d"];
						$profesion_d=$_POST["profesion_d"];
						$municipio_d=$_POST["municipio_d"];
						$parroquia_d=$_POST["parroquia_d"];
						$direccion1_d=$_POST["direccion1_d"];
						$direccion2_d=$_POST["direccion2_d"];
						$tele1_d=$_POST["telefono1_d"];
						$tele2_d=$_POST["telefono2_d"];

						///////////////////////////////////// INSERT TABLA DEPENDIENTE ///////////////////////////////////
						$sql="INSERT INTO DEPENDIENTE (DEPENDIENTE_NOMBRE1, DEPENDIENTE_NOMBRE2, DEPENDIENTE_APELLIDO1, DEPENDIENTE_APELLIDO2, DEPENDIENTE_CEDULA, DEPENDIENTE_TELEFONO1, DEPENDIENTE_TELEFONO2, DEPENDIENTE_PROFESION, DEPENDIENTE_MUNICIPIO_COD, DEPENDIENTE_PARROQUIA_COD, DEPENDIENTE_DIRECCION1, DEPENDIENTE_DIRECCION2) VALUES (:nom1, :nom2, :apell1, :apell2, :cedula, :tel1, :tel2, :profesion, :muni, :parro, :dir1, :dir2)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":nom1"=>$nombre1_d, ":nom2"=>$nombre2_d, ":apell1"=>$apellido1_d, ":apell2"=>$apellido2_d, ":cedula"=>$cedula_d, ":tel1"=>$tele1_d, ":tel2"=>$tele2_d, ":profesion"=>$profesion_d, ":muni"=>$municipio_d, ":parro"=>$parroquia_d, ":dir1"=>$direccion1_d, ":dir2"=>$direccion2_d));
						$dependiente_id=$bdd->lastInsertId();

						///////////////////////////////////// INSERT TABLA TRAMITE ///////////////////////////////////////
						$sql="INSERT INTO TRAMITE (MUNICIPIO_COD, PREFECTURA_COD, TIPO_TRAMITE, CEDULA_SOLICITANTE, PREFECTO, FECHA) VALUES (:muni, :prefe, :tipo, :cedula, :prefecto, NOW())";
						$query=$bdd->prepare($sql);
						$query->execute(array(":muni"=>$municipio_s, ":prefe"=>$prefectura, ":tipo"=>$solicitud, ":cedula"=>$cedula_s, ":prefecto"=>$prefecto));
						$tramite_id=$bdd->lastInsertId();

						///////////////////////////////// INSERT TABLA TRAMITE INFO  /////////////////////////////////
						$sql="INSERT INTO TRAMITE_INFO (TRAMITE_COD, TIPO_TRAMITE, DEPENDENCIA_COD) VALUES (:idtramite, :tipo, :iddepen)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":idtramite"=>$tramite_id, ":tipo"=>$solicitud, ":iddepen"=>$dependiente_id));

						$bdd->commit();
						include("pdf/DEPENDENCIA-ECONOMICA.php");
						//echo "fino dependiente";///////////////////////////////////////////////////////////////borrar
					}catch(PDOException $e){
						$bdd->rollback(); 
						echo $e->getMessage()." Linea: ".$e->getLine();
					}
					break;

				//buena conducta
				case 'F-PF-06':
				////////////////////////////////// recoge los valores del formularios /////////////////////////////////

					/////////////TESTIGO 1 /////////////
					$nombre1_t1=$_POST["nombre1_t1"];
					if ($_POST["nombre2_t1"]!=null) {
						$nombre2_t1=$_POST["nombre2_t1"];
					}else{
						$nombre2_t1=null;
					}
					$apellido1_t1=$_POST["apellido2_t1"];
					if ($_POST["apellido2_t1"]!=null) {
						$apellido2_t1=$_POST["apellido2_t1"];
					}else{
						$apellido2_t1=null;
					}
					$cedula_t1=$_POST["cedula_t1"];
					$profesion_t1=$_POST["profesion_t1"];
					$municipio_t1=$_POST["municipio_t1"];
					$parroquia_t1=$_POST["parroquia_t1"];
					$direccion1_t1=$_POST["direccion1_t1"];
					if ($_POST["direccion2_t1"]!=null) {
						$direccion2_t1=$_POST["direccion2_t1"];
					}else{
						$direccion2_t1=null;
					}
					$telefono1_t1=$_POST["telefono1_t1"];
					if ($_POST["telefono2_t1"]!=null) {
						$telefono2_t1=$_POST["telefono2_t1"];
					}else{
						$telefono2_t1=null;
					}

					/////////////TESTIGO 2 /////////////
					$nombre1_t2=$_POST["nombre1_t2"];
					if ($_POST["nombre2_t2"]!=null) {
						$nombre2_t2=$_POST["nombre2_t2"];
					}else{
						$nombre2_t2=null;
					}
					$apellido1_t2=$_POST["apellido1_t2"];
					if ($_POST["apellido2_t2"]!=null) {
						$apellido2_t2=$_POST["apellido2_t2"];
					}else{
						$apellido2_t2=null;
					}
					$cedula_t2=$_POST["cedula_t2"];
					$profesion_t2=$_POST["profesion_t2"];
					$municipio_t2=$_POST["municipio_t2"];
					$parroquia_t2=$_POST["parroquia_t2"];
					$direccion1_t2=$_POST["direccion1_t2"];
					if ($_POST["direccion2_t2"]!=null) {
						$direccion2_t2=$_POST["direccion2_t2"];
					}else{
						$direccion2_t2=null;
					}
					$telefono1_t2=$_POST["telefono1_t2"];
					if ($_POST["telefono2_t2"]!=null) {
						$telefono2_t2=$_POST["telefono2_t2"];
					}else{
						$telefono2_t2=null;
					}

					try{
						//////////////////////////////////////// INSERT TESTIGO 1////////////////////////////////////////
						$sql="INSERT INTO TESTIGO (NOMBRE1, NOMBRE2, APELLIDO1, APELLIDO2, CEDULA, PROFESION, DIRECCION1, DIRECCION2, PARROQUIA_COD, MUNICIPIO_COD, TELEFONO1, TELEFONO2) VALUES (:nomb1, :nomb2, :apell1, :apell2, :cedula, :profe, :dir1, :dir2, :parroquia, :municipio, :tel1, :tel2)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":nomb1"=>$nombre1_t1, ":nomb2"=>$nombre2_t1, ":apell1"=>$apellido1_t1, ":apell2"=>$apellido2_t1, ":cedula"=>$cedula_t1, ":profe"=>$profesion_t1, ":dir1"=>$direccion1_t1, ":dir2"=>$direccion2_t1, ":parroquia"=>$parroquia_t1, ":municipio"=>$municipio_t1, ":tel1"=>$telefono1_t1, ":tel2"=>$telefono2_t1));
						$t1_id=$bdd->lastInsertId();

						//////////////////////////////////////// INSERT TESTIGO 2////////////////////////////////////////
						$sql="INSERT INTO TESTIGO (NOMBRE1, NOMBRE2, APELLIDO1, APELLIDO2, CEDULA, PROFESION, DIRECCION1, DIRECCION2, PARROQUIA_COD, MUNICIPIO_COD, TELEFONO1, TELEFONO2) VALUES (:nomb1, :nomb2, :apell1, :apell2, :cedula, :profe, :dir1, :dir2, :parroquia, :municipio, :tel1, :tel2)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":nomb1"=>$nombre1_t2, ":nomb2"=>$nombre2_t2, ":apell1"=>$apellido1_t2, ":apell2"=>$apellido2_t2, ":cedula"=>$cedula_t2, ":profe"=>$profesion_t2, ":dir1"=>$direccion1_t2, ":dir2"=>$direccion2_t2, ":parroquia"=>$parroquia_t2, ":municipio"=>$municipio_t2, ":tel1"=>$telefono1_t2, ":tel2"=>$telefono2_t2));
						$t2_id=$bdd->lastInsertId();

						//////////////////////////////////// INSERT TABLA TRAMITE ////////////////////////////////////////
						$sql="INSERT INTO TRAMITE (MUNICIPIO_COD, PREFECTURA_COD, TIPO_TRAMITE, CEDULA_SOLICITANTE, PREFECTO, FECHA) VALUES (:muni, :prefe, :tipo, :cedula, :prefecto, NOW())";
						$query=$bdd->prepare($sql);
						$query->execute(array(":muni"=>$municipio_s, ":prefe"=>$prefectura, ":tipo"=>$solicitud, ":cedula"=>$cedula_s, ":prefecto"=>$prefecto));
						$tramite_id=$bdd->lastInsertId();

						////////////////////////////////// INSERT TABLA TRAMITE INFO  ///////////////////////////////////
						$sql="INSERT INTO TRAMITE_INFO (TRAMITE_COD, TIPO_TRAMITE, TESTIGO1_COD, TESTIGO2_COD) VALUES (:idtramite, :tipo, :idt1, :idt2)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":idtramite"=>$tramite_id, ":tipo"=>$solicitud, ":idt1"=>$t1_id, ":idt2"=>$t2_id));

						$bdd->commit();
						// echo "fino buena conducta";
						include("pdf/BUENA-CONDUCTA.php");

					}catch(PDOException $e){
						$bdd->rollback(); 
						echo $e->getMessage()." Linea: ".$e->getLine();
					}
					break;

				//evento
				case 'F-PF-07':
				////////////////////////////////// recoge los valores del formularios /////////////////////////////////
					try{
						$nombre_e=$_POST["nombre_e"];
						$coordinador_nombre=$_POST["coordinador_nombre"];
						$coordinador_apellido=$_POST["coordinador_apellido"];
						$empresa_nom=$_POST["nombre_ee"];
						$empresa_rif=$_POST["rif_e"];
						$fecha_inicio=$_POST["fecha_i"];
						$fecha_cierre=$_POST["fecha_c"];
						$hora_inicio=$_POST["hora_i"];
						$hora_cierre=$_POST["hora_c"];
						$municipio_e=$_POST["municipio_e"];
						$parroquia_e=$_POST["parroquia_e"];
						$direccion1_e=$_POST["direccion1_e"];
						//$direccion2_e=$_POST["direccion2_e"];
						$telefono1_e=$_POST["telefono1_e"];
						$telefono2_e=$_POST["telefono2_e"];
						$cargo_e=$_POST["cargo_e"];
						$cedula_e=$_POST["cedula_e"];

						//obtiene al prefecto para el evento
						$sql="SELECT prefectura.prefectura_prefecto FROM municipio INNER JOIN parroquia ON municipio.municipio_cod=parroquia.municipio_cod INNER JOIN prefectura ON parroquia.prefectura_cod=prefectura.prefectura_cod WHERE municipio.municipio_cod=$municipio_e AND parroquia.parroquia_cod=$parroquia_e";
			 			$dato=$bdd->query($sql)->fetch(PDO::FETCH_OBJ);
						$prefecto=$dato->prefectura_prefecto;

						//////////////////////////////////// INSERT TABLA EVENTO //////////////////////////////////////
						$sql="INSERT INTO EVENTO (EVENTO_NOMBRE, EVENTO_COORDINADOR_NOMBRE, EVENTO_COORDINADOR_APELLIDO, EVENTO_EMPRESA, EVENTO_RIF, EVENTO_FINICIO, EVENTO_FCIERRE, EVENTO_HINICIO, EVENTO_HCIERRE, EVENTO_MUNICIPIO_COD, EVENTO_PARROQUIA_COD, EVENTO_DIRECCION1, EVENTO_TELEFONO1, EVENTO_TELEFONO2, EVENTO_COORDINADOR_CARGO, EVENTO_COORDINADOR_CEDULA) VALUES (:nom, :coor_nom, :coor_apel, :empre, :rif, :fi, :fc, :hi, :hc, :muni, :parro, :dir1, :tel1, :tel2, :cargo, :cedula)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":nom"=>$nombre_e, ":coor_nom"=>$coordinador_nombre, ":coor_apel"=>$coordinador_apellido, ":empre"=>$empresa_nom, ":rif"=>$empresa_rif, ":fi"=>$fecha_inicio, ":fc"=>$fecha_cierre, ":hi"=>$hora_inicio, ":hc"=>$hora_cierre, ":muni"=>$municipio_e, ":parro"=>$parroquia_e, ":dir1"=>$direccion1_e, ":tel1"=>$telefono1_e, ":tel2"=>$telefono2_e, ":cargo"=>$cargo_e, ":cedula"=>$cedula_e));
						$evento_id=$bdd->lastInsertId();

						/////////////////////////////////// INSERT TABLA TRAMITE //////////////////////////////////////
						$sql="INSERT INTO TRAMITE (MUNICIPIO_COD, PREFECTURA_COD, TIPO_TRAMITE, CEDULA_SOLICITANTE, PREFECTO, FECHA) VALUES (:muni, :prefe, :tipo, :cedula, :prefecto, NOW())";
						$query=$bdd->prepare($sql);
						$query->execute(array(":muni"=>$municipio_e, ":prefe"=>$prefectura, ":tipo"=>$solicitud, ":cedula"=>$cedula_s, ":prefecto"=>$prefecto));
						$tramite_id=$bdd->lastInsertId();

						/////////////////////////////////// INSERT TABLA TRAMITE INFO //////////////////////////////////
						$sql="INSERT INTO TRAMITE_INFO (TRAMITE_COD, TIPO_TRAMITE, EVENTO_COD) VALUES (:idtramite, :tipo, :eveid)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":idtramite"=>$tramite_id, ":tipo"=>$solicitud, ":eveid"=>$evento_id));

						$bdd->commit();
						INCLUDE("pdf/evento.php");
						//echo "fino evento";/////////////////////////////////////////////////////////////////////borrar

					}catch(PDOException $e){
						$bdd->rollback();
						echo $e->getMessage()." Linea: ".$e->getLine();
					}
					

					break;

				//extravio
				case 'F-PF-08':
				////////////////////////////////// recoge los valores del formularios /////////////////////////////////
					try{
						///////////////// ///////////////// INSERT TABLA TRAMITE /////////////////////////////////////
						$sql="INSERT INTO TRAMITE (MUNICIPIO_COD, PREFECTURA_COD, TIPO_TRAMITE, CEDULA_SOLICITANTE, PREFECTO, FECHA) VALUES (:muni, :prefe, :tipo, :cedula, :prefecto, NOW())";
						$query=$bdd->prepare($sql);
						$query->execute(array(":muni"=>$municipio_s, ":prefe"=>$prefectura, ":tipo"=>$solicitud, ":cedula"=>$cedula_s, ":prefecto"=>$prefecto));
						$tramite_id=$bdd->lastInsertId();

						///////////////////////////////// INSERT TABLA TRAMITE INFO  /////////////////////////////////
						$sql="INSERT INTO TRAMITE_INFO (TRAMITE_COD, TIPO_TRAMITE) VALUES (:idtramite, :tipo)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":idtramite"=>$tramite_id, ":tipo"=>$solicitud));

						$bdd->commit();
						incluide("pdf/EXTRAVIO-DOCUMENTOS.php");
						echo "fino extravio";///////////////////////////////////////////////////////////////////////////borrar
					}catch(PDOException $e){
						$bdd->rollback(); 
						echo $e->getMessage()." Linea: ".$e->getLine();
					}
					break;
				default:
					$bdd->rollback();
					break;
				}

			}else{

				//es menor
				$bdd->rollback();
			}

		}else{

			//no existe
			$bdd->rollback();
		}
	}else{
		//no envio la solicitud
	}

?>