<!doctype html>
<html lang="en">

<head>

    <script>
        function anular(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            return (tecla != 13);
        }
    </script>

    <title>ESQUEMATIZACIÓN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/est.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>



    <a class="btn btn-warning btn-sm mt-2" href="Bienvenida.php">Volver</a>



    <div class="container">

        <div class="frm row p-2">
            <div class=" col-3">
                <form action="acciones/insertar.php" method="POST" enctype="multipart/form-data" class="" onkeypress="return anular(event)">

                    <h3 class="text-center">Registrar Vacunas del paciente</h3>

                    <label>Nombre del paciente</label>
                    <input class="form-control" type="text" name="nombre" required>

                    <label>Cedula del paciente</label>
                    <input class="form-control" type="text" name="cedula" required>

                    <label>email del paciente</label>
                    <input class="form-control" type="email" name="email" required>

                    <label>Numero de dosis</label>
                    <input class="form-control" type="text" name="numero_dosis" required>

                    <br>

                    <select class="form-control" typename="text" name="nombre_vacuna" id="vacunas">
                        <option selected>Seleccione el Tipo de Vacuna</option>
                        <option value="Pfizer" placeholder="pfizer">Pfizer</option>
                        <option value="Moderna">Moderna</option>
                        <option value="Janssen de Johnson & Johnson">Janssen de Johnson & Johnson</option>
                        <option value="AstraZeneca">AstraZeneca</option>
                        <option value="Sinovac">Sinovac</option>
                    </select>
                    <br>


                    <label>foto del paciente</label>
                    <input class="form-control" type="file" name="foto_paciente" required>

                    <center><button class="btn btn-primary mt-2" type="submit">Registrar</button></center>


                </form>
            </div>
            <div class="table col-9 ">

                <table class="table">
                    <thead>

                        <tr>
                            <th class="bg-white">#</th>
                            <th class="bg-white">Nombre</th>
                            <th class="bg-white">Cedula</th>
                            <th class="bg-white">Email</th>
                            <th class="bg-white">Num_dosis</th>
                            <th class="bg-white">Nom_vacuna</th>
                            <th class="bg-white">Foto</th>
                            <th class="bg-white">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include "config/bd.php";
                        $query = listar();
                        $enumeracion = 0;

                        while ($datos = mysqli_fetch_assoc($query)) {
                            $enumeracion++;
                            $id = $datos['id'];
                            $nombre = $datos['nombre'];
                            $cedula = $datos['cedula'];
                            $email = $datos['email'];
                            $numero_dosis = $datos['numero_dosis'];
                            $nombre_vacuna = $datos['nombre_vacuna'];
                            $foto_paciente = $datos['foto_paciente'];





                        ?>

                            <tr>
                                <td><?= $enumeracion ?></td>
                                <td><?= $nombre ?></td>
                                <td><?= $cedula ?></td>
                                <td><?= $email ?></td>
                                <td><?= $numero_dosis ?></td>
                                <td><?= $nombre_vacuna ?></td>
                                <td><img style="max-height:80px;" src="data:image/jpg;base64,<?= base64_encode($foto_paciente) ?>"></td>
                                <td>
                                    <a class="btn btn-info" href="ver.php?id=<?= $id ?>">Ver</a>
                                    <a class="btn btn-danger" href="acciones/eliminar.php?id=<?= $id ?>">Eliminar</a>
                                    <a class="btn btn-warning text-white" href="editar.php?id=<?= $id ?>">Actualizar</a>

                                </td>
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>