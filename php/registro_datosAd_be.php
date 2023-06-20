<?php

  include 'conexion_be.php';

 $Nombres = $_POST['Nombres'];
 $Apellidos = $_POST['Apellidos'];
 $Numero = $_POST['Numero'];
 $Dirección = $_POST['Dirección'];
 $Ciudad = $_POST['Ciudad'];
 $Barrio = $_POST['Barrio'];
 $Fecha_de_Nacimiento = $_POST['Fecha_de_Nacimiento'];
 $Genero = $_POST['Genero'];

 $query = "INSERT INTO datos(Nombres,Apellidos,Numero,Dirección,Ciudad,Barrio, Fecha_de_Nacimiento, Genero) 
           VALUES('$Nombres','$Apellidos','$Numero','$Dirección','$Ciudad','$Barrio','$Fecha_de_Nacimiento','$Genero')";

//verificar que no se repita en la base de datos
//$verificar_cedula = mysqli_query($conexion, "SELECT * FROM usuarios where cedula='$cedula'");

/*if(mysqli_num_rows($verificar_cedula)>0){
 echo'
 <script>
   alert("Esta cedula ya esta registrada, intenta con otra diferente");
   window.location = "../index.php";
 </script>
 ';
 exit();
}*/

/*$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios where usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario)>0){
 echo'
 <script>
   alert("Este usuario ya esta registrado, intenta con otro diferente");
   window.location = "../index.php";
 </script>
 ';
 exit();
}*/

 $ejecutar = mysqli_query($conexion, $query);

 if($ejecutar){
   echo'
   <script>
     alert("se Registro Exitosamente");
     window.location = "../Bienvenida.php";
   </script>
   ';
 }else{
  echo'
  <script>
    alert("Intentalo de nuevo, registro no almacenado exitosamente");
    window.location = "../Bienvenida.php";
  </script>
  ';
 }
 mysqli_close($conexion);
?>