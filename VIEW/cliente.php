<?php
require_once '../model/database.php';

$controller = 'cliente';


if(!isset($_REQUEST['g']))
{
    require_once "../controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    $controller = strtolower($_REQUEST['g']);
    $accion = isset($_REQUEST['h']) ? $_REQUEST['h'] : 'Index';
    
    
    require_once "../controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
 
    call_user_func( array( $controller, $accion ) );
}

?>
