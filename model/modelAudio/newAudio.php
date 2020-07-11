<?php

class nuevoAudio extends Model{
    
    public function __construct(){
        parent::__construct();
    }

    public function insertAudio($audio){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO music (nombre, url, descripcion, fecha_reg, id_user)
                    VALUES (:nombre, :url, :descripcion, :fecha_reg, :id_user)');

                    $query->execute(['nombre' => $audio['nombre'], 'url' => $audio['url'], 'descripcion' => ['descripcion'],
                                    'fecha_reg' => $audio['fecha_reg'], 'id_user' => $audio['id_user']]);
                                    return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>