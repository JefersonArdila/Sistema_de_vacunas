<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/frmre.css">
  <a class="btns p-3 m-5 mt-5" name="btn3" href="Bienvenida.php">Volver</a>
  <title>Formulario Registro de vacuna</title>
</head>


<body>
  <section class="form-register">
    <form method="POST" action="php/registro_be.php">
      <center>
        <h4>Formulario Registro de vacunas</h4>
      </center>

      <select class="controls" typename="text" name="Tipo_de_Vacuna" id="vacunas">
        <option selected>Seleccione el Tipo de Vacuna</option>
        <option value="Pfizer" placeholder="pfizer">Pfizer</option>
        <option value="Moderna">Moderna</option>
        <option value="Janssen de Johnson & Johnson">Janssen de Johnson & Johnson</option>
        <option value="AstraZeneca">AstraZeneca</option>
        <option value="Sinovac">Sinovac</option>


      </select>

      <input class="controls" type="text" name="Lugar_de_Vacunación" id="lugar" placeholder="Ingrese el lugar de vacunación">
      <textarea class="controls" name="Descripción_de_Vacuna" placeholder="Ingrese una descripción de la vacuna" id="exampleFormControlTextarea1" rows="3"></textarea>

      <input class="controls" type="text" name="Sintomas_Comunes" id="sintomas" placeholder="Ingrese algunos sintomas ">
      <input class="controls" type="text" name="Fecha_Hora" id="fecha" placeholder="Ingrese la fecha">
      <input class="botons" name="btn1" type="submit" value="Registrar">
      <input class="botons" name="btn2" type="submit" value="Consultar">

    </form>

  </section>


</body>

</html>