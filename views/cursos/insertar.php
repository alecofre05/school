<?php 

    require_once(dirname(__FILE__). '/../../config/conexion.php'); 
    require_once(dirname(__FILE__). '/../../config/loadClasses.php'); 
    
    use clases\Cursos;

    $nivel = $_POST['nivel'];
    $nombre = $_POST['nombre'];
    $cursoModel = new Cursos();
    $resultado = "No guardo el curso";
    if($cursoModel->insertCurso($nivel, $nombre)) {
        $resultado = "Guardo el curso";
    }

    header("Location: /".ROOTFOLDER."/index.php?resultado=".$resultado);
    exit();
