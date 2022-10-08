<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrarse</title>
</head>

<body>   
<!-- Registrarse -->
<div id="registrarse">
    <div class="form-group text-center pt-3">
    <h1 class="text-light">REGISTRARSE</h1>
    </div>
    <form action="php/registro_usuario_be.php" method="post">
        <div class="fila-arriba">
            <div class="contenedor-input">
                <label>
                    <FONT COLOR="white">Nombre</FONT> <span class="req">*</span>
                </label>
                <input type="text" required name="nombre">
            </div>

            <div class="contenedor-input">
                <label>
                    <FONT COLOR="white">Apellidos</FONT><span class="req">*</span>
                </label>
                <input type="text" required name="apellido">
            </div>
        </div>
        <div class="contenedor-input">
            <label>
                <FONT COLOR="white">Edad</FONT><span class="req">*</span>
            </label>
            <input type="integer" required name="edad">
        </div>
        <div class="contenedor-input">
            <label>
                <FONT COLOR="white">Direccion</FONT> <span class="req">*</span>
            </label>
            <input type="text" required name="direccion">
        </div>
        <div class="contenedor-input">
            <label>
                <FONT COLOR="white">Genero</FONT><span class="req">*</span>
            </label>
            <input type="text" required name="genero">
        </div>
        <div class="contenedor-input">
            <label>
                <FONT COLOR="white">Usuario</FONT><span class="req">*</span>
            </label>
            <input type="text" required name="usuario">
        </div>
        <div class="contenedor-input">
                <label>
                    <FONT COLOR="white">Email</FONT><span class="req">*</span>
                </label>
            <input type="email" required name="correo">
        </div>
        <div class="contenedor-input">
            <label>
                <FONT COLOR="white">Contraseña</FONT><span class="req">*</span>
            </label>
            <input type="password" required name="contrasena">
        </div>

        <div class="contenedor-input">
            <label>
                <FONT COLOR="white">Signo zodiacal</FONT><span class="req">*</span>
            </label>
            <input type="text" required name="signo">
        </div>
    </div>

    <div class="form-group text-center">
        <button><a>Registrarse</a></button>
    </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>