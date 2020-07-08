<?php

class newUser extends Model{
    
    public function __construct(){
        parent::__construct();
    }

    public function insertUser($user){
        try{
            $query = $this->db->connect()->prepare('INSERT into user (nombre, apellido, correo, pass) 
            values ( :nombre, :apellido, :correo, :pass )');

            $query->execute(['nombre' => $user['nombre'], 'apellido' => $user['apellido'], 
            'correo' => $user['correo'], 'pass' => $user['pass']]);
                return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>