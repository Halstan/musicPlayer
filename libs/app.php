<?php

require_once 'controller/errors.php';

class App{

    function __construct(){
        //echo "<h1>Nueva App</h1>";

        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url,'/');
        $url = explode('/', $url);

        //CUANDO SE INGRESA SIN DEFINIR CONTROLADOR
        if(empty($url[0])){
            $archivoController = 'controller/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }
        
        $archivoController = 'controller/' . $url[0] . '.php';


        if(file_exists($archivoController)){

            require_once $archivoController;

            //INICIALIZA EL CONTROLADOR
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            //# DE ELEMENTOS DEL ARREGLO
            $nparam = sizeof($url);

            if($nparam>1){
                if($nparam>2){
                    $param = [];
                    for($i = 2; $i<$nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }

        }else{
            $controller = new Errors();
        }

        /*if(!file_exists($archivoController)){
            $controller = new Errors();
        }*/

        
    }
}

?>