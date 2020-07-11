<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php constant('URL')?>public/css/error.css">
    <title>Error</title>
</head>

<body>
    <h1>Error 404</h1>
    <h3>Creo que te extraviaste amigo :o</h3>
    <h4>Da clic a este boton para volver al inicio</h4>

    <div>
        <a href="<?php echo constant('URL'); ?>main" class="btn btn-danger">Regresar al inicio</a>
    </div><br><br>
    <?php require 'views/footer.php'; ?>
</body>

</html>