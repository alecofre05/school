<?php 

require_once(dirname(__FILE__). '/../../config/conexion.php'); 
require_once(dirname(__FILE__). '/../../config/loadClasses.php'); 

use clases\Materias;

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
            $materiaModel = new Materias ();
            $id = isset($_GET['id']) ? $_GET['id'] : (isset($_GET['materia']) ? $_GET['materia'] : '');
            $materia = $materiaModel->getByID($id);
            ?>
            <ul>
                <li><?php echo $materia['id'].' '.$materia['nombre'] ?></li>
            </ul>
            <hr>
            <h3>Profesores que dictan esta materia: </h3>
            <table>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
            <?php
                $profesores = $materiaModel->getProfesoresByID($id);
                foreach ($profesores as $profesor) {?>
                <tr>
                    <td><?php echo $profesor['id'] ?></td>
                    <td><?php echo $profesor['nombre'] ?></td>
                    <td><?php echo $profesor['apellido'] ?></td>
                </tr>
                <?php
                }
            ?>
            </table>

</body>
</html>