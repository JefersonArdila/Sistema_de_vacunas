<?php
#capturar los datos formulario

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$email=$_POST['email'];
$numero_dosis=$_POST['numero_dosis'];
$nombre_vacuna=$_POST['nombre_vacuna'];
$foto_paciente=$_FILES['foto_paciente'];
include "../config/bd.php";
if($foto_paciente['size']==0){
    $query=actualizarSinFoto($id,$nombre,$cedula,$email,$numero_dosis,$nombre_vacuna);
}else{
    $foto_paciente=addslashes(file_get_contents($foto_paciente['tmp_name']));
    $query=actualizar($id,$nombre,$cedula,$email,$numero_dosis,$nombre_vacuna,$foto_paciente);
}

header("location:../editar.php?id=$id")

?>