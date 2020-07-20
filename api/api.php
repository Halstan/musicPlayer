<?php

    require_once '../model/modelAudio/consultaAudioApi.php';

    if(isset($_GET['action']) && isset($_GET['page'])){
        $audios = new consultAudio();

        $page = (int)$_GET['page'];
        $data = $audios->getDataAudio($page);
        echo json_encode($data);
    }

?>