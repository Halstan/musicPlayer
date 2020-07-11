<?php

class Errors extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la solicitud";
        $this->view->render('Errors/404');
        //echo "<p>Error al cargar el recurso</p>";
        
    }
}

?>