<?php
    $usuario= $_POST=["usuario"];
    $contrasena= $_POST=["password"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> Inicio de sesi&oacute;n </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>

    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Inicio de sesi&oacute;n
                </div>
                <form id="loginform" action="controlador.php" method="post" >

                    <input type="hidden" name="metodo" value="ingreso" />

                    <input type="text" name="usuario" placeholder="Usuario" required>

                    <input type="password" name="password" placeholder="Contraseña" required>

                    <button type="submit" title="Ingresar">Login</button>
                </form>

                <div class="pie-form">
                    <a href="#">Olvidaste tu contraseña?</a>
                    <a href="RegistrarteAuto.html">Registrate</a>
                </div>
            </div>
            <div class="inferior">
                <a href="index.html">Volver</a>
            </div>
        </div>
    </div>

</body>

</html>