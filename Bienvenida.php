<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
  <script>
   alert("por favor debes iniciar sesión");
   window.location = "index.php";
  </script>
  ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de vacunas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/sh.png" alt="" class="img-fluid" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">INICIO <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link text-white" href="RegistroVacuna.php">REGISTRAR Y CONSULTAR LA INFORMACIÓN DE LAS VACUNAS</a>
                    <a class="nav-item nav-link text-white" href="Crud.php">ESQUEMATIZACIÓN</a>
                    <a class="nav-item nav-link text-white" href="php/cerrar_session.php">CERRAR SESIÓN</a>

                </div>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-6 p-5">
                <p class="text-white" style="letter-spacing: 20px"> <b>Sistema</b></p>
                <h1 class="text-right"><span class="display-3">De Vacunación </span> <br> </h1>

                <p class="row justify-content-center align-items-center mt-5">
                    <a href="mailto: jeferson.ardila@correo.tdea.edu.com" class="btn-contáctanos"><span>CONTÁCTANOS</span></a>
                </p>
            </div>

            <div class="col-sm-6">
                <img src="img/undraw_medical_research_qg4d.svg" alt="" class="img-fluid mx-auto d-block">
            </div>
        </div>

        <div class="card" style="background: white url(editables/bg-verde.png) bottom right no-repeat;">

            <div class="row justify-content-center align-items-center">

                <div class="col-sm-7 border-right">

                    <div class="p-5">

                        <h2 class="text-center">BIENVENIDOS</h2>
                        <p class="text-justify">Para saber mas de ti te invitamos a que nos brindes la siguiente información.</p>
                        <h3>DATOS ADICIONALES</h3>

                        <form action="php/registro_datosAd_be.php" method="POST">

                            <div class="row form-group">

                                <div class="col-sm-6">

                                    <input type="text" class="form-control" placeholder="Nombres" name="Nombres" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Apellidos" name="Apellidos" required>
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Numero" name="Numero" required>
                                </div>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Dirección" name="Dirección" required> <br>
                                </div>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Ciudad" name="Ciudad" required> <br>
                                </div>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Barrio" name="Barrio" required> <br>
                                </div>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Fecha de Nacimiento" name="Fecha_de_Nacimiento" required>
                                </div>

                                <div class="col-sm-6">
                                    <select class="form-control" typename="text" name="Genero">
                                        <option selected>Seleccione el genero</option>
                                        <option value="Maculino" placeholder="pfizer">Maculino</option>
                                        <option value="Femenino">Femenino</option>

                                    </select>
                                    <br>
                                </div>
                            </div>


                            <input type="submit" class="btn-enviar" value="ENVIAR">

                        </form>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img src="img/undraw_online_ad_re_ol62.svg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
        <!-- PLATOS -->
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="card border-0 shadow-lg text-center bg-gradiente text-white">
                    <img src="img/vacunacionCorreo.png" alt="" class="card-img-top">
                    <div class="card-body row justify-content-center align-items-center">
                        <h4 class="text-white">¡VACÚNATE!</h4>


                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-0 shadow-lg text-center bg-gradiente text-white">
                    <img src="img/vacunacion5correo.png" alt="" class="card-img-top">
                    <div class="card-body row justify-content-center align-items-center">
                        <h4 class="text-white">PROTÉGETE</h4>
                        <p>Protégete, protege a tus pacientes y cuida tu salud y la de tu familia ¡Vacúnate!</p>

                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-0 shadow-lg text-center bg-gradiente text-white">
                    <img src="img/imageness.jpg" alt="" class="card-img-top">
                    <div class="card-body row justify-content-center align-items-center">
                        <h4 class="text-white"></h4>
                        <p>¿Sabías que la seguridad es una prioridad máxima en el desarrollo de las vacunas contra el COVID19?</p>

                    </div>

                </div>
            </div>
        </div>

        <!-- PLATOS FIN -->
        <!-- MAP -->
        <div class="col-12 p-0 mt-5 mb-5">
            <div class="card">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8767753070783!2d-75.58538228523062!3d6.279926595454717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429257a521c2d%3A0x4dd5139f80084ad!2sTecnol%C3%B3gico%20de%20Antioquia!5e0!3m2!1ses!2sco!4v1653202266305!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
        <!-- MAP FIN -->

        <center>
            <div class="col-12">
                <H2>
                    <p style="color:#F3F7F8" ;>Ministerio de salud <br>
                        882312112 <br>
                        esquemvacunas@email.com</p>
                </H2>
            </div>
        </center>

        <div class="col-12">
            <img src="img/undraw_medicine_b-1-ol.svg" alt="" class="img-fluid mx-auto d-block">
        </div>








    </div>

</body>

</html>