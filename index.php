<?php

session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

//conexion de base de datos
$db = Database::connect();

function show_error(){
    $error = new errorController();
    $error->index();
}

//Si existe el get controller, guarda el valor en la variable nombre_controlador 
if(isset($_GET['controller'])){
    
    $nombre_controlador = $_GET['controller'].'Controller';

//si no existe get controller ni action controller, agrega el controler default en la variable nombre_controlador
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    
    $nombre_controlador = controller_default;
    
}else{
        show_error();
        exit();
}

//si existe una clase con el nombre del valor en $nombre_controlador, instancia la clase con ese nombre
if(class_exists($nombre_controlador)){
    
    $controlador = new $nombre_controlador();
    
    //si existe el método con el nombre del valor que viene en get action, entonces ejecuta controlador con su método
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    //si no existe get controller ni get action, ejecuta el controller y metodo por defecto
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $action_default = action_default;
        $controlador->$action_default();
                
    }else{
        show_error();
    }
}else{
    show_error();
}

require_once 'views/layout/footer.php';