<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de audios</title>
</head>

<body>

    <?php require 'views/header.php'; ?>

    <br>
    <div id="main">

        <h1 class="center">Lista de audios</h1>
        <div id="respuesta" class="center"></div>
        <div class="table-responsive-md">
            <table class="table table-striped table-hover table-sm">

                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Url</th>
                        <th>Descripcion</th>
                        <th>Fecha de subida</th>
                        <th>Usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tbodyAudios">
                    <?php
                    include_once 'model/modelAudio/audioModel.php';
                    foreach ($this->audios as $row) {
                        $audio = new Audio();
                        $audio = $row;
                    ?>

                        <tr id="fila-<?php echo $audio->id_music ?>">
                            <td><?php echo $audio->id_music; ?></td>
                            <td><?php echo $audio->nombre; ?></td>
                            <td><?php echo "/uploads/" . $audio->url; ?></td>
                            <td><?php echo $audio->descripcion; ?></td>
                            <td><?php echo $audio->fecha_reg; ?></td>
                            <td><?php echo $audio->id_user; ?></td>

                            <td> <a href="<?php echo constant('URL') . 'consultaUser/seeUser/' . $audio->id_music; ?>">Editar</a>
                            <button class="bEliminar" data-id="<?php echo $audio->id_music ?>">Eliminar</button></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>

    <?php require 'views/footer.php'; ?>
</body>

</html>