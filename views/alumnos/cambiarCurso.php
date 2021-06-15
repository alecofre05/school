<?php  

    require_once(dirname(__FILE__). '/../../config/conexion.php'); 
    require_once(dirname(__FILE__). '/../../config/loadClasses.php'); 
    
    use clases\Alumnos;

    $curso = $_POST['curso'];
    $id = $_POST['id'];
    $alumnoModel = new Alumnos ();
    $resultado = "No se pudo cambiar el curso";
    if($alumnoModel->updateCurso($id, $curso)) {
        $resultado = "Se completó";
    }

    header("Location: /".ROOTFOLDER."/index.php?resultado=".$resultado);
    exit();
