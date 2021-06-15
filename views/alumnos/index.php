<?php

    require_once('config/conexion.php'); 
    require_once('config/loadClasses.php');

    use clases\Alumnos;
    use clases\Cursos;

    if(isset($_GET['resultado'])) {
            echo "<h1>".$_GET['resultado']."</h1>";
        }
    include ("buscador.php");

    ?>
    
    <table>
        <th>id</th>
        <th>nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Curso</th>
        <th></th>

        <?php
            $alumnoModel = new Alumnos();
            $search = isset($_GET['buscar']) ? $_GET['buscar'] : '';
            $lista = $alumnoModel->getAll($search);
            if(count($lista)>0) {
                foreach($lista as $fila){?>
            <tr>
                <td><?php echo $fila['id'] ?></td>
                <td><?php echo $fila['nombre'] ?></td>
                <td><?php echo $fila['apellidoPaterno'] ?></td>
                <td><?php echo $fila['apellidoMaterno'] ?></td>
                <td><?php echo $fila['curso'] ?></td>
                <td><a href="/<?=ROOTFOLDER?>/views/alumnos/alumno.php?id=<?= $fila['id']?>">Ver</a></td>
            </tr>
            <?php }
            }
             
        $cursosModel = new Cursos();
        $cursos = $cursosModel->getAll();
        include ("views/alumnos/formulario.php"); 
        ?>
        <hr>
    <?php
    ?>
            
    </table>
    