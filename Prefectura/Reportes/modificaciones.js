$(".modified").change(function(event) {
	var codigo = $(this).attr('id');
	var estate = $(this).val();
	$.ajax({
		url: 'modificaciones.php',
		type: 'post',
		data: {modificar: codigo, estado: estate},
	})
	.done(function(lista) {
		var exito = JSON.parse(lista);
		if(exito == "modificado")
			location.href = "m_solicitudes.php?error=0";
		else
			location.href = "m_solicitudes.php?error=1";
	})
	.fail(function() {
		alert("error");
	});
	
});

$(".eliminar").click(function(event) {
	var codigo = $(this).attr('id');
	$.ajax({
		url: 'modificaciones.php',
		type: 'post',
		data: {eliminar: codigo},
	})
	.done(function(lista) {
		var exito = JSON.parse(lista);
		if(exito == "borrado")
			location.href = "m_solicitudes.php?error=0";
		else
			location.href = "m_solicitudes.php?error=1";
	})
	.fail(function() {
		alert("error");
	});
	
});