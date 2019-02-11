<?php

    include('usrKratorConect.php');

    $usuario_Name = $_POST['usuario'];
    $email = $_POST['correo'];
    $pass = $_POST['pass'];
    $nombre_R = $_POST['nomR'];
    $apellido_R = $_POST['apeR'];
    $fech_nac = $_POST['feNac'];

    $query = mysqli_query($authlnk, "SELECT Nombre_usuario, Correo FROM tabla_Usuario WHERE Nombre_Usuario = '$usuario_Name' OR Correo = '$email'");
    $count = mysqli_num_rows($query);

    if($count > 0)
    {
      echo 'error en el registro';
    }
    else
    {
        mysqli_query($insertlnk, "INSERT INTO tabla_Usuario 
        (Nombre_Usuario, 
        Correo, 
        contrasena, 
        Nombre_Real, 
        Apellido_Real, 
        Fecha_Nacimiento, 
        Fecha_Registro) 
        VALUES (
        '$usuario_Name', 
        '$email',
        '$pass',
        '$nombre_R',
        '$apellido_R',
        '$fech_nac', 
        SYSDATE())");
        echo ("Se registro correctamente");
    }
?>