<!DOCTYPE html>
<html>
<head>
	<title>Prueba formulario</title>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$("#cedula").change(function(event){
			console.log("Cambio");
        	$.ajax({
          		data : {'cedula' : $(this).val()},
          		url : 'ajax_prueba.php',
          		type: 'post',
          		success: function(response){
            		console.log(JSON.stringify(response));
          			$("#nombre1").text(response.nombre1);
          		}
          	/*}).done(function(respuesta){
          		console.log(JSON.stringify(respuesta));
          		$("#nombre1").text(respuesta.nombre1);*/
        	});
      	});
	</script>
</head>
<body>
	<form>
		<p>Cedula</p>
		<input type="text" name="cedula" id=cedula>
		<p>Nombre</p>
		<input type="text" name="nombre1" disabled="" id="nombre1">
		<p>Nombre2</p>
		<input type="text" name="nombre2" disabled="" id="nombre2">
	</form>

</body>
</html>