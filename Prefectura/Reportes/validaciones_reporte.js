//VALIDACIONES DEL FORMULARIO ESTADISTICAS DE SOLICITUDES
	$("#freporte").validate({	

		rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
			rperiodo: "required",
			rtipo: "required",
			rayo: {
				required: true,
				number: true,
				minlength: 4,
				maxlength: 4,
			},
		},

		messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHA
			rperiodo:"Ingrese el Periodo a Evaluar",
			rtipo:"Ingrese el Tipo de Trámite",
			rayo:{
				required:"Ingrese el Año a Evaluar",
				number:"Ingrese Solamente Valores Númericos",
				minlength: "El Año no puede ser Menor de 4 Cifras",
				maxlength: "El Año no puede ser Mayor de 4 Cifras"
			},
		},

		errorPlacement:function(error,element){ //Para reposicionar los elementos de error que son level
			error.insertAfter(element);
		}

	});
//FIN VALIDACIONES DEL FORMULARIO PARA ESTADISTICAS DE SOLICITUDES