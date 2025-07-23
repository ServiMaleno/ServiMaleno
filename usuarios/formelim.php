<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="eliminar.php" method="POST">
        <label for="email">Elimine un Usuario ingresando el Correo</label><br>
            <input type="email" placeholder="Ingrese el correo a eliminar" name="email"><br>

            <input type="submit" value="Eliminar">
            <button type="button" onclick="window.location.href='../usuarios/formlogin.php'">Regresar</button>
    </form>
    
</body>
</html>