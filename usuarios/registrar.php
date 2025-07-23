<?php

include("conexion.php");

if (isset($_POST['register'])) {
   if(
      strlen($_POST['name']) >= 1 &&
      strlen($_POST['email']) >= 1 &&
      strlen($_POST['direction']) >= 1 &&
      strlen($_POST['phone']) >= 1 &&
      strlen($_POST['password']) >= 1
      ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $direction = trim($_POST['direction']);
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO usuario(nombre, email, direccion, telefono, contraseña, fecha)
                VALUES('$name', '$email', '$direction', '$phone', '$password', '$fecha')";

            //Verificar que el correo no se repita en la base de datos
            $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE email='$email' ");

            if(mysqli_num_rows($verificar_correo) > 0){
                echo '
                <script>
                    alert("Este correo ya está registrado, intente con otro diferente");
                    window.location = "../usuarios/formlogin.php";
                </script>
                ';
                exit();
            }

                $resultado = mysqli_query($conexion, $consulta);
                if ($resultado){
                echo '
                    <script>
                        alert("Usuario registrado exitosamente, ya puede iniciar sesión");
                        window.location = "../usuarios/formlogin.php";
                    </script>
                ';
                } else {
                    echo '
                    <script>
                        alert("Ocurrió un Error");
                        window.location = "../usuarios/formreg.php";
                    </script>
                ';  
                }

        } else {
            echo '
                <script>
                    alert("Llena todos los campos");
                    window.location = "../usuarios/formreg.php";
                </script>
                ';
        }
}
?>