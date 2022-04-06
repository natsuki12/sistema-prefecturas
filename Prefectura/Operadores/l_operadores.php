<?php 
  include("../administracion.php");
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script>

  <style type="text/css">
      .eliminar{
        font-size: 1.5rem;
        font-weight: 700;
        color: #000;
        opacity: .7;
        cursor: pointer;
      }

      .eliminar:hover, .eliminar:focus {
        text-decoration: none;
        opacity: 1;
      }

      button.eliminar{
        padding: 0;
        background-color: transparent;
        border: 0;
        -webkit-appearance: none;
      }
  </style>

    <div class="col-lg-10 mx-auto">
      <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
    	<h4 class="text-center mt-4">OPERADORES REGISTRADOS</h4>
    </div>
    <div class="col-11 m-auto">
        <h5 class="text-primary mt-4">Listado de Operadores:</h5>
        <div class="row justify-content-between mb-2">
        	<div class="col-lg-6 col-md-12 col-sm-10 col-12">
    			<input id="#" align="left" class="float-left mr-2 col-sm-3 col-12 form-control form-control-sm" type='number' name='cantidad' value='10' min='1'>
    			<label class="float-left">Nro de Registros por Pág.</label>
        	</div>
        	<div class="col-lg-6 col-md-12 col-12 text-right">
        		<input id="#" align="left" class="float-right ml-2 col-sm-5 col-12 form-control form-control-sm" type='text' name='busqueda' placeholder="Cédula">
    			<label class="float-right">Buscar por cedula:</label>
        	</div>
        	<div class="col-lg-6 col-md-12 col-12"></div>
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
    	    	<h6 class='text-muted mb-lg-3'>Cantidad de Operadores: <strong class='text-dark'>20</strong></h6>
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

        <div class="col-xl-9 col-12 m-auto">
            <table class="table table-responsive p-0 text-center table-striped table-bordered" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
              <thead class="thead-success ">
                <tr>
                    <th>Eliminar</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Código Prefectura</th>
                    <th>Parroquía</th>
                    <th>Contraseña</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                     <th scope="row">
                        <button id="cedula_para_borrarlo" type="button" class="eliminar" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                     </th>
                     <td>23868394</td>
                     <td>Andres Ramirez</td>
                     <td>1</td>
                     <td>Aguirre</td>
                     <td>123456</td>
                  </tr>
                  <tr>
                     <th scope="row">
                        <button id="cedula_para_borrarlo" type="button" class="eliminar" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                     </th>
                     <td>23868394</td>
                     <td>Andres Ramirez</td>
                     <td>1</td>
                     <td>Aguirre</td>
                     <td>123456</td>
                  </tr>
                  <tr>
                     <th scope="row">
                        <button id="cedula_para_borrarlo" type="button" class="eliminar" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                     </th>
                     <td>23868394</td>
                     <td>Andres Ramirez</td>
                     <td>1</td>
                     <td>Aguirre</td>
                     <td>123456</td>
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