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
        $search = isset($this->getValues['buscar']) ? $this->getValues['buscar'] : '';
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
        $id = isset($this->getValues['id']) ? $this->getValues['id'] : '';
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
        $curso = $this->postValues['curso'];
        $id = $this->postValues['id'];
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
        $nombre = $this->postValues['nombre'];
        $apellidoPaterno = $this->postValues['apellidoPaterno'];
        $apellidoMaterno = $this->postValues['apellidoMaterno'];
        $curso = $this->postValues['curso'];
        $alumnoModel = new Alumnos ();
        $resultado = $alumnoModel->insertAlumno($nombre, $apellidoPaterno, $apellidoMaterno, $curso);

        echo json_encode(["success" => $resultado, "msg" => $resultado ? "Guardó" : "No guardó"]);
    }
}