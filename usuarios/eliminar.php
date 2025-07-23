<?php

include('conexion.php');

$email = $_POST['email'];

mysqli_query($conexion, "DELETE FROM usuario WHERE email = '$email'");
mysqli_close($conexion);

?>