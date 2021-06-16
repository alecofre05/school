<?php


namespace controllers;

class BaseController
{
    protected $controllerFolder;
    public $postValues = [];
    public $getValues = [];

    /**
     * @param $view
     * @param $data
     * @return bool
     * @throws \Exception
     */
    public function render($view, $data){
        foreach ($data as $id_assoc => $value) {
            ${$id_assoc} = $value;
        }

        $filename = dirname(__DIR__).'/views/'.$this->controllerFolder.'/'.$view.'.php';

        if(file_exists($filename)) {
            require_once($filename);
            return true;
        }

        throw new \Exception('Invalid view filename');
    }

    /**
     * @param $controller
     * @param $action
     * @param array $params
     */
    public function redirect($controller, $action, $params = []){
        header("Location:index.php?section=".$controller."&action=".$action);
    }

}