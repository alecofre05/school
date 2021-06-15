<?php 

require_once('config/conexion.php'); 
require_once('config/loadClasses.php');

use clases\Alumnos;
use clases\Cursos;
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

    <div class="menu">
            <ul>
                <li><a href="index.php?section=alumnos">Alumnos</a></li>
                <li><a href="index.php?section=profesores">Profesores</a></li>
                <li><a href="index.php?section=cursos">Cursos</a></li>
                <li><a href="index.php?section=materias">Materias</a></li>
            </ul>
        </div>

        <div class="contenedor">
            <?php if(isset($_GET['section'])) {
                $filename = !empty($_GET['action']) ? $_GET['action'] : 'index';
                $path = 'views/'.$_GET['section'].'/'.$filename.'.php';

                if(file_exists($path)) {
                    include($path);
                } else {
                    include('404.php');
                }
            } else {
                include('home.php');
            }?>

    </div>
</body>
</html>