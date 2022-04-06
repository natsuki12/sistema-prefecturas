<script type="text/javascript">
//VALIDACIONES DEL FORMULARIO PARA PREFECTURA
	$("#form_prefectura").validate({	

		rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
			//DATOS PREFECTURA
				direccion: "required",
				prefecto: "required",
				//DATOS DE CONTACTO Y REDES
				telefono1:{
					number:true,
					minlength:11,
					required:true
				},
				telefono2:{
					number:true,
					minlength:11
				},
				//AMBITO TERRITORIAL
				<?php for ($i=0; $i < 5; $i++):?>
				dir<?php echo $i;?>: "required",
				<?php endfor; ?>
			//FIN DATOS PREFECTURA
		},

		messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHA
			//DATOS PREFECTURA
				direccion:"Ingrese la Dirección de la Prefectura",
				prefecto:"Ingrese el Prefecto Actual de la Prefectura",
				//DATOS DE CONTACTO Y REDES
				telefono1:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono",
					required:"Ingrese el Teléfono"
				},
				telefono2:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono"
				},
				//AMBITO TERRITORIAL
				<?php for ($i=0; $i < 5; $i++):?>
				dir<?php echo $i;?>: "Ingrese la Dirección Territorial",
				<?php endfor; ?>
			//FIN DATOS PREFECTURA
		},

		errorPlacement:function(error,element){ //Para reposicionar los elementos de error que son level
			error.insertAfter(element);
		}

	});
//FIN VALIDACIONES DEL FORMULARIO PARA PREFECTURA
</script>
