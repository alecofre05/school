<?php

namespace controllers;

use classes\Materias;

/**
 * Class MateriasController
 * @package controllers
 */
class MateriasController extends BaseController
{

    /**
     * MateriasController constructor.
     */
    public function __construct()
    {
        $this->controllerFolder = 'materias';
    }

    /**
     * @throws \Exception
     */
    public function actionIndex()
    {
        $search = isset($this->getValues['buscar']) ? $this->getValues['buscar'] : '';
        $materiasModel = new Materias();

        return $this->render('index', [
            'materias' => $materiasModel->getAll($search),
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
            $materiasModel = new Materias();
            $materia = $materiasModel->getByID($id);
            if(!empty($materia)) {

                return $this->render('view', [
                    'materia' => $materia
                ]);
            }
            throw new \Exception('No se encontro la materia');
        }
        throw new \Exception('El ID está vacío');
    }
}