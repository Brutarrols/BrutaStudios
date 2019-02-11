<?php

    session_start();
    $Id_usr = $_SESSION['Id_usr'];
    $usr = $_SESSION['nom_usr'];
    $pas = $_SESSION['pass_usr'];
    include('conexion.php');
    session_destroy();

    header('location:../../Index.html')
?>