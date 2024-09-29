<?php
require_once '../model/database.php';

$controller = 'usuario';


if(!isset($_REQUEST['a']))
{
    require_once "../controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    $controller = strtolower($_REQUEST['a']);
    $accion = isset($_REQUEST['b']) ? $_REQUEST['b'] : 'Index';
    
    
    require_once "../controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
 
    call_user_func( array( $controller, $accion ) );
}

?>
