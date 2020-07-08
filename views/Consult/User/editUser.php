<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de: <?php echo $this->user->nombre.' '.$this->user->apellido?></title>
</head>
<body>
    <div id="main">
    
        <h1>Detalle de: <?php echo $this->user->nombre.' '.$this->user->apellido?></h1>
        <div><?php echo $this->mensaje;?></div>
        <form action="<?php echo constant('URL');?>consultaUser/updateUser" method="POST">
               
        <input type="hidden" name="id" id="" value="<?php echo $this->user->id?>">

        <p>
        <label for="name">Nombre</label><br>
        <input type="text" name="nombre" id="" required value="<?php echo $this->user->nombre?>">
        </p>

        <p>
        <label for="lastName">Apellido</label><br>
        <input type="text" name="apellido" id="" required value="<?php echo $this->user->apellido?>">
        </p>

        <p>
        <label for="mail">Correo</label><br>
        <input type="text" name="mail" id="" required value="<?php echo $this->user->mail?>">
        </p>

        <p>
        <label for="password">Contraseña</label><br>
        <input type="password" name="password" id="" required >
        </p>
        
        <input type="submit" value="Actualizar usuario">

        </form>
    </div>

</body>
</html>