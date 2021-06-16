$(document).on('ready',function(){
    $('#btn-ingresar').click(function(){
        var url = "/api.php?section=alumnos&action=crear";
        $.ajax({
            type: "POST",
            url: url,
            data: $("#formulario").serialize(),
            success: function(data){
                $('#resp').html(data);
            }
        });
    });
});