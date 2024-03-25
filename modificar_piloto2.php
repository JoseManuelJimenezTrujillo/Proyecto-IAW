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
    <?php
    //ESTABLEZCO CONEXION
    require 'conexion.php';

    //obtengo los datos introducidos en el formulario anterior
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $banda = $_POST['banda'];

    //se prepara la sentencia sql
    $sql = "UPDATE pilotos SET Nombre='$nombre', Equipo='$banda' WHERE id_piloto=$id";
    //se ejecuta la sentencia y se gurada el resultado en resultado
    $resultado = $mysqli->query($sql);

    if ($resultado > 0) {
        header("location: panel_de_control.php");
    } else {
        echo "<p class='alert alert-danger'>Ha habido un error</p>";
    }
    echo "<p><a class='btn btn-primary' href='index.php'>Regresar</a></p>";


    ?>

</body>

</html>