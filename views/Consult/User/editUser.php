<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/main.css">
    <title>Detalle de: <?php echo $this->user->nombre . ' ' . $this->user->apellido ?></title>
</head>

<body>

<br>
    <?php require 'views/header.php'; ?>

    <h1>Detalle de: <?php echo $this->user->nombre . ' ' . $this->user->apellido ?></h1>
    <div><?php echo $this->mensaje; ?></div>

    <form action="<?php echo constant('URL'); ?>consultaUser/updateUser" method="POST">


        <input type="hidden" name="id" id="" value="<?php echo $this->user->id ?>">

        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="name">Nombre</label><br>
                <input type="text" name="nombre" class="form-control" id="" required value="<?php echo $this->user->nombre ?>">
            </div>

            <div class="form-group col-md-6">
                <label for="lastName">Apellido</label><br>
                <input type="text" name="apellido" class="form-control" id="" required value="<?php echo $this->user->apellido ?>">
            </div>

            <div class="form-group col-md-6">
                <label for="mail">Correo</label><br>
                <input type="text" name="mail" class="form-control" id="" required value="<?php echo $this->user->mail ?>">
            </div>

            <div class="form-group col-md-6">
                <label for="password">Contraseña</label><br>
                <input type="password" class="form-control" name="password" id="" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Actualizar usuario">

    </form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>

</html>