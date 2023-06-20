<?php

  include 'conexion_be.php';

 $Tipo_de_Vacuna = $_POST['Tipo_de_Vacuna'];
 $Lugar_de_Vacunación = $_POST['Lugar_de_Vacunación'];
 $Descripción_de_Vacuna = $_POST['Descripción_de_Vacuna'];
 $Sintomas_Comunes = $_POST['Sintomas_Comunes'];
 $Fecha_Hora = $_POST['Fecha_Hora'];
 

 $query = "INSERT INTO vacunas(Tipo_de_Vacuna,Lugar_de_Vacunación,Descripción_de_Vacuna,Sintomas_Comunes,Fecha_Hora) 
           VALUES('$Tipo_de_Vacuna','$Lugar_de_Vacunación','$Descripción_de_Vacuna','$Sintomas_Comunes','$Fecha_Hora')";


if(isset($_POST[btnConsultar])){

    include 'conexion_be.php';
    $resultado= mysqli_query($conexion,"SELECT*FROM vacunas");
    $Tipo_de_Vacuna = $_POST['Tipo_de_Vacuna'];
 while($Consulta = mysqli_fetch_array($resultado)){
     echo $Consulta['Tipo_de_Vacuna'];
 }
}

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
     window.location = "../RegistroVacuna.php";
   </script>
   ';
 }else{
  echo'
  <script>
    alert("Intentalo de nuevo, registro no almacenado exitosamente");
    window.location = "../RegistroVacuna.php";
  </script>
  ';
 }
 mysqli_close($conexion);
?>