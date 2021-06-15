<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
$(document).on('ready',function(){       
    $('#btn-ingresar').click(function(){
        var url = "/<?=ROOTFOLDER?>/views/alumnos/insertar.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#formulario").serialize(), 
           success: function(data)             
           {
             $('#resp').html(data);               
           }
       });
    });
});
</script>

<h3>Agregar alumno</h3>
<form id="formulario" method="post">
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="apellidoPaterno" placeholder="apellidoPaterno"><br>
        <input type="text" name="apellidoMaterno" placeholder="apellidoMaterno"><br>
        <select name="curso" id="curso">
                <?php
                if(!empty($cursos)) {
                ?>
                <option value="">Seleccione el curso</option>
                <?php
                      foreach($cursos as $curso) {
                ?>
                        <option value="<?=$curso['id']?>"><?=$curso['nivel'].$curso['nombre']?></option>
                <?php
                }  
                } else {
                        ?><option value="">No tiene cursos aun</option>
                <?php
                }
                ?>
        </select><br>
        <input type="submit" value="Enviar" id="btn-ingresar">
</form>
