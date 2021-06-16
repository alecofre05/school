<?php

namespace controllers;

use classes\Cursos;

/**
 * Class CursosController
 * @package controllers
 */
class CursosController extends BaseController
{

    /**
     * CursosController constructor.
     */
    public function __construct()
    {
        $this->controllerFolder = 'cursos';
    }

    /**
     * @throws \Exception
     */
    public function actionIndex()
    {
        $search = isset($this->getValues['buscar']) ? $this->getValues['buscar'] : '';
        $cursosModel = new Cursos();

        return $this->render('index', [
            'cursos' => $cursosModel->getAll($search)
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
            $cursosModel = new Cursos();
            $curso = $cursosModel->getByID($id);
            if(!empty($curso)) {
                return $this->render('view', [
                    'curso' => $curso,
                    'alumnos' => $cursosModel->getAlumnosByID($curso["id"])
                ]);
            }
            throw new \Exception('No se encontro el curso');
        }
        throw new \Exception('El ID está vacío');
    }
}