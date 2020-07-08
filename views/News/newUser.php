<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
</head>
<body>
    <div id="main">
    
        <h1>¡Registrate!</h1>
        <div><?php echo $this->mensaje;?></div>
        <form action="<?php echo constant('URL');?>Nuevo/registUser" method="POST">
        
        <p>
        <label for="name">Nombre</label><br>
        <input type="text" name="nombre" id="" required>
        </p>

        <p>
        <label for="lastName">Apellido</label><br>
        <input type="text" name="apellido" id="" required>
        </p>

        <p>
        <label for="mail">Correo</label><br>
        <input type="text" name="mail" id="" required>
        </p>

        <p>
        <label for="password">Contraseña</label><br>
        <input type="password" name="password" id="" required>
        </p>
        
        <input type="submit" value="Registrarse">

        </form>
    </div>

</body>
</html>