<?php

  include 'conexion_be.php';

 $nombre_completo = $_POST['nombre_completo'];
 $cedula = $_POST['cedula'];
 $usuario = $_POST['usuario'];
 $contraseña = $_POST['contraseña'];

 $query = "INSERT INTO usuarios(nombre_completo, cedula, usuario, contraseña) 
           VALUES('$nombre_completo','$cedula','$usuario','$contraseña')";

//verificar que no se repita en la base de datos
$verificar_cedula = mysqli_query($conexion, "SELECT * FROM usuarios where cedula='$cedula'");

if(mysqli_num_rows($verificar_cedula)>0){
 echo'
 <script>
   alert("Esta cedula ya esta registrada, intenta con otra diferente");
   window.location = "../index.php";
 </script>
 ';
 exit();
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios where usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario)>0){
 echo'
 <script>
   alert("Este usuario ya esta registrado, intenta con otro diferente");
   window.location = "../index.php";
 </script>
 ';
 exit();
}

 $ejecutar = mysqli_query($conexion, $query);

 if($ejecutar){
   echo'
   <script>
     alert("se Registro Exitosamente");
     window.location = "../index.php";
   </script>
   ';
 }else{
  echo'
  <script>
    alert("Intentalo de nuevo, registro no almacenado exitosamente");
    window.location = "../index.php";
  </script>
  ';
 }
 mysqli_close($conexion);
?>