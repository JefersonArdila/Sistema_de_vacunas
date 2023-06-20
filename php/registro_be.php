
  <?php

  

if(isset($_POST['btn1']))
{
  
 include("abrir_conexion.php");

  $Tipo_de_Vacuna = $_POST['Tipo_de_Vacuna'];
  $Lugar_de_Vacunación = $_POST['Lugar_de_Vacunación'];
  $Descripción_de_Vacuna = $_POST['Descripción_de_Vacuna'];
  $Sintomas_Comunes = $_POST['Sintomas_Comunes'];
  $Fecha_Hora = $_POST['Fecha_Hora'];

  
  mysqli_query($conexion, "INSERT INTO $tabla_db1 (Tipo_de_Vacuna,Lugar_de_Vacunación,Descripción_de_Vacuna,Sintomas_Comunes,Fecha_Hora) values ('$Tipo_de_Vacuna','$Lugar_de_Vacunación','$Descripción_de_Vacuna','$Sintomas_Comunes','$Fecha_Hora')");
  
  
  include("cerrar_conexion.php");
  echo'
   <script>
     alert("se Registro Exitosamente");
     window.location = "../index.php";
   </script>
   ';
}



if(isset($_POST['btn2']))
{
  include("abrir_conexion.php");

 $resultado = mysqli_query($conexion,"SELECT * FROM $tabla_db1");
  
  while($consulta = mysqli_fetch_array($resultado)){

    echo
    "
    <table width=\"100%\" border=\"1\">
    <tr>
    <td><b><center>Tipo_de_Vacuna</center></b></td>
    <td><b><center>Lugar_de_Vacunación</center></b></td>
    <td><b><center>Descripción_de_Vacuna</center></b></td>
    <td><b><center>Sintomas_Comunes</center></b></td>
    <td><b><center>Fecha_Hora</center></b></td><br>
    </tr><br>
    <tr>
    <td>".$consulta['Tipo_de_Vacuna']."</td>
    <td>".$consulta['Lugar_de_Vacunación']."</td>
    <td>".$consulta['Descripción_de_Vacuna']."</td>
    <td>".$consulta['Sintomas_Comunes']."</td>
    <td>".$consulta['Fecha_Hora']."</td>
    </tr>
    </table>
    ";
   

  }
  include("cerrar_conexion.php");
}
?>

