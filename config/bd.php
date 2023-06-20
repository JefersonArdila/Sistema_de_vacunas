<?php

function conexion(){
    $conexion = mysqli_connect("localhost", "root", "", "login_register_db");
    return $conexion;
}

function listar(){
    $sql="SELECT * FROM pacientes";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function insertar($nombre,$cedula,$email,$numero_dosis,$nombre_vacuna,$foto_paciente){
    $sql="INSERT INTO pacientes(nombre,cedula,email,numero_dosis,nombre_vacuna,foto_paciente) Values('$nombre','$cedula','$email','$numero_dosis','$nombre_vacuna','$foto_paciente')";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function eliminar($id){

    $sql="DELETE from pacientes WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;

}
function ListarunPaciente($id){
    $sql="SELECT * FROM pacientes WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return mysqli_fetch_assoc($query);
}

function actualizar($id,$nombre,$cedula,$email,$numero_dosis,$nombre_vacuna,$foto_paciente){
    $sql="UPDATE  pacientes set nombre='$nombre',cedula='$cedula',email='$email',numero_dosis='$numero_dosis',nombre_vacuna='$nombre_vacuna',foto_paciente='$foto_paciente' WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;

}

function actualizarSinFoto($id,$nombre,$cedula,$email,$numero_dosis,$nombre_vacuna){
    $sql="UPDATE  pacientes set nombre='$nombre',cedula='$cedula',email='$email',numero_dosis='$numero_dosis',nombre_vacuna='$nombre_vacuna' WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;

}