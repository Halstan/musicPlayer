<?php

class nuevoAudio extends Model{
    
    public function __construct(){
        parent::__construct();
    }

    public function insertAudio($audio){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO music (nombre, url, descripcion, id_user)
                    VALUES (:nombre, :url, :descripcion, :id_user)');

                    $query->execute(['nombre' => $audio['nombre'], 'url' => $audio['url'], 'descripcion' => $audio['descripcion'],
                                     'id_user' => $audio['id_user']]);
                                    return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>