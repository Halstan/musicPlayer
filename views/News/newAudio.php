<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Nuevo Audio</title>
</head>
<body>

    <?php require 'views/header.php'; ?>
    <br>
    <h1>Subir audio</h1>
    <div id="message"><?php echo $this->mensaje; ?></div>

    <form action="<?php echo constant('URL'); ?>newAudio/registAudio" method="POST" enctype="multipart/form-data">
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="name">Nombre</label><br>
                <input type="text" class="form-control" name="nombre" id="" required>
            </div>

            <div class="form-group col-md-6">
                <label for="lastName">Sube tu audio</label><br>
                <input type="file" class="form-control" name="url" id="" required>
            </div>

            <div class="form-group col-md-6">
                <label for="mail">Descripcion</label><br>
                <input type="text" class="form-control" name="descripcion" id="" required>
            </div>

            <div class="form-group col-md-6">
                <label for="password">Usuario</label><br>
                <input type="text" class="form-control" name="id_user" id="" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Registrarse">

    </form>
    </div>

    <?php require 'views/footer.php'; ?>

</body>

</html>