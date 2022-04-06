//VALIDACIONES DEL FORMULARIO PARA INGRESAR ALGUN CENSADO
	$("#censo").validate({	

		rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
			//DATOS SOLICITANTE
				nombre1_c: "required",
				apellido1_c: "required",
				cedula_c:{
					number:true,
					required:true,
					minlength: 7
				},
				profesion_c: "required",
				civil_c: "required",
				nacimiento_c: "required",
				/*cedula_p:{
					number:true,
					required:true,
					minlength: 7
				},
				cedula_m:{
					number:true,
					required:true,
					minlength: 7
				},*/
				//DATOS DE DIRECCION DE HOGAR
				municipio_c: "required",
				parroquia_c: "required",
				direccion1_c: "required",
				//DATOS DE CONTACTO Y REDES
				telefono1_c:{
					number:true,
					minlength:11,
					required:true
				},
				telefono2_c:{
					number:true,
					minlength:11
				},
				correo_c:{
					email:true,
					required:true
				},
			//FIN DATOS SOLICITANTE
		},

		messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHA
			//DATOS SOLICITANTE
				nombre1_c:"Ingrese el Nombre",
				apellido1_c:"Ingrese el Apellido",
				cedula_c:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula de Identidad",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},
				profesion_c:"Ingrese la Profesión",
				civil_c:"Ingrese el Estado Civil",
				nacimiento_c:"Ingrese la Fecha de Nacimiento",
				/*cedula_p:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula del Padre",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},
				cedula_m:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula de la Madre",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},*/
				//DATOS DE LA DIRECCION DE HOGAR
				municipio_c:"Ingrese el Municipio",
				parroquia_c:"Ingrese la Parroquia",
				direccion1_c: "Ingrese la Dirección de Hogar",
				//DATOS DE CONTACTO Y REDES
				telefono1_c:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono",
					required:"Ingrese el Teléfono"
				},
				telefono2_c:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono"
				},
				correo_c:{
					email:"Ingrese formato correcto (eg: persona@gmail.com)",
					required:"Ingrese su Correo Correspondiente"
				},
			//FIN DATOS SOLICITANTE
		},
		
		submitHandler:function(form){
			$.ajax({
				data:{
					'cedula': $("#cedula_c").val(),
					'nombre1': $("#nombre1_c").val(),
					'nombre2': $("#nombre2_c").val(),
					'apellido1': $("#apellido1_c").val(),
					'apellido2': $("#apellido2_c").val(),
					'profesion': $("#profesion_c").val(),
					'civil': $("#civil_c").val(),
					'nacimiento': $("#nacimiento_c").val(),
					'municipio': $("#municipio_c").val(),
					'parroquia': $("#parroquia_c").val(),
					'direccion1': $("#direccion1_c").val(),
					'direccion2': $("#direccion2_c").val(),
					'telefono1': $("#telefono1_c").val(),
					'telefono2': $("#telefono2_c").val(),
					'correo': $("#correo_c").val(),
					'facebook': $("#facebook_c").val(),
					'instagram': $("#instagram_c").val(),
					'twitter': $("#twitter_c").val()
				},
				url: 'https://prefecturas.somosnuevaesparta.com/config/censo.php',
				type: 'post',
				success:function(censo){
					console.log(censo);
					switch (censo) {
						case "0":
							$("#censo_informacion").modal("hide");
							swal({
				        	  title: 'Registro Exitoso',
				        	  text: 'Se ha Registrado a la persona correctamente',
				        	  icon: 'success',
				        	  closeOnClickOutside: false,
				        	  button: "Cerrar",
				        	});
							$(".swal-button--confirm").addClass('bg-secondary');
							break;

						case "1":
							swal({
				        	  title: 'Registro Fallido - Cédula Duplicada',
				        	  text: 'Porfavor Intente de Nuevo el Registro',
				        	  icon: 'error',
				        	  closeOnClickOutside: false,
				        	  button: "Cerrar",
				        	});
							$(".swal-button--confirm").addClass('bg-secondary');
							break;

						case "2":
							swal({
					        	  title: 'Registro Fallido',
					        	  text: 'Porfavor Intente de Nuevo el Registro',
					        	  icon: 'error',
					        	  closeOnClickOutside: false,
					        	  button: "Cerrar",
					        	});
							$(".swal-button--confirm").addClass('bg-secondary');
							break;
						default:
							// statements_def
							break;
					}
				}
			});
		},


		errorPlacement:function(error,element){ //Para reposicionar los elementos de error que son level
			error.insertAfter(element);
		}

	});
//FIN VALIDACIONES DEL FORMULARIO PARA INGRESAR ALGUN CENSADO

$("#municipio_c").change(function(event){
  $.ajax({
    data:{'municipio': $(this).val(),
        'proceso': 1},
    url:'https://prefecturas.somosnuevaesparta.com/config/ajax_auto.php',
    type:'post',
    success: function(respuesta){
      var datos=JSON.parse(respuesta),
      select=document.getElementById("parroquia_c");
      $("#parroquia_c").empty();
      $("#parroquia_c").append('<option selected="selected" value="0">--Elegir Parroquia--</option>');
      for (var i = 0; i <= datos.length-1; i++) {
        var newoption=document.createElement("option");
        newoption.setAttribute("value",datos[i]["PARROQUIA_COD"]);
        newoption.setAttribute("label",datos[i]["PARROQUIA_NOMBRE"]);
        select.appendChild(newoption);
      }
      $("#parroquia_c").removeAttr("disabled");
    }
  });
});

//VALIDACIONES DEL FORMULARIO ESTADISTICAS DE CENSADOS
	$("#freporte").validate({	

		rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
			rperiodo: "required",
			rayo: {
				required: true,
				number: true,
				minlength: 4,
				maxlength: 4,
			},
		},

		messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHA
			rperiodo:"Ingrese el Periodo a Evaluar",
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
//FIN VALIDACIONES DEL FORMULARIO PARA ESTADISTICAS DE CENSADOS
