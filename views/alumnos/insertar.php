<?php 

    require_once(dirname(__FILE__). '/../../config/conexion.php'); 
    require_once(dirname(__FILE__). '/../../config/loadClasses.php'); 
    
    use clases\Alumnos;

    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $curso = $_POST['curso'];
    $alumnoModel = new Alumnos ();
    $resultado = "No guardo";
    if ($alumnoModel->insertAlumno($nombre, $apellidoPaterno, $apellidoMaterno, $curso)) {
        $resultado = "Guardo";
    }

    header("Location: /".ROOTFOLDER."/index.php?resultado=".$resultado);
    exit();
