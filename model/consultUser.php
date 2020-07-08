<?php

include_once 'userModel.php';

class consultUser extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getUsers(){
        $items = [];

        try{
            $query = $this->db->connect()->query('SELECT * FROM user');
            while($row = $query->fetch()){
                
                $item = new User();
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];
                $item->mail = $row['correo'];
                $item->password = $row['password'];

                array_push($items, $item);
            }
            return $items;

        }catch(PDOException $e){
            return [];
        }
    }
}

?>