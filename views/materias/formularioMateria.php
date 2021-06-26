<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#formularioMateriaModal">
  Agregar Materia
</button>

<div class="modal fade" id="formularioMateriaModal" tabindex="-1" aria-labelledby="formularioMateriaModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header"> 
                        <h3>Agregar materias</h3>
                </div>
                <div class="modal-body">
                        <form id="formulario" data-url="<?=getUrl('materias', 'crear', [], true)?>">
                        <input type="text" name="nombre" placeholder="Ingrese la materia"><br>
                        </form>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <a href="javascript:;" id="submitMateria" class="btn btn-success">Enviar </a>
                </div>
                <br />
        </div>
    </div>
</div>





