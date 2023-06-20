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
    <title>Esquema <?= $nombre ?></title>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ver.css">
</head>

<body>
    <div class="container">
        <div class="bg-light w-50 m-auto p-3">
            <div class="bg-primary p-2">
                <a class="btn btn-warning btn-sm" href="Crud.php">Inicio</a>
                <a class="btn btn-secondary btn-sm" href="editar.php?id=<?php echo $id ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="acciones/eliminar.php?id=<?php echo $id ?>">Eliminar</a>
            </div>
            <h3 class="text-center"><?= $nombre ?></h3>
            <p><strong>cedula : </strong> <?= $cedula ?></p>
            <p><strong>email : </strong> <?= $email ?></p>
            <p><strong>numero de dosis : </strong> <?= $numero_dosis ?></p>
            <p><strong>nombre de la vacuna : </strong> <?= $nombre_vacuna ?></p>
            <center><img class="w-50" src="data:image/jpg;base64,<?= base64_encode($foto_paciente) ?>" alt=""></center>

        </div>
    </div>
</body>

</html>