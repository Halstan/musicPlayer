<?php

include_once 'model/consultUser.php';

class consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->users = [];
    }

    /*function getModel(){
        $this->model = new consultUser();
    }*/

    function render(){
        //$this->getModel();
        $this->model = new consultUser();
        $users = $this->model->getUsers();
        $this->view->users = $users;
        $this->view->render('Consult/listUsers');
    }
}

?>