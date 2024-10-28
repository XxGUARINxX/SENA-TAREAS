<?php
include 'includes/header.php';
include 'includes/conexion_bd.php';
include 'js/frase.php';
?>
<div class="hero">
<div class="img">
            <img src="/img/images.png" alt="">
        </div>
    <div class="contenido_hero">
        
        <p><?php echo $frase; ?></p>
    </div>
</div>
<?php include 'includes/footer.php' ?>

