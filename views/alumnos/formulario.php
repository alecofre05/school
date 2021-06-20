<link rel="stylesheet" href="./views/alumnos/style.css">
<h3 class="display-6 ms-3">Agregar alumno</h3>
<form id="formulario" method="post">
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
    <input type="submit" value="Enviar" id="btn-ingresar" class="btn btn-success ms-3">
</form>


