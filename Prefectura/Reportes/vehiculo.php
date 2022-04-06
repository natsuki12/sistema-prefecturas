<?php 
  include("../administracion.php");
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script> 

    <div class="col-lg-10 mx-auto ">
        <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
    	<h4 class="text-center mt-3">VEHÍCULOS REGISTRADOS</h4>
    </div>
    <div class="col-11 m-auto">
        <h5 class="text-primary mt-4">Listado de Vehículos:</h5>
        <form>
            <div class="row justify-content-between mb-2">
            	<div class="col-lg-6 col-md-12 col-sm-10 col-12">
        			<input id="#" align="left" class="float-left mr-2 col-sm-3 col-12 form-control form-control-sm" type='number' name='cantidad' value='10' min='1'>
        			<label class="float-left">Nro de Registros por Pág.</label>
            	</div>
                <div class="col-lg-6 col-md-12 col-sm-10 col-12"></div>
            	<div class="col-lg-6 col-md-12 col-sm-10 col-12 mt-1">
                    <select class="float-left mr-2 col-sm-6 col-12 form-control form-control-sm" name="tramite">
                        <option value="">Seleccionar Trámite</option>
                        <option value="F-PF-02">Cambio de Residencia: Regimen de Equipaje</option>
                        <option value="F-PF-06">Carta de Buena Conducta</option>
                        <option value="F-PF-05">Constancia de Dependencia Economica</option>
                        <option value="F-PF-08">Constancia de Extravio de Documentos</option>
                        <option value="F-PF-07">Constancia de Factibilidad de Eventos</option>
                        <option value="F-PF-01">Constancia de Mudanza</option>
                        <option value="F-PF-03">Constancia de Permiso de Viaje</option>
                        <option value="F-PF-04">Constancia de Fe de Vida</option>
                    </select>
        			<label class="float-left">Tipo de Trámite:</label>
            	</div>
                <div class="col-lg-6 col-md-12 col-sm-10 col-12 mt-1">
                    <input id="#" align="left" class="float-left mr-2 col-sm-6 col-12 form-control form-control-sm" type='text' name='placa' placeholder="Ingresar Placa">
                    <label class="float-left">Buscar por Placa:</label>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-10 col-12 mt-1">
                    <input id="#" align="left" class="float-left mr-2 col-sm-6 col-12 form-control form-control-sm" type='text' name='codigo' placeholder="Ingresar Código de Trámite">
                    <label class="float-left">Código de Trámite:</label>
                </div>
                <div class="col-12 mt-1 text-center">
                    <button type="submit" class="btn-primary form-control col-sm-2 col-12 mx-auto" name="btnsubmit">Filtrar</button>
                </div>
            </div>
        </form>

        <div class="row justify-content-between">
        	<div class='col-lg-6 col-md-6 col-sm-6 col-12'>
    	    	<h6 class='text-muted mb-lg-3'>Cantidad de Registrados: <strong class='text-dark'>20</strong></h6>
    	    </div>
    	    <div class='col-lg-6 col-md-6 col-sm-6 col-12 text-right'>
    	      	<h6 class='text-muted mb-lg-3'>1-10 / Página: 
    	      		<a class='text-dark' href='#'><strong>1 </strong></a>
    	      		<a class='text-dark' href='#'>2 </a>
    	      		<a class='text-dark' href='#'>3 </a>
    	      		<a class='text-dark' href='#'>4 </a>
    	      		<a class='text-dark' href='#'>5 </a>
    	        </h6>
    	    </div>
        </div>
        <table class="table table-responsive p-0 text-center table-striped table-bordered col-12 " style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
          <thead class="thead-success ">
            <tr>
                <th>Código de Trámite</th>
                <th>Tipo de Trámite</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Año</th>
                <th>Serial de Carrocería</th>
                <th>Conductor</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                 <th>1</th>
                 <td>Fe de Vida</td>
                 <td>OAI90A</td>
                 <td>Mitsubichi</td>
                 <td>Signo</td>
                 <td>Gris</td>
                 <td>2006</td>
                 <td>158435198423</td>
                 <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#informacion">Ver</button></td>
              </tr>
              <tr>
                 <th>2</th>
                 <td>Buena Conducta</td>
                 <td>OAI90A</td>
                 <td>Mitsubichi</td>
                 <td>Signo</td>
                 <td>Gris</td>
                 <td>2006</td>
                 <td>158435198423</td>
                 <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#informacion">Ver</button></td>
              </tr>
              <tr>
                 <th>3</th>
                 <td>Regimen de Equipaje</td>
                 <td>OAI90A</td>
                 <td>Mitsubichi</td>
                 <td>Signo</td>
                 <td>Gris</td>
                 <td>2006</td>
                 <td>158435198423</td>
                 <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#informacion">Ver</button></td>
              </tr> 	       
          </tbody>
        </table>
        <div class="row justify-content-between">
        	<div class='col-lg-6 col-md-6 col-sm-12'>
    	    </div>
    	    <div class='col-lg-6 col-md-6 col-sm-12 text-right'>
    	      	<h6 class='text-muted mb-lg-3'>1-10 / Página: 
    	      		<a class='text-dark' href='#'><strong>1 </strong></a>
    	      		<a class='text-dark' href='#'>2 </a>
    	      		<a class='text-dark' href='#'>3 </a>
    	      		<a class='text-dark' href='#'>4 </a>
    	      		<a class='text-dark' href='#'>5 </a>
    	        </h6>
    	    </div>
        </div>
    </div>
<!-- PARTE QUE VIENE LUEGO DEL INCLUDE DE ADMINISTRACION.PHP -->
  </div>
</div>
    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
</body>
</html>

<!-- MODAL PARA CUANDO QUIERA VER AL DETALLE LA INFORMACION DE DIRECCION DE HOGAR -->
<div class="modal fade" id="informacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content" style="height: auto;">
			<div class="modal-header">
				<h5 class="modal-title">Información de Conductor:<br></h5>
				<button type="button" class="close r-cerrar" data-dismiss="modal" aria-label="Close">
	  			<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="h-50">
					<div class="form-group">
		    			<label>Nombre del Conductor:</label>
		    			<label class="form-control">Andres Eduardo Ramirez Duque</label>
						<label>Cédula:</label>
		    			<label class="form-control">23868394</label>
						</div>
						<div class="form-group">
						<label>Télefono:</label>
						<label class="form-control">04127942183</label>
						</div>
						<div class="form-group">
						<label>Carnet de Circulación:</label>
						<label class="form-control">v-23868394</label>
		  			</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- FIN CONTENEDOR DE LAS OPCIONES -->
   <script type="text/javascript" src="buscador_ve.js"></script>
    <div id="script">
</body>
</html>

<?php 
    echo $i; 
    if(isset($_GET["busqueda"])){ 
        if(isset($_GET["cedula"])){
            echo "&placa=&busqueda=".$_GET["busqueda"];
        }else{
            echo "&placa=&busqueda=".$_GET["busqueda"];
        } 
    } 
?>