<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SenaTareas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">

        <body>
        <header>
        
            
    <div class="navbar">
        <h1><a href="../index.php" style='text-decoration: none; color:black;';>sena tareas</a></h1>
    </div>

    <div class="enlace1">
        <?php
        
        if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
            echo '<a href="/includes/login.php">Iniciar session</a>';
        }
        else {
            echo'<a href="/includes/login.php">Iniciar session</a>';
        }
        ?>
        </div>
        <div class="enlace2">
        <a href="/funciones/ingresar_registros.php">Crear cuenta</a>
        </div>
        
</header>

    