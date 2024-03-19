<?php
require 'conexion.php';
$sql = "SELECT * FROM carrera";
$resultado = $mysqli->query($sql);
$sql2 = "SELECT nombre from circuitos";
$resultado2 = $mysqli->query($sql2);
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
    <link rel="stylesheet" href="estilos.css">


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <title>Crazy-Drivers</title>

    <header>

        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <h1 class="navbar-brand">Crazy-Drivers</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <div class="container-fluid ">
        <!-- <div class="row">
			<a class='btn btn-primary' href='registrar.php'>Registrar</a>
		</div> -->
        <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="width:100%">
            <div class="tabla alig-items-center " style="width:85%; margin: auto;">
                <h1>Proximas Carerras</h1>
                <table id="tabla" class="table table-primary " style="width:100%">
                    <thead>
                        <tr class="table-primary">
                            <th>Nombre</th>
                            <th>Fecha de la Carrera</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
    
                        while ($fila = $resultado2->fetch_assoc()) {
                            echo "<tr class='table'>";
                            echo "<td>$fila[nombre]</a></td>";
                            while ($fila2 = $resultado->fetch_assoc()) {
                                echo "<td>$fila2[fecha]</td>";
                                echo "</tr>";
                                break;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>




</body>

</html>