<?php

    include 'conexion_be.php';


    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    $genero = $_POST['genero'];
    $signo = $_POST['signo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];
    
    $query = "INSERT INTO usuarios (nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) 
    VALUES('$nombre', '$apellido', '$edad', '$direccion', '$genero', '$signo', '$usuario', '$contrasena', '$correo')";

    $ejecutar = mysqli_query($conexion, $query);
    

    if($ejecutar){

        header("Location: http://localhost/xampp/Proyecto/registro_exitoso.html");
        exit();

    }
?>

