$('body').on("click", "#submitAlumno", function(e){
    e.preventDefault();
    //e.stopPropagation();
    var dataForm = $("#formulario").serialize();
    var url = $("#formulario").data("url");
    $.ajax({
        type: "POST",
        url: url,
        data: dataForm,
        dataType: "json",
        success: function(data){
            $('#alertContainer').bootstrapAlert({
                message: data.msg,
                type: data.success ? 'success' : 'warning',
                dismissible: true
              });
            console.log(data);
            $("#formularioAlumnoModal").modal("hide");
        }
    });
});

$(document).on('ready',function(){ 
});