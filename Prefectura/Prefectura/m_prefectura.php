<?php 
  include("../administracion.php");
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script>	
	
	<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
	<div class="col-lg-10 mx-auto ">
	    <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
	    <h4 class="text-center mt-3">MODIFICACIÓN DE PREFECTURA</h4>
	</div>

	<div class="col-sm-10 col-12 m-auto">
	    <h5 class="text-primary mt-4">Modificar los Datos de una Prefectura.</h5>
	    
	    <!-- SOLO LE SALE AL ADMINISTRADOR -->
	    <div class="row justify-content-between mb-2">
	    	<div class="col-sm-6 col-12 text-left">
				<label class="float-left">Elegir Prefectura:</label>
	    		<select class="form-control float-left col-12" name="prefectura_cod">
					<option value="codigo de prefectura">Prefectura del Municipio Maneiro</option>
					<option value="codigo de prefectura">Prefectura del Municipio Maneiro</option>
					<option value="codigo de prefectura">Prefectura del Municipio Maneiro</option>
					<option value="codigo de prefectura">Prefectura del Municipio Maneiro</option>
				</select>
	    	</div>
	    </div>
	    <!-- SOLO LE SALE AL ADMINISTRADOR -->

	    <form id=form_prefectura>
		<!-- CADA SECCION SOBRE LOS DATOS DE UNA PERSONA -->
			<div class="row mt-4">
		    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
		    		<h5>Datos de Prefectura</h5>
		    		<div class="border px-sm-4 py-3 text-dark row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Dirección: </span>
		    				<input id="i_direccion" type="text" name="direccion" disabled="true" class="font-italic form-control" value="Andres Ramirez" style="display: inline;  background-color: transparent; border:0">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_direccion" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Prefecto: </span>
		    				<select class="form-control font-italic" id="i_prefecto" name="prefecto" disabled="true" style="display: inline;  background-color: transparent; border:0;">
						    	<option value="El que Viaja">Abg. X</option>
						    	<option value="prefecto_cod">Abg. X</option>
						    	<option value="prefecto_cod">Abg. X</option>
						    	<option value="prefecto_cod">Abg. X</option>
						    	<option value="prefecto_cod">Abg. X</option>
						    	<option value="prefecto_cod">Abg. X</option>
						    	<option value="prefecto_cod">Abg. X</option>
							</select>
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_prefecto" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Teléfono 1: </span>
		    				<input id="i_telefono1" type="text" name="telefono1" disabled="true" class="font-italic form-control" value="04127942183" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_telefono1" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Teléfono 2: </span>
		    				<input id="i_telefono2" type="text" name="telefono2" disabled="true" class="font-italic form-control" value="04127942183" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_telefono2" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		<!-- FIN DE CADA SECCION DE LOS DATOS DE UNA PERSONA -->

		<!-- CADA SECCION SOBRE LOS DATOS DE UNA PERSONA -->
			<div class="row mt-4">
		    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
		    		<h5>Ámbito Territorial</h5>
		    		<?php for ($i=0; $i < 5; $i++):?>
		    		<div class="border px-sm-4 py-3 text-dark row mt-2">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Dirección: </span>
		    				<input id="i_dir<?php echo $i;?>" type="text" name="dir<?php echo $i;?>" disabled="true" class="font-italic form-control" value="X dirección" style="display: inline;  background-color: transparent; border:0">
		    			</div>
		    			<div class="col-sm-6 col-12 text-center">
		    				<a class="text-primary" id="e_dir<?php echo $i;?>" style="cursor: pointer;">Editar</a>
		    			</div>
		    			<div class="col-sm-6 col-12 text-center">
		    				<a class="text-primary" id="eli_dir<?php echo $i;?>" style="cursor: pointer;">Eliminar</a>
		    			</div>
		    		</div>
		    		<?php endfor; ?>
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

<?php include("validaciones_pre.php"); ?>

<!-- SCRIPTS PARA HABILITAR LOS FORMULARIOS DE EDITAR -->
<script type="text/javascript">

		$("#send").attr('disabled', 'true');

	//INPUTS DE SECCION DE DATOS DE OPERADOR
    	$("#e_direccion").click(function(event) {
    		$("#i_direccion").removeAttr('disabled');
    		$("#i_direccion").focus();
    		$("#send").removeAttr('disabled');

    	});

    	$("#e_prefecto").click(function(event) {
    		$("#i_prefecto").removeAttr('disabled');
    		$("#i_prefecto").focus();
    		$("#send").removeAttr('disabled');

    	});

    	$("#e_telefono1").click(function(event) {
    		$("#i_telefono1").removeAttr('disabled');
    		$("#i_telefono1").focus();   
    		$("#send").removeAttr('disabled');
 	
    	});

    	$("#e_telefono2").click(function(event) {
    		$("#i_telefono2").removeAttr('disabled');
    		$("#i_telefono2").focus();    
    		$("#send").removeAttr('disabled');
	
    	});
    //FIN INPUTS DE SECCION DE DATOS DE OPERADOR

    //INPUTS DE LOS AMBITOS TERRITORIALES
    	<?php for ($i=0; $i < 5; $i++):?>
    	$("#e_dir<?php echo $i;?>").click(function(event) {
    		$("#i_dir<?php echo $i;?>").removeAttr('disabled');
    		$("#i_dir<?php echo $i;?>").focus();
    		$("#send").removeAttr('disabled');
    	});
    	<?php endfor; ?>
    //FIN DE LOS INPUTS DE AMBITOS TERRITORIALES
</script>
