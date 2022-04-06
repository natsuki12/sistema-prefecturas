<?php
	function get_mpp($municipio, $parroquia, $control){
	 	include ("config/connect.php");
	 	$sql="SELECT parroquia.parroquia_nombre, municipio.municipio_nombre, prefectura.prefectura_prefecto, prefectura.direccion, prefectura.telefono1, prefectura.telefono2, parroquia.prefectura_cod FROM municipio INNER JOIN parroquia ON municipio.municipio_cod=parroquia.municipio_cod INNER JOIN prefectura ON parroquia.prefectura_cod=prefectura.prefectura_cod WHERE municipio.municipio_cod=$municipio AND parroquia.parroquia_cod=$parroquia";
	 	$dato=$bdd->query($sql)->fetch(PDO::FETCH_OBJ);
	 	switch ($control) {
	 		case '1':
	 			return $dato->municipio_nombre;
	 			break;

	 		case '2':
	 			return $dato->parroquia_nombre;
	 			break;

	 		case '3':
	 			return $dato->prefectura_prefecto;
	 			break;
	 		
	 		case '4':
	 			return $dato->prefectura_cod;
	 			break;

	 		case '5':
	 			return $dato->direccion;
	 			break;

	 		case '6':
	 			if ($dato->telefono2!=null) {
	 				return $dato->telefono1." / ".$dato->telefono2;
	 			}else{
	 				return $dato->telefono1;
	 			}
	 			break;
	 	}
	}
?>