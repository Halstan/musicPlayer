<?php

include_once 'model/modelAudio/consultAudio.php';

class consultaAudio extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->audios = [];
        
    }

    function getModel(){
        $this->model = new consultAudio();
    }

    function render(){
        $this->getModel();
        $audios = $this->model->getAudios();
        $this->view->audios = $audios;
        $this->view->render('Consult/Audio/listAudio');
    }

    function api(){
        $this->view->render('Scroll/scroll');
    }
}

?>