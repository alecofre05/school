<link rel="stylesheet" href="./views/alumnos/style.css">

<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#formularioAlumnoModal">
  Agregar alumno
</button>

<div class="modal fade" id="formularioAlumnoModal" tabindex="-1" aria-labelledby="formularioAlumnoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <h3 class="display-6 ms-3">Agregar alumno</h3>
            </div>
            <div class="modal-body">
            <form id="formulario" data-url="<?=getUrl('alumnos', 'crear', [], true)?>">
                <input class="form-label ms-3" type="text" name="nombre" placeholder="Nombre"><br>
                <input class="form-label ms-3" type="text" name="apellidoPaterno" placeholder="Apellido paterno"><br>
                <input class="form-label ms-3" type="text" name="apellidoMaterno" placeholder="Apellido materno"><br>
                <select name="curso" id="curso" class="form-select ms-3">
                    <?php if (!empty($cursos)) { ?>
                        <option value="">Seleccione el curso</option>
                        <?php foreach ($cursos as $curso) { ?>
                            <option value="<?= $curso['id'] ?>"><?= $curso['nivel'] . $curso['nombre'] ?></option>
                        <?php } ?>
                    <?php } else { ?>
                        <option value="">No tiene cursos aun</option>
                    <?php } ?>
                </select>
                <br>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <a href="javascript:;" id="submitAlumno" class="btn btn-success">Enviar</a>
            </div>
        </div>
    </div>
</div>

