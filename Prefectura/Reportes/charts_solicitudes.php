<script type="text/javascript">
	$("#m_estadistica").change(function(event){
		$.ajax({
			url: 'sql_charts.php',
			type: 'post',
			data: {prefectura_m: $(this).val()},
		})
		.done(function(lista) {
			var mes=JSON.parse(lista);
			mes_total(mes);
		})
		.fail(function() {
			alert("error");
		});
	});

	$("#d_estadistica").change(function(event){
		$.ajax({
			url: 'sql_charts.php',
			type: 'post',
			data: {prefectura_d: $(this).val()},
		})
		.done(function(lista) {
			var dia=JSON.parse(lista);
			dia_total(dia);
		})
		.fail(function() {
			alert("error");
		});
	});

	<?php if($u_nivel==2): ?>
		//MESES DE LA PREFECTURA DEL OPERADOR
		$.ajax({
			url: 'sql_charts.php',
			type: 'post',
			data: {prefectura_m: <?php echo $u_prefectura?>},
		})
		.done(function(lista) {
			var mes=JSON.parse(lista);
			mes_total(mes);
		})
		.fail(function() {
			alert("error");
		});

		//DIAS DE LA PREFECTURA DEL OPERADOR
		$.ajax({
			url: 'sql_charts.php',
			type: 'post',
			data: {prefectura_d: <?php echo $u_prefectura?>},
		})
		.done(function(lista) {
			var dia=JSON.parse(lista);
			dia_total(dia);
		})
		.fail(function() {
			alert("error");
		});
	<?php endif; ?>

//TOTAL DE SOLICITUDES POR PREFECTURA
	$("#p_estadistica").change(function(event){
		$.ajax({
			url: 'sql_charts.php',
			type: 'post',
			data: {prefectura_t: $(this).val()},
		})
		.done(function(lista) {
			var ptotal=JSON.parse(lista);
			prefectura_total(ptotal);
		})
		.fail(function() {
			alert("error");
		});
	});
//FIN TOTAL DE SOLICITUDES POR PREFECTURA

//NUMERO TOTAL POR ESTADO DE LAS SOLICITUDES
	$.ajax({
		url: 'sql_charts.php',
		type: 'post',
		data: {estado: <?php echo $u_prefectura?>},
	})
	.done(function(lista) {
		var estado=JSON.parse(lista);
		estado_total(estado);
	})
	.fail(function() {
		alert("error");
	});
//FIN NUMERO TOTAL POR ESTADO DE LAS SOLICITUDES
</script>

<script type="text/javascript">
//GRAFICA DE TOTAL DE SOLICITUDES POR PREFECTURA//
	function prefectura_total(consulta){
	    $("#total_prefectura").remove(); //BORRO EL CANVA VIEJO PARA QUE NO SE QUEDE CON HOVER
		$("#canva_prefectura").append('<canvas id="total_prefectura"></canvas>'); //LO VUELVO A AGREGAR
		if(consulta==null) return; //CASO QUE PONGA MUNICIPIO
	    var pro_prefectura = $("#total_prefectura");

        var fedevida = 0, dependencia = 0, extravio = 0, eventos = 0, mudanza = 0, permiso = 0, conducta = 0, equipaje = 0; //LLEVA EL TOTAL POR SOLICITUD
        for (var i = 0; i <= consulta.length-1; i++) { //CAMBIO SI SALE ALGUN DIA A SU CANTIDAD
		  switch(consulta[i]["tipo_tramite"]){
			case "F-PF-01": mudanza = consulta[i]["total"]; break;
            case "F-PF-02": equipaje = consulta[i]["total"]; break;
            case "F-PF-03": permiso = consulta[i]["total"]; break;
            case "F-PF-04": fedevida = consulta[i]["total"]; break;
            case "F-PF-05": dependencia = consulta[i]["total"]; break;
            case "F-PF-06": conducta = consulta[i]["total"]; break;
            case "F-PF-07": eventos = consulta[i]["total"]; break;
            case "F-PF-08": extravio = consulta[i]["total"];break;
            default:
              break;
			}
        }

	    var chartData = {
	      labels: ["R.Equipaje", "B.Conducta", "D.Ecónomica", "E.Documentos", "F.Eventos", "Mudanza", "P.Viaje", "F.Vida"], 
	      datasets: [{
	        label: "Solicitudes",
	        data: [equipaje, conducta, dependencia, extravio, eventos, mudanza, permiso, fedevida],
	        backgroundColor: '#3FA637',
	        borderColor: "green",
	        borderWidth: 4,
	        pointBackgroundColor: "#3FA637"
	      }]
	    };

	    if (pro_prefectura) {new Chart(pro_prefectura, {
	      type: 'bar',
	      data: chartData,
	      options: {
	        scales: {
	          yAxes: [{
	            ticks: {
	              beginAtZero: true
	            }
	          }]
	        },
	        legend: {
	          display: false,
	          labels:{
	            fontColor: 'red',
	            fontSize: 20
	          }
	        },
	        tooltip: {
	          xPadding: 6
	        }
	      }
	      });
	    }
	}
//FIN GRAFICA DE TOTAL DE SOLICITUDES POR PREFECTURA//

//GRAFICA DE TOTAL DE SOLICITUDES POR ESTADO//
	function estado_total(consulta){
	    var pro_estado = $("#total_estado");
	    var e1=0, e2=0, e3=0; //POR CADA TIPO DE ESTADO
	    for (var i = 0; i <= consulta.length-1; i++) { //CAMBIO SI SALE ALGUN DIA A SU CANTIDAD
		  switch(consulta[i]["estado"]){
			case "Procesando":
              e1 = consulta[i]["total"]; 
              break;
            case "Denegada":
              e2 = consulta[i]["total"];
              break;
            case "Aceptada":
              e3 = consulta[i]["total"];
              break;
            default:
              
              break;
			}
        }

	    var chartData = {
	      labels: ["Denegada", "Procesando", "Aceptada"], 
	      datasets: [{
	        label: "Solicitudes",
	        data: [e2, e1, e3],
	        backgroundColor: '#3FA637',
	        borderColor: "green",
	        borderWidth: 4,
	        pointBackgroundColor: "#3FA637"
	      }]
	    };

	    if (pro_estado) {new Chart(pro_estado, {
	      type: 'bar',
	      data: chartData,
	      options: {
	        scales: {
	          yAxes: [{
	            ticks: {
	              beginAtZero: true
	            }
	          }]
	        },
	        legend: {
	          display: false,
	          labels:{
	            fontColor: 'red',
	            fontSize: 20
	          }
	        },
	        tooltip: {
	          xPadding: 6
	        }
	      }
	      });
	    }
	}
//FIN GRAFICA DE TOTAL DE SOLICITUDES POR ESTADO//

//GRAFICA DE TOTAL DE SOLICITUDES POR MES//
	function mes_total(consulta){
		$("#total_mes").remove(); //BORRO EL CANVA VIEJO PARA QUE NO SE QUEDE CON HOVER
		$("#canva_mes").append('<canvas id="total_mes"></canvas>'); //LO VUELVO A AGREGAR
		if(consulta==null) return; //CASO QUE PONGA MUNICIPIO
	    var pro_mes = $("#total_mes");
	    var m1=0, m2=0, m3=0, m4=0, m5=0, m6=0, m7=0, m8=0, m9=0, m10=0, m11=0, m12=0; //LLEVA EL TOTAL POR MES
	    for (var i = 0; i <= consulta.length-1; i++) { //CAMBIO SI SALE ALGUN MES A SU CANTIDAD
		  switch(consulta[i]["mes"]){
			case "1":
              m1 = consulta[i]["total"]; 
              break;
            case "2":
              m2 = consulta[i]["total"];
              break;
            case "3":
              m3 = consulta[i]["total"];
              break;
            case "4":
              m4 = consulta[i]["total"];
              break;
            case "5":
              m5 = consulta[i]["total"];
              break;
            case "6":
              m6 = consulta[i]["total"];
              break;
            case "7":
              m7 = consulta[i]["total"];
              break;
            case "8":
              m8 = consulta[i]["total"];
              break;
            case "9":
              m9 = consulta[i]["total"];
              break;
            case "10":
              m10 = consulta[i]["total"];
              break;
            case "11":
              m11 = consulta[i]["total"];
              break;
            case "12":
              m12 = consulta[i]["total"];
              break;
            default:
              
              break;
			}
        }

	    var chartData = {
	      labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
	      datasets: [{
	        label: "Solicitudes",
	        data: [m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11, m12],
	        backgroundColor: '#3FA637',
	        borderColor: "green",
	        borderWidth: 4,
	        pointBackgroundColor: "#3FA637"
	      }]
	    };

	    if (pro_mes) {new Chart(pro_mes, {
	      type: 'line',
	      data: chartData,
	      options: {
	        scales: {
	          yAxes: [{
	            ticks: {
	              beginAtZero: true
	            }
	          }]
	        },
	        legend: {
	          display: false,
	          labels:{
	            fontColor: 'red',
	            fontSize: 20
	          }
	        },
	        tooltip: {
	          xPadding: 6
	        }
	      }
	      });
	    }
	}
//FIN GRAFICA DE TOTAL DE SOLICITUDES POR MES//

//GRAFICA DE TOTAL DE SOLICITUDES POR DIA//
	function dia_total(consulta){
    	$("#total_dia").remove(); //BORRO EL CANVA VIEJO PARA QUE NO SE QUEDE CON HOVER
		$("#canva_dia").append('<canvas id="total_dia"></canvas>'); //LO VUELVO A AGREGAR
		if(consulta==null) return; //CASO QUE PONGA MUNICIPIO
	    var pro_dia = $("#total_dia");
	    var d1=0, d2=0, d3=0, d4=0, d5=0, d6=0, d7=0; //LLEVA EL TOTAL POR DIA
	    for (var i = 0; i <= consulta.length-1; i++) { //CAMBIO SI SALE ALGUN DIA A SU CANTIDAD
		  switch(consulta[i]["dia"]){
			case "1":
              d1 = consulta[i]["total"]; 
              break;
            case "2":
              d2 = consulta[i]["total"];
              break;
            case "3":
              d3 = consulta[i]["total"];
              break;
            case "4":
              d4 = consulta[i]["total"];
              break;
            case "5":
              d5 = consulta[i]["total"];
              break;
            case "6":
              d6 = consulta[i]["total"];
              break;
            case "0":
              d7 = consulta[i]["total"];
              break;
            default:
              
              break;
			}
        }

	    var chartData = {
	      labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"],
	      datasets: [{
	        label: "Solicitudes",
	        data: [d1,d2,d3,d4,d5,d6,d7],
	        backgroundColor: '#3FA637',
	        borderColor: "green",
	        borderWidth: 4,
	        pointBackgroundColor: "#3FA637"
	      }]
	    };

	    if (pro_dia) {new Chart(pro_dia, {
	      type: 'line',
	      data: chartData,
	      options: {
	        scales: {
	          yAxes: [{
	            ticks: {
	              beginAtZero: true
	            }
	          }]
	        },
	        legend: {
	          display: false,
	          labels:{
	            fontColor: 'red',
	            fontSize: 20
	          }
	        },
	        tooltip: {
	          xPadding: 6
	        }
	      }
	      });
	    }
	}
//FIN GRAFICA DE TOTAL DE SOLICITUDES POR DIA//
</script>