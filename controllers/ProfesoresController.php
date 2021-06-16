<?php

namespace controllers;

use classes\Profesor;

/**
 * Class ProfesoresController
 * @package controllers
 */
class ProfesoresController extends BaseController
{

    /**
     * ProfesoresController constructor.
     */
    public function __construct()
    {
        $this->controllerFolder = 'profesores';
    }

    /**
     * @throws \Exception
     */
    public function actionIndex()
    {
        $search = isset($this->getValues['buscar']) ? $this->getValues['buscar'] : '';
        $profesorModel = new Profesor();

        return $this->render('index', [
            'profesores' => $profesorModel->getAll($search),
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
            $profesorModel = new Profesor();
            $profesor = $profesorModel->getByID($id);
            if(!empty($profesor)) {
                return $this->render('view', [
                    'profesor' => $profesor,
                ]);
            }
            throw new \Exception('No se encontro el profesor');
        }
        throw new \Exception('El ID está vacío');
    }
}