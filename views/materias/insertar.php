<?php 

    require_once(dirname(__FILE__). '/../../config/conexion.php'); 
    require_once(dirname(__FILE__). '/../../config/loadClasses.php'); 
    
    use clases\Materias;

    $nombre = $_POST['nombre'];
    $materiaModel = new Materias ();
    $resultado = "No se pudo guardar la materia";
    if($materiaModel->insertMateria($nombre)) {
        $resultado = "La materia se guardó con éxito!";
    }

    header("Location: /".ROOTFOLDER."/index.php?resultado=".$resultado);
    exit();
