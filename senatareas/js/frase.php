<?php
include 'includes/css.php';
include './includes/conexion_bd.php';

$sql = "SELECT frases FROM texto ORDER BY RAND() LIMIT 1";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $frase = $row['frases'];
} 
  

$conexion->close();
?>