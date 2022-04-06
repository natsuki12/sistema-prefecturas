$("#cedula_s").change(function(event){
  $.ajax({
      data : {'cedula' : $(this).val(),
          'proceso' : 0},
      url : 'config/ajax_auto.php',
      type: 'post',
      success: function(respuesta){
        var datos=JSON.parse(respuesta);
        console.log(datos);
        if(datos[0]==null){
          var fecha=datos["fecha_nacimiento"].split('-').reverse().join('/');
          $("#nombre1_s").val(datos["nombre1"]);
          $("#nombre2_s").val(datos["nombre2"]);
          $("#apellido1_s").val(datos["apellido1"]);
          $("#apellido2_s").val(datos["apellido2"]);
          $("#civil_s").val(datos["edo_civil"]);
          $("#nacimiento_s").val(fecha);
          $("#profesion_s").val(datos["profesion"]);
        }else{
          $("#nombre1_s").val("");
          $("#nombre2_s").val("");
          $("#apellido1_s").val("");
          $("#apellido2_s").val("");
          $("#civil_s").val("");
          $("#nacimiento_s").val("");
          $("#error").text(datos[0]);
        }           
      }
  });
});

$("#municipio_s").change(function(event){
  $.ajax({
    data:{'municipio': $(this).val(),
        'proceso': 1},
    url:'config/ajax_auto.php',
    type:'post',
    success: function(respuesta){
      console.log(respuesta);
      var datos=JSON.parse(respuesta),
      select=document.getElementById("parroquia_s");
      $("#parroquia_s").empty();
      $("#parroquia_s").append('<option selected="selected" value="">--Elegir Parroquia--</option>');
      for (var i = 0; i <= datos.length-1; i++) {
        var newoption=document.createElement("option");
        newoption.setAttribute("value",datos[i]["PARROQUIA_COD"]);
        newoption.setAttribute("label",datos[i]["PARROQUIA_NOMBRE"]);
        select.appendChild(newoption);
      }
      $("#parroquia_s").removeAttr("disabled");
    }
  });
});

$("#municipio_d").change(function(event){
  $.ajax({
    data:{'municipio': $(this).val(),
        'proceso': 1},
    url:'config/ajax_auto.php',
    type:'post',
    success: function(respuesta){
      var datos=JSON.parse(respuesta),
      select=document.getElementById("parroquia_d");
      $("#parroquia_d").empty();
      $("#parroquia_d").append('<option selected="selected" value="0">--Elegir Parroquia--</option>');
      for (var i = 0; i <= datos.length-1; i++) {
        var newoption=document.createElement("option");
        newoption.setAttribute("value",datos[i]["PARROQUIA_COD"]);
        newoption.setAttribute("label",datos[i]["PARROQUIA_NOMBRE"]);
        select.appendChild(newoption);
      }
      $("#parroquia_d").removeAttr("disabled");
    }
  });
});

$("#municipio_t1").change(function(event){
  $.ajax({
    data:{'municipio': $(this).val(),
        'proceso': 1},
    url:'config/ajax_auto.php',
    type:'post',
    success: function(respuesta){
      var datos=JSON.parse(respuesta),
      select=document.getElementById("parroquia_t1");
      $("#parroquia_t1").empty();
      $("#parroquia_t1").append('<option selected="selected" value="0">--Elegir Parroquia--</option>');
      for (var i = 0; i <= datos.length-1; i++) {
        var newoption=document.createElement("option");
        newoption.setAttribute("value",datos[i]["PARROQUIA_COD"]);
        newoption.setAttribute("label",datos[i]["PARROQUIA_NOMBRE"]);
        select.appendChild(newoption);
      }
      $("#parroquia_t1").removeAttr("disabled");
    }
  });
});

$("#municipio_t2").change(function(event){
  $.ajax({
    data:{'municipio': $(this).val(),
        'proceso': 1},
    url:'config/ajax_auto.php',
    type:'post',
    success: function(respuesta){
      var datos=JSON.parse(respuesta),
      select=document.getElementById("parroquia_t2");
      $("#parroquia_t2").empty();
      $("#parroquia_t2").append('<option selected="selected" value="0">--Elegir Parroquia--</option>');
      for (var i = 0; i <= datos.length-1; i++) {
        var newoption=document.createElement("option");
        newoption.setAttribute("value",datos[i]["PARROQUIA_COD"]);
        newoption.setAttribute("label",datos[i]["PARROQUIA_NOMBRE"]);
        select.appendChild(newoption);
      }
      $("#parroquia_t2").removeAttr("disabled");
    }
  });
});

$("#municipio_e").change(function(event){
  $.ajax({
    data:{'municipio': $(this).val(),
        'proceso': 1},
    url:'config/ajax_auto.php',
    type:'post',
    success: function(respuesta){
      var datos=JSON.parse(respuesta),
      select=document.getElementById("parroquia_e");
      $("#parroquia_e").empty();
      $("#parroquia_e").append('<option selected="selected" value="0">--Elegir Parroquia--</option>');
      for (var i = 0; i <= datos.length-1; i++) {
        var newoption=document.createElement("option");
        newoption.setAttribute("value",datos[i]["PARROQUIA_COD"]);
        newoption.setAttribute("label",datos[i]["PARROQUIA_NOMBRE"]);
        select.appendChild(newoption);
      }
      $("#parroquia_e").removeAttr("disabled");
    }
  });
});

$("#municipio_a").change(function(event){
  $.ajax({
    data:{'municipio': $(this).val(),
        'proceso': 1},
    url:'config/ajax_auto.php',
    type:'post',
    success: function(respuesta){
      var datos=JSON.parse(respuesta),
      select=document.getElementById("parroquia_a");
      $("#parroquia_a").empty();
      $("#parroquia_a").append('<option selected="selected" value="0">--Elegir Parroquia--</option>');
      for (var i = 0; i <= datos.length-1; i++) {
        var newoption=document.createElement("option");
        newoption.setAttribute("value",datos[i]["PARROQUIA_COD"]);
        newoption.setAttribute("label",datos[i]["PARROQUIA_NOMBRE"]);
        select.appendChild(newoption);
      }
      $("#parroquia_a").removeAttr("disabled");
    }
  });
});
