<?php 
    require_once(dirname(__FILE__). '/../../config/conexion.php'); 
    require_once(dirname(__FILE__). '/../../config/loadClasses.php'); 
    
    use clases\Profesor;

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $materia = $_POST['materia'];
    $profesorModel = new Profesor ();
    $resultado = "No guardo";
    if ($profesorModel->insertProfesor($nombre, $apellido, $materia)) {
        $resultado = "Guardo";
    }
    header("Location: /".ROOTFOLDER."/index.php?resultado=".$resultado);
    exit();
