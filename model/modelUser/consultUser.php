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
                $item->password = $row['pass'];
                $item->fecha_reg = $row['fecha_reg'];

                array_push($items, $item);
            }
            return $items;

        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new User();

        $query = $this->db->connect()->prepare("SELECT * FROM user WHERE id = :id");

        try{
            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];
                $item->mail = $row['correo'];
                $item->fecha_reg = $row['fecha_reg'];
            }

            return $item;
        }catch(PDOException $e){
            return null;
        }
    }

    public function updateUser($item){

        $query = $this->db->connect()->prepare("UPDATE user set nombre = :nombre, apellido = :apellido, correo = :correo, pass = :pass where id = :id");

        try{
            $query->execute(['id'=> $item['id'],
            'nombre'=> $item['nombre'],
            'apellido'=> $item['apellido'],
            'correo'=> $item['correo'],
            'pass'=> $item['pass']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }

    }

    public function deleteUser($id){
        $query = $this->db->connect()->prepare('DELETE FROM user WHERE id = :id');

        try{
            $query->execute(['id' => $id]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>