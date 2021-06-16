<?php
/**
 * @var $profesores array
 */
?>

<table>
    <th>id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th></th>

    <?php if (count($profesores) > 0) { ?>
        <?php foreach ($profesores as $profesor) { ?>
            <tr>
                <td><?php echo $profesor['id'] ?></td>
                <td><?php echo $profesor['nombre'] ?></td>
                <td><?php echo $profesor['apellido'] ?></td>
                <td><a href="<?=getUrl('profesores', 'view', ['id' => $profesor['id']])?>">Ver</a></td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>
    