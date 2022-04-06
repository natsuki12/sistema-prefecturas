<?php 
	$filas=25;
	$pagina=1;
	if(isset($_GET["pagina"])){
		if ($_GET["pagina"]!=1) {
			$pagina=$_GET["pagina"];
		}elseif ($_GET["pagina"]<=1) {
			$pagina=1;
		}
	}

	if (isset($_GET["placa"])) {
		require("../config/connect.php");
		$busqueda=$_GET["placa"];
		$empezar=($pagina-1)*$filas;
		$sql="SELECT * FROM vehiculo WHERE vehiculo_cod = :busqueda";
		$query=$bdd->prepare($sql);
		$query->execute(array(":busqueda"=>$busqueda));
		$bdd_filas=$query->rowCount();
		$pgn_total=ceil($bdd_filas/$filas);
		$query->closeCursor();
		$sql="SELECT vehiculo_cod, placa, marca, modelo, color, año, carroseria_serial, conductor, cedula, telefono, carnet de circulacion
			  FROM vehiculo 
			  WHERE vehiculo_cod = :busqueda ORDER BY vehiculo_cod LIMIT $empezar, $filas";
		$query=$bdd->prepare($sql);
		$query->execute(array(":busqueda"=>$busqueda));
		$actividades=$query->fetchAll(PDO::FETCH_OBJ);
		$query->closeCursor();
		if (isset($_GET["ajax"])) {
			$actividades=(array)$actividades;
			$actividades[]=$bdd_filas;
			$actividades[]=$busqueda;
			$actividades[]=$pagina;
			$actividades[]=$pgn_total;
			echo json_encode($actividades);
		}
	}else if (isset($_GET["vehiculo"])) {
		if($_GET["carroseria_serial"]==0){
			require("../config/connect.php");
			$busqueda=$_GET["vehiculo"];
			$empezar=($pagina-1)*$filas;
			$sql="SELECT * FROM vehiculo WHERE carroceria_serial = :busqueda";
			$query=$bdd->prepare($sql);
			$query->execute(array(":busqueda"=>$busqueda));
			$bdd_filas=$query->rowCount();
			$pgn_total=ceil($bdd_filas/$filas);
			$query->closeCursor();
			$sql="SELECT vehiculo_cod, placa, marca, modelo, color, año, carroseria_serial, conductor, cedula, telefono, carnet de circulacion
			  FROM vehiculo 
			  WHERE vehiculo_cod = :busqueda ORDER BY vehiculo_cod LIMIT $empezar, $filas";
			$query=$bdd->prepare($sql);
			$query->execute(array(":busqueda"=>$busqueda));
			$actividades=$query->fetchAll(PDO::FETCH_OBJ);
			$query->closeCursor();
		
		}
		if (isset($_GET["ajax"])) {
			$actividades=(array)$actividades;
			$actividades[]=$bdd_filas;
			$actividades[]=$busqueda;
			$actividades[]=$pagina;
			$actividades[]=$pgn_total;
			echo json_encode($actividades);
		}

	/*<!-- DESARROLLADORES -->
	<!--
		Andres Ramirez: andresramirez2025@gmail.com / 0412-7942183 / www.linkedin.com/in/andres28ramirez
		Cesar Requena: cesar12piso09@gmail.com / 0416-0302290 / 
		Raimond Rivas: raimondrivas19@gmail.com / 0424-8195273 /
		Miguel Gil: miguel.gil.54@gmail.com / 0412-0810308 / 
	-->*/
?>