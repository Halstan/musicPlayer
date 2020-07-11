<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Nuevo Usuario</title>
</head>

<body>


    <?php require 'views/header.php'; ?>

    <h1>¡Registrate!</h1>
    <div><?php echo $this->mensaje; ?></div>

    <form action="<?php echo constant('URL'); ?>newUser/registUser" method="POST">
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="name">Nombre</label><br>
                <input type="text" class="form-control" name="nombre" id="" required>
            </div>

            <div class="form-group col-md-6">
                <label for="lastName">Apellido</label><br>
                <input type="text" class="form-control" name="apellido" id="" required>
            </div>

            <div class="form-group col-md-6">
                <label for="mail">Correo</label><br>
                <input type="text" class="form-control" name="mail" id="" required>
            </div>

            <div class="form-group col-md-6">
                <label for="password">Contraseña</label><br>
                <input type="password" class="form-control" name="password" id="" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Registrarse">

    </form>
    </div>

    <?php require 'views/footer.php'; ?>

</body>

</html>