<?php

require_once '../libs/database.php';

class consultAudio extends Database{

    function __construct(){
    }

    function getDataAudio($section){
        $query = $this->connect()->prepare('SELECT * FROM music limit :section, 2');

        $query->execute(['section' => $section]);

        $resul = [];
        $items = [];
        $n = $query->rowCount();

        if ($n) {
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $item = Array(
                    'id_music' => $row['id_music'],
                    'nombre' => $row['nombre'],
                    'url' => $row['url'],
                    'descripcion' => $row['descripcion'],
                    'fecha_reg' => $row['fecha_reg'],
                    'id_user' => $row['id_user']
                );

                array_push($items, $item);
            }

            array_push($resul, array('response' => 200));
            array_push($resul, $items);
            array_push($resul, array('page' => ($section + $n)));
            return $resul;
        } else {
            array_push($res, array('response' => "400"));
            return $resul;
        }
    }
}
