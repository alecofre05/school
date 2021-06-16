<?php
/**
 * @var $alumno array
 * @var $cursos array
 */
?>

<div id="#resp">
    <ul>
        <li><?php echo $alumno['id'] ?></li>
        <li><?php echo $alumno['nombre'] ?></li>
        <li><?php echo $alumno['apellidoPaterno'] ?></li>
        <li><?php echo $alumno['apellidoMaterno'] ?></li>
        <li><?php echo $alumno['curso'] ?></li>
    </ul>
</div>

<form action="cambiarCurso.php" method="post">
    <select name="curso" id="curso">
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
    <input type="submit" value="Enviar">
</form>