<?php 
  include("../administracion.php");
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script>	

	<div class="row text-center mt-2">
	    <div class="col-lg-10 text-center m-auto">
	    	<img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
	        <h4 class="text-center mt-3">REGISTRO DE SOLICITANTE</h4>
	    </div>

		<div class="col-md-10 col-sm-11 col-12 mx-auto shadow-sm my-3 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			<form class="m-auto col-12 justify-content-center" id="censo">
			  <h5 class="text-center mb-3" style="font-size: 1.5em">Usuario</h5>

			  <h6 class="text-center pb-2 col-12" style="border-bottom: 2px solid">Información del Solicitante</h6>
			  <div class="form-group text-justify col-12 row justify-content-center m-auto">
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Nombre 1:</label>
				    <input type="text" class="form-control" id="nombre1_s" name="nombre1_s" placeholder="Ingrese su Primer Nombre">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Nombre 2:</label>
				    <input type="text" class="form-control" id="nombre2_s" name="nombre2_s" placeholder="Ingrese su Segundo Nombre">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Apellido 1:</label>
				    <input type="text" class="form-control" id="apellido1_s" name="apellido1_s" placeholder="Ingrese su Primer Apellido"> 
			    </div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Apellido 2:</label>
				    <input type="text" class="form-control" id="apellido2_s" name="apellido2_s" placeholder="Ingrese su Segundo Apellido">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Cédula:</label>
				    <input type="text" class="form-control" id="cedula_s" name="cedula_s" placeholder="Ingrese su Cédula">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Profesión u Oficio:</label>
				    <select class="form-control" id="profesion_s" name="profesion_s">
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
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Estado Civil:</label>
				    <select class="form-control" id="civil_s" name="civil_s">
				    	<option value="">Seleccione una opción:</option>
						<option value="Soltero">Soltero/a</option>
						<option value="Casado">Casado/a</option>
						<option value="Divorciado">Divorciado/a</option>
						<option value="Viudo">Viudo/a</option>
					</select>
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Fecha de Nacimiento:</label>
				    <input type="date" class="form-control" id="nacimiento_s" name="nacimiento_s" placeholder="Fecha de Nacimiento">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-4">
				    <label class="text-muted" style="font-size: 1.2em">Cédula del Padre:</label>
				    <input type="text" class="form-control" id="cedula_p" name="cedula_p" placeholder="Ingrese Cédula del padre">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-4">
				    <label class="text-muted" style="font-size: 1.2em">Cédula de la Madre:</label>
				    <input type="text" class="form-control" id="cedula_m" name="cedula_m" placeholder="Ingrese Cédula de la madre">
			    </div>
			  </div>

			  <h6 class="text-center pb-2 col-12" style="border-bottom: 2px solid">Dirección de Hogar</h6>
			  <div class="form-group text-justify col-12 mt-3 row justify-content-center m-auto">
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Municipio</label>
				    <select type="text" class="form-control" name="municipio_s" id="municipio_s">
				    	<option value="">--Elija un Municipio--</option>
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
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Parroquia</label>
				    <select type="text" class="form-control" name="parroquia_s" id="parroquia_s" disabled="">
				    	<option value="">--Elija una Parroquia--</option>
				    </select>
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-4">	
				    <label class="text-muted" style="font-size: 1.2em">Dirección 1:</label>
				    <input type="text" class="form-control" name="direccion1_s" id="direccion1_s" placeholder="Ingrese Dirección Principal">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-4">
				    <label class="text-muted" style="font-size: 1.2em">Dirección 2:</label>
				    <input type="text" class="form-control" name="direccion2_s" id="direccion2_s" placeholder="Ingrese Dirección Secundaria">
			    </div>
			  </div>

			  <h6 class="text-center pb-2 col-12" style="border-bottom: 2px solid">Información de Contacto</h6>
			  <div class="form-group text-justify col-12 mt-3 row justify-content-center m-auto">
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Teléfono 1:</label>
				    <input type="text" class="form-control" id="telefono1_s" name="telefono1_s" placeholder="Ingrese su Teléfono Principal">
			    </div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Teléfono 2:</label>
				    <input type="text" class="form-control" id="telefono2_s" name="telefono2_s" placeholder="Ingrese su Teléfono Secundario">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Email:</label>
				    <input type="email" class="form-control" id="correo_s" name="correo_s" placeholder="Ingrese su Correo">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Facebook:</label>
				    <input type="text" class="form-control" id="facebook_s" name="facebook_s" placeholder="Ingrese su Facebook">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Instagram:</label>
				    <input type="text" class="form-control" id="instagram_s" name="instagram_s" placeholder="Ingrese su Instagram">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Twitter:</label>
				    <input type="text" class="form-control" id="twitter_s" name="twitter_s" placeholder="Ingrese su Twitter">
			    </div>
			  </div>
			  <div class="form-group text-center col-12 mt-2 mx-auto">
				  <button type="submit" class="btn btn-success" name="btnsubmit">Registrar</button>
			  </div>
			</form>
	    </div>
	</div>
<!-- PARTE QUE VIENE LUEGO DEL INCLUDE DE ADMINISTRACION.PHP -->
  </div>
</div>
    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
</body>
</html>

<script type="text/javascript" src="../js/jquery.ajax.js"></script>
<script type="text/javascript" src="validaciones_personas.js"></script>