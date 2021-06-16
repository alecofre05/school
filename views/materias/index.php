<?php
/**
 * @var $materias array
 */
?>

<table>
    <th>id</th>
    <th>nombre</th>
    <th></th>

    <?php if (count($materias) > 0) { ?>
        <?php foreach ($materias as $materia) { ?>
            <tr>
                <td><?php echo $materia['id'] ?></td>
                <td><?php echo $materia['nombre'] ?></td>
                <td><a href="<?=getUrl('materias', 'view', ['id' => $materia['id']])?>">Ver</a></td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>
    