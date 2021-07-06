<?php
require_once 'controllers/errores.php';

class App{

    function __construct(){
        //echo "<p>Nueva app</p>";

        $url = isset($_GET['url'])? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
//redireccionamiento cuando no se ingresa ningun controller en la URL
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }
//asigna el controlador del archivo controller
        $archivoController = 'controllers/' . $url[0] . '.php';
//valida si existe ese archivo
        if(file_exists($archivoController)){
            require_once $archivoController;
            //inicializa el controlador
            $controller = new $url[0];
            //se carga el modelo
            $controller->loadModel($url[0]);

//si hay un metodo 
            if(isset($url[1])){
                $controller->{$url[1]}();// se carga el metodo que se encarga de cargar una vista
            }else{
                $controller->render();//si no hay un metodo para cargar  automaticamente carga el metodo render y que cada controlador tenga su vista
            }
        }else{//sino muestro el error definido en el controlador
            $controller = new Errores();
        }
    }
}

?>