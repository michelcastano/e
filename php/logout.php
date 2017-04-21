<?php 
 //Crear sesión
 session_start();
 //Vaciar sesión
 $_SESSION = array();
 //Destruir Sesión
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
 //Redireccionar a login.php
 header("location: ../index.html");
?>