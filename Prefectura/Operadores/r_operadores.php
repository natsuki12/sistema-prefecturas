<?php 
  include("../administracion.php");
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script>	

	<div class="row text-center">
	    <div class="col-lg-10 text-center m-auto">
	    	<img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
	        <h4 class="text-center mt-3">REGISTRO DE OPERADOR</h4>
	    </div>

		<div class="col-md-10 col-sm-11 col-12 mx-auto shadow-sm my-3 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			<form class="m-auto col-12 justify-content-center" id="operador">
			  <h5 class="text-center mb-3" style="font-size: 1.5em">Datos de Operador</h5>
			  <div class="form-group text-justify col-12 row justify-content-center m-auto">
			  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
				    <label class="text-muted" style="font-size: 1.2em">Cédula:</label>
				    <input type="text" class="form-control" id="cedula_o" name="cedula_o" placeholder="Ingrese su Cédula">
			    </div>
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Nombre:</label>
				    <input type="text" class="form-control" id="nombre_o" name="nombre_o" placeholder="Ingrese su Nombre">
			    </div>
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
			    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
				    <label class="text-muted" style="font-size: 1.2em">Contraseña:</label>
				    <input type="text" class="form-control" id="contraseña" name="contraseña" placeholder="Ingrese su Contraseña"> 
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
<script type="text/javascript" src="validaciones_operador.js"></script>