<?php
require '../creacuenta.php';
require '../includes/conexion_bd.php';

$insertar_datos = capturarDatos();
if ($insertar_datos !=null){
$identificacion = $insertar_datos['identifacion'];
$identificacion = intval($identificacion);
$nombre1 = $insertar_datos['1nombre'];
$nombre2 = $insertar_datos['2nombre'];
$apellido1 = $insertar_datos['1apel'];
$apellido2 = $insertar_datos['2apel'];
$fecha = $insertar_datos['fec'];
$celular = $insertar_datos['cel'];
$correo = $insertar_datos['correo'];
$contraseña = $insertar_datos['contra'];
$fechanac = date('Y-m-d', strtotime($fecha));


$sql = 'INSERT INTO aprendices (cod, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nac, celular, email, contraseña) VALUES
(' . $identificacion . ', "' . $nombre1 . '","' . $nombre2 . '", "' . $apellido1 . '", "' . $apellido2 . '", "' . $fechanac . '", "' . $celular . '","' . $correo . '","' . $contraseña . '");';
$consul = mysqli_query($conexion, $sql);
if ($consul) {
    echo "<script>alert('Registro exitoso');</script>";
}


}
