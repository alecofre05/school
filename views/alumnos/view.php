<?php
/**
 * @var $alumno array
 * @var $cursos array
 */
?>
<link rel="stylesheet" href="./views/alumnos/style.css">
<div id="#resp">
    <ul class="list-group">
        <li class="list-group-item"><?php echo $alumno['id'] ?></li>
        <li class="list-group-item"><?php echo $alumno['nombre'] ?></li>
        <li class="list-group-item"><?php echo $alumno['apellidoPaterno'] ?></li>
        <li class="list-group-item"><?php echo $alumno['apellidoMaterno'] ?></li>
        <li class="list-group-item"><?php echo $alumno['curso'] ?></li>
    </ul>
</div>

<form action="cambiarCurso.php" method="post">
    <select name="curso" id="curso" class="form-select mt-2">
        <?php if (!empty($cursos)) { ?>
            <option value="">Cambiar curso</option>
            <?php foreach ($cursos as $curso) { ?>
                <option value="<?= $curso['id'] ?>"><?= $curso['nivel'] . $curso['nombre'] ?></option>
            <?php } ?>
        <?php } else { ?>
            <option value="">No tiene cursos aun</option>
        <?php } ?>
    </select>
    <br>
    <input type="hidden" name="id" value="<?= $alumno['id'] ?>">
    <input type="submit" value="Enviar" class="btn btn-success ms-3>
</form>