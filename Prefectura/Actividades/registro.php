<?php 
  include("../administracion.php");
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script> 

    <!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
    <div class="col-lg-10 mx-auto ">
        <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
    	<h4 class="text-center mt-4">REGISTRO DE ACTIVIDADES</h4>
    </div>
    <div class="col-11 m-auto">
        <h5 class="text-primary mt-4">Listado de Actividades:</h5>
        <div class="row justify-content-between mb-2">
        	<div class="col-lg-6 col-md-12 col-sm-10 col-12">
    			<input id="#" align="left" class="float-left mr-2 col-sm-3 col-12 form-control form-control-sm" type='number' name='cantidad' value='10' min='1'>
    			<label class="float-left">Nro de Registros por Pág.</label>
        	</div>
        	<div class="col-lg-6 col-md-12 col-12 text-right">
                <select id="#" align="left" class="float-right ml-2 col-sm-5 col-12 form-control form-control-sm" name='m_busqueda'>
                    <option value="">Seleccione un Municipio</option>
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
                <label class="float-right">Buscar por Municipio:</label>
        	</div>
        	<div class="col-lg-6 col-md-12 col-12"></div>
        	<div class="col-lg-6 col-md-12 col-12 text-right">
        		<select id="#" align="left" class="float-right ml-2 col-sm-5 col-12 form-control form-control-sm" name='p_busqueda'>
                    <option value="">Seleccione una Parroquía</option>
                    <option value="x">La que Cargue</option>
                </select>
    			<label class="float-right">Parroquía:</label>
        	</div>
        </div>

        <div class="row justify-content-between">
        	<div class='col-lg-6 col-md-6 col-sm-6 col-12'>
    	    	<h6 class='text-muted mb-lg-3'>Cantidad de Actividades: <strong class='text-dark'>20</strong></h6>
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

        <div class="col-12 m-auto">
            <table class="table table-responsive p-0 text-center table-striped table-bordered" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
              <thead class="thead-success ">
                <tr>
                    <th>N# Actividad</th>
                    <th>Municipio</th>
                    <th>Parroquía</th>
                    <th>Actividad</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>C.I Operador</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                     <th>1</th>
                     <td>Maneiro</td>
                     <td>Aguirre</td>
                     <td>Registro de Usuario</td>
                     <td>Andres Ramirez</td>
                     <td>26-04-2019</td>
                     <td>17:59</td>
                     <td>23868394</td>
                  </tr>
                  <tr>
                     <th>2</th>
                     <td>Maneiro</td>
                     <td>Aguirre</td>
                     <td>Registro de Solicitud</td>
                     <td>Andres Ramirez</td>
                     <td>26-04-2019</td>
                     <td>17:59</td>
                     <td>23868394</td>
                  </tr>
                  <tr>
                     <th>3</th>
                     <td>Maneiro</td>
                     <td>Aguirre</td>
                     <td>Inicio de Sesión</td>
                     <td>Prefectura X</td>
                     <td>26-04-2019</td>
                     <td>17:59</td>
                     <td>23868394</td>
                  </tr>	   	       
              </tbody>
            </table>
        </div>

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