<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../login/imglog/userico.ico">
    <title>Iniciar Sesión - ServiMaleño</title>
    <link rel="stylesheet" href="stylogin.css">
</head>
<body>

    <div class="login-box">
        <img class="avatar" src="../images/images-usuarios/user.png" alt="Logo de SM">
        <h1>Iniciar Sesión</h1>
        <form action="validar.php" method="post">
            <label for="username">Correo</label>
            <input type="text" placeholder="Ingrese su Correo" name="email">

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Ingrese su Contraseña" name="contraseña">

            <input type="submit" value="Ingresar">

            <a href="#">¿Olvidó su contraseña?</a><br>
            <a href="../usuarios/formreg.php"><b>No tengo una cuenta</a><br>
            <a href="../usuarios/formelim.php">Eliminar</a>
            <a href="../index.html"><b>← Ir a Inicio</b></a>
        </form>
    </div>
    
</body>
</html>