<?php

$conexion = mysqli_connect("localhost", "root", "", "dbservimaleno");

if (!$conexion){
    die("Error al conectar con la base de datos:" .mysqli_connect_error());
}

?>