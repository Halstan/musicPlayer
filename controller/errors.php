<?php

class Errors extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la solicitud";
        $this->view->render('Error/index');
        //echo "<p>Error al cargar el recurso</p>";
        
    }
}

?>