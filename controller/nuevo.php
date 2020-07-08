<?php

include_once 'model/newUser.php';

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        
    }

    function render(){
        $this->view->render('News/newUser');
    }
    
    public function registUser(){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $passhashed = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
        
        $mensaje = "";
        $this->model = new newUser();
        //LINE 27 ERROR
        if($this->model->insertUser(['nombre' => $nombre, 
                'apellido' => $apellido, 'correo' => $mail, 'pass' => $passhashed])){
                    $mensaje = "Registro exitoso";
                }else{
                    $mensaje = "Este correo ya esta registrado";
                }
        
                $this->view->mensaje = $mensaje;
                $this->render();
        
    }
}

?>