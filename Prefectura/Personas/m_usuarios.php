<?php 
  include("../administracion.php");
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script>

	<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
	<div class="col-lg-10 mx-auto ">
	    <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
	    <h4 class="text-center mt-3">MODIFICACIÓN DE CENSADO</h4>
	</div>

	<div class="col-sm-10 col-12 m-auto">
	    <h5 class="text-primary mt-4">Modificar los Datos de una Persona Registrada.</h5>
	    <div class="row justify-content-between mb-2">
	    	<div class="col-sm-6 col-12 text-left">
				<label class="float-left">Buscar por cédula:</label>
	    		<input id="#" align="left" class="float-left ml-lg-2 ml-md-0 ml-sm-2 col-lg-3 col-md-5 col-sm-4 col-12 form-control form-control-sm" type='text' name='busqueda' placeholder="cédula">
	    	</div>
	    </div>

	    <form id="censo" action="">
		<!-- CADA SECCION SOBRE LOS DATOS DE UNA PERSONA -->
			<div class="row mt-4">
		    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
		    		<h5>Datos de la Persona</h5>
		    		<div class="border px-sm-4 py-3 text-dark row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Nombre 1: </span>
		    				<input id="i_nombre1" type="text" name="nombre1_s" disabled="true" class="font-italic form-control" value="Andres" style="display: inline;  background-color: transparent; border:0">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_nombre1" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Nombre 2: </span>
		    				<input id="i_nombre2" type="text" name="nombre2_s" disabled="true" class="font-italic form-control" value="Eduardo" style="display: inline;  background-color: transparent; border:0">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_nombre2" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Apellido 1: </span>
		    				<input id="i_apellido1" type="text" name="apellido1_s" disabled="true" class="font-italic form-control" value="Ramirez" style="display: inline;  background-color: transparent; border:0">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_apellido1" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Apellido 2: </span>
		    				<input id="i_apellido2" type="text" name="apellido2_s" disabled="true" class="font-italic form-control" value="Duque" style="display: inline;  background-color: transparent; border:0">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_apellido2" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Fecha de Nacimiento: </span>
		    				<input id="i_nacimiento" type="date" name="nacimiento_s" disabled="true" class="font-italic form-control" value="1996-06-28" style="display: inline;  background-color: transparent; border: 0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_nacimiento" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Cédula de Identidad: </span>
		    				<input id="i_cedula" type="text" name="cedula_s" disabled="true" class="font-italic form-control" value="23868394" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_cedula" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Cédula de Padre: </span>
		    				<input id="i_cedulapadre" type="text" name="cedula_p" disabled="true" class="font-italic form-control" value="23868394" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_cedulapadre" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Cédula de Madre: </span>
		    				<input id="i_cedulamadre" type="text" name="cedula_m" disabled="true" class="font-italic form-control" value="23868394" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_cedulamadre" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Profesión u Oficio: </span>
		    				<select class="form-control font-italic" id="i_profesion" name="profesion_s" disabled="true" style="display: inline;  background-color: transparent; border:0;">
						    	<option value="">Seleccione una opción:</option>
						    	<option value="Abogado">Abogado</option>
						    	<option value="Administrador de Empresas">Administrador de Empresas</option>
						    	<option value="Agricultor">Agricultor</option>
						    	<option value="Albañiles, Mamposteros y Afines">Albañiles, Mamposteros y Afines</option>
						    	<option value="Arquitecto">Aquitecto</option>
						    	<option value="Auxiliar Administrativo y Afines">Auxiliar Administrativo y Afines</option>
						    	<option value="Carpintero">Carpintero</option>
						    	<option value="Cocineros y Afines">Cocineros y Afines</option>
						    	<option value="Comerciante">Comerciante</option>
						    	<option value="Comunicador Social">Comunicador Social</option>
						    	<option value="Conductor de Buses, Vehículos Pesados y Livianos">Conductor de Buses, Vehículos Pesados y Livianos</option>
						    	<option value="Contador">Contador</option>
						    	<option value="Diseñador Gráfico">Diseñador Gráfico</option>
						    	<option value="Diseñador Industrial">Diseñador Industrial</option>
						    	<option value="Economista">Economista</option>
						    	<option value="Electricista">Electricista</option>
						    	<option value="Enfermeros Profesionales">Enfermeros Profesionales</option>
						    	<option value="Estudiante">Estudiante</option>
						    	<option value="Hogar">Hogar</option>
						    	<option value="Ingeniero Agrícola">Ingeniero Agrícola</option>
						    	<option value="Ingeniero Agroindustrial">Ingeniero Agroindustrial</option>
						    	<option value="Ingeniero Agronomo">Ingeniero Agronomo</option>
						    	<option value="Ingeniero Civil">Ingeniero Civil</option>
						    	<option value="Ingeniero Electricista">Ingeniero Electricista</option>
						    	<option value="Ingeniero Industrial y Afines">Ingeniero Industrial y Afines</option>
						    	<option value="Ingeniero Mecánico">Ingeniero Mecánico</option>
						    	<option value="Ingeniero Petrolero">Ingeniero Petrolero</option>
						    	<option value="Ingeniero de Producción">Ingeniero de Producción</option>
						    	<option value="Ingeniero Químico y Afines">Ingeniero Químico y Afines</option>
						    	<option value="Ingeniero de Seguridad Industrial">Ingeniero de Seguridad Industrial</option>
						    	<option value="Ingeniero de Sistemas">Ingeniero de Sistemas</option>
						    	<option value="Ingeniero de Minas, Metalurgia y Afines">Ingeniero de Minas, Metalurgia y Afines</option>
						    	<option value="Médico">Médico</option>
						    	<option value="Obrero">Obrero</option>
						    	<option value="Odontologo">Odontologo</option>
						    	<option value="Ortodoncista">Ortodoncista</option>
						    	<option value="Oficial de las Fuerza Militar">Oficial de las Fuerza Militar</option>
						    	<option value="Oficial de la Policia Nacional">Oficial de la Policia Nacional</option>
						    	<option value="Peluqueros, Tratamiento de Belleza y Afines">Peluqueros, Tratamiento de Belleza y Afines</option>
						    	<option value="Pensionado / Jubilado">Pensionado / Jubilado</option>
						    	<option value="Plomero">Plomero</option>
						    	<option value="Prestamista">Prestamista</option>
						    	<option value="Profesores de Eduación Preescolar">Profesores de Eduación Preescolar</option>
						    	<option value="Profesores de Eduación Primaría">Profesores de Eduación Primaría</option>
						    	<option value="Profesores de Eduación Secundaría">Profesores de Eduación Secundaría</option>
						    	<option value="Profesores de Universidades y Eduación Superior">Profesores de Universidades y Eduación Superior</option>
						    	<option value="Químicos y Afines">Químicos y Afines</option>
						    	<option value="Secretario">Secretario</option>
						    	<option value="Taxista">Taxista</option>
						    	<option value="Técnicos y Asistentes de Servicios de Administración">Técnicos y Asistentes de Servicios de Administración</option>
						    	<option value="Trabajadores Agropecuarios">Trabajadores Agropecuarios</option>
						    	<option value="Tripulante">Tripulante</option>
						    	<option value="Vigilante">Vigilante</option>
						    	<option value="Otro">Otro</option>
						    </select>
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_profesion" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Estado Civil: </span>
		    				<select class="form-control font-italic" id="i_ecivil" name="civil_s" disabled="true" style="display: inline; background-color: transparent; border:0;">
	  							<option value="La que viaja">Soltero/a</option>
	  							<option value="Soltero">Soltero/a</option>
	  							<option value="Casado">Casado/a</option>
	  							<option value="Divorciado">Divorciado/a</option>
	  							<option value="Viudo">Viudo/a</option>
							</select>
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_ecivil" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		<!-- FIN DE CADA SECCION DE LOS DATOS DE UNA PERSONA -->

		<div class="w-100"></div> <!--FORZAR LA SEPARACION-->

		<!-- CADA SECCIION DE DIRECCION DE HOGAR -->
			<div class="row mt-4">
		    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
		    		<h5>Dirección de Hogar</h5>
		    		<div class="border px-sm-4 py-3 text-dark row">
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
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Dirección 1: </span>
		    				<input id="i_dir1" type="text" name="direccion1_s" disabled="true" class="font-italic form-control" value="Calle San Martin" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_dir1" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Dirección 2: </span>
		    				<input id="i_dir2" type="text" name="direccion2_s" disabled="true" class="font-italic form-control" value="Urb. Paraiso 3, Aquamarina, Casa N#25" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_dir2" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		<!-- FIN DE CADA SECCION DE DIRECCION DE HOGAR -->

		<div class="w-100"></div> <!--FORZAR LA SEPARACION-->

		<!-- SECCION DE INFORMACION DE REDES SOCIALES -->
			<div class="row mt-4">
		    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
		    		<h5 class="">Redes y Contacto</h5>
		    		<div class="border px-sm-4 py-3 text-dark row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Teléfono 1: </span>
		    				<input id="i_telefono1" type="text" name="telefono1_s" disabled="true" class="font-italic form-control" value="04127942183" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_telefono1" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Teléfono 2: </span>
		    				<input id="i_telefono2" type="text" name="telefono2_s" disabled="true" class="font-italic form-control" value="04127942183" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_telefono2" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Correo: </span>
		    				<input id="i_correo" type="text" name="correo_s" disabled="true" class="font-italic form-control" value="andresramirez2025@gmail.com" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_correo" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Instagram: </span>
		    				<input id="i_instagram" type="text" name="instagram_s" disabled="true" class="font-italic form-control" value="@andres28ramirez" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_instagram" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Twitter: </span>
		    				<input id="i_twitter" type="text" name="twitter_s" disabled="true" class="font-italic form-control" value="N/A" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_twitter" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
		    			<div class="col-sm-10 col-12">
		    				<span class="font-weight-bold">Facebook: </span>
		    				<input id="i_facebook" type="text" name="facebook_" disabled="true" class="font-italic form-control" value="@andres28ramirez" style="display: inline;  background-color: transparent; border:0;">
		    			</div>
		    			<div class="col-sm-2 col-12 text-right">
		    				<a class="text-primary" id="e_facebook" style="cursor: pointer;">Editar</a>
		    			</div>
		    		</div>
		    	</div>
	        </div>
		<!-- FIN DE REDES SOCIALES -->

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

<script type="text/javascript" src="..js/jquery.ajax.js"></script>
<script type="text/javascript" src="validaciones_personas.js"></script>

<!-- SCRIPTS PARA HABILITAR LOS FORMULARIOS DE EDITAR -->
<script type="text/javascript">

		$("#send").attr('disabled', 'true');

	//INPUTS DE SECCION DE DATOS PERSONALES
    	$("#e_nombre1").click(function(event) {
    		$("#i_nombre1").removeAttr('disabled');
    		$("#i_nombre1").focus();
    		$("#send").removeAttr('disabled');
    	});

    	$("#e_nombre2").click(function(event) {
    		$("#i_nombre2").removeAttr('disabled');
    		$("#i_nombre2").focus();
    		$("#send").removeAttr('disabled');
    	});

    	$("#e_apellido1").click(function(event) {
    		$("#i_apellido1").removeAttr('disabled');
    		$("#i_apellido1").focus();
    		$("#send").removeAttr('disabled');
    	});

    	$("#e_apellido2").click(function(event) {
    		$("#i_apellido2").removeAttr('disabled');
    		$("#i_apellido2").focus();
    		$("#send").removeAttr('disabled');
    	});

    	$("#e_nacimiento").click(function(event) {
    		$("#i_nacimiento").removeAttr('disabled');
    		$("#i_nacimiento").focus();  
    		$("#send").removeAttr('disabled');  	
    	});

    	$("#e_cedula").click(function(event) {
    		$("#i_cedula").removeAttr('disabled');
    		$("#i_cedula").focus();   
    		$("#send").removeAttr('disabled'); 	
    	});

    	$("#e_cedulapadre").click(function(event) {
    		$("#i_cedulapadre").removeAttr('disabled');
    		$("#i_cedulapadre").focus();    	
    		$("#send").removeAttr('disabled');
    	});

    	$("#e_cedulamadre").click(function(event) {
    		$("#i_cedulamadre").removeAttr('disabled');
    		$("#i_cedulamadre").focus();  
    		$("#send").removeAttr('disabled');  	
    	});

    	$("#e_profesion").click(function(event) {
    		$("#i_profesion").removeAttr('disabled');
    		$("#i_profesion").focus();  
    		$("#send").removeAttr('disabled');  	
    	});

    	$("#e_ecivil").click(function(event) {
    		$("#i_ecivil").removeAttr('disabled');
    		$("#i_ecivil").focus();  
    		$("#send").removeAttr('disabled');  	
    	});
    //FIN INPUTS DE SECCION DE DATOS PERSONALES

    //INPUTS DE SECCION DE DIRECCION DE HOGAR
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

    	$("#e_dir1").click(function(event) {
    		$("#i_dir1").removeAttr('disabled');
    		$("#i_dir1").focus();    
    		$("#send").removeAttr('disabled');	
    	});

    	$("#e_dir2").click(function(event) {
    		$("#i_dir2").removeAttr('disabled');
    		$("#i_dir2").focus();    
    		$("#send").removeAttr('disabled');	
    	});
    //FIN INPUTS DE SECCION DE DIRECCION DE HOGAR

    //INPUTS DE SECCION DE INFORMACION DE CONTACTO Y REDES
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

    	$("#e_correo").click(function(event) {
    		$("#i_correo").removeAttr('disabled');
    		$("#i_correo").focus();   
    		$("#send").removeAttr('disabled'); 	
    	});

    	$("#e_instagram").click(function(event) {
    		$("#i_instagram").removeAttr('disabled');
    		$("#i_instagram").focus();    
    		$("#send").removeAttr('disabled');	
    	});

    	$("#e_twitter").click(function(event) {
    		$("#i_twitter").removeAttr('disabled');
    		$("#i_twitter").focus();   
    		$("#send").removeAttr('disabled'); 	
    	});

    	$("#e_facebook").click(function(event) {
    		$("#i_facebook").removeAttr('disabled');
    		$("#i_facebook").focus(); 
    		$("#send").removeAttr('disabled');   	
    	});
    //FIN INPUTS DE SECCION DE INFORMACION DE CONTACTO Y REDES
</script>
