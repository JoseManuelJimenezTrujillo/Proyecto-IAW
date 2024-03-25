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
                        <a class="nav-link" href="panel_de_control.php">Inicio <span class="sr-only">(current)</span></a>
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
        <!-- <div class="row">
            <a class='btn btn-primary' href='registrar.php'>Registrar</a>
        </div> -->
        <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center"
            style="width:100%">
            <div class="tabla alig-items-center " style="width:85%; margin: auto;">

                <h1
                    class="titulo1 d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                    Proximas Carerras</h1>
                <table id="tabla" class="table table-primary" style="width:100%">
                    <thead>
                        <tr class="table-primary">
                            <th>Nombre</th>
                            <th>Fecha de la Carrera</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        while ($fila = $resultado2->fetch_assoc()) {
                            echo "<tr class='table'>";
                            echo "<td>$fila[nombre]</a></td>";
                            while ($fila2 = $resultado->fetch_assoc()) {
                                echo "<td>$fila2[fecha]</td>";
                                echo "<td><a class='btn btn-danger' href='eliminar.php?id=$fila2[id_circuito]'>Eliminar</a></td>";
                                echo "<td><a class='btn btn-warning'href='modificar.php?id=$fila2[id_circuito]'>Modificar </a></td>";
                                echo "</tr>";
                                break;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <section class="py-3">
            <div class="col">
                <header class="">
                    <div class="container text-center">
                        <h2>Noticias</h2>
                    </div>
                </header>
            </div>

        </section>


        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Empieza la temporada de carreras</h4>
                                <p class="card-text">
                                    Es tiempo de preparación, de afinar motores y pulir estrategias. La pretemporada de
                                    carreras ha llegado, un período crucial donde los equipos y pilotos se sumergen en
                                    un frenesí de trabajo, buscando alcanzar la perfección antes de que las luces del
                                    semáforo se pongan en verde.</p><br>
                                <p class="card-text">En los talleres, los mecánicos trabajan sin descanso, afinando cada
                                    detalle de los potentes bólidos que pronto surcarán los circuitos más exigentes del
                                    mundo. Cada tornillo, cada componente, es examinado con precisión quirúrgica para
                                    asegurar un rendimiento óptimo en la pista.

                                    Los pilotos, por su parte, se someten a rigurosos programas de entrenamiento físico
                                    y mental. Desde sesiones intensivas en simuladores hasta pruebas de resistencia y
                                    concentración, están decididos a alcanzar su máximo nivel de forma para enfrentar
                                    los desafíos que les esperan.</p>
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">


                                <h4 class="card-title">Se une un nuevo competidor</h4>
                                <p class="card-text">La emoción está en el aire mientras el mundo de las carreras recibe
                                    a un nuevo competidor. Con paso firme y determinación en la mirada, este recién
                                    llegado irrumpe en el escenario, listo para desafiar a los titanes que dominan las
                                    pistas.</p>
                                <p class="card-text">Desde los talleres hasta los paddocks, el rumor se propaga
                                    rápidamente: hay un nuevo contendiente en la arena. Los equipos rivales observan con
                                    curiosidad, evaluando su potencial y anticipando cómo podría alterar el equilibrio
                                    de poder en la competición. Para el nuevo competidor, cada vuelta es una oportunidad
                                    para demostrar su valía,para dejar una marca indeleble en el asfalto y en la mente
                                    de sus adversarios.Con un enfoque implacable y una sed insaciable de victoria, se
                                    prepara para desafiar las probabilidades y conquistar el respeto de sus pares.Los
                                    aficionados también están cautivados por la llegada de este nuevo talento. Con
                                    expectativas elevadas y corazones rebosantes de esperanza, observan con atención
                                    cada movimiento, ansiosos por presenciar la evolución de este intrépido aspirante.
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="py-5 bg-dark">
            <a name="trabajos" id="trabajos"></a>
            <div class="col">
                <header class="">
                    <div class="container text-center">
                        <h2>Patrocinadores</h2>
                        <br>
                    </div>
                </header>
            </div>


            <div class="container overflow-hidden">
                <div class="row gy-3 justify-content-center">
                    <div class="col-md-4 col-sm-6 d-flex align-items-strech">
                        <div class="card cardpatro">

                            <a href="https://www.elpozo.com" target="_blank"><img src="images/elpozo.jpg"
                                    class="img-thumbnail" alt="ElPozo"></a>

                            <div class="card-body">
                                <h4 class="card-title">ElPozo</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex align-items-strech">
                        <div class="card cardpatro">
                            <a href="https://www.mercedes-benz.es/passengercars/models.html?group=all&subgroup=all.saloon&view=BODYTYPE"
                                target="_blank"><img src="images/mercedes.jpg" class="img-thumbnail" alt="Mercedes"></a>

                            <div class="card-body">
                                <h4 class="card-title">Mercedes</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex align-items-strech">
                        <div class="card cardpatro">

                            <a href="https://www.tesla.com/es_es" target="_blank"><img src="images/tesla.jpg"
                                    class="img-thumbnail" alt="Tesla"></a>

                            <div class="card-body">
                                <h4 class="card-title">Tesla</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex align-items-strech">
                        <div class="card cardpatro">

                            <a href="https://www.finetwork.com" target="_blank"><img src="images/finet.jpg"
                                    class="img-thumbnail" alt="Finetwork"></a>

                            <div class="card-body">
                                <h4 class="card-title">Finetwork</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex align-items-strech">
                        <div class="card cardpatro">

                            <a href="https://www.riotgames.com/es" target="_blank"><img src="images/riot.jpg"
                                    class="img-thumbnail" alt="adivina" id="Riot"></a>

                            <div class="card-body">
                                <h4 class="card-title">Riot</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <a name="contacto" id="contacto"></a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <h2 class=" d-flex justify-content-center">Contáctanos</h2>
                        <form class="d-grid gap-3">
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Ingresa tu correo electrónico">
                                <br>
                                <textarea rows="5" cols="148"></textarea><br>
                            </div>
                            <button type="submit" class="btn btn-dark boton">Enviar</button>
                        </form>
                    </div>

        </section>


        <footer class="bg-dark text-white py-3">
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