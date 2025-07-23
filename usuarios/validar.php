<?php

$email = $_POST['email'];
$password = $_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;

include('conexion.php');

$consulta ="SELECT * FROM usuario WHERE email='$email' and contraseña='$password'";
$resultado =mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:bienvenida.php");
} else {
    echo '
        <script>
            alert("Ocurrió un Error");
            window.location = "../usuarios/formlogin.php";
        </script>
    ';
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>