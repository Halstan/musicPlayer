<?php

include_once 'audioModel.php';

class consultAudio extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getAudios(){
        $items = [];

        try{
            $query = $this->db->connect()->query("SELECT * FROM music");
            while($row = $query->fetch()){

                $item = new Audio();
                $item->id_music = $row['id_music'];
                $item->nombre = $row['nombre'];
                $item->url = $row['url'];
                $item->descripcion = $row['descripcion'];
                $item->fecha_reg = $row['fecha_reg'];
                $item->id_user = $row['id_user'];

                array_push($items, $item);
            }
            
            return $items;
        }catch(PDOException $e){
            return [];
        }

    }

    public function getAudioId($id){
        $item = new Audio();

        $query = $this->db->connect()->prepare("SELECT * FROM music WHERE id_music = :id");

        try{
            $query -> execute(['id' => $id]);
            
            while($row = $query->fetch()){
                $item->id_music = $row['id_music'];
                $item->nombre = $row['nombre'];
                $item->url = $row['url'];
                $item->descripcion = $row['descripcion'];
                $item->fecha_reg = $row['fecha_reg'];
                $item->id_user = $row['id_user'];
            }

            return $item;
        }catch(PDOException $e){
            return null;
        }
    }
}

?>