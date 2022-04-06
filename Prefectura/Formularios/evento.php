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
            <h4 class="text-center mt-3">SOLICITUD DE FACTIBILIDAD DE EVENTO</h4>
        </div>
        <div class="col-lg-10 m-auto mt-4 text-justify">
        	<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
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
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Parroquia:</label>
				    <select type="text" class="form-control" name="parroquia_s" id="parroquia_s" disabled="">
				    	<option value="">--Elija una Parroquia--</option>
				    </select>
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Dirección 1:</label>
				    <input type="text" class="form-control" name="direccion1_s" id="direccion1_s" placeholder="Ingrese la dirección principal">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Dirección 2:</label>
				    <input type="text" class="form-control" name="direccion2_s" id="direccion2_s" placeholder="Ingrese la dirección alternativa">
			    </div>
			</div>
        </div>

        <div class="col-lg-10 mx-auto my-3">
	        <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
        </div>

        <!-- ESTE ES EL FORMULARIO DE EVENTOS -->
        <div class="col-md-10 col-sm-11 col-12 mx-auto shadow-sm mb-2 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			<h5 class="text-center mb-3" style="font-size: 1.5em">Registro de Evento</h5>
			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información de la Empresa</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Nombre de la Empresa:</label>
				    <input type="text" class="form-control" name="nombre_ee" id="nombre_ee" placeholder="Ingrese el nombre de la empresa" > 
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">RIF de la Empresa:</label>
				    <input type="text" class="form-control" name="rif_e" id="rif_e" placeholder="Ingrese el RIF de la empresa" > 
			    </div>
			</div>

			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información del Coordinador</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			   	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Nombre del Coordinador:</label>
				    <input type="text" class="form-control" name="coordinador_nombre" id="coordinador_nombre" placeholder="Ingrese el nombre del coordinador" >
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Apellido del Coordinador:</label>
				    <input type="text" class="form-control" name="coordinador_apellido" id="coordinador_apellido" placeholder="Ingrese el nombre del coordinador" >
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Cedula del Coordinador:</label>
				    <input type="text" class="form-control" name="cedula_e" id="cedula_e" placeholder="Ingrese el nombre del coordinador" >
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Cargo del Coordinador:</label>
				    <input type="text" class="form-control" name="cargo_e" id="cargo_e" placeholder="Ingrese el nombre del coordinador" >
			    </div>
			</div>

			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información del Evento</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Nombre del evento:</label>
				    <input type="text" class="form-control" name="nombre_e" id="nombre_e" placeholder="Ingrese el nombre del evento" >
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Municipio:</label>
				    <select type="text" class="form-control" name="municipio_e" id="municipio_e" >
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
				    <select type="text" class="form-control" name="parroquia_e" id="parroquia_e" disabled="" >
				    	<option value="">--Elija una Parroquia--</option>
				    </select>
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Dirección:</label>
				    <input type="text" class="form-control" name="direccion1_e" id="direccion1_e" placeholder="Ingrese la dirección del evento" >
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Fecha de Inicio:</label>
				    <input type="date" class="form-control fecha" name="fecha_i" id="fecha_i" placeholder="Ingrese la fecha de inicio" value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>"> 
				    <label id="fecha-error" style="color: red; margin-left: 2%; display: inline; font-style: italic;"></label>
			  	</div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Fecha de Cierre:</label>
				    <input type="date" class="form-control fecha" name="fecha_c" id="fecha_c" placeholder="Ingrese la fecha de inicio" value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>"> 
			  	</div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Hora (Militar) de Inicio:</label>
				    <input type="time" class="form-control hora" name="hora_i" id="hora_i" placeholder="Ingrese la hora de inicio">
				    <label id="hora-error" style="color: red; margin-left: 2%; display: inline; font-style: italic;"></label>
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Hora (Militar) de Cierre:)</label>
				    <input type="time" class="form-control hora" name="hora_c" id="hora_c" placeholder="Ingrese la hora de cierre">
			    </div>
			</div>

			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información de Contacto</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Teléfono 1:</label>
				    <input type="text" class="form-control" name="telefono1_e" id="telefono1_e" placeholder="Ingrese un número de contacto">
			    </div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Telefono 2:</label>
				    <input type="text" class="form-control" name="telefono2_e" id="telefono2_e" placeholder="Ingrese un número de contacto">
			    </div>
			</div>

			<div class="form-group text-center col-12 mt-2 mx-auto">
			  	<input type="text" name="solicitud" value="F-PF-07" hidden="">
				<button type="submit" class="btn btn-success" name="btnsubmit" id="send">Enviar Solicitud</button>
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
<script type="text/javascript">
	
	//$("#fecha_i") fecha de inicio
	//$("#fecha_c") fecha de cierre
	//VALIDAR QUE FECHA INICIO NO SEA MAYOR QUE LA DE CIERRE
      $(".fecha").change(function(event) {
        var inicio = $("#fecha_i").val();
        var cierre = $("#fecha_c").val();
        if(inicio > cierre){
          $("#fecha-error").text('Fecha de Inicio es Mayor que la de Cierre');
          $("#fecha_i").addClass('error');
          $("#send").attr('disabled', 'true');
        }
        else{
          $("#fecha_i").removeClass('error');
          $("#send").removeAttr('disabled');
          $("#fecha-error").text('');
        }
      });
    //FIN DE VALIDAR FECHA

    //$("#hora_i") hora de inicio
	//$("#hora_c") hora de cierre
	//VALIDAR QUE FECHA INICIO NO SEA MAYOR QUE LA DE CIERRE
      $(".hora").change(function(event) {
        var inicio = $("#hora_i").val();
        var cierre = $("#hora_c").val();
        if(inicio > cierre){
          $("#hora-error").text('Hora de Inicio es Mayor que la de Cierre');
          $("#hora_i").addClass('error');
          $("#send").attr('disabled', 'true');
        }
        else{
          $("#hora_i").removeClass('error');
          $("#send").removeAttr('disabled');
          $("#hora-error").text('');
        }
      });
    //FIN DE VALIDAR FECHA
</script>