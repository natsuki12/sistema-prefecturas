<?php
	ob_start();
	if (isset($_POST["btnsubmit"])) {
		include("config/get_info.php");
		include("config/proceso_solicitud.php");
	}else{
		
	}
?>
<script type="text/javascript">
		$("#topsito").removeClass('d-none');
</script>
<div class="col-12 m-auto">
	<div class="col-lg-10 text-center m-auto">
		<img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid">
        <h4 class="text-center mt-3">SOLICITUD PROCESADA</h4>
    </div>
	<div class="row col-md-10 col-sm-11 col-12 justify-content-center m-auto">
		<div class="col-12 mt-2 row text-center">
			<h6 class="text-center m-auto font-weight-bold pb-2">
				<?php
					if (get_mpp($municipio_s, $parroquia_s, 4)<12) {
					 	echo "Prefectura Municipio ".get_mpp($municipio_s, $parroquia_s, 1);
					}else{
						echo "Prefectura Parroquia ".get_mpp($municipio_s, $parroquia_s, 2)." - Municipio ".get_mpp($municipio_s, $parroquia_s, 1);
					}
				?>
			</h6>
			<p class="text-justify">
				<strong>Dirección: </strong><?php echo get_mpp($municipio_s, $parroquia_s, 5) ?><br>
				<strong>Prefecto: </strong>Abg. <?php echo get_mpp($municipio_s, $parroquia_s, 3) ?><br>
				<strong>Números de Contacto: </strong><?php echo get_mpp($municipio_s, $parroquia_s, 6) ?><br>
			</p>
		</div>
		<div class="col-12">
			<button>Descargar Solicitud</button>
			<button>Enviar Nuevamente al E-mail</button>
		</div>
	</div>
</div>