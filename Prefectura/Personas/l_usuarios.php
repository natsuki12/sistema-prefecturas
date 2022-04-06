<?php 
  include("../administracion.php");
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script>

    <div class="col-lg-10 mx-auto ">
        <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
    	<h4 class="text-center mt-3">PERSONAS REGISTRADAS</h4>
    </div>
    <div class="col-11 m-auto">
        <h5 class="text-primary mt-4">Listado de Personas Registradas:</h5>
        <div class="row justify-content-between mb-2">
        	<div class="col-lg-6 col-md-12 col-sm-10 col-12">
    			<input id="#" align="left" class="float-left mr-2 col-sm-3 col-12 form-control form-control-sm" type='number' name='cantidad' value='10' min='1'>
    			<label class="float-left">Nro de Registros por Pág.</label>
        	</div>
        	<div class="col-lg-6 col-md-12 col-12 text-right">
        		<input id="#" align="left" class="float-right ml-2 col-sm-3 col-12 form-control form-control-sm" type='text' name='busqueda' placeholder="cédula">
    			<label class="float-right">Buscar por cédula:</label>
        	</div>
        	<div class="col-lg-6 col-md-12 col-12"></div>
        	<div class="col-lg-6 col-md-12 col-12 text-right">
        		<input id="#" align="left" class="float-right ml-2 col-sm-3 col-12 form-control form-control-sm" type='text' name='busqueda' placeholder="nombre">
    			<label class="float-right">Buscar por nombre:</label>
        	</div>
        </div>

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
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Profesión</th>
                <th>Estado Civil</th>
                <th>Correo</th>
                <th>Dirección de Hogar</th>
                <th>Redes de Contacto</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                 <th>24877448</th>
                 <td>Miguel José</td>
                 <td>Gil Fuentes</td>
                 <td>1994-03-04</td>
                 <td>Estudiante</td>
                 <td>Soltero</td>
                 <td>miguel.gil.54@gmail.com</td>
                 <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#direction">Ver</button></td>
                 <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#redes">Ver</button></td>
              </tr>
              <tr>
                 <th>24877448</th>
                 <td>Andres Eduardo</td>
                 <td>Ramirez Duque</td>
                 <td>1996-06-28</td>
                 <td>Estudiante</td>
                 <td>Soltero</td>
                 <td>andresramirez2025@gmail.com</td>
                 <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#direction">Ver</button></td>
                 <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#redes">Ver</button></td>
              </tr>
              <tr>
                 <th>24877448</th>
                 <td>Miguel José</td>
                 <td>Gil Fuentes</td>
                 <td>1994-03-04</td>
                 <td>Estudiante</td>
                 <td>Soltero</td>
                 <td>miguel.gil.54@gmail.com</td>
                 <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#direction">Ver</button></td>
                 <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#redes">Ver</button></td>
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

    <!-- MODAL PARA CUANDO QUIERA VER AL DETALLE LA INFORMACION DE DIRECCION DE HOGAR -->
    <div class="modal fade" id="direction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    	<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content" style="height: auto;">
    			<div class="modal-header">
    				<h5 class="modal-title">Miguel Jose Gil Fuentes<br>Dirección de Hogar:</h5>
    				<button type="button" class="close r-cerrar" data-dismiss="modal" aria-label="Close">
    	  			<span aria-hidden="true">&times;</span>
    				</button>
    			</div>
    			<div class="modal-body">
    				<form class="h-50">
    					<div class="form-group">
    		    			<label>Municipio:</label>
    		    			<label class="form-control">X Municipio</label>
    		  			</div>
    		  			<div class="form-group">
    						<label>Parroquia:</label>
    		    			<label class="form-control">X Parroquia</label>
    						</div>
    						<div class="form-group">
    						<label>Dirección 1:</label>
    						<label class="form-control">X Zona Territotial</label>
    						</div>
    						<div class="form-group">
    						<label>Dirección 2:</label>
    						<label class="form-control">X Direccion especifica</label>
    		  			</div>
    				</form>
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

<!-- MODAL PARA CUANDO QUIERA VER AL DETALLE LA INFORMACION DE REDES -->
<div class="modal fade" id="redes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="height: auto;">
            <div class="modal-header">
                <h5 class="modal-title">Miguel Jose Gil Fuentes<br>Redes de Contacto:</h5>
                <button type="button" class="close r-cerrar" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="h-50">
                        <div class="form-group">
                            <label>Teléfono 1:</label>
                            <label class="form-control">X Número</label>
                        </div>
                        <div class="form-group">
                            <label>Teléfono 2:</label>
                            <label class="form-control">X Número</label>
                        </div>
                        <h6 class="text-center">Redes Sociales</h6>
                        <div class="form-group">
                            <label>Instagram:</label>
                            <label class="form-control">@red</label>
                        </div>
                        <div class="form-group">
                            <label>Facebook:</label>
                            <label class="form-control">@red</label>
                        </div>
                        <div class="form-group">
                            <label>Twitter:</label>
                            <label class="form-control">@red</label>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- FIN CONTENEDOR DE LAS OPCIONES -->
<script type="text/javascript" src="busqueda.personas.js"></script>
    <div id="script">
      <script type="text/javascript" src="ver.persona.js"></script>
    </div>
    
</body>
</html>

<?php 
  echo $i; 
  if(isset($_GET["busqueda"])){ 
    if(isset($_GET["cedula"])){
      echo "&cedula=&busqueda=".$_GET["busqueda"];
    }else{
      echo "&nombre=&busqueda=".$_GET["busqueda"];
    } 
  } 
?>