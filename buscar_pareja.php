<?php

include 'php/conexion_be.php';
session_start();
$row1 =array("");
$row_ =array("");

$usuario = $_SESSION['correo'];


if(!isset($_SESSION['correo'])){
    echo '
        <script>
            alert("Por favor debes iniciar sesion");
            window.location = "index.php";
        </script>
    
    ';
    session_destroy();
    die();
  }
  $fila_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario'");
  $signo_login = mysqli_query($conexion, "SELECT signo FROM usuarios WHERE usuario= '$usuario'");
  $nombre_login = mysqli_query($conexion, "SELECT nombre FROM usuarios WHERE usuario= '$usuario'");
  $row = mysqli_fetch_array($nombre_login);
  $row1 = mysqli_fetch_array($signo_login);

  function write_to_console($data) {
    $console = $data;
    if (is_array($console))
    $console = implode(', ', $console);
   
    echo "<script>console.log('Console: " . $console . "' );</script>";
   }
   write_to_console($row[0]);
   write_to_console($row1[0]);
   
   if($row1[0]== 'Geminis'){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Virgo'");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else if($row1[0]== 'Aries'){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Sagitario'");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else if($row1[0]== 'Tauro'){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Cancer");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else if($row1[0]== 'Cancer'){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Escorpio'");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else if($row1[0]== 'Leo'){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Libra'");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else if($row1[0]== 'Virgo'){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Capricornio'");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else if($row1[0]== 'Libra'){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Piscis'");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else if($row1[0]== "Escorpio"){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Cancer'");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else if($row1[0]== "Capricornio"){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Virgo'");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else if($row1[0]== "Acuario"){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Acuario'");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else if($row1[0]== "Piscis"){
    $posible_pareja = mysqli_query($conexion, "SELECT * FROM usuarios WHERE signo= 'Libra'");
    $row_ = mysqli_fetch_array($posible_pareja);
    write_to_console($row_);
  }else{
    $row_ = "N/A No es un signo";
    write_to_console($row_);
  }


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Parejas</title>
</head>

<body>   
<div id="contenido"><!-- PERFIL DE USUARIO -->
  <section class="user-profile">
    <div class="header">
      <div class="cover">
        <div class="perfil-usuario-avatar">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Heart_coraz%C3%B3n.svg/640px-Heart_coraz%C3%B3n.svg.png" alt="img-corazon">
        </div>
      </div>
    </div>
    <div class="user-profile-body">
    <?php echo "$row[0] "?>

      <div class="user-profile-bio">
        <h3 class="titulo">Datos de las</h3>
        <h3 class="titulo">posibles parejas</h3>
      </div>
      
      <div class="user-profile-footer">
        <ul class="data-list">
          <li> Nombre: <?php echo $row_['nombre']?></li>
          <li> Apellido: <?php echo $row_['apellido']?></li>
          <li> Edad: <?php echo $row_['edad']?></li>
          <li> Email: <?php echo $row_['correo']?></li>
          <li> Usuario: <?php echo $row_['usuario']?></li>
          <li> Signo: <?php echo $row_['signo']?></li>
        </ul>
      </div>
      </div>
      
      <div class="d-grid gap-2 d-md-block">
        <br><a type="button" class="btn btn-outline-dark" class="btn btn-primary" href="php/cerrar_sesion.php" role="button">Salir</a>
        

      </div>
    </div>
  </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>