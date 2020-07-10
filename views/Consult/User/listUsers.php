<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div id="main">

        <h1 class="center">Lista de usuarios</h1>
        <div id="respuesta" class="center"></div>
        <table>

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody id="tbodyUsers">
                <?php
                include_once 'model/userModel.php';
                foreach ($this->users as $row) {
                    $user = new User();
                    $user = $row;
                ?>

                    <tr id="fila-<?php echo $user->id ?>">
                        <td><?php echo $user->id; ?></td>
                        <td><?php echo $user->nombre; ?></td>
                        <td><?php echo $user->apellido; ?></td>
                        <td><?php echo $user->mail; ?></td>

                        <td> <a href="<?php echo constant('URL') . 'consultaUser/seeUser/' . $user->id; ?>">Editar</a> </td>
                        <td><button class="bEliminar" data-id="<?php echo $user->id ?>">Eliminar</button></td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>

    <script src="public/js/main.js"></script>
    <?php require 'views/footer.php'; ?>

</body>

</html>