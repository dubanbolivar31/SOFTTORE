<?php
require_once '../model/database.php';

$controller = 'ventas';


if(!isset($_REQUEST['m']))
{
    require_once "../controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    $controller = strtolower($_REQUEST['m']);
    $accion = isset($_REQUEST['n']) ? $_REQUEST['n'] : 'Index';
    
    
    require_once "../controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
 
    call_user_func( array( $controller, $accion ) );
}

?>
