<!DOCTYPE html>
<html>
<head>
	<title>Prefecturas - Solicitudes Somos Nueva Esparta | GEBNE</title>
	<meta charset="utf-8">
	<meta name="description" content="Prefecturas - Somos Nueva Esparta">
	<meta name="keywords" content="Prefecturas de la Gobernación del Estado Bolivariano de Nueva Esparta - En la Gestión del Gobernador Alfredo Diaz">
	<meta name="author" content="Dirección del PPP las Telecomunicaciones y Sistemas Informáticos - Programa Practicantes">
	<!-- CSS de Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- CSS de iconos -->
	<link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css">
	<!-- Jquery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- JS de Bootstrap -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Jquery Validacion de datos -->
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<!-- Jquery Mensajes de Alerta -->
 	<script type="text/javascript" src="js/sweetalert.js"></script>
 	<!-- CSS para la particion del side nav bar y el contenido interno -->
 	<link rel="stylesheet" type="text/css" href="css/solicitudes.css">
 	
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

	      $(".som").each(function() { //SOMBREADO Y SELECCION DE QUE TIPO DE SOLUCITUD DESEA HACER

	        $(this).hover(function() {
	          $(this).css('opacity', '0.5'); //AQUI LE CAMBIAS EL NIVEL DE OPACIDAD AL PARARTE SOBRE EL
	        }, function() {
	          $(this).css('opacity', '1');
	        });
	      });

	    });
  	</script>
</head>
<body>
	<div class="nav-side-menu">
	    <div class="brand py-2">
	    	<div class="m-auto text-center">
	    		<img src="Imagenes/logo-seguridad.png" class="img-fluid" width="100" height="100">
	    	</div>
	    </div>
	    <div class="menu-list">
	        <ul id="menu-content" class="menu-content collapse out text-white text-justified d-block">
	            <div class="m-auto text-center py-2" style="line-height: 28px; border-bottom: 1px solid #23282e;">
	            	<span class="text-center" style="font-size: 1.5em">Solicitudes</span>
	            </div>
	            <li class="py-1" id="F-PF-02">
	                <a class="ml-2">
	                    Cambio de Residencia: Regimen de Equipaje
	                </a>
	            </li>
	            <li class="py-1" id="F-PF-06">
	                <a class="ml-2">
	                    Carta de Buena Conducta
	                </a>
	            </li>	            
				<li class="py-1" id="F-PF-05">
	                <a class="ml-2">
	                    Constancia de Dependencia Economica
	                </a>
	            </li>
	            <li class="py-1" id="F-PF-08">
	                <a class="ml-2">
	                    Constancia de Extravio de Documentos
	                </a>
	            </li>
	            <li class="py-1" id="F-PF-07">
	                <a class="ml-2">
	                    Constancia de Factibilidad de Eventos
	                </a>
	            </li>
	            <li class="py-1" id="F-PF-01">
	                <a class="ml-2">
	                    Constancia de Mudanza
	                </a>
	            </li>
	            <li class="py-1" id="F-PF-03">
	                <a class="ml-2">
	                    Constancia de Permiso de Viaje
	                </a>
	            </li>
	            <li class="py-1" id="F-PF-04">
	                <a class="ml-2">
	                    Constancia de Fe de Vida
	                </a>
	            </li>
	        </ul>
	    </div>
	</div>
	
	<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
	<div class="container-fluid justify-content-center" style="height: 100%" id="main">
	    <div id="solicitud">
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
	    			<img src="/Prefectura/Imagenes/escudo-512x512.png" class="img-fluid" style="height: 80px">
	    		</div>
	    	</div>
	    	<?php
	    		if(isset($_GET["solicitud"])){
	    			$solicitud=$_GET["solicitud"];
	    			switch ($solicitud) {
	    				//mudanza
	    				case 'F-PF-01':
	    					include("Formularios/mudanza.php");
	    					break;

	    				//regimen de equipaje
	    				case 'F-PF-02':
	    					include("Formularios/residencia_equipaje.php");
	    					break;
	    				
	    				//permiso de viaje
	    				case 'F-PF-03':
	    					include("Formularios/permiso_viaje.php");
	    					break;

	    				//fe de vida
	    				case 'F-PF-04':
	    					include("Formularios/fe_de_vida.php");
	    					break;

	    				//dependencia
	    				case 'F-PF-05':
	    					include("Formularios/dependencia_eco.php");
	    					break;

	    				//buena conducta
	    				case 'F-PF-06':
	    					include("Formularios/buena_conducta.php");
	    					break;

	    				//evento
	    				case 'F-PF-07':
	    					include("Formularios/evento.php");
	    					break;

	    				//extravio
	    				case 'F-PF-08':
	    					include("Formularios/extravio.php");
	    					break;

	    				case 'informacion':
	    					include("informacion.php");
	    					break;
	    				default:
	    					# code...
	    					break;
	    			}
	    		} 
	    	?>
	    </div>
	</div>
    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
    <script type="text/javascript" src="js/solicitud.js"></script>
</body>
</html>