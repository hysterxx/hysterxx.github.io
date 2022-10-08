<?php
  include 'php/conexion_be.php';
  session_start();
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
  $id_login = mysqli_query($conexion, "SELECT id FROM usuarios WHERE usuario= '$usuario'");
  $nombre_login = mysqli_query($conexion, "SELECT nombre FROM usuarios WHERE usuario= '$usuario'");
  $apellido_login = mysqli_query($conexion, "SELECT apellido FROM usuarios WHERE usuario= '$usuario'");
  $usuario_login = mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE usuario= '$usuario'");
  $edad_login = mysqli_query($conexion, "SELECT edad FROM usuarios WHERE usuario= '$usuario'");
  $direccion_login = mysqli_query($conexion, "SELECT direccion FROM usuarios WHERE usuario= '$usuario'");
  $genero_login = mysqli_query($conexion, "SELECT genero FROM usuarios WHERE usuario= '$usuario'");
  $signo_login = mysqli_query($conexion, "SELECT signo FROM usuarios WHERE usuario= '$usuario'");
  $correo_login = mysqli_query($conexion, "SELECT correo FROM usuarios WHERE usuario= '$usuario'");

  $row = mysqli_fetch_array($nombre_login);
  $row0 = mysqli_fetch_array($id_login);
  $row1 = mysqli_fetch_array($apellido_login);
  $row2 = mysqli_fetch_array($usuario_login);
  $row3 = mysqli_fetch_array($edad_login);
  $row4 = mysqli_fetch_array($direccion_login);
  $row5 = mysqli_fetch_array($genero_login);
  $row6 = mysqli_fetch_array($signo_login);
  $row7 = mysqli_fetch_array($correo_login);

  function write_to_console($data) {
    $console = $data;
    if (is_array($console))
    $console = implode(', ', $console);
   
    echo "<script>console.log('Console: " . $console . "' );</script>";
   }
   write_to_console($row[0]);


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
    <title>Perfil</title>
</head>

<body>   
<div id="contenido"><!-- PERFIL DE USUARIO -->
  <section class="user-profile">
    <div class="header">
      <div class="cover">
        <div class="perfil-usuario-avatar">
          <img src="http://www.coopernortetelecom.com.br/assets/images/author-1.png" alt="img-avatar">
        </div>
      </div>
    </div>
    <div class="user-profile-body">
    <?php echo "$row0[0] "?>

      <div class="user-profile-bio">
        <h3 class="titulo"><?php echo "$row[0] "?></h3>
      </div>
      
      <div class="user-profile-footer">
        <ul class="data-list">
          <li> Apellido: <?php echo "$row1[0] "?></li>
          <li>Email: <?php echo "$row7[0] "?></li>
          <li>Usuario: <?php echo "$row2[0] "?></li>
          <li>Edad: <?php echo "$row3[0] "?></li>
          <li> Direccion: <?php echo "$row4[0] "?></li>
          <li>Genero: <?php echo "$row5[0] "?></li>
          <li> Signo <?php echo "$row6[0] "?></li>
        </ul>
      </div>
      </div>
      
      <div class="d-grid gap-2 d-md-block">
        <br><a type="button" class="btn btn-outline-dark" class="btn btn-primary" href="php/cerrar_sesion.php" role="button">Cerrar Sesion</a>
        <a type="button" class="btn btn-outline-danger" class="btn btn-primary" href="buscar_pareja.php"  role="button">Buscar pareja</a>

      </div>
    </div>
  </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>