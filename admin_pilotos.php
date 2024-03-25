<?php
require 'conexion.php';
$sql = "SELECT * FROM pilotos";
$resultado = $mysqli->query($sql);
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
        <nav class="navbar navbar-expand-lg navbar navbar-negro">
            <h1 class="navbar-brand">Crazy-Drivers</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="panel_de_control.php">Inicio <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acciones
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="clasificación.php">Clasificación</a>
                            <a class="dropdown-item" href="admin_pilotos.php">Administrar pilotos</a>
                            <a class="dropdown-item" href="carrera.php">Carrera</a>
                        </div>
                    </li>
                </ul>
                <a href="index.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesion</a>
            </div>
        </nav>
    </header>

</head>

<body>

    <div class="container-fluid ">
        <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center"
            style="width:100%">

            <div class="tabla alig-items-center " style="width:85%; margin: auto;">
                <h1
                    class="titulo1 d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                    Pilotos</h1>
                <table id="tabla" class="table table-primary " style="width:100%">
                    <thead>
                        <tr class="table-primary">
                            <th>Nombre</th>
                            <th>Banda</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        while ($fila = $resultado->fetch_assoc()) {
                            echo "<tr class='table'>";
                            echo "<td><a href='garage.php?id=$fila[id_piloto]' class='link'>$fila[Nombre]</a></td>";
                            echo "<td>$fila[Equipo]</td>";
                            echo "<td><a class='btn btn-danger' href='eliminar.php?id=$fila[id_piloto]'>Eliminar</a></td>";
                            echo "<td><a class='btn btn-warning'href='modificar_piloto.php?id=$fila[id_piloto]'>Modificar piloto</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
               
            </div>
        </div>



    </div>
    <footer class="bg-dark text-white py-3 footer">
        <div class="container">
            <div class="row">
                <ul class="list-inline text-md-center">
                    <li class="list-inline-item"><a href="#">Política de privacidad</a></li>
                    <li class="list-inline-item"><a href="#">Términos y condiciones</a></li>
                </ul>

            </div>
        </div>
    </footer>



</body>

</html>