<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar curso
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                        <h3>Agregar curso</h3>
                </div>
                <div class="modal-body">
                        <form action="/<?=ROOTFOLDER?>/views/cursos/insertar.php" method="post">
                        <input type="text" name="nivel" placeholder="nivel"><br>
                        <input type="text" name="nombre" placeholder="Nombre del curso"><br>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" value="Enviar" class="btn btn-success ">
                </div>
                        </form>
                </div>
        </div>
</div>
