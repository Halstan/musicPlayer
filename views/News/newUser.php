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
    <div id="message"><?php echo $this->mensaje; ?></div>

    <div id="error"></div>

    <form action="<?php echo constant('URL'); ?>newUser/registUser" method="POST" onsubmit="return validation()">
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="name">Nombre</label><br>
                <input type="text" class="form-control" name="nombre" id="name" max="30" maxlength="30" required>
            </div>

            <div class="form-group col-md-6">
                <label for="lastName">Apellido</label><br>
                <input type="text" class="form-control" name="apellido" id="lastName" max="30" maxlength="30" required>
            </div>

            <div class="form-group col-md-6">
                <label for="mail">Correo</label><br>
                <input type="text" class="form-control" name="mail" id="email" max="30" maxlength="60">
            </div>

            <div class="form-group col-md-6">
                <label for="password">Contraseña</label><br>
                <input type="password" class="form-control" name="password" id="pass" max="30" maxlength="30" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Registrarse">

    </form>
    </div>

    <script src="<?php echo constant('URL'); ?>public/js/validation.js"></script>
    <?php require 'views/footer.php'; ?>

</body>

</html>