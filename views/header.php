<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/main.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTHg5U7C_WdIMKqcNfKiWyAxrfuJ70_T9vWlA&usqp=CAU">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light">
        <a class="navbar-brand" href="<?php echo constant('URL'); ?>main">tAudio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo constant('URL'); ?>main">Inicio</a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nuevo</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!--HACE REFERENCIA A LA CLASE NO AL ARCHIVO-->
                        <a class="nav-link" href="<?php echo constant('URL'); ?>newUser">Nuevo usuario</a>
                        <div class="dropdown-divider"></div>
                        <a class="nav-link" href="<?php echo constant('URL'); ?>newAudio">Nuevo audio</a>
                    </div>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Consulta</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo constant('URL'); ?>consultaUser">Lista de usuarios</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo constant('URL'); ?>consultaAudio/api">Lista de audios</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo constant('URL'); ?>ayuda">Ayuda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo constant('URL'); ?>send">Contactame</a>
                </li>
            </ul>
        </div>
    </nav>

    

</body>

</html>