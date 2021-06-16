<?php

require_once ('config.php');
require_once ('conexion.php');
require_once ('functions.php');

require_once(dirname(__FILE__) . '/../classes/BaseModel.php');
foreach(glob("classes/*.php") as $classes){
    require_once $classes;
}

require_once(dirname(__FILE__) . '/../controllers/BaseController.php');
foreach(glob("controllers/*.php") as $controllers){
    require_once $controllers;
}

if(!empty($_GET['section'])) {
    $controllerName = '\\controllers\\'.ucfirst($_GET['section']).'Controller';
    $action = !empty($_GET['action']) ? $_GET['action'] : 'index';
    $actionName = 'action'.ucfirst($action);
    
    // Call the action
    /** @var \controllers\BaseController $controller */
    $controller = new $controllerName;
    $controller->postValues = $_POST;
    $controller->getValues = $_GET;
    $controller->$actionName();
}