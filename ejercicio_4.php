
<?php
    if($_POST) {
        $txtNombre = $_POST['nombre'];
        $txtApellido = $_POST['apellido'];
        echo "Hola ".$txtNombre." ".$txtApellido;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Cuando se le agrega el action, es para enviar a un dirección -->
    <form action="ejercicio_4.php" method="post">
        Nombre:
        <input type="text" name="nombre" id="">
        <br/>
        apellido:
        <input type="text" name="apellido" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>