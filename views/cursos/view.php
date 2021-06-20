<?php 
if(!empty($curso)) {?>
<ul class="ms-3">
    <li class="fw-bold"><?php echo $curso['id'] ?></li>
    <li class="fw-bold"><?php echo $curso['nivel'], $curso['nombre'] ?></li>
</ul>
<hr>

<h3>Alumnos</h3>
<table class="table mt-3">
    <thead class="table-light">
    <th>id</th>
    <th>nombre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th></th>
    </thead>
<?php
    foreach($alumnos as $alumno) {?>
    <tr>
        <td><?php echo $alumno['id'] ?></td>
        <td><?php echo $alumno['nombre'] ?></td>
        <td><?php echo $alumno['apellidoPaterno'] ?></td>
        <td><?php echo $alumno['apellidoMaterno'] ?></td>
        <td><a href="<?=getUrl('alumnos', 'view', ['id' => $alumno['id']])?>">Ver</a></td>
    </tr>
    <?php
    }
?>
</table>

<?php
}
?>