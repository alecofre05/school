<?php
/**
 * @var $alumnos array
 */
?>

<table class="table mt-3">
    <thead class="table-light">
        <th>id</th>
        <th>nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Curso</th>
        <th></th>
    </thead>
        <?php if (count($alumnos) > 0) { ?>
            <?php foreach ($alumnos as $alumno) { ?>
                <tr>
                    <td><?php echo $alumno['id'] ?></td>
                    <td><?php echo $alumno['nombre'] ?></td>
                    <td><?php echo $alumno['apellidoPaterno'] ?></td>
                    <td><?php echo $alumno['apellidoMaterno'] ?></td>
                    <td><?php echo $alumno['curso'] ?></td>
                    <td><a href="<?=getUrl('alumnos', 'view', ['id' => $alumno['id']])?>">Ver</a></td>
                </tr>
            <?php } ?>
        <?php } ?>

        <?php include("views/alumnos/formulario.php"); ?>
</table>
    