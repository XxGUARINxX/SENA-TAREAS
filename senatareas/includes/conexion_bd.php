<?php
try{
$servidor = "localhost";
$usuario = "root";
$password = "xbox360gtav";
$bd = "senatareas";
$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
} catch (\Throwable $th) {
    echo($th);
}