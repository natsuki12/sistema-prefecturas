<?php 
  include("../administracion.php");
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script>	

	<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
	<div class="col-lg-10 mx-auto ">
	    <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
	    <h4 class="text-center mt-4">MODIFICACIÓN DE OPERADORES</h4>
	</div>

	<div class="col-sm-10 col-12 m-auto">
	    <h5 class="text-primary mt-4">Modificar los Datos de un Operador.</h5>
	    <div class="row justify-content-between mb-2">
	    	<div class="col-sm-6 col-12 text-left">
				<label class="float-left">Buscar por cédula:</label>
	    		<input id="#" align="left" class="float-left ml-lg-2 ml-md-0 ml-sm-2 col-lg-3 col-md-5 col-sm-4 col-12 form-control form-control-sm" type='text' name='busqueda' placeholder="cédula">
	    	</div>
	    </div>

	    <form id="operador">
		<!-- CADA SECCION SOBRE LOS DATOS DE UNA PERSONA -->
			<div class="row mt-4">
		    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
		    		<h5>Datos del Operador</h5>
		    		<div class="border px-sm-4 py-3 text-dark row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Nombre: </span>
		    				<input id="i_nombre1" type="text" name="nombre_o" disabled="true" class="font-italic form-control" value="Andres Ramirez" style="display: inline;  background-color: transparent; border:0">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_nombre" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Cédula de Identidad: </span>
		    				<input id="i_cedula" type="text" name="cedula_o" disabled="true" class="font-italic form-control" value="23868394" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_cedula" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Contraseña: </span>
		    				<input id="i_contraseña" type="text" name="contraseña" disabled="true" class="font-italic form-control" value="123456" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_contraseña" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Municipio: </span>
		    				<select class="form-control font-italic" id="municipio_s" name="municipio_s" disabled="true" style="display: inline;  background-color: transparent; border:0;">
						    	<option value="La que Viaja">Maneiro</option>
						    	<option value="10">Antolín del Campo</option>
						    	<option value="1">Arismendi</option>
						    	<option value="2">Díaz</option>
						    	<option value="11">García</option>
						    	<option value="3">Gómez</option>
						    	<option value="4">Maneiro</option>
						    	<option value="5">Marcano</option>
						    	<option value="6">Mariño</option>
						    	<option value="7">Península de Macanao</option>
						    	<option value="9">Tubores</option>
						    	<option value="8">Villalba</option>
							</select>
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_municipio" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Parroquia: </span>
		    				<select class="form-control font-italic" id="parroquia_s" name="parroquia_s" disabled="true" style="display: inline;  background-color: transparent; border:0;">
						    	<option value="La que Viaja">Pampatar</option>
							</select>
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_parroquia" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		<!-- FIN DE CADA SECCION DE LOS DATOS DE UNA PERSONA -->

		<!-- BOTON PARA GUARDAR CAMBIOS -->
			<div class="text-center mt-4">
				<button class="btn btn-success" type="submit" id="send">Guardar Cambios</button>
			</div>
		<!-- FIN BOTON PARA GUARDAR CAMBIOS -->
		</form>
	</div>
<!-- PARTE QUE VIENE LUEGO DEL INCLUDE DE ADMINISTRACION.PHP -->
  </div>
</div>
    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
</body>
</html>

<script type="text/javascript" src="../js/jquery.ajax.js"></script>
<script type="text/javascript" src="validaciones_operador.js"></script>

<!-- SCRIPTS PARA HABILITAR LOS FORMULARIOS DE EDITAR -->
<script type="text/javascript">

		$("#send").attr('disabled', 'true');

	//INPUTS DE SECCION DE DATOS DE OPERADOR
    	$("#e_nombre").click(function(event) {
    		$("#i_nombre").removeAttr('disabled');
    		$("#i_nombre").focus();
    		$("#send").removeAttr('disabled');
    	});

    	$("#e_contraseña").click(function(event) {
    		$("#i_contraseña").removeAttr('disabled');
    		$("#i_contraseña").focus();
    		$("#send").removeAttr('disabled');
    	});

    	$("#e_cedula").click(function(event) {
    		$("#i_cedula").removeAttr('disabled');
    		$("#i_cedula").focus();    
    		$("#send").removeAttr('disabled');	
    	});

    	$("#e_municipio").click(function(event) {
    		$("#municipio_s").removeAttr('disabled');
    		$("#municipio_s").focus();   
    		$("#send").removeAttr('disabled'); 	
    	});

    	$("#e_parroquia").click(function(event) {
    		$("#parroquia_s").removeAttr('disabled');
    		$("#parroquia_s").focus();   
    		$("#send").removeAttr('disabled'); 	
    	});
    //FIN INPUTS DE SECCION DE DATOS DE OPERADOR
</script>
