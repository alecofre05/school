<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#formularioCursoModal">
  Agregar curso
</button>

<div class="modal fade" id="formularioCursoModal" tabindex="-1" aria-labelledby="formularioCursoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                        <h3>Agregar curso</h3>
                </div>
                <div class="modal-body">
                        <form id="formulario" data-url="<?=getUrl('cursos', 'crear', [], true)?>">
                        <input type="text" name="nivel" placeholder="nivel"><br>
                        <input type="text" name="nombre" placeholder="Nombre del curso"><br>
                        </form>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <a href="javascript:;" id="submitCurso" class="btn btn-success">Enviar</a>
                </div>
                </div>
        </div>
</div>
