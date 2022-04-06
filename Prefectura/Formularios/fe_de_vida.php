<?php 
	if (isset($_SESSION["id"])) {
		include("../administracion.php");
	}
?>
	<script type="text/javascript">
		$("#topsito").removeClass('d-none');
	</script>

<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
    <form class="row text-center mt-2" action="config/proceso_solicitud.php" method="post" id="form_solicitud">
        <div class="col-lg-10 text-center m-auto">
        	<img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
            <h4 class="text-center mt-3">SOLICITUD DE FE DE VIDA</h4>
        </div>
        <div class="col-lg-10 m-auto mt-4 text-justify">
        	<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
        </div>
        <div class="col-12 mt-1">
	        <div class="m-auto col-lg-4 col-mg-8 col-sm-8 col-12 py-3">
			  <h5 class="text-center" style="font-size: 1.5em">Ingrese su Cedula:</h5>
			  <div class="form-group">
			    <label class="text-muted" style="font-size: 1.2em">Solicitante</label>
			    <input type="text" class="form-control" name="cedula_s" id="cedula_s" placeholder="Ingrese su cedula">
			  </div>
			</div>
		</div>

		<div class="col-md-10 col-sm-11 col-12 mx-auto shadow-sm mb-2 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información del Solicitante</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Nombre 1:</label>
				    <input type="text" class="form-control" name="nombre1_s" id="nombre1_s" disabled="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Nombre 2:</label>
				    <input type="text" class="form-control" name="nombre2_s" id="nombre2_s" disabled="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Apellido 1:</label>
				    <input type="text" class="form-control" name="apellido1_s" id="apellido1_s" disabled=""> 
			    </div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Apellido 2:</label>
				    <input type="text" class="form-control" name="apellido2_s" id="apellido2_s" disabled="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Profesión:</label>
				    <input type="text" class="form-control" name="profesion_s" id="profesion_s" disabled="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Estado Civil:</label>
				    <input type="text" class="form-control" name="civil_s" id="civil_s" disabled="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Fecha de Nacimiento:</label>
				    <input type="text" class="form-control" name="nacimiento_s" id="nacimiento_s" disabled="">
			    </div>
			</div>

			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Dirección de Hogar</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">    
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Municipio:</label>
				    <select type="text" class="form-control" name="municipio_s" id="municipio_s" required="">
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
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Parroquia:</label>
				    <select type="text" class="form-control" name="parroquia_s" id="parroquia_s" disabled="" required="">
				    	<option value="">--Elija una Parroquia--</option>
				    </select>
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Dirección 1:</label>
				    <input type="text" class="form-control" name="direccion1_s" id="direccion1_s" placeholder="Ingrese dirección principal" required="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Dirección 2:</label>
				    <input type="text" class="form-control" name="direccion2_s" id="direccion2_s" placeholder="Ingrese dirección alternativa">
			    </div>
			</div>
        </div>

        <div class="col-lg-10 mx-auto my-3">
	        <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
        </div>

        <!-- ESTE ES EL FORMULARIO DE LOS TESTIGOS SOLO LO PUSE AQUI TODO PEGADO PARA QUE TOMES SOLO ESO CUANDO TE LO PASE -->
        <div class="col-md-10 col-sm-11 col-12 mx-auto shadow-sm mb-2 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			<h5 class="text-center mb-3" style="font-size: 1.5em">Registro de Testigo 1</h5>
			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información Personal</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Nombre 1:</label>
				    <input type="text" class="form-control" name="nombre1_t1" id="nombre_t1" placeholder="Ingrese su primer Nombre" required="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Nombre 2:</label>
				    <input type="text" class="form-control" name="nombre2_t1" id="nombre2_t1" placeholder="Ingrese su segundo Nombre">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Apellido 1:</label>
				    <input type="text" class="form-control" name="apellido1_t1" id="apellido1_t1" placeholder="Ingrese su primer Apellido" required=""> 
			    </div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Apellido 2:</label>
				    <input type="text" class="form-control" name="apellido2_t1" id="apellido2_t1" placeholder="Ingrese su segundo Apellido">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Cedula:</label>
				    <input type="text" class="form-control" name="cedula_t1" id="cedula_t1" placeholder="Ingrese su Cedula" required="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Profesión u Oficio:</label>
				    <select class="form-control" id="profesion_t1" name="profesion_t2">
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
			</div>

			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Dirección de Hogar del Testigo 1</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Municipio:</label>
				    <select type="text" class="form-control" name="municipio_t1" id="municipio_t1" required="">
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
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3>
				    <label class="text-muted" style="font-size: 1.2em">Parroquia:</label>
				    <select type="text" class="form-control" name="parroquia_t1" id="parroquia_t1" disabled="" required="">
				    	<option value="">--Elija una Parroquia--</option>
				    </select>
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Dirección 1:</label>
				    <input type="text" class="form-control" name="direccion1_t1" id="direccion1_t1" placeholder="Ingrese la dirección principal" required="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Dirección 2:</label>
				    <input type="text" class="form-control" name="direccion2_t1" id="direccion2_t1" placeholder="Ingrese la dirección alternativa">
			    </div>
			</div>

			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información de Contacto del Testigo 1</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Telefono 1:</label>
				    <input type="text" class="form-control" name="telefono1_t1" id="telefono1_t1" placeholder="Ingrese el número telefonico principal">
			    </div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Telefono 2:</label>
				    <input type="text" class="form-control" name="telefono2_t1" id="telefono2_t1" placeholder="Ingrese el número telefonico alternativo">
			    </div>
			</div>

			<!-- SEPARADOR -->
			<div class="mx-auto my-3">
		        <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
	        </div>
			<!-- SECCION DEL TESTIGO 2 -->
			
			<h5 class="text-center mb-3" style="font-size: 1.5em">Registro de Testigo 2</h5>
			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información Personal</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Nombre 1:</label>
				    <input type="text" class="form-control" name="nombre1_t2" id="nombre1_t2" placeholder="Ingrese su primer Nombre" required="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Nombre 2:</label>
				    <input type="text" class="form-control" name="nombre2_t2" id="nombre2_t2" placeholder="Ingrese su segundo Nombre">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Apellido 1:</label>
				    <input type="text" class="form-control" name="apellido1_t2" id="apellido1_t2" placeholder="Ingrese su primer Apellido" required=""> 
			    </div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Apellido 2:</label>
				    <input type="text" class="form-control" name="apellido2_t2" id="apellido2_t2" placeholder="Ingrese su segundo Apellido">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Cedula:</label>
				    <input type="text" class="form-control" name="cedula_t2" id="cedula_t2" placeholder="Ingrese su Cedula" required="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Profesión u Oficio:</label>
				    <select class="form-control" id="profesion_t2" name="profesion_t2">
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
			</div>

			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Dirección de Hogar del Testigo 2</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Municipio:</label>
				    <select type="text" class="form-control" name="municipio_t2" id="municipio_t2" required="">
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
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Parroquia:</label>
				    <select type="text" class="form-control" name="parroquia_t2" id="parroquia_t2" disabled="" required="">
				    	<option value="">--Elija una Parroquia--</option>
				    </select>
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Dirección 1:</label>
				    <input type="text" class="form-control" name="direccion1_t2" id="direccion1_t2" placeholder="Ingrese la dirección principal" required="">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Dirección 2:</label>
				    <input type="text" class="form-control" name="direccion2_t2" id="direccion2_t2" placeholder="Ingrese la dirección alternativa">
			    </div>
			</div>

			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información de Contacto del Testigo 2</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Teléfono 1:</label>
				    <input type="text" class="form-control" name="telefono1_t2" id="telefono1_t2" placeholder="Ingrese el número telefonico principal">
			    </div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Teléfono 2:</label>
				    <input type="text" class="form-control" name="telefono2_t2" id="telefono2_t2" placeholder="Ingrese el número telefonico alternativo">
			    </div>
			</div>
			  
			<div class="form-group text-center col-12 mt-2 mx-auto">
			    <input type="text" name="solicitud" value="F-PF-04" hidden="">
				<button type="submit" class="btn btn-success" name="btnsubmit">Enviar Solicitud</button>
			</div>

        </div>

    </form>
<!-- PARTE QUE VIENE LUEGO DEL INCLUDE DE ADMINISTRACION.PHP -->
  </div>
</div>
    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
</body>
</html>

<script type="text/javascript" src="../js/jquery.ajax.js"></script>
<script type="text/javascript" src="validaciones_solicitudes.js"></script>

<script type="text/javascript" src="Formularios/validaciones_solicitudes.js"></script>
<script type="text/javascript" src="js/jquery.ajax.js"></script>