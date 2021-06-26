<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#formularioProfesorModal">
  Agregar Profesor
</button>

<div class="modal fade" id="formularioProfesorModal" tabindex="-1" aria-labelledby="formularioProfesorModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header"> 
                        <h3>Agregar profesor</h3>
                </div>
                <div class="modal-body">
                <form id="formulario" data-url="<?=getUrl('profesores', 'crear', [], true)?>">
                        <input type="text" name="nombre" placeholder="Nombre"><br>
                        <input type="text" name="apellido" placeholder="Apellido"><br>
                </form>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <a href="javascript:;" id="submitProfesor" class="btn btn-success">Enviar</a>
                </div>
        </div>
    </div>
</div>

