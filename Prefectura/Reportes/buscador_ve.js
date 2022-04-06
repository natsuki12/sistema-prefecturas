$("#l_prefectura").change(function(event){
	$("#l_tramite").val("");
	$("#l_cedula").val("");
	$.ajax({
		data : {
			'ajax' : '',
			'prefectura' : $(this).val()
		},
		url : 'paginacion_so.php',
		type : 'get',
		success : function(busqueda){
			var actividades=JSON.parse(busqueda);
			console.log(actividades);
			//acomoda la paginacion dependiendo de la busqueda
			$("#paginacion_t").empty();
			$("#paginacion_t").append(actividades[actividades.length-2]+"-"+actividades[actividades.length-1]+" / Página: ");
			for (var i = 0; i<actividades[actividades.length-1]; i++) {
				if (i+1==actividades[actividades.length-2]) {
					$("#paginacion_t").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&prefectura="+actividades[actividades.length-3]+"'><strong>"+(i+1)+" </strong></a>");
				}else{
					$("#paginacion_t").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&prefectura="+actividades[actividades.length-3]+"'>"+(i+1)+" </a>");
				}
			}

			$("#paginacion_b").empty();
			$("#paginacion_b").append(actividades[actividades.length-2]+"-"+actividades[actividades.length-1]+" / Página: ");
			for (var i = 0; i<actividades[actividades.length-1]; i++) {
				if (i+1==actividades[actividades.length-2]) {
					$("#paginacion_b").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&prefectura="+actividades[actividades.length-3]+"'><strong>"+(i+1)+" </strong></a>");
				}else{
					$("#paginacion_b").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&prefectura="+actividades[actividades.length-3]+"'>"+(i+1)+" </a>");
				}
			}

			//agrega los valores en la tabla
			$("#tbody").empty();
			for (var i = 0; i<actividades.length-4; i++) {
				
				switch(actividades[i]["tipo_tramite"]){
					case "F-PF-01": var tramite = 'Constancia de Mudanza'; break;
                    case "F-PF-02": var tramite = 'Cambio de Residencia: Regimen de Equipaje'; break;
                    case "F-PF-03": var tramite = 'Constancia de Permiso de Viaje'; break;
                    case "F-PF-04": var tramite = 'Constancia de Fe de Vida'; break;
                    case "F-PF-05": var tramite = 'Constancia de Dependencia Economica'; break;
                    case "F-PF-06": var tramite = 'Carta de Buena Conducta'; break;
                    case "F-PF-07": var tramite = 'Constancia de Factibilidad de Eventos'; break;
                    case "F-PF-08": var tramite = 'Constancia de Extravio de Documentos'; break;
				}

				$("#tbody").append(
					"<tr><td><img src='../Imagenes/pdf.png' class='img-fluid pdf' style='width: 30px; cursor: pointer' id='"+actividades[i]["vehiculo_cod"]+"' name='"+actividades[i]["placa"]+"'></td><th>"
					+actividades[i]["marca"]+"</th><td>"
					+modelo+"</td><td>"
					+color+"</td><td>"
					+año+"</td><td>"
					+serial de carroseria+"</td><td>"
					+actividades[i]["conductor"]+"</td><td>"
					+actividades[i]["cedula"]+"</td><td>"
					+actividades[i]["telefono"]+"</td><td>"
					+actividades[i]["carnet_circulacion"]+"</td><tr>");
			}

			$("#n_solicitudes").text(actividades[actividades.length-4]);
			//recarga el script de ver
			$("#script_ver").empty();
			$("#script_ver").append('<script type="text/javascript" src="ver_pdf.js"></script>');
		}
	});
});

$("#l_tramite").change(function(event){
	$("#l_prefectura").val("");
	$("#l_cedula").val("");
	$.ajax({
		data : {
			'ajax' : '',
			'codigo' : $("#codigo_prefectura").val(),
			'tramite' : $(this).val()
		},
		url : 'paginacion_ve.php',
		type : 'get',
		success : function(busqueda){
			var actividades=JSON.parse(busqueda);
			console.log(actividades);
			//acomoda la paginacion dependiendo de la busqueda
			$("#paginacion_t").empty();
			$("#paginacion_t").append(actividades[actividades.length-2]+"-"+actividades[actividades.length-1]+" / Página: ");
			for (var i = 0; i<actividades[actividades.length-1]; i++) {
				if (i+1==actividades[actividades.length-2]) {
					$("#paginacion_t").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&tramite="+actividades[actividades.length-3]+"'><strong>"+(i+1)+" </strong></a>");
				}else{
					$("#paginacion_t").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&tramite="+actividades[actividades.length-3]+"'>"+(i+1)+" </a>");
				}
			}

			$("#paginacion_b").empty();
			$("#paginacion_b").append(actividades[actividades.length-2]+"-"+actividades[actividades.length-1]+" / Página: ");
			for (var i = 0; i<actividades[actividades.length-1]; i++) {
				if (i+1==actividades[actividades.length-2]) {
					$("#paginacion_b").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&tramite="+actividades[actividades.length-3]+"'><strong>"+(i+1)+" </strong></a>");
				}else{
					$("#paginacion_b").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&tramite="+actividades[actividades.length-3]+"'>"+(i+1)+" </a>");
				}
			}

			//agrega los valores en la tabla
			$("#tbody").empty();
			for (var i = 0; i<actividades.length-4; i++) {
				

				switch(actividades[i]["tipo_tramite"]){
					case "F-PF-01": var tramite = 'Constancia de Mudanza'; break;
                    case "F-PF-02": var tramite = 'Cambio de Residencia: Regimen de Equipaje'; break;
                    case "F-PF-03": var tramite = 'Constancia de Permiso de Viaje'; break;
                    case "F-PF-04": var tramite = 'Constancia de Fe de Vida'; break;
                    case "F-PF-05": var tramite = 'Constancia de Dependencia Economica'; break;
                    case "F-PF-06": var tramite = 'Carta de Buena Conducta'; break;
                    case "F-PF-07": var tramite = 'Constancia de Factibilidad de Eventos'; break;
                    case "F-PF-08": var tramite = 'Constancia de Extravio de Documentos'; break;
				}

			$("#tbody").append(
					"<tr><td><img src='../Imagenes/pdf.png' class='img-fluid pdf' style='width: 30px; cursor: pointer' id='"+actividades[i]["vehiculo_cod"]+"' name='"+actividades[i]["placa"]+"'></td><th>"
					+actividades[i]["marca"]+"</th><td>"
					+modelo+"</td><td>"
					+color+"</td><td>"
					+año+"</td><td>"
					+serial de carroseria+"</td><td>"
					+actividades[i]["conductor"]+"</td><td>"
					+actividades[i]["cedula"]+"</td><td>"
					+actividades[i]["telefono"]+"</td><td>"
					+actividades[i]["carnet_circulacion"]+"</td><tr>");
			$("#n_solicitudes").text(actividades[actividades.length-4]);
			//recarga el script de ver
			$("#script_ver").empty();
			$("#script_ver").append('<script type="text/javascript" src="ver_pdf.js"></script>');
		}
	});
});

$("#l_cedula").change(function(event){
	$("#l_prefectura").val("");
	$("#l_tramite").val("");
	$.ajax({
		data : {
			'ajax' : '',
			'codigo' : $("#codigo_prefectura").val(),
			'cedula' : $(this).val()
		},
		url : 'paginacion_so.php',
		type : 'get',
		success : function(busqueda){
			var actividades=JSON.parse(busqueda);
			console.log(actividades);
			//acomoda la paginacion dependiendo de la busqueda
			$("#paginacion_t").empty();
			$("#paginacion_t").append(actividades[actividades.length-2]+"-"+actividades[actividades.length-1]+" / Página: ");
			for (var i = 0; i<actividades[actividades.length-1]; i++) {
				if (i+1==actividades[actividades.length-2]) {
					$("#paginacion_t").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&placa="+actividades[actividades.length-3]+"'><strong>"+(i+1)+" </strong></a>");
				}else{
					$("#paginacion_t").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&placa="+actividades[actividades.length-3]+"'>"+(i+1)+" </a>");
				}
			}

			$("#paginacion_b").empty();
			$("#paginacion_b").append(actividades[actividades.length-2]+"-"+actividades[actividades.length-1]+" / Página: ");
			for (var i = 0; i<actividades[actividades.length-1]; i++) {
				if (i+1==actividades[actividades.length-2]) {
					$("#paginacion_b").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&placa="+actividades[actividades.length-3]+"'><strong>"+(i+1)+" </strong></a>");
				}else{
					$("#paginacion_b").append("<a class='text-dark' href='l_solicitudes.php?pagina="+(i+1)+"&placa="+actividades[actividades.length-3]+"'>"+(i+1)+" </a>");
				}
			}

			//agrega los valores en la tabla
			$("#tbody").empty();
			for (var i = 0; i<actividades.length-4; i++) {
			

				switch(actividades[i]["tipo_tramite"]){
					case "F-PF-01": var tramite = 'Constancia de Mudanza'; break;
                    case "F-PF-02": var tramite = 'Cambio de Residencia: Regimen de Equipaje'; break;
                    case "F-PF-03": var tramite = 'Constancia de Permiso de Viaje'; break;
                    case "F-PF-04": var tramite = 'Constancia de Fe de Vida'; break;
                    case "F-PF-05": var tramite = 'Constancia de Dependencia Economica'; break;
                    case "F-PF-06": var tramite = 'Carta de Buena Conducta'; break;
                    case "F-PF-07": var tramite = 'Constancia de Factibilidad de Eventos'; break;
                    case "F-PF-08": var tramite = 'Constancia de Extravio de Documentos'; break;
				}

				$("#tbody").append(
					"<tr><td><img src='../Imagenes/pdf.png' class='img-fluid pdf' style='width: 30px; cursor: pointer' id='"+actividades[i]["vehiculo_cod"]+"' name='"+actividades[i]["placa"]+"'></td><th>"
					+actividades[i]["marca"]+"</th><td>"
					+modelo+"</td><td>"
					+color+"</td><td>"
					+año+"</td><td>"
					+serial de carroseria+"</td><td>"
					+actividades[i]["conductor"]+"</td><td>"
					+actividades[i]["cedula"]+"</td><td>"
					+actividades[i]["telefono"]+"</td><td>"
					+actividades[i]["carnet_circulacion"]+"</td><tr>");

			$("#n_solicitudes").text("");	
			$("#n_solicitudes").text(actividades[actividades.length-4]);
			//recarga el script de ver
			$("#script_ver").empty();
			$("#script_ver").append('<script type="text/javascript" src="ver_pdf.js"></script>');
		}
	});
});

$("#m_tramite").change(function(event){
	if ($(this).val()=="")
		var valor = 0;
	else
		var valor = $(this).val();
	$.ajax({
		data : {
			'ajax' : '',
			'codigo' : $("#codigo_prefectura").val(),
			'tramite_cod' : valor
		},
		url : 'paginacion_so.php',
		type : 'get',
		success : function(busqueda){
			var actividades=JSON.parse(busqueda);
			console.log(actividades);
			//acomoda la paginacion dependiendo de la busqueda
			$("#paginacion_t").empty();
			$("#paginacion_t").append(actividades[actividades.length-2]+"-"+actividades[actividades.length-1]+" / Página: ");
			for (var i = 0; i<actividades[actividades.length-1]; i++) {
				if (i+1==actividades[actividades.length-2]) {
					$("#paginacion_t").append("<a class='text-dark' href='m_solicitudes.php?pagina="+(i+1)+"&tramite_cod="+actividades[actividades.length-3]+"'><strong>"+(i+1)+" </strong></a>");
				}else{
					$("#paginacion_t").append("<a class='text-dark' href='m_solicitudes.php?pagina="+(i+1)+"&tramite_cod="+actividades[actividades.length-3]+"'>"+(i+1)+" </a>");
				}
			}

			$("#paginacion_b").empty();
			$("#paginacion_b").append(actividades[actividades.length-2]+"-"+actividades[actividades.length-1]+" / Página: ");
			for (var i = 0; i<actividades[actividades.length-1]; i++) {
				if (i+1==actividades[actividades.length-2]) {
					$("#paginacion_b").append("<a class='text-dark' href='m_solicitudes.php?pagina="+(i+1)+"&tramite_cod="+actividades[actividades.length-3]+"'><strong>"+(i+1)+" </strong></a>");
				}else{
					$("#paginacion_b").append("<a class='text-dark' href='m_solicitudes.php?pagina="+(i+1)+"&tramite_cod="+actividades[actividades.length-3]+"'>"+(i+1)+" </a>");
				}
			}

			//agrega los valores en la tabla
			$("#tbody").empty();
			var informacion = "";
			for (var i = 0; i<actividades.length-4; i++) {
				switch(actividades[i]["prefectura_cod"]){
					  case "0": var texto = "Global"; break;
					  case "1": var texto = "Prefectura Municipal de Antolin del Campo"; break;
	                  case "2": var texto = "Prefectura Municipal de Arismendi"; break;
	                  case "3": var texto = "Prefectura Municipal de Díaz"; break;
	                  case "4": var texto = "Prefectura Municipal de García"; break;
	                  case "5": var texto = "Prefectura Municipal de Gómez"; break;
	                  case "6": var texto = "Prefectura Municipal de Maneiro"; break;
	                  case "7": var texto = "Prefectura Municipal de Marcano"; break;
	                  case "8": var texto = "Prefectura Municipal de Mariño"; break;
	                  case "9": var texto = "Prefectura Municipal de Peninsula de Macanao"; break;
	                  case "10": var texto = "Prefectura Municipal de Tubores"; break;
	                  case "11": var texto = "Prefectura Municipal de Villalba"; break;
	                  case "22": var texto = "Prefectura Parroquial de Zabala"; break;
	                  case "19": var texto = "Prefectura Parroquial de Sucre"; break;
	                  case "18": var texto = "Prefectura Parroquial de Simón Bolivar"; break;
	                  case "17": var texto = "Prefectura Parroquial de Matasiete"; break;
	                  case "16": var texto = "Prefectura Parroquial de Guevara"; break;
	                  case "13": var texto = "Prefectura Parroquial de Aguirre"; break;
	                  case "12": var texto = "Prefectura Parroquial de Adrian"; break;
	                  case "20": var texto = "Prefectura Parroquial de San Francisco"; break;
	                  case "21": var texto = "Prefectura Parroquial de Vicente Fuentes"; break;
	                  case "15": var texto = "Prefectura Parroquial de Los Barales"; break;
	                  case "14": var texto = "Prefectura Parroquial de Francisco Fajardo"; break;
				}

				switch(actividades[i]["tipo_tramite"]){
					case "F-PF-01": var tramite = 'Constancia de Mudanza'; break;
                    case "F-PF-02": var tramite = 'Cambio de Residencia: Regimen de Equipaje'; break;
                    case "F-PF-03": var tramite = 'Constancia de Permiso de Viaje'; break;
                    case "F-PF-04": var tramite = 'Constancia de Fe de Vida'; break;
                    case "F-PF-05": var tramite = 'Constancia de Dependencia Economica'; break;
                    case "F-PF-06": var tramite = 'Carta de Buena Conducta'; break;
                    case "F-PF-07": var tramite = 'Constancia de Factibilidad de Eventos'; break;
                    case "F-PF-08": var tramite = 'Constancia de Extravio de Documentos'; break;
				}

				var e1="", e2="", e3="";
				switch(actividades[i]["estado"]){
					case "Procesando": var e1 = 'selected'; break;
                    case "Denegada": var e2 = 'selected'; break;
                    case "Aceptada": var e3 = 'selected'; break;
				}

				/*$("#tbody").append(
					"<tr><th scope='row'><button id='"+actividades[i]["tramite_cod"]+"' type='button' class='eliminar' aria-label='Close'><span aria-hidden='true'>&times;</span></button></th><th>"
					+actividades[i]["tramite_cod"]+"</th><td>"
					+tramite+"</td><td>"
					+texto+"</td><td><select class='form-control modified' id='"+actividades[i]["tramite_cod"]+"' style='display: inline;  background-color: transparent; border:0;'><option value='Procesando' "+e1+">Procesando</option><option value='Denegada' "+e2+">Denegada</option><option value='Aceptada' "+e3+">Aceptada</option></select></td><tr>");
				*/

				/*informacion+="<tr><th scope='row'><button id='"+actividades[i]["tramite_cod"]+"' type='button' class='eliminar' aria-label='Close'><span aria-hidden='true'>&times;</span></button></th><th>"
					+actividades[i]["tramite_cod"]+"</th><td>"
					+tramite+"</td><td>"
					+texto+"</td><td><select class='form-control modified' id='"+actividades[i]["tramite_cod"]+"' style='display: inline;  background-color: transparent; border:0;'><option value='Procesando' "+e1+">Procesando</option><option value='Denegada' "+e2+">Denegada</option><option value='Aceptada' "+e3+">Aceptada</option></select></td><tr>";				
				*/

				informacion+="<tr><th>"
					+actividades[i]["tramite_cod"]+"</th><td>"
					+tramite+"</td><td>"
					+texto+"</td><td><select class='form-control modified' id='"+actividades[i]["tramite_cod"]+"' style='display: inline;  background-color: transparent; border:0;'><option value='Procesando' "+e1+">Procesando</option><option value='Denegada' "+e2+">Denegada</option><option value='Aceptada' "+e3+">Aceptada</option></select></td><tr>";				
				
			}
			$("#tbody").append(informacion);

			$("#n_solicitudes").text("");	
			$("#n_solicitudes").text(actividades[actividades.length-4]);
			//recarga el script de ver
			$("#script_ver").empty();
			$("#script_ver").append('<script type="text/javascript" src="modificaciones.js"></script>');
		}
	});
});