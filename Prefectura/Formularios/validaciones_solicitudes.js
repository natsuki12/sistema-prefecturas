//VALIDACIONES DEL FORMULARIO PARA INGRESAR ALGUNA SOLICITUD TODO ESTARA ANCLADO EN UNA MISMA VALIDACION
	$("#form_solicitud").validate({	

		rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
			//DATOS SOLICITANTE
				nombre1_s: "required",
				apellido1_s: "required",
				cedula_s:{
					number:true,
					required:true,
					minlength: 7
				},
				profesion_s: "required",
				civil_s: "required",
				nacimiento_s: "required",
				//DATOS DE DIRECCION DE HOGAR
				municipio_s: "required",
				parroquia_s: "required",
				direccion1_s: "required",
			//FIN DATOS SOLICITANTE

			//DATOS DE VEHICULO
				marca_v: "required",
				modelo_v: "required",
				ano_v:{
					number: true,
					required: true,
					minlength: 4,
					maxlength: 4
				},
				color_v: "required",
				serial_v:{
					number: true,
					required: true
				},
				placa_v: "required",
			//FIN DATOS DE VEHICULO

			//DATOS DE CONDUCTOR
				nombre_c: "required",
				cedula_c:{
					number:true,
					required:true,
					minlength: 7
				},
				telefono_c:{
					number:true,
					minlength:11,
					required:true
				},
				codigo_c: "required",
			//FIN DATOS DE CONDUCTO
			
			//DIRECCION DE MUDANZA
				estado_n: "required",
				direccion_n: "required",
				residencia_a:{
					number: true,
					required: true
				},
			//FIN DIRECCION DE MUDANZA

			//DATOS DE TESTIGO 1
				nombre1_t1: "required",
				apellido1_t1: "required",
				cedula_t1:{
					number:true,
					required:true,
					minlength: 7
				},
				profesion_t1: "required",
				//DATOS DE DIRECCION DE HOGAR
				municipio_t1: "required",
				parroquia_t1: "required",
				direccion1_t1: "required",
				//DATOS DE CONTACTO
				telefono1_t1:{
					number:true,
					minlength:11,
					required:true
				},
				telefono2_t1:{
					number:true,
					minlength:11
				},
			//FIN DATOS DE TESTIGO 1

			//DATOS DE TESTIGO 2
				nombre1_t2: "required",
				apellido1_t2: "required",
				cedula_t2:{
					number:true,
					required:true,
					minlength: 7
				},
				profesion_t2: "required",
				//DATOS DE DIRECCION DE HOGAR
				municipio_t2: "required",
				parroquia_t2: "required",
				direccion1_t2: "required",
				//DATOS DE CONTACTO
				telefono1_t2:{
					number:true,
					minlength:11,
					required:true
				},
				telefono2_t2:{
					number:true,
					minlength:11
				},
			//FIN DATOS DE TESTIGO 2

			//DATOS DE DEPENDIENTE ECONOMICO
				nombre1_d: "required",
				apellido1_d: "required",
				cedula_d:{
					number:true,
					required:true,
					minlength: 7
				},
				profesion_d: "required",
				//DATOS DE DIRECCION DE HOGAR
				municipio_d: "required",
				parroquia_d: "required",
				direccion1_d: "required",
				//DATOS DE CONTACTO
				telefono1_d:{
					number:true,
					minlength:11,
					required:true
				},
				telefono2_d:{
					number:true,
					minlength:11
				},
			//FIN DATOS DE DEPENDIENTE ECONOMICO

			//DATOS DE EVENTO
				//DATOS DE EMPRESA
				nombre_ee: "required",
				rif_e: "required",
				//NOMBRE DE EVENTO
				nombre_e: "required",
				//DATOS DE DIRECCION DE EVENTO
				municipio_e: "required",
				parroquia_e: "required",
				direccion1_e: "required",
				//DATOS DE CONTACTO DE EVENTO
				telefono1_e:{
					number:true,
					minlength:11,
					required:true
				},
				telefono2_e:{
					number:true,
					minlength:11,
					required: true
				},
				//FECHA Y HORARIO DE EVENTO
				fecha_i: "required",
				fecha_c: "required",
				hora_i: "required",
				hora_c: "required",
				//DATOS COORDINADOR
				coordinador_nombre: "required",
				coordinador_apellido: "required",
				cedula_e:{
					number:true,
					required:true,
					minlength: 7
				},
				cargo_e: "required",
			//FIN DATOS DE EVENTO

			//DATOS DE HIJO
				nombre1_h: "required",
				apellido1_h: "required",
				cedula_h:{
					number:true,
					required:true,
					minlength: 7
				},
				fecha_n_h: "required",
			//FIN DATOS DE HIJO

			//DATOS DE ACOMPAÑANTE
				nombre1_a: "required",
				apellido1_a: "required",
				cedula_a:{
					number:true,
					required:true,
					minlength: 7
				},
				fecha_n_a: "required",
				//DATOS DE DIRECCION DE HOGAR
				municipio_a: "required",
				parroquia_a: "required",
				direccion1_a: "required",
				//DATOS DE CONTACTO
				telefono_a:{
					number:true,
					minlength:11,
					required:true
				},
			//FIN DATOS DE ACOMPAÑANTE

			//DATOS DE VIAJE (PERMISO DE VIAJE)
				estado_v: "required",
				direccion_v: "required",
			//FIN DATOS DE VIAJE (PERMISO DE VIAJE)
		},

		messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHA
			//DATOS SOLICITANTE
				nombre1s:"Ingrese el Nombre",
				apellido1_s:"Ingrese el Apellido",
				cedula_s:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula de Identidad",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},
				profesion_s:"Ingrese la Profesión",
				civil_s:"Ingrese el Estado Civil",
				nacimiento_s:"Ingrese la Fecha de Nacimiento",
				//DATOS DE LA DIRECCION DE HOGAR
				municipio_s:"Ingrese el Municipio",
				parroquia_s:"Ingrese la Parroquia",
				direccion1_s: "Ingrese la Dirección de Hogar",
			//FIN DATOS SOLICITANTE
			
			//DATOS DE VEHICULO
				marca_v: "Ingrese la Marca del Vehículo",
				modelo_v: "Ingrese el Modelo del Vehículo",
				ano_v:{
					number: "Ingrese solamente valores númericos",
					required: "Ingrese el Año del Vehículo",
					minlength: "El Año no puede ser menor de 3 cifras",
					maxlength: "El Año no puede ser mayor de 5 cifras"
				},
				color_v: "Ingrese el Color del Vehículo",
				serial_v:{
					number: "Ingrese solamente valores númericos",
					required: "Ingrese el Serial del Vehículo"
				},
				placa_v: "Ingrese la Placa del Vehículo",
			//FIN DATOS DE VEHICULO
			
			//DATOS DE CONDUCTOR
				nombre_c: "Ingrese el Nombre",
				cedula_c:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula de Identidad",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},
				telefono_c:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono",
					required:"Ingrese el Teléfono del Conductor"
				},
				codigo_c: "Ingrese el Código de Carnet de Circulación",
			//FIN DATOS DE CONDUCTOR
			
			//DIRECCION DE MUDANZA
				estado_n: "Ingrese el Estado a Mudarse",
				direccion_n: "Ingrese la Nueva Dirección",
				residencia_a:{
					number: "Ingrese solamente valores númericos",
					required: "Ingrese la Cantidad de Años",
				},
			//FIN DIRECCION DE MUDANZA

			//DATOS DE TESTIGO 1
				nombre1_t1:"Ingrese el Nombre de Testigo",
				apellido1_t1:"Ingrese el Apellido de Testigo",
				cedula_t1:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula de Identidad de Testigo",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},
				profesion_t1:"Ingrese la Profesión de Testigo",
				//DATOS DE LA DIRECCION DE HOGAR
				municipio_t1:"Ingrese el Municipio",
				parroquia_t1:"Ingrese la Parroquia",
				direccion1_t1: "Ingrese la Dirección de Hogar",
				//DATOS DE CONTACTO
				telefono1_t1:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono",
					required:"Ingrese el Teléfono del Testigo"
				},
				telefono2_t1:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono"
				},
			//FIN DATOS DE TESTIGO 1

			//DATOS DE TESTIGO 2
				nombre1_t2:"Ingrese el Nombre de Testigo",
				apellido1_t2:"Ingrese el Apellido de Testigo",
				cedula_t2:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula de Identidad de Testigo",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},
				profesion_t2:"Ingrese la Profesión de Testigo",
				//DATOS DE LA DIRECCION DE HOGAR
				municipio_t2:"Ingrese el Municipio",
				parroquia_t2:"Ingrese la Parroquia",
				direccion1_t2: "Ingrese la Dirección de Hogar",
				//DATOS DE CONTACTO
				telefono1_t2:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono",
					required:"Ingrese el Teléfono del Testigo"
				},
				telefono2_t2:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono"
				},
			//FIN DATOS DE TESTIGO 2

			//DATOS DE DEPENDIENTE ECONOMICO
				nombre1_d: "required",
				apellido1_d: "required",
				cedula_d:{
					number:true,
					required:true,
					minlength: 7
				},
				profesion_d: "required",
				//DATOS DE DIRECCION DE HOGAR
				municipio_d: "required",
				parroquia_d: "required",
				direccion1_d: "required",
				//DATOS DE CONTACTO
				telefono1_d:{
					number:true,
					minlength:11,
					required:true
				},

				nombre1_d:"Ingrese el Nombre del Dependiente",
				apellido1_d:"Ingrese el Apellido del Dependiente",
				cedula_d:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula de Identidad del Dependiente",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},
				profesion_d:"Ingrese la Profesión del Dependiente",
				//DATOS DE LA DIRECCION DE HOGAR
				municipio_d:"Ingrese el Municipio",
				parroquia_d:"Ingrese la Parroquia",
				direccion1_d: "Ingrese la Dirección de Hogar",
				//DATOS DE CONTACTO
				telefono1_d:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono",
					required:"Ingrese el Teléfono del Dependiente"
				},
				telefono2_d:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono"
				},
			//FIN DATOS DE DEPENDIENTE ECONOMICO

			//DATOS DE EVENTO
				//DATOS DE EMPRESA
				nombre_ee: "Ingrese el Nombre de la Empresa",
				rif_e: "Ingrese el RIF de la Empresa",
				//NOMBRE DE EVENTO
				nombre_e: "Ingrese el Nombre del Evento",
				//DATOS DE DIRECCION DE EVENTO
				municipio_e: "Ingrese el Municipio",
				parroquia_e: "Ingrese la Parroquia",
				direccion1_e: "Ingrese la Dirección del Evento",
				//DATOS DE CONTACTO DE EVENTO
				telefono1_e:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono",
					required:"Ingrese el Teléfono de Contacto"
				},
				telefono2_e:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono",
					required:"Ingrese el Teléfono de Contacto"
				},
				//FECHA Y HORARIO DE EVENTO
				fecha_i: "Ingrese la Fecha de Inicio",
				fecha_c: "Ingrese la Fecha de Cierre",
				hora_i: "Ingrese la Hora de Inicio",
				hora_c: "Ingrese la Hora de Cierre",
				//DATOS COORDINADOR
				coordinador_nombre: "Ingrese el Nombre del Coordinador",
				coordinador_apellido: "Ingrese el Apellido del Coordinador",
				cedula_e:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula de Identidad",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},
				cargo_e: "Ingrese el Cargo del Coordinador",
			//FIN DATOS DE EVENTO

			//DATOS DE HIJO
				nombre1_h: "Ingrese el Nombre del Hijo",
				apellido1_h: "Ingrese el Apellido del Hijo",
				cedula_h:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula de Identidad",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},
				fecha_n_h: "Ingrese la Fecha de Nacimiento del Hijo",
			//FIN DATOS DE HIJO

			//DATOS DE ACOMPAÑANTE
				nombre1_a: "Ingrese el Nombre del Acompañante",
				apellido1_a: "Ingrese el Apellido del Acompañante",
				cedula_a:{
					number:"Ingrese solamente valores númericos",
					required:"Ingrese la Cédula de Identidad",
					minlength: "La Cédula debe tener al menos 7 cifras"
				},
				fecha_n_a: "Ingrese la Fecha de Nacimiento del Acompañante",
				//DATOS DE DIRECCION DE HOGAR
				municipio_a:"Ingrese el Municipio",
				parroquia_a:"Ingrese la Parroquia",
				direccion1_a: "Ingrese la Dirección de Hogar",
				//DATOS DE CONTACTO
				telefono_a:{
					number:"Ingrese solamente valores númericos",
					minlength:"Complete el tamaño del Teléfono",
					required:"Ingrese el Teléfono del Testigo"
				},
			//FIN DATOS DE ACOMPAÑANTE

			//DATOS DE VIAJE (PERMISO DE VIAJE)
				estado_v: "Ingrese el Estado del Viaje",
				direccion_v: "Ingrese la Dirección del Viaje",
			//FIN DATOS DE VIAJE (PERMISO DE VIAJE)
		},

		errorPlacement:function(error,element){ //Para reposicionar los elementos de error que son level
			error.insertAfter(element);
		}

	});
//FIN VALIDACIONES DEL FORMULARIO PARA INGRESAR ALGUNA SOLICITUD TODO ESTARA ANCLADO EN UNA MISMA VALIDACION
