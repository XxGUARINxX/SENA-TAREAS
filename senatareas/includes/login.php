<?php
include 'header.php';
?>
<div>
    <div class="login">
        <div class="img">
            <img src="/img/images.png" alt="">
        </div>
        <form action="" method="post" class="inicio">
            <fieldset class="guiso">
                <legend>INICIAR SESSION</legend>
                <label for="usu">Usuario</label>
                <input type="text" placeholder="example@correo.com" id="usu" required name="email">
                <label for="pass">Contraseña</label>
                <input type="password" name="password" id="pass" placeholder="valide su usuario" required>
                
            </fieldset>
            <button type="submit">Iniciar sesion</button>
        </form>
    </div>
    
</div>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$correo = $_POST['email'];
$password = $_POST['password'];
session_start();

try {
    require 'conexion_bd.php';
    $sql = "SELECT  email, contraseña, rol FROM usuario WHERE email='$correo' ";
    $consulta = mysqli_query($conexion, $sql);
    $resul = mysqli_fetch_assoc($consulta);
    
    if ($_POST['password'] == $resul['contraseña']){
        $_SESSION['nombre'] = $resul['nombre'];
        $_SESSION['rol'] = $resul['rol'];
        $_SESSION['login']=true;
        header('location: ../panel_principal.php');
    } else {
        echo('usuario y/o contraseña no son correctos');

    }
} catch (\Throwable $th) {
    echo($th);
}

}
include 'footer.php';
