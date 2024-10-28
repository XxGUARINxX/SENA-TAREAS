<?php include
__DIR__.'/includes/css.php';
session_start();
?>

<?php

if ($_SESSION['rol'] == 'instructor') {

    require __DIR__ . '/includes/panel_instructor.php';
} else {
    require __DIR__ . '/includes/consultar_aprendiz.php';
}


?>