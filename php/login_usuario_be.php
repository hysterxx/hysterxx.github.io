<?php

session_start();

include 'conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario' 
and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['correo'] = $usuario;
    header("location: ../perfil.php");
    exit;

}else{
    echo '
        <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../index.php";
        </script>
    ';
    exit;
}


?>