<?php

session_start();
include 'conexion_be.php';

$cedula = $_POST['cedula'];
$contraseña = $_POST['contraseña'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula='$cedula' and contraseña='$contraseña'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $cedula;
  header("location: ../bienvenida.php");
  exit;

}else{
    echo'
    <script>
   alert("usuario no existe, por favor verifique los datos introducidos son correctos");
   window.location = "../index.php";
    </script>
    ';
    exit;
}


?>