<?php

include_once 'model/modelAudio/newAudio.php';

class newAudio extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render()
    {
        $this->view->render('News/newAudio');
    }

    public function registAudio()
    {
        $nombre = $_POST['nombre'];
        $url = reset($_FILES['url']);
        $descripcion = $_POST['descripcion'];
        $id_user = $_POST['id_user'];

        $dir = "uploads/";

        $archivo = $dir . basename($_FILES['url']["name"]);

        //echo $archivo;

        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

        //VALIDANDO EL TAMAÑO DEL ARCHIVO
        $size = $_FILES['url']["size"];
        if ($size > 5000000) {
        } else {
            //VALIDAR EL TIPO DE IMAGEN
            if ($tipoArchivo == "mp3" || $tipoArchivo == "MP3" || $tipoArchivo == "wav" || $tipoArchivo == "flac") {
                //SE VALIDO EL ARCHIVO CORRECTAMENTE
                if (move_uploaded_file($_FILES['url']["tmp_name"], $archivo)) {
                    //echo "El archivo se subio correctamente";
                } else {
                    //echo "Error al subir archivo";
                }
            } else {
                //echo "Solo se admiten archivo png";
            }
        }

        $mensaje = "";
        $this->model = new nuevoAudio();

        if ($this->model->insertAudio(['nombre' => $nombre, 'url' => $url, 'descripcion' => $descripcion, 'id_user' => $id_user])) {
            $mensaje = "Audio guardado exitosamente";
        } else {
            $mensaje = "Error al guardar audio";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}
