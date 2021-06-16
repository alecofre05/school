<?php

namespace controllers;

use classes\Alumnos;
use classes\Cursos;

/**
 * Class AlumnosController
 * @package controllers
 */
class AlumnosController extends BaseController
{

    /**
     * AlumnosController constructor.
     */
    public function __construct()
    {
        $this->controllerFolder = 'alumnos';
    }

    /**
     * @throws \Exception
     */
    public function actionIndex()
    {
        $search = isset($_GET['buscar']) ? $_GET['buscar'] : '';
        $alumnoModel = new Alumnos();
        $cursosModel = new Cursos();

        return $this->render('index', [
            'alumnos' => $alumnoModel->getAll($search),
            'cursos' => $cursosModel->getAll()
        ]);
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function actionView()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        if(!empty($id)) {
            $alumnoModel = new Alumnos();
            $alumno = $alumnoModel->getByID($id);
            if(!empty($alumno)) {
                $cursosModel = new Cursos();

                return $this->render('view', [
                    'alumno' => $alumno,
                    'cursos' => $cursosModel->getAll()
                ]);
            }
            throw new \Exception('No se encontro el alumno');
        }
        throw new \Exception('El ID está vacío');
    }

    /**
     * @return string
     */
    public function actionCambiarCurso()
    {
        $curso = $_POST['curso'];
        $id = $_POST['id'];
        $alumnoModel = new Alumnos();
        $resultado = "No se pudo cambiar el curso";
        if($alumnoModel->updateCurso($id, $curso)) {
            $resultado = "Se completó";
        }

        return $resultado;
    }

    /**
     * @return string
     */
    public function actionCrear()
    {
        $nombre = $_POST['nombre'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $curso = $_POST['curso'];
        $alumnoModel = new Alumnos ();
        $resultado = "No guardo";
        if ($alumnoModel->insertAlumno($nombre, $apellidoPaterno, $apellidoMaterno, $curso)) {
            $resultado = "Guardo";
        }

        return $resultado;
    }
}