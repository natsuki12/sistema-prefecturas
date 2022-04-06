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

	if (isset($_GET["prefectura"])) {
		require("../config/connect.php");
		$busqueda=$_GET["prefectura"];
		$empezar=($pagina-1)*$filas;
		$sql="SELECT * FROM tramite WHERE prefectura_cod = :busqueda";
		$query=$bdd->prepare($sql);
		$query->execute(array(":busqueda"=>$busqueda));
		$bdd_filas=$query->rowCount();
		$pgn_total=ceil($bdd_filas/$filas);
		$query->closeCursor();
		$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, prefecto, estado, cedula_solicitante, DATE_FORMAT(fecha,'%Y/%m/%d') as fechat
			  FROM tramite 
			  WHERE prefectura_cod = :busqueda ORDER BY prefectura_cod LIMIT $empezar, $filas";
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
	}else if (isset($_GET["tramite"])) {
		if($_GET["codigo"]==0){
			require("../config/connect.php");
			$busqueda=$_GET["tramite"];
			$empezar=($pagina-1)*$filas;
			$sql="SELECT * FROM tramite WHERE tipo_tramite = :busqueda";
			$query=$bdd->prepare($sql);
			$query->execute(array(":busqueda"=>$busqueda));
			$bdd_filas=$query->rowCount();
			$pgn_total=ceil($bdd_filas/$filas);
			$query->closeCursor();
			$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, prefecto, estado, cedula_solicitante, DATE_FORMAT(fecha,'%Y/%m/%d') as fechat
				  FROM tramite 
				  WHERE tipo_tramite = :busqueda ORDER BY tipo_tramite LIMIT $empezar, $filas";
			$query=$bdd->prepare($sql);
			$query->execute(array(":busqueda"=>$busqueda));
			$actividades=$query->fetchAll(PDO::FETCH_OBJ);
			$query->closeCursor();
		}
		else{
			require("../config/connect.php");
			$codigo = $_GET["codigo"];
			$busqueda=$_GET["tramite"];
			$empezar=($pagina-1)*$filas;
			$sql="SELECT * FROM tramite WHERE tipo_tramite = :busqueda AND prefectura_cod = :prefectura";
			$query=$bdd->prepare($sql);
			$query->execute(array(":busqueda"=>$busqueda, ":prefectura"=>$codigo));
			$bdd_filas=$query->rowCount();
			$pgn_total=ceil($bdd_filas/$filas);
			$query->closeCursor();
			$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, prefecto, estado, cedula_solicitante, DATE_FORMAT(fecha,'%Y/%m/%d') as fechat
				  FROM tramite 
				  WHERE tipo_tramite = :busqueda AND prefectura_cod = :prefectura ORDER BY tipo_tramite LIMIT $empezar, $filas";
			$query=$bdd->prepare($sql);
			$query->execute(array(":busqueda"=>$busqueda, ":prefectura"=>$codigo));
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
	}else if (isset($_GET["cedula"])) {
		if($_GET["codigo"]==0){
			require("../config/connect.php");
			$busqueda=$_GET["cedula"];
			$empezar=($pagina-1)*$filas;
			$sql="SELECT * FROM tramite WHERE cedula_solicitante = :busqueda";
			$query=$bdd->prepare($sql);
			$query->execute(array(":busqueda"=>$busqueda));
			$bdd_filas=$query->rowCount();
			$pgn_total=ceil($bdd_filas/$filas);
			$query->closeCursor();
			$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, prefecto, estado, cedula_solicitante, DATE_FORMAT(fecha,'%Y/%m/%d') as fechat
				  FROM tramite 
				  WHERE cedula_solicitante = :busqueda ORDER BY tipo_tramite LIMIT $empezar, $filas";
			$query=$bdd->prepare($sql);
			$query->execute(array(":busqueda"=>$busqueda));
			$actividades=$query->fetchAll(PDO::FETCH_OBJ);
			$query->closeCursor();
		}
		else{
			require("../config/connect.php");
			$codigo = $_GET["codigo"];
			$busqueda=$_GET["cedula"];
			$empezar=($pagina-1)*$filas;
			$sql="SELECT * FROM tramite WHERE cedula_solicitante = :busqueda AND prefectura_cod = :prefectura";
			$query=$bdd->prepare($sql);
			$query->execute(array(":busqueda"=>$busqueda, ":prefectura"=>$codigo));
			$bdd_filas=$query->rowCount();
			$pgn_total=ceil($bdd_filas/$filas);
			$query->closeCursor();
			$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, prefecto, estado, cedula_solicitante, DATE_FORMAT(fecha,'%Y/%m/%d') as fechat
				  FROM tramite 
				  WHERE cedula_solicitante = :busqueda AND prefectura_cod = :prefectura ORDER BY tipo_tramite LIMIT $empezar, $filas";
			$query=$bdd->prepare($sql);
			$query->execute(array(":busqueda"=>$busqueda, ":prefectura"=>$codigo));
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
	}else if (isset($_GET["tramite_cod"])) {
		require("../config/connect.php");
		$busqueda=$_GET["tramite_cod"];
		$codigo=$_GET["codigo"];
		$empezar=($pagina-1)*$filas;
		if($busqueda!=0){
			if($codigo==0){
				$sql="SELECT * FROM tramite WHERE tramite_cod = :busqueda";
				$query=$bdd->prepare($sql);
				$query->execute(array(":busqueda"=>$busqueda));
			}
			else{
				$sql="SELECT * FROM tramite WHERE tramite_cod = :busqueda AND prefectura_cod = :prefectura";
				$query=$bdd->prepare($sql);
				$query->execute(array(":busqueda"=>$busqueda, ":prefectura"=>$codigo));
			}
		}
		else{
			if($codigo==0)
				$sql="SELECT * FROM tramite";
			else
				$sql="SELECT * FROM tramite WHERE prefectura_cod = $codigo";
			$query=$bdd->query($sql);
		}
		$bdd_filas=$query->rowCount();
		$pgn_total=ceil($bdd_filas/$filas);
		$query->closeCursor();
		if($busqueda!=0){
			if($codigo==0){
				$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, estado FROM tramite 
					  WHERE tramite_cod = :busqueda ORDER BY tipo_tramite LIMIT $empezar, $filas";
				$query=$bdd->prepare($sql);
				$query->execute(array(":busqueda"=>$busqueda));
			}
			else{
				$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, estado FROM tramite 
					  WHERE tramite_cod = :busqueda AND prefectura_cod = :prefectura ORDER BY tipo_tramite LIMIT $empezar, $filas";
				$query=$bdd->prepare($sql);
				$query->execute(array(":busqueda"=>$busqueda, ":prefectura"=>$codigo));
			}
		}
		else{
			if($codigo==0)
				$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, estado 
				  	  FROM tramite ORDER BY fecha LIMIT $empezar, $filas";
			else
				$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, estado 
				  	  FROM tramite WHERE prefectura_cod = $codigo ORDER BY fecha LIMIT $empezar, $filas";
			$query=$bdd->query($sql);
		}
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
	}
	else{
		$empezar=($pagina-1)*$filas;
		if($u_nivel==1)
			$sql="SELECT * FROM tramite";
		else
			$sql="SELECT * FROM tramite WHERE prefectura_cod = $u_prefectura";
		$query=$bdd->query($sql);
		$bdd_filas=$query->rowCount();
		$pgn_total=ceil($bdd_filas/$filas);
		$query->closeCursor();
		if($u_nivel==1)
			$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, prefecto, estado, cedula_solicitante, DATE_FORMAT(fecha,'%Y/%m/%d') as fechat
			  	  FROM tramite ORDER BY fecha LIMIT $empezar, $filas";
		else
			$sql="SELECT tramite_cod, prefectura_cod, tipo_tramite, prefecto, estado, cedula_solicitante, DATE_FORMAT(fecha,'%Y/%m/%d') as fechat
			  	  FROM tramite WHERE prefectura_cod = $u_prefectura ORDER BY fecha LIMIT $empezar, $filas";
		$query=$bdd->query($sql);
		$actividades=$query->fetchAll(PDO::FETCH_OBJ);
		$query->closeCursor();
	}

	/*<!-- DESARROLLADORES -->
	<!--
		Andres Ramirez: andresramirez2025@gmail.com / 0412-7942183 / www.linkedin.com/in/andres28ramirez
		Cesar Requena: cesar12piso09@gmail.com / 0416-0302290 / 
		Raimond Rivas: raimondrivas19@gmail.com / 0424-8195273 /
		Miguel Gil: miguel.gil.54@gmail.com / 0412-0810308 / 
	-->*/
?>