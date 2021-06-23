<?php
/**
 * @var $profesores array
 */
?>

<table class="table mt-3">
    <thead class="table-light">
    <th>id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th></th>
    </thead>
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
    <?php include("views/profesores/formulario.php"); ?>
</table>
    