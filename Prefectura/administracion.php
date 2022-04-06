<!DOCTYPE html>
<html>
<head>
	<title>Prefecturas - Solicitudes Somos Nueva Esparta | GEBNE</title>
	<meta charset="utf-8">
	<meta name="description" content="Prefecturas - Somos Nueva Esparta">
	<meta name="keywords" content="Prefecturas de la Gobernación del Estado Bolivariano de Nueva Esparta - En la Gestión del Gobernador Alfredo Diaz">
	<meta name="author" content="Dirección del PPP las Telecomunicaciones y Sistemas Informáticos - Programa Practicantes">
	<!-- CSS de Bootstrap -->
	<link rel="stylesheet" type="text/css" href="/Prefectura/css/bootstrap.css">
	<!-- CSS de iconos -->
	<link rel="stylesheet" type="text/css" href="/Prefectura/css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css">
	<!-- Jquery -->
	<script type="text/javascript" src="/Prefectura/js/jquery-3.3.1.min.js"></script>
	<!-- JS de Bootstrap -->
	<script type="text/javascript" src="/Prefectura/js/bootstrap.min.js"></script>
	<!-- Jquery Validacion de datos -->
	<script type="text/javascript" src="/Prefectura/js/jquery.validate.min.js"></script>
	<!-- Jquery Mensajes de Alerta -->
 	<script type="text/javascript" src="/Prefectura/js/sweetalert.js"></script>
 	<!-- JS de los Charts -->
 	<script type="text/javascript" src="/Prefectura/js/chart.js"></script>
 	<!-- CSS para la particion del side nav bar y el contenido interno -->
 	<link rel="stylesheet" type="text/css" href="/Prefectura/css/solicitudes.css">
 	
 	<!-- CSS interno de la pagina -->
 	<style type="text/css">
 		
 		.som{
 			cursor: pointer;
 		}

 		html, body{
 			margin: 0px;
 			height: 100%;
 		}

 		/*MENSAJE DE ERROR EN EL FORMULARIO*/
		label.error{	/*MANIPULO EL CSS DEL LABEL QUE SE ESCRIBE CUANDO HAY UN ERROR*/
			color: red;
			margin-left: 2%;
			display: inline;
			font-style: italic;
		}

		input.error, select.error{	/*MODIFICA LOS INPUT QUE HAYAN TENEDIO ALGUN ERROR*/
			border: 1px solid red;
			background: rgba(230,200,180,0.5);
		}

		@media (max-width: 800px){
		    .fuente {
		        font-size: 10vw;
		    }

		    .fuente2{
		    	font-size: 9vw;
		    }
		}

		@media (min-width: 800px){
		    .fuente {
		        font-size: 4vw;
		    }

		    .fuente2{
		    	font-size: 3vw;
		    }
		}

		/*CSS DE LAS LETRAS DEL ESCUDO Y GOBIERNO*/
		@media (min-width: 1024px){
		    .topper {
		        font-size: 1vw;
		        line-height: 1em;
		    }
		}

		@media (max-width: 1024px){
		    .topper {
		        font-size: 1.1vw;
		        line-height: 1em;
		    }
		}

		@media (max-width: 800px){
		    .topper {
		        font-size: 1.1vw;
		        line-height: 1em;
		    }
		}

		@media (max-width: 640px){
		    .topper {
		        font-size: 2vw;
		        line-height: 1em;
		    }
		}

		@media (max-width: 320px){
		    .topper {
		        font-size: 4vw;
		        line-height: 1em;
		    }
		}	
 	</style>

 	<!-- SCRIPT INTERNO DE LA PAGINA -->
 	<script>
	    $(document).ready(function() {

	      //FUNCION CLICK AL LOGO QUE MANDE AL HOME
	      $("#logo-seguridad").click(function(event) {
	      	location.href = "/Prefectura/home.php"
	      });

	      $(".som").each(function() { //SOMBREADO Y SELECCION DE QUE TIPO DE SOLUCITUD DESEA HACER

	        $(this).hover(function() {
	          $(this).css('opacity', '0.5'); //AQUI LE CAMBIAS EL NIVEL DE OPACIDAD AL PARARTE SOBRE EL
	        }, function() {
	          $(this).css('opacity', '1');
	        });
	      });

	      //EVENTOS PARA DEJAR ACTIVO LA SELECCION PUESTA
	      $("#i_solicitud").click(function(event) {
	      	if($(this).hasClass('active'))
	      		$(this).removeClass('active');
	      	else
	      		$(this).addClass('active');

	      });

	      $("#i_personas").click(function(event) {
	      	if($(this).hasClass('active'))
	      		$(this).removeClass('active');
	      	else
	      		$(this).addClass('active');
	      });

	      $("#r_solicitud").click(function(event) {
	      	if($(this).hasClass('active'))
	      		$(this).removeClass('active');
	      	else
	      		$(this).addClass('active');
	      });

	      $("#i_prefectura").click(function(event) {
	      	if($(this).hasClass('active'))
	      		$(this).removeClass('active');
	      	else
	      		$(this).addClass('active');
	      });

	      $("#i_operadores").click(function(event) {
	      	if($(this).hasClass('active'))
	      		$(this).removeClass('active');
	      	else
	      		$(this).addClass('active');
	      });

	      $("#i_actividades").click(function(event) {
	      	if($(this).hasClass('active'))
	      		$(this).removeClass('active');
	      	else
	      		$(this).addClass('active');
	      });
	    });
  	</script>
</head>
<body>
	<div class="nav-side-menu">
	    <div class="brand py-2">
	    	<div class="m-auto text-center">
		    	<img src="/Prefectura/Imagenes/logo-seguridad.png" class="img-fluid" width="100" height="100" id="logo-seguridad" style="cursor: pointer;">
		    	<span class="d-block font-weight-bold">Municipio Antolin del Campo</span>
	    	</div>
	    </div>
	    <div class="menu-list">
	        <ul id="menu-content" class="menu-content collapse out text-white text-justified d-block">
	            <div class="m-auto text-center py-2" style="line-height: 28px; border-bottom: 1px solid #23282e;">
	            	<span class="text-center font-weight-bold" style="font-size: 1.3em">Panel Administrativo</span>
	            </div>
	            <li data-toggle="collapse" data-target="#solicitudes" class="collapsed" id="i_solicitud">
                    <a><i class="fa fa-book-open fa-lg"></i> Registrar Solicitud <i class="fas fa-angle-double-down text-white"></i></a>
                </li>
                <ul class="sub-menu collapse" id="solicitudes">
                    <li class="py-1" id="F-PF-02">
		                <a class="ml-2" href="/Prefectura/Formularios/residencia_equipaje.php">Cambio de Residencia: Regimen de Equipaje</a>
		            </li>
		            <li class="py-1" id="F-PF-06">
		                <a class="ml-2" href="/Prefectura/Formularios/buena_conducta.php">Carta de Buena Conducta</a>
		            </li>	            
					<li class="py-1" id="F-PF-05">
		                <a class="ml-2" href="/Prefectura/Formularios/dependencia_eco.php">Constancia de Dependencia Economica</a>
		            </li>
		            <li class="py-1" id="F-PF-08">
		                <a class="ml-2" href="/Prefectura/Formularios/extravio.php">Constancia de Extravio de Documentos</a>
		            </li>
		            <li class="py-1" id="F-PF-07">
		                <a class="ml-2" href="/Prefectura/Formularios/evento.php">Constancia de Factibilidad de Eventos</a>
		            </li>
		            <li class="py-1" id="F-PF-01">
		                <a class="ml-2" href="/Prefectura/Formularios/mudanza.php">Constancia de Mudanza</a>
		            </li>
		            <li class="py-1" id="F-PF-03">
		                <a class="ml-2" href="/Prefectura/Formularios/permiso_viaje.php">Constancia de Permiso de Viaje</a>
		            </li>
		            <li class="py-1" id="F-PF-04">
		                <a class="ml-2" href="/Prefectura/Formularios/fe_de_vida.php">Constancia de Fe de Vida</a>
		            </li>
                </ul>
                <li data-toggle="collapse" data-target="#personas" class="collapsed" id="i_personas">
                    <a><i class="fa fa-user fa-lg"></i> Personas <i class="fas fa-angle-double-down text-white"></i></a>
                </li>
                <ul class="sub-menu collapse" id="personas">
                    <li class="py-1">
		                <a class="ml-2" href="/Prefectura/Personas/censo.php">Registrar Usuario</a>
		            </li>
		            <li class="py-1">
		                <a class="ml-2" href="/Prefectura/Personas/m_usuarios.php">Modificar Datos de Usuario</a>
		            </li>	            
					<li class="py-1">
		                <a class="ml-2" href="/Prefectura/Personas/l_usuarios.php">Lista de Usuarios</a>
		            </li>
		            <li class="py-1">
		                <a class="ml-2" href="/Prefectura/Personas/e_usuarios.php">Estadísticas de Usuarios</a>
		            </li>
                </ul>
                <li data-toggle="collapse" data-target="#reportes" class="collapsed" id="r_solicitud">
                    <a><i class="fa fa-folder-open fa-lg"></i> Reporte de Solicitudes <i class="fas fa-angle-double-down text-white"></i></a>
                </li>
                <ul class="sub-menu collapse" id="reportes">
                    <li class="py-1">
		                <a class="ml-2" href="/Prefectura/Reportes/l_solicitudes.php">Lista de Solicitudes</a>
		            </li>
					<li class="py-1">
		                <a class="ml-2" href="/Prefectura/Reportes/m_solicitudes.php">Modificar Solicitud</a>
		            </li>
		            <li class="py-1 collapsed" data-toggle="collapse" data-target="#datos">
		                <a class="ml-2">Datos Específicos en Solicitudes <i class="fas fa-angle-double-down text-white"></i></a>
		            </li>
		            <ul class="sub-menu collapse" id="datos">
			            <li class="py-1">
			                <a class="ml-4" href="/Prefectura/Reportes/vehiculo.php">Vehículos</a>
			            </li>
			            <li class="py-1">
			                <a class="ml-4" href="/Prefectura/Reportes/testigos.php">Testigos</a>
			            </li>
			            <li class="py-1">
			                <a class="ml-4" href="/Prefectura/Reportes/acompañantes.php">Acompañantes</a>
			            </li>
			            <li class="py-1">
			                <a class="ml-4" href="/Prefectura/Reportes/dependientes.php">Dependientes Económicos</a>
			            </li>
			            <li class="py-1">
			                <a class="ml-4" href="/Prefectura/Reportes/eventos.php">Evento</a>
			            </li>
			            <li class="py-1">
			                <a class="ml-4" href="/Prefectura/Reportes/hijos.php">Hijos (Permiso de Viaje)</a>
			            </li>
		            </ul>
		            <li class="py-1">
		                <a class="ml-2" href="/Prefectura/Reportes/e_solicitudes.php">Estadísticas de Solicitudes</a>
		            </li>
                </ul>
                <li data-toggle="collapse" data-target="#prefectura" class="collapsed" id="i_prefectura">
                    <a><i class="fa fa-info-circle fa-lg"></i> Prefectura <i class="fas fa-angle-double-down text-white"></i></a>
                </li>
                <ul class="sub-menu collapse" id="prefectura">
                    <li class="py-1">
		                <a class="ml-2" href="/Prefectura/Prefectura/info_prefectura.php">Información de Prefectura</a>
		            </li>
		            <li class="py-1">
		                <a class="ml-2" href="/Prefectura/Prefectura/m_prefectura.php">Modificar Información de Prefectura</a>
		            </li>
                </ul>
                <li data-toggle="collapse" data-target="#operadores" class="collapsed" id="i_operadores">
                    <a><i class="fa fa-user-check fa-lg"></i> Operadores <i class="fas fa-angle-double-down text-white"></i></a>
                </li>
                <ul class="sub-menu collapse" id="operadores">
                    <li class="py-1">
		                <a class="ml-2" href="/Prefectura/Operadores/l_operadores.php">Lista de Operadores</a>
		            </li>
                    <li class="py-1">
		                <a class="ml-2" href="/Prefectura/Operadores/r_operadores.php">Registrar Operador</a>
		            </li>
		            <li class="py-1">
		                <a class="ml-2" href="/Prefectura/Operadores/m_operadores.php">Modificar Operador</a>
		            </li>
                </ul>
                <li id="i_actividades">
                    <a href="/Prefectura/Actividades/registro.php">
                        <i class="fa fa-file fa-lg"></i> Registro de Actividades
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user-lock fa-lg"></i> Cerrar Sesion
                    </a>
                </li>
	        </ul>
	    </div>
	</div>
	
	<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
	<div class="container-fluid justify-content-center" style="height: 100%" id="main">
	    <div id="solicitud" class="mb-3">
	    	<div class="mt-4 text-left col-10 m-auto pt-3 row d-none" id="topsito">
		    	<div class="col-lg-9 col-12 mt-3 d-lg-block d-none topper">
					<span class="text-justify">
						República Bolivariana de Venezuela<br>
						Gobierno del Estado Bolivariano de Nueva Esparta<br>
						Dirección del Poder Popular para la Seguridad y Orden Público<br>
						Prefectura de la Parroquia y/o Municipio
					</span>
	    		</div>
	    		<div class="col-lg-9 col-12 mt-3 d-lg-none text-center topper">
					<span>
						República Bolivariana de Venezuela<br>
						Gobierno del Estado Bolivariano de Nueva Esparta<br>
						Dirección del Poder Popular para la Seguridad y Orden Público<br>
						Prefectura de la Parroquia y/o Municipio
					</span>
	    		</div>
	    		<div class="col-lg-3 col-12 mt-lg-0 mt-3 text-center">
	    			<img src="../Imagenes/escudo-512x512.png" class="img-fluid" style="height: 80px">
	    		</div>
	    	</div>
<!--	    	
	    </div>
	</div>
    <!- FIN CONTENEDOR DE LAS OPCIONES ->
    <!- <script type="text/javascript" src="js/solicitud.js"></script> ->
</body>
</html>-->