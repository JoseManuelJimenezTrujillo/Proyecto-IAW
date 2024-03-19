<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnasio No + Panza</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="images/icono.png">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <title>Gimnasio No+Panza</title>



</head>

<body>
    <?php
    require 'conexion.php';
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $sql = "SELECT * FROM usuarios where usuario='$usuario'";
    $resultado = $mysqli->query($sql);
    $fila = $resultado->fetch_assoc();
    if ($fila) {
        echo "<p class='alert alert-danger'>Ha habido un error. Usuario ya existente</p>";
        echo "<p><a href='index.php' class='btn btn-primary'>Prueba a iniciar sesión</a></p>";
    } else {
        //se prepara y ejecuta la sentencia
        $sql2 = "INSERT INTO usuarios (usuario,contraseña) VALUES ('$usuario','$contraseña')";

        $resultado2 = $mysqli->query($sql2);

        if ($resultado2 > 0) {
            echo "<p class='alert alert-primary'>Sesión agregada</p>";
        } else {
            echo "<p class='alert alert-danger'>Ha habido un error</p>";
        }
        echo "<p><a href='index.php' class='btn btn-primary'>Volver</a></p>";
    }
    ?>
</body>

</html>