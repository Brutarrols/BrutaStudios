<?php

    include('usrConn.php');

    $usr = $_POST['usuario'];
    $pas = $_POST['pass'];

    $query = mysqli_query($link, "SELECT (Nombre_usuario, contrasena) FROM tabla_Usuario WHERE Nombre_usuario = '$usr' && contrasena ='$pas'");
    $count = mysqli_num_rows($query);

    if($count > 0)
    {
        $row = mysqli_fetch_array($query);
        $id_usr = $row ['Id_usr'];
        $nom_usr = $row ['Nombre_usuario'];
        $pass_usr = $row ['contrasena'];

        session_start();
        $_SESSION['Id_usr'] = $id_usr;
        $_SESSION['nom_usr'] = $nom_usr;
        $_SESSION['pass_usr'] = $pass_usr;

        header("location:Usuario/index.php");        
    }
    else
    {
        echo ("Usuario o contraseña invalidos");
    }

?>