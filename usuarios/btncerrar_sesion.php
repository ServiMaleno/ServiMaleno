<?php

    session_start();
    session_destroy();
    header("location: ../usuarios/formlogin.php");

?>