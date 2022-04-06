$(".pdf").click(function(event){
    var cedula = $(this).attr("name");
    var codigo = $(this).attr("id");
    window.open("../pdf/pdf_generator.php?s="+codigo+"&c="+cedula);
});