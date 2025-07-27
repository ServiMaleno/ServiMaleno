<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - ServiMaleño</title>
    <link rel="icon" href="../login/imglog/userico.ico">
    <link rel="stylesheet" href="styleregis.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
    <form method="post" action="registrar.php">

    <img class="logo" src="../images/images-usuarios/user.png" alt="logosm">
    <h1>Crear una Nueva Cuenta</h1>

        <div class="input-wrapper">
            <label for="username">Nombres y Apellidos</label>
            <input type="text" name="name" placeholder="Ingrese sus Nombres y Apellidos">
        </div>

        <div class="input-wrapper">
            <label for="email">Correo</label>
            <input type="email" name="email" placeholder="Ingrese su Correo Electrónico">
        </div>

        <div class="input-wrapper">
            <label for="direction">Dirección</label>
            <input type="text" name="direction" placeholder="Ingrese su Dirección">
        </div>
        
        <div class="input-wrapper">
            <label for="tel">Teléfono</label>
            <input type="tel" name="phone" placeholder="Ingrese su Número de Teléfono">
        </div>

        <div class="input-wrapper">
            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Ingrese una Contraseña Nueva">
        </div>

        <input class="btn" type="submit" name="register" value="Registrarse">

        <p>Estoy de acuerdo con los <a href="../termsycond/termsycondi.html">Términos y Condiciones</a> y <a href="#">Políticas de Privacidad</a></p>
            <a href="../usuarios/formlogin.php" class="btnytcu"><b>Ya tengo una cuenta</a><br>
            <a href="../index.html" class="termsycon"><b>← Ir a Inicio</b></a>

    </form>
    

    <?php
        //include("registrar.php");
    ?>

</body>
</html>