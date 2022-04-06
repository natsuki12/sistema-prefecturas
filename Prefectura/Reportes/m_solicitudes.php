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

<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
<div class="col-lg-10 mx-auto ">
    <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid mt-3">
    <h4 class="text-center mt-4">MODIFICACIÓN DE SOLICITUD</h4>
</div>

<div class="col-sm-10 col-12 m-auto">
    <h5 class="text-primary mt-4">Modificar Estado o Eliminación de Trámite.</h5>

    <div class="row justify-content-between mb-2">
    	<div class="col-sm-6 col-12 text-left">
			<label class="float-left">Buscar por Trámite:</label>
    		<input id="#" align="left" class="float-left ml-lg-2 ml-md-0 ml-sm-2 col-lg-3 col-md-5 col-sm-4 col-12 form-control form-control-sm" type='text' name='codigo' placeholder="Ingresar Código de Trámite">
    	</div>
    </div>

    <!-- TABLA TANTO PARA ELIMINAR COMO EDITAR LA INFORMACION DE UNA SOLICITUD SOLO SU ESTADO -->
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

    <div class="col-xl-10 col-12 m-auto">
	    <table class="table table-responsive p-0 text-center table-striped table-bordered" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
	      <thead class="thead-success ">
	        <tr>
	            <th>Eliminar</th>
	            <th>Código</th>
	            <th>Tipo de Trámite</th>
	            <th>Prefectura</th>
	            <th>Estado</th>
	            <th>Modificar</th>
	        </tr>
	      </thead>
	      <tbody>
	      	  <?php for ($i=0; $i < 5; $i++):?>
	          <tr>
	             <th scope="row">
	             	<button id="codigo<?php echo $i ?>" type="button" class="eliminar" aria-label="Close">
	                  <span aria-hidden="true">&times;</span>
	                </button>
	             </th>
	             <td>1</td>
	             <td>Fe de Vida</td>
	             <td>Aguirre</td>
	             <td>
	             	<select class="form-control" id="i_estado<?php echo $i ?>" name="estado<?php echo $i ?>" disabled="true" style="display: inline;  background-color: transparent; border:0;">
				    	<option value="Procesando">Procesando</option>
				    	<option value="Denegada">Denegada</option>
				    	<option value="Aceptada">Aceptada</option>
					</select>
	             </td>
	             <td><a class="text-primary" id="e_estado<?php echo $i ?>" style="cursor: pointer;">Editar</a></td>
	          </tr>
	          <?php endfor; ?>	       
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
	<!-- TABLA TANTO PARA ELIMINAR COMO EDITAR LA INFORMACION DE UNA SOLICITUD SOLO SU ESTADO -->
</div>
<!-- FIN CONTENEDOR DE LA INFORMACION DE ADENTRO -->

<script type="text/javascript" src="../js/validaciones.js"></script>

<!-- SCRIPTS PARA HABILITAR LOS FORMULARIOS DE EDITAR -->
<script type="text/javascript">
    //INPUTS DE LOS ESTADOS EN CADA TRAMITE
    	<?php for ($i=0; $i < 5; $i++):?>
    	$("#e_estado<?php echo $i;?>").click(function(event) {
    		$("#i_estado<?php echo $i;?>").removeAttr('disabled');
    		$("#i_estado<?php echo $i;?>").focus();
    	});
    	<?php endfor; ?>
    //FIN DE LOS ESTADOS EN CADA TRAMITE
</script>
