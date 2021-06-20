<?php
/**
 * @var $cursos array
 */
?>

<table class="table mt-3">
    <thead class="table-light">
    <th>id</th>
    <th>nivel</th>
    <th>nombre</th>
    <th></th>
    </thead>
    <?php if (count($cursos) > 0) { ?>
        <?php foreach ($cursos as $curso) { ?>
            <tr>
                <td><?php echo $curso['id'] ?></td>
                <td><?php echo $curso['nivel'] ?></td>
                <td><?php echo $curso['nombre'] ?></td>
                <td><a href="<?=getUrl('cursos', 'view', ['id' => $curso['id']])?>">Ver</a></td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>
    