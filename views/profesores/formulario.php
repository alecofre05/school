<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar Profesor
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header"> 
                        <h3>Agregar profesor</h3>
                </div>
                <div class="modal-body">
                <form action="/<?=ROOTFOLDER?>/views/profesores/insertar.php" method="post">
                        <input type="text" name="nombre" placeholder="Nombre"><br>
                        <input type="text" name="apellido" placeholder="Apellido"><br>
                        <select name="materia" id="materia">
                                <?php
                                if (!empty($materias)) {
                                ?>
                                <option value="">Seleccione la materia</option>
                                <?php
                                foreach ($materias as $materia) {
                                ?>
                                        <option value="<?=$materia['id']?>"><?=$materia['nombre']?></option>
                                <?php
                                }  
                                } else {
                                        ?><option value="">No tiene materias aun</option>
                                <?php
                                }
                                ?>
                        </select><br>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" value="Enviar" class="btn btn-success">
                </div>
                </form>
        </div>
    </div>
</div>

