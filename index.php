
<?php

//$_GET = DATOS ATRAVES DE LA URL.
//$_POST = ENVIAR DATOS DE MANERA OCULTA.
//$_REQUEST = ADMINISTRA TODOS LOS TIPOS DE PETICIONES.

/**
 * isset () = Valida si la variable existe y ademas si el valor no es null.
 * Estas lineas se remplazan con le if ternario.
 */
//$controller = '';
//if(isset($_GET['controller'])){
//    $controller = $_GET['controller'];
//}else{
//    $controller = 'index';
//}

session_start();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';

/**
 * include = Importar el archivo y si el archivo no existe continua el flujo de ejecucion.
 * require = Importar el archivo y si el archivo no existe para el flujo de ejecuion.
 * include_once =
 * require_once =
 */

/*Descomentar
spl_autoload_register(function($class){
    if(file_exists("controllers/{$class}.php")){
        require_once "controllers/{$class}.php";
    }else if(file_exists("models/{$class}.php")){
        require_once "models/{$class}.php";
    }else{
        die('The file no exists.');
    }
});*/

require_once "models/Database.php";
require_once "models/Publication.php";
require_once "models/Security.php";
require_once "models/User.php";

require_once "controllers/indexController.php";
require_once "controllers/publiController.php";
require_once "controllers/userController.php";
require_once "controllers/securityController.php";
require_once "controllers/adminController.php";
require_once "controllers/teacherController.php";

$controller = "{$controller}Controller";
$controller = new $controller();
call_user_func([$controller, $method]);

/**
 * Maneras de concatenar variables.
 */
//$controller .= "Controller";
//$controller = $controller . "Controller";
//var_dump("{$controller}Controller");
