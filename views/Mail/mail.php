<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
</head>

<body>

    <?php require 'views/header.php'; ?>
    <br>
    <h1>¡Contactame!</h1>
    <div id="message"><?php echo $this->mensaje; ?></div>
    <form action="<?php echo constant('URL'); ?>send/sendMail" method="POST">
        <label for="name">Nombre: <input type="text" name="name" id="name" class="form-control"></label><br><br>

        <label for="email">Correo: <input type="email" name="email" id="email" class="form-control"></label><br><br>

        <label for="message">Mensaje: <textarea name="message" id="message" rows="8" cols="20" class="form-control"></textarea></label><br><br>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>

    <?php require 'views/footer.php'; ?>

</body>

</html>