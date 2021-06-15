<?php 

require_once(dirname(__FILE__). '/../../config/conexion.php'); 
require_once(dirname(__FILE__). '/../../config/loadClasses.php'); 

use clases\Alumnos;
use clases\Cursos;

$cursosModel = new Cursos ();
$cursos = $cursosModel->getAll();
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
            $alumnoModel = new Alumnos ();
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            if(!empty($id)) {
            $alumno = $alumnoModel->getByID($id);
            if(!empty($alumno)) {?>
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
                    <?php
                    if(!empty($cursos)) {
                    ?>
                    <option value="">Cambiar curso</option>
                    <?php
                        foreach($cursos as $curso) {
                    ?>
                            <option value="<?=$curso['id']?>"><?=$curso['nivel'].$curso['nombre']?></option>
                    <?php
                    }  
                    } else {
                            ?><option value="">No tiene cursos aun</option>
                    <?php
                    }
                    ?>
                </select><br>
                <input type="hidden" name="id" value="<?=$alumno['id']?>">
                <input type="submit" value="Enviar">
            </form>
            <?php
        } else {
            throw new Exception('No se encontro el alumno');
        }
        } else {
            throw new Exception('El ID está vacío');
        }
        ?>
</body>
</html>