<?php 

require_once(dirname(__FILE__). '/../../config/conexion.php'); 
require_once(dirname(__FILE__). '/../../config/loadClasses.php'); 

use clases\Cursos;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $cursosModel = new Cursos ();
            $id = isset($_GET['id']) ? $_GET['id'] : (isset($_GET['curso']) ? $_GET['curso'] : '');
            if(!empty($id)) {
            $curso = $cursosModel->getByID($id);
            if(!empty($curso)) {?>
            <ul>
                <li><?php echo $curso['id'] ?></li>
                <li><?php echo $curso['nivel'], $curso['nombre'] ?></li>
            </ul>
            <hr>

            <h3>Alumnos</h3>
            <table>
                <th>id</th>
                <th>nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th></th>
            <?php
                $alumnos = $cursosModel->getAlumnosByID($id);
                foreach($alumnos as $alumno) {?>
                <tr>
                    <td><?php echo $alumno['id'] ?></td>
                    <td><?php echo $alumno['nombre'] ?></td>
                    <td><?php echo $alumno['apellidoPaterno'] ?></td>
                    <td><?php echo $alumno['apellidoMaterno'] ?></td>
                    <td><a href="/<?=ROOTFOLDER?>/views/alumnos/alumno.php?id=<?= $alumno['id']?>">Ver</a></td>
                </tr>
                <?php
                }
            ?>
            </table>
            
            <?php
        } else {
            throw new Exception('No se encontro el curso');
        }
        } else {
            throw new Exception('El ID está vacío');
        }
    ?>
    
</body>
</html>