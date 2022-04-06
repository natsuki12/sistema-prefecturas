<?php 
  include("../administracion.php");
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script>		

  	<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
	<div class="col-12 m-auto">
		<div class="col-lg-10 text-center m-auto">
			<img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
	        <h4 class="text-center mt-3">INFORMACIÓN DE PREFECTURA</h4>
	    </div>

		<div class="row col-md-10 col-sm-11 col-12 justify-content-center m-auto">
			<!-- SOLO SALE SI ES ADMINISTRADOR -->
		    <div class="row my-2">
		    	<div class="col-12 text-center">
					<label class="">Mostrar Prefectura</label>
					<select class="form-control" name="prefectura_cod">
						<option value="codigo de prefectura">Prefectura del Municipio Maneiro</option>
						<option value="codigo de prefectura">Prefectura del Municipio Maneiro</option>
						<option value="codigo de prefectura">Prefectura del Municipio Maneiro</option>
						<option value="codigo de prefectura">Prefectura del Municipio Maneiro</option>
					</select>
		    	</div>
		    </div>
		    <!-- SOLO SALE SI ES ADMINISTRADOR -->

			<div class="col-12 mt-2 row text-center">
				<h6 class="text-center m-auto font-weight-bold pb-2">Prefectura de Parroquía X /  de Municipio X</h6>
				<p class="text-justify">
					<strong>Dirección: </strong>Base Policial de Pampatar, Calle San Martín, Sector Polanco. / Dirección de la Prefectura<br>
					<strong>Prefecto: </strong>Abg. X nombre<br>
					<strong>Números de Contacto: </strong>Teléfono 1 / Teléfono 2<br>
					<strong>Código Único de Prefectura: </strong>X#
				</p>
				<div class="col-lg-6 col-md-10 col-sm-6 col-12 m-auto">
					<h6 class="text-center text-primary">Ámbito Territoral</h6>
					<ul class="text-left">
						<li>X Territorio</li>
						<li>X Territorio</li>
						<li>X Territorio</li>
						<li>X Territorio</li>
					</ul>
				</div>
				<div class="col-lg-6 col-md-10 col-sm-6 col-12 m-auto">
					<h6 class="text-center text-primary">Historial de Prefectos</h6>
					<ul class="text-left">
						<li>X Prefecto</li>
						<li>X Prefecto</li>
						<li>X Prefecto</li>
						<li>X Prefecto</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!-- PARTE QUE VIENE LUEGO DEL INCLUDE DE ADMINISTRACION.PHP -->
  </div>
</div>
    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
</body>
</html>