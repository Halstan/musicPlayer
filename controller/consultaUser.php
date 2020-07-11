<?php

include_once 'model/modelUser/consultUser.php';

//REFERENCE IN views/listUsers
class consultaUser extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->users = [];
    }

    function getModel(){
        $this->model = new consultUser();
    }

    function render(){
        $this->getModel();
        $users = $this->model->getUsers();
        $this->view->users = $users;
        $this->view->render('Consult/User/listUsers');
    }

    function seeUser($param){
        $this->getModel();
        $idUser = $param[0];
        $user = $this->model->getById($idUser);

        session_start();
        $_SESSION['idSeeUser'] = $user->id;

        $this->view->user = $user;
        $this->view->mensaje = "";
        $this->view->render('Consult/User/editUser');
    }

    function updateUser(){
        $this->getModel();

        session_start();

        $id = $_SESSION['idSeeUser'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $passhashed = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);

        unset($_SESSION['idSeeUser']);

        if($this->model->updateUser(['id' => $id,'nombre' => $nombre, 'apellido' => $apellido, 'correo' => $mail, 'pass' => $passhashed])){
            $user = new User();

            $this->id = $id;
            $this->name = $nombre;
            $this->apellido = $apellido;
            $this->mail = $mail;
            $this->password = $passhashed;

            $this->view->alumno = $user;
            $this->view->mensaje = "Usuario actualizado correctamente";
        }else{
            $this->view->mensaje = "Error al actualizar usuario";
        }
        $this->render();
    }

    function deleteUser($param = null){
        $this->getModel();
        $id = $param[0];

        if($this->model->deleteUser($id)){
            $mensaje = "Usuario eliminado correctamente";
        }else{
            $mensaje = "Error al eliminar usuario";
        }

        echo $mensaje;
    }
}

?>