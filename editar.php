<?php
$id = $_GET['id'];
include "config/bd.php";
$datos = ListarunPaciente($id);
$nombre = $datos['nombre'];
$cedula = $datos['cedula'];
$email = $datos['email'];
$numero_dosis = $datos['numero_dosis'];
$nombre_vacuna = $datos['nombre_vacuna'];
$foto_paciente = $datos['foto_paciente'];



?>

<!doctype html>
<html lang="en">

<head>
    <title>EDITAR</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/editar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <div class="conatiner">
        <div class="w-50 bg-light p-3 m-auto">
            <form action="acciones/actualizar.php" method="POST" enctype="multipart/form-data">
                <a class="btn btn-warning btn-sm mt-2" href="Crud.php">Volver</a>

                <br>
                <input type="hidden" name="id" value="<?= $id ?>">
                <h3 class="text-center"><?= $nombre ?></h3>

                <label>Nombre del paciente</label>
                <input class="form-control" type="text" name="nombre" value="<?= $nombre ?>">

                <label>Cedula del paciente</label>
                <input class="form-control" type="text" name="cedula" value="<?= $cedula ?>">

                <label>email del paciente</label>
                <input class="form-control" type="email" name="email" value="<?= $email ?>">

                <label>Numero de dosis</label>
                <input class="form-control" type="text" name="numero_dosis" value="<?= $numero_dosis ?>">

                <br>

                <select class="form-control" typename="text" name="nombre_vacuna" value="<?= $nombre_vacuna ?>">
                    <option selected><?= $nombre_vacuna ?></option>
                    <option value="Pfizer" placeholder="pfizer">Pfizer</option>
                    <option value="Moderna">Moderna</option>
                    <option value="Janssen de Johnson & Johnson">Janssen de Johnson & Johnson</option>
                    <option value="AstraZeneca">AstraZeneca</option>
                    <option value="Sinovac">Sinovac</option>
                </select>
                <br>

                <!-- <label>Nombre de la vacuna</label>
                <input class="form-control" type="text" name="nombre_vacuna" value="<?= $nombre_vacuna ?>"> -->

                <label>foto del paciente</label>
                <input class="form-control" type="file" name="foto_paciente">
                <center><img class="mt-2 w-50" src="data:image/jpg;base64,<?= base64_encode($foto_paciente) ?>"></center>
                <center><button class="btn btn-primary mt-2" type="submit">Actualizar</button>


            </form>
        </div>
    </div>
</body>

</html>