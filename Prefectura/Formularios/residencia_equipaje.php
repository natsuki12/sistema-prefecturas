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
            <h4 class="text-center mt-3">SOLICITUD CONSTANCIA DE RESIDENCIA PARA REGIMEN DE EQUIPAJE (VEHICULO)</h4>
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

        <!-- PARTE DEL REGISTRO DE LOS VEHICULOS -->
        <div class="col-md-10 col-sm-11 col-12 mx-auto shadow-sm mb-2 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			<h5 class="text-center mb-3" style="font-size: 1.5em">Registro de Vehículo</h5>
			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Datos del Vehículo</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Marca:</label>
				    <input type="text" class="form-control" name="marca_v" id="marca_v" placeholder="Ingrese la marca del vehiculo">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Modelo:</label>
				    <input type="text" class="form-control" name="modelo_v" id="modelo_v" placeholder="Ingrese el modelo del vehiculo">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Año:</label>
				    <input type="text" class="form-control" name="ano_v" id="ano_v" placeholder="Ingrese el año del vehiculo"> 
			    </div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Color:</label>
				    <input type="text" class="form-control" name="color_v" id="color_v" placeholder="Ingrese el color del vehiculo">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Serial de Carrocería:</label>
				    <input type="text" class="form-control" name="serial_v" id="serial_v" placeholder="Ingrese el serial de la carroceria">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Placa:</label>
				    <input type="text" class="form-control" name="placa_v" id="placa_v" placeholder="Ingrese la placa del vehiculo">
			    </div>
			</div>

			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información del Conductor</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">    
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Nombre del Conductor:</label>
				    <input type="text" class="form-control" name="nombre_c" id="nombre_c" placeholder="Ingrese nombre y apellido">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Cedula:</label>
				    <input type="text" class="form-control" name="cedula_c" id="cedula_c" placeholder="Ingrese la cedula">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Teléfono:</label>
				    <input type="text" class="form-control" name="telefono_c" id="telefono_c" placeholder="Ingrese el teléfono">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Cod. Carnet de Circulación:</label>
				    <input type="text" class="form-control" name="codigo_c" id="codigo_c" placeholder="Ingrese el cod. del carnet">
			    </div>
			</div>

			<div class="col-lg-10 mx-auto my-3">
		        <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
	        </div>

			<h5 class="text-center mb-3" style="font-size: 1.5em">Registro de Cambio de Residencía</h5>
			<h6 class="text-center pb-2" style="border-bottom: 2px solid">Información de Dirección</h6>
			<div class="form-group text-justify col-12 row justify-content-center m-auto">
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Estado a Mudarse:</label>
				    <select class="form-control" name="estado_n" id="estado_n">
				    	<option value="">--Seleccione el nuevo estado--</option>
				    	<option value="Amazonas">Amazonas</option>
				    	<option value="Anzoátegui">Anzoátegui</option>
				    	<option value="Apure">Apure</option>
				    	<option value="Aragua">Aragua</option>
				    	<option value="Barinas">Barinas</option>
				    	<option value="Bolivar">Bolivar</option>
				    	<option value="Carabobo">Carabobo</option>
				    	<option value="Cojedes">Cojedes</option>
				    	<option value="Delta Amacuro">Delta Amacuro</option>
				    	<option value="Distrito Capital">Distrito Capital</option>
				    	<option value="Falcón">Falcón</option>
				    	<option value="Guárico">Guárico</option>
				    	<option value="Lara">Lara</option>
				    	<option value="Mérida">Mérida</option>
				    	<option value="Miranda">Miranda</option>
				    	<option value="Monagas">Monagas</option>
				    	<option value="Nueva Esparta">Nueva Esparta</option>
				    	<option value="Portuguesa">Portuguesa</option>
				    	<option value="Sucre">Sucre</option>
				    	<option value="Táchira">Táchira</option>
				    	<option value="Trujillo">Trujillo</option>
				    	<option value="Vargas">Vargas</option>
				    	<option value="Yaracuy">Yaracuy</option>
				    	<option value="Zulia">Zulia</option>
				    	<option>Sucre</option>
				    </select>
			    </div>
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Dirección Nueva:</label>
				    <input type="text" class="form-control" name="direccion_n" id="direccion_n" placeholder="Ingrese la nueva dirección">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Años en la anterior residencia:</label>
				    <input type="text" class="form-control" name="residencia_a" id="residencia_a" placeholder="Ingrese los años">
			    </div>
			</div>
			
			<div class="form-group text-center col-12 mt-2 mx-auto">
			  	<input type="text" name="solicitud" value="F-PF-02" hidden="">
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