<!DOCTYPE html>
<html>
<head>
	<title>Prefecturas Somos Nueva Esparta | GEBNE</title>
	<meta charset="utf-8">
	<meta name="description" content="Prefecturas - Somos Nueva Esparta">
	<meta name="keywords" content="Prefecturas de la Gobernación del Estado Bolivariano de Nueva Esparta - En la Gestión del Gobernador Alfredo Diaz">
	<meta name="author" content="Dirección del PPP las Telecomunicaciones y Sistemas Informáticos - Programa Practicantes">
	<!-- CSS de Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- CSS de Iconos -->
	<link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css">
	<!-- Jquery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- JS de Bootstrap -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Jquery Validacion de datos -->
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<!-- Jquery Mensajes de Alerta -->
 	<script type="text/javascript" src="js/sweetalert.js"></script>

 	<!-- CSS interno de la pagina -->
 	<style type="text/css">
 		
 		body {
 			background-color: white;
 			background-image: url('Imagenes/fondoback.png');
 			background-repeat: repeat-y;
 			background-size: contain;
 		}

 		.formulario{
 			background-color: rgba(255,255,255,0.8); 
 			border: 2px solid rgba(0,0,0,0.3); 
 			border-radius: 2%;
 		}

 		.som{
 			cursor: pointer;
 		}

 		#banner{
 			background: url('Imagenes/newbanner.png');
			background-size: cover;
			background-position: center;
			border-top: 2px solid #1B1464;
			border-bottom: 2px solid #1B1464;
 		}

 		/*MENSAJE DE ERROR EN EL FORMULARIO*/
		label.error{	/*MANIPULO EL CSS DEL LABEL QUE SE ESCRIBE CUANDO HAY UN ERROR*/
			color: red;
			margin-left: 2%;
			display: block;
			font-style: italic;
		}

		input.error, select.error{	/*MODIFICA LOS INPUT QUE HAYAN TENEDIO ALGUN ERROR*/
			border: 1px solid red;
			background: rgba(230,200,180,0.5);
		}

		@media (min-width: 1024px){
		    .fuente {
		        font-size: 1vw;
		        line-height: 1.5em;
		    }
		}

		@media (max-width: 1024px){
		    .fuente {
		        font-size: 1.5vw;
		        line-height: 1.5em;
		    }
		}

		@media (max-width: 640px){
		    .fuente {
		        font-size: 2vw;
		        line-height: 1.5em;
		    }
		}

		@media (max-width: 320px){
		    .fuente {
		        font-size: 4vw;
		        line-height: 1.5em;
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
	        
	        $(this).click(function(event) {
	          var valor = $(this).attr('id');
	          location.href = "solicitudes.php?solicitud="+valor;
	        });
	      });

	    });
  	</script>
</head>
<body>
	<div class="container-fluid d-block">
		
		<!-- HEADER DE LA PAGINA CON EL LOGO DE LA GOBERNACION Y EL IDENTIFICADOR DE PREFECTURAS -->
		<div class="row justify-content-center text-center py-2 h-25">
			<div class="col-lg-4 col-sm-12 p-auto text-center">
				<img src="Imagenes/escudo-512x512.png" class="img-fluid" alt="Responsive image" width="150">
			</div>
			<div class="row col-lg-8 col-sm-12 m-auto">
				<h1 class="text-white text-center font-weight-bold col-lg-10 col-12 px-sm-0 px-2">Prefectura del Estado Bolivariano de Nueva Esparta</h1>
			</div>
		</div>
		
		<!-- SECCION DE IMAGEN DE LA BANDERA CON EL LOGIN INSTITUCIONAL-->
		<div class="row justify-content-center bg-danger py-3" id="banner">
			<div class="col-lg-6 col-mg-6 col-sm-6 d-none d-sm-block text-center m-auto">
			</div>
			<!-- LOGIN INSTITUCIONAL -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-12 m-auto py-md-0 py-2">
				<div class="card px-0 col-lg-8 col-md-12 col-sm-12 col-12 m-auto" style="box-shadow: 0px 0px 20px -2px rgba(0,0,0,0.5); border: 0">
				    <h5 class="text-white text-center py-3" style="background-color: #1B1464">
				        <strong>Acesso Institucional</strong>
				    </h5>
				    <div class="card-body px-sm-4 px-2" style="background-color: rgba(255,255,255,0.2);">
				        <!-- FORMULARIO -->
				        <form class="m-auto" id="login" action="index.php" method="post" style="color: #757575;">
				            <!-- USUARIO -->
				            <div class="form-group">
							    <label class="text-muted" style="font-size: 1.2em">Usuario</label>
							    <input type="text" class="form-control" id="user" name="user" placeholder="Ingrese su Usuario">
							</div>
				            <!-- CONTRASEÑA -->
				            <div class="form-group">
							    <label class="text-muted" style="font-size: 1.2em">Contraseña</label>
							    <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su Contraseña">
							    <!--<span class="text-dark">¿Olvidó su contraseña?<a href="#" class="text-dark"> Presione Aquí</a></span>-->
							</div>
				            <!-- BOTON DE INGRESAR -->
				            <div class="text-center">
								<button name="login" type="submit" class="btn btn-outline-info btn-rounded w-50 text-white" style="border: 2px solid #1B1464; background-color: #2E3192;">Ingresar</button>	  	
							</div>
				        </form>
				        <!-- FORMULARIO -->
				    </div>
				</div>
			</div>
			<!--<div class="col-lg-6 col-mg-6 col-sm-6 col-12 m-auto">
				<form class="m-auto col-lg-7 col-mg-8 col-12 py-3 formulario">
				  <h5 class="text-center" style="font-size: 1.5em; border-bottom: 2px solid grey">Acceso Institucional</h5>
				  <div class="form-group">
				    <label class="text-muted" style="font-size: 1.2em">Usuario</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su cedula">
				  </div>
				  <div class="form-group">
				    <label class="text-muted" style="font-size: 1.2em">Contraseña</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
				    <span class="text-dark">¿Olvidó su contraseña?<a href="#" class="text-dark"> Presione Aquí</a></span>
				  </div>
				  <div class="text-center">
					  <button type="submit" class="btn w-50 text-white" style="background-color: #2E3192">Enviar</button>				  	
				  </div>
				</form>
			</div>-->
		</div>

		<!-- FRANJA CON LA PALABRA SOLICITUDES PARA LA APERTURA DE LAS OPCIONES -->
		<div class="row text-center justify-content-center py-2">
		  <img src="Imagenes/franja.jpg" class="col-lg-5 col-sm-4 col-12 img-fluid m-auto" align="Responsive image" style="height: 10px">
	      <p class="text-white font-weight-bold col-lg-2 col-sm-4 col-12 h2 my-lg-0 my-2">Solicitudes</p>
	      <img src="Imagenes/franja.jpg" class="col-lg-5 col-sm-4 col-12 img-fluid m-auto" align="Responsive image" style="height: 10px">
	    </div>

	    <!-- CONTENEDOR CON LOS CIRCULOS CON LAS SOLICITUDES -->
	    <div class="py-2 w-80 mx-auto rounded mb-4" style="box-shadow: 0px 6px 50px -2px rgba(0,0,0,1); background-color: "> <!-- #0071BC,#E6E6E6,white, sin color  y los iconos blancos totalmente -->
		    <div class="row justify-content-center text-center mb-lg-2 mt-lg-3 mt-sm-3 mt-0">  
		      <div class="col-lg-3 col-md-3 col-sm-6 col-12"> <!-- EL PRIMERO -->
		        <img id="F-PF-04" src="Imagenes/iconoFDV.png" width="150" class="img-fluid som" style="">
		        <p class="font-weight-bold text-dark mt-2">Fe de Vida</p>
		      </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 col-12"> <!-- EL SEGUNDO -->
		        <img id="F-PF-02" src="Imagenes/iconoCDR.png" width="150" class="img-fluid som" style="">
		        <p class="font-weight-bold text-dark mt-2">Cambio de Residencia Regimen de Equipaje</p>
		      </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 col-12"> <!-- EL TERCERO -->
		        <img id="F-PF-06" src="Imagenes/iconoCBC.png" width="150" class="img-fluid som" style="">
		        <p class="font-weight-bold text-dark mt-2">Carta de Buena Conducta</p>
		      </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 col-12"> <!-- EL CUARTO -->
		        <img id="F-PF-05" src="Imagenes/iconoCDE.png" width="150" class="img-fluid som" style="">
		        <p class="font-weight-bold text-dark mt-2">Constancía de Dependencia Economica</p>
		      </div>
		    </div>
		    <div class="row justify-content-center text-center mb-lg-2 mt-2">  
		      <div class="col-lg-3 col-md-3 col-sm-6 col-12"> <!-- EL SEGUNDO -->
		        <img id="F-PF-08" src="Imagenes/iconoCED.png" width="150" class="img-fluid som" style="">
		        <p class="font-weight-bold text-dark mt-2">Constancia de Extravio de Documentos</p>
		      </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 col-12"> <!-- EL TERCERO -->
		        <img id="F-PF-07" src="Imagenes/iconoCFE.png" width="150" class="img-fluid som" style="">
		        <p class="font-weight-bold text-dark mt-2">Constancia de Factibilidad de Eventos</p>
		      </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 col-12"> <!-- EL PRIMERO -->
		        <img id="F-PF-01" src="Imagenes/iconoCM.png" width="150" class="img-fluid som" style="">
		        <p class="font-weight-bold text-dark mt-2">Constancia de Mudanza</p>
		      </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 col-12"> <!-- EL SEGUNDO -->
		        <img id="F-PF-03" src="Imagenes/iconoPDV.png" width="150" class="img-fluid som" style="">
		        <p class="font-weight-bold text-dark mt-2">Permiso de Viaje</p>
		      </div>
		    </div>
	    </div>
	</div>

	    <!-- FRANJA CON LA INFORMACIÓN DE LOS DESARROLLADORES -->
	    <div class="container-fluid text-center text-white py-2" style="background-color: rgb(31,56,100); border-top: 2px solid #2E3192; border-bottom: 2px solid #2E3192;" >
		  <p class="m-auto h4 col-12 px-sm-0 px-2">Programa Prácticantes Desarrolladores</p>
		  <!-- ACOMODAR ESTE BETA PARA QUE SALGA LA INFORMACION DE LAS PERSONAS CALIDAD -->
		  <div class="row justify-content-center text-center mb-lg-2 mt-4">
			  <div class="card col-lg-3 col-sm-5 mx-3 mt-5 mb-mg-0 mb-4" style="background-color: rgb(47,84,150); box-shadow: 0px 5px 20px -2px rgba(0,0,0,0.6);">
				  <img class="card-img-top mx-auto" src="Imagenes/icono.png" alt="Card image cap" style="width: 100px; margin-top: -50px; border-radius: 50%; border: 1.5px solid rgba(0,0,0,0.2)">
				  <div class="card-body">
				  	<h5>Félix Marquez</h5>
				  	<h6>Director de Telecomunicaciones</h6>
				    <ul class="card-text font-weight-light text-left p-0" style="list-style: none">
				    	<li><i class="fa fa-caret-right "></i> Correo: felixmarquez@gmail.com</li>
				    	<li><i class="fa fa-caret-right "></i> Linkedin: @felixmarquez</li>
				    	<li><i class="fa fa-caret-right "></i> Teléfono: 0414-7941206</li>
				    </ul>
				  </div>
			  </div>
			  <div class="card col-lg-3 col-sm-5 mx-3 mt-5 mb-mg-0 mb-4" style="background-color: rgb(47,84,150); box-shadow: 0px 5px 20px -2px rgba(0,0,0,0.6);">
				  <img class="card-img-top mx-auto" src="Imagenes/icono.png" alt="Card image cap" style="width: 100px; margin-top: -50px; border-radius: 50%; border: 1.5px solid rgba(0,0,0,0.2)">
				  <div class="card-body">
				  	<h5>Profe Angel</h5>
				  	<h6>....</h6>
				    <ul class="card-text font-weight-light text-left p-0" style="list-style: none">
				    	<li><i class="fa fa-caret-right "></i> Correo: raimondrivas19@gmail.com</li>
				    	<li><i class="fa fa-caret-right "></i> Linkedin: @raimonrivas</li>
				    	<li><i class="fa fa-caret-right "></i> Teléfono: 0424-8195273</li>
				    </ul>
				  </div>
			  </div>
		      <div class="card col-lg-3 col-sm-5 mx-3 mt-5 mb-mg-0 mb-4" style="background-color: rgb(47,84,150); box-shadow: 0px 5px 20px -2px rgba(0,0,0,0.6);">
				  <img class="card-img-top mx-auto" src="Imagenes/icono.png" alt="Card image cap" style="width: 100px; margin-top: -50px; border-radius: 50%; border: 1.5px solid rgba(0,0,0,0.2)">
				  <div class="card-body">
				  	<h5>Andres Ramirez</h5>
				  	<h6>Programador en Jefe</h6>
				    <ul class="card-text font-weight-light text-left p-0" style="list-style: none">
				    	<li><i class="fa fa-caret-right "></i> Correo: andresramirez2025@gmail.com</li>
				    	<li><i class="fa fa-caret-right "></i> Linkedin: www.linkedin.com/in/andres28ramirez</li>
				    	<li><i class="fa fa-caret-right "></i> Teléfono: 0412-7942183</li>
				    </ul>
				  </div>
			  </div>
			  <div class="card col-lg-3 col-sm-5 mx-3 mt-5 mb-mg-0 mb-4" style="background-color: rgb(47,84,150); box-shadow: 0px 5px 20px -2px rgba(0,0,0,0.6);">
				  <img class="card-img-top mx-auto" src="Imagenes/icono.png" alt="Card image cap" style="width: 100px; margin-top: -50px; border-radius: 50%; border: 1.5px solid rgba(0,0,0,0.2)">
				  <div class="card-body">
				  	<h5>Cesar Requena</h5>
				  	<h6>Programador</h6>
				    <ul class="card-text font-weight-light text-left p-0" style="list-style: none">
				    	<li><i class="fa fa-caret-right "></i> Correo: cesar12piso09@gmail.com</li>
				    	<li><i class="fa fa-caret-right "></i> Linkedin: @cesarequena</li>
				    	<li><i class="fa fa-caret-right "></i> Teléfono: 0416-0302290</li>
				    </ul>
				  </div>
			  </div>
			  <div class="card col-lg-3 col-sm-5 mx-3 mt-5 mb-mg-0 mb-4" style="background-color: rgb(47,84,150); box-shadow: 0px 5px 20px -2px rgba(0,0,0,0.6);">
				  <img class="card-img-top mx-auto" src="Imagenes/icono.png" alt="Card image cap" style="width: 100px; margin-top: -50px; border-radius: 50%; border: 1.5px solid rgba(0,0,0,0.2)">
				  <div class="card-body">
				  	<h5>Miguel Gil</h5>
				  	<h6>Programador</h6>
				    <ul class="card-text font-weight-light text-left p-0" style="list-style: none">
				    	<li><i class="fa fa-caret-right "></i> Correo: miguel.gil.54@gmail.com</li>
				    	<li><i class="fa fa-caret-right "></i> Linkedin: @miguelgil</li>
				    	<li><i class="fa fa-caret-right "></i> Teléfono: 0412-0810308</li>
				    </ul>
				  </div>
			  </div>
			  <div class="card col-lg-3 col-sm-5 mx-3 mt-5 mb-mg-0 mb-4" style="background-color: rgb(47,84,150); box-shadow: 0px 5px 20px -2px rgba(0,0,0,0.6);">
				  <img class="card-img-top mx-auto" src="Imagenes/icono.png" alt="Card image cap" style="width: 100px; margin-top: -50px; border-radius: 50%; border: 1.5px solid rgba(0,0,0,0.2)">
				  <div class="card-body">
				  	<h5>Raimond Rivas</h5>
				  	<h6>Diseñador</h6>
				    <ul class="card-text font-weight-light text-left p-0" style="list-style: none">
				    	<li><i class="fa fa-caret-right "></i> Correo: raimondrivas19@gmail.com</li>
				    	<li><i class="fa fa-caret-right "></i> Linkedin: @raimonrivas</li>
				    	<li><i class="fa fa-caret-right "></i> Teléfono: 0424-8195273</li>
				    </ul>
				  </div>
			  </div>
		   </div>
	    </div>

		<!-- FOOTER DE LA PAGINA -->
	<div class="container-fluid">	
		<div class="row justify-content-center" style="background-image: url('Imagenes/footer.png'); height: 353px;"> <!-- con o sin background-color -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-12 text-justify mx-auto pt-4 text-white">
				<div class="col-xl-8 col-lg-8 col-12 fuente pl-5" style="">
					<span class="font-weight-bold">
						<span class="font-weight-bold">Sitio Web Oficial</span><br>
						Copyright ® 2019-20<?php echo date('y')?> / Gobernación del Estado Bolivariano de Nueva Esparta - Todos los derechos reservados.<br>
						<span class="">Desarrollado por la Dirección del Poder Popular para las Telecomunicaciones y Sistemas Informáticos - <a class="font-weight-bold practicantes">Programa Prácticantes.</a></span>
					</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-12 text-center m-auto py-md-0 py-2">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-12 text-center m-auto py-md-0 py-2">
			</div>
		</div>
	</div>
</body>
</html>