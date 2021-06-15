<?php

require_once('config/conexion.php'); 
require_once('config/loadClasses.php');

use clases\Materias;


        include ("views/materias/formularioMateria.php"); 
        $materiasModel = new Materias();
        $materias = $materiasModel->getAll();
        include ("views/materias/form_mostrarMateria.php");   
?> 