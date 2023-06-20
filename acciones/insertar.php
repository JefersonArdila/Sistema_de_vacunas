<?php
include "../config/bd.php";

$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$email=$_POST['email'];
$numero_dosis=$_POST['numero_dosis'];
$nombre_vacuna=$_POST['nombre_vacuna'];
$foto_paciente=$_FILES['foto_paciente'];

$foto_paciente=addslashes(file_get_contents($foto_paciente['tmp_name']));

$query=insertar($nombre,$cedula,$email,$numero_dosis,$nombre_vacuna,$foto_paciente);

header('location:../Crud.php');