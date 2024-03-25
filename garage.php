<?php
require 'conexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM coches WHERE id_piloto=$id LIMIT 1";
$resultado = $mysqli->query($sql);
$fila = $resultado->fetch_assoc();
$sql2 = "SELECT * FROM pilotos WHERE id_piloto=$id LIMIT 1";
$resultado2 = $mysqli->query($sql2);
$fila2 = $resultado2->fetch_assoc();
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/estilos.css">


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <title>Crazy-Drivers</title>

    <header>

        <nav class="navbar navbar-expand-lg navbar bg-dark">
            <h1 class="navbar-brand">Crazy-Drivers</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acciones
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="clasificación.php">Clasificación</a>
                            <a class="dropdown-item" href="pilotos.php">Pilotos</a>

                        </div>
                    </li>
                </ul>
                <a href="index.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesion</a>
            </div>
        </nav>
    </header>

</head>

<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="width:100%">
            <h1>Bienvenido al garaje de <?php echo $fila2['Nombre']; ?></h1>
        </div>
        <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="width:100%">
            <h5>El modelo de coche que usa <?php echo $fila2['Nombre']; ?> actualmente es un <?php echo $fila['Modelo']; ?></h5>
        </div>
        <?php
        if ($id == 1) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/eleanor.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 2) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/mustanggt.png" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 3) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/crown.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 4) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/supra.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 5) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/subaru.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 6) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/corsa.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 7) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/pica.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 8) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/dodge.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 9) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/ferrari.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 10) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/blue.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 11) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/aston.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 12) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/aston2.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 13) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/cartman.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 14) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/inazuma.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 15) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/mini.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 16) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/fiat.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 17) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/seville.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 18) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/beetle.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } elseif ($id == 19) {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/civic.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        } else {
        ?>
            <div class="d-flex flex-column ">
                <img src="images/sonic.jpg" alt="grande" style="width: 50%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
            </div>
        <?php
        }



        ?>
</body>

</html>