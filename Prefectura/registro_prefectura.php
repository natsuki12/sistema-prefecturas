<?php 
	include("config/connect.php");
	$sql="SELECT prefectura_cod, parroquia_nombre from parroquia ORDER BY prefectura_cod";
	$datos=$bdd->query($sql)->fetchAll(PDO::FETCH_OBJ);

	if (isset($_POST["submit"])) {
		if (empty($_POST["telefono2"])) {
			$tlf2=null;
		}else{
			$tlf2=$_POST["telefono2"];
		}
		$sql="INSERT INTO prefectura (direccion, telefono1, telefono2, prefectura_prefecto) VALUES (:dir, :tlf1, :tlf2, :prefecto)";
		$query=$bdd->prepare($sql);
		$query->execute(array(":dir"=>$_POST["direccion"], ":tlf1"=>$_POST["telefono1"], ":tlf2"=>$tlf2, ":prefecto"=>$_POST["prefecto"]));
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>registro prefecto</title>
</head>
<body>
	<form method="post" action="registro_prefectura.php">
		<input type="text" name="prefecto" placeholder="prefecto">
		<input type="text" name="telefono1" placeholder="tlf1">
		<input type="text" name="telefono2" placeholder="tlf2">
		<input type="text" name="direccion" placeholder="direccion">
		<select>
			<option>Elije parroquia</option>
			<?php foreach ($datos as $prefectura): ?>
				<option value="<?php echo $prefectura->prefectura_cod ?>"><?php echo $prefectura->prefectura_cod." ".$prefectura->parroquia_nombre ?></option>
			<?php endforeach ?>
		</select>
		<input type="submit" name="submit">	
	</form>
</body>
</html>