<?php
	include("../config/connect.php");
	
	if (isset($_POST["modificar"])) {
		$bdd->beginTransaction();
		$codigo = $_POST["modificar"];
		$estado = $_POST["estado"];
		try{
	  		$sql = "UPDATE tramite SET estado=:estado WHERE tramite_cod=:id";
			$query=$bdd->prepare($sql);
			$query->execute(array(":estado"=>$estado, ":id"=>$codigo));
			$bdd->commit();
			echo json_encode("modificado");
		}catch (PDOException $e){
			$bdd->rollback(); 
			//echo $e->getMessage()." Linea: ".$e->getLine();
			echo json_encode("fallo");
		}
	}

	if (isset($_POST["eliminar"])) {
		$codigo = $_POST["eliminar"];
		$sql = "DELETE FROM tramite WHERE tramite_cod = :codigo";
		$query=$bdd->prepare($sql);
		$query->execute(array(":codigo"=>$codigo));
		echo json_encode("borrado");
	}
?>