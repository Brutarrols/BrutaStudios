<?php

    session_start();
    $Id_usr = $_SESSION['Id_usr'];
    $usr = $_SESSION['nom_usr'];
    $pas = $_SESSION['pass_usr'];
    include('conexion.php');

    $rs = mysqli_query($link, "SELECT * FROM usuarios WHERE Nombre = '$usr' && Clave ='$pas'");
    $count = mysqli_num_rows($rs);

   
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> - Bienvenido <?php ?> - </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../../CSS/Stylesindex.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <section>
            <img src="../../Imagenes/Logo Blanco.png">
        </section>
        <section>
            <a href="#"> - Administrar Cuenta - </a> |
            <a href="#"> - Cerrar Session - </a>        
        </section>
        <section>    
            <a href="#"> - Musica - </a> |
            <a href="#"> - Series - </a> |
            <a href="#"> - Games - </a> |
            <a href="#"> - Peliculas - </a> |
        </section>
    </header>
    <div>
        <h2> ¡Brutastudios Inicia!</h2>
        <p> Que comience la funcion...</p>
    </div>
    <footer>
        <article>

        </article>
        <article>

        </article>
        <article>

        </article>
    </footer>
    </body>
</html>
<?php
    
?>