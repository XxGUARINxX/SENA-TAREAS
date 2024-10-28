<?php
include 'includes/header.php'
?>

<div class="deiby">
    <form action="" method="POST">
        <fieldset>
            
            <label for="iden">Identificacion</label>
            <input type="number" id="iden" name="identifacion" placeholder="Identificacion" required>
            
            
            <label for="1nom">Primer Nombre</label>
            <input type="text" id="1nom" name="1nombre" placeholder="Primer Nombre" required>
            
            
            <label for="2nom">Segundo Nombre</label>
            <input type="text" id="2nom" name="2nombre" placeholder="Segundo Nombre" required>
            
            <label for="1apel">Primer Apellido</label>
            <input type="text" id="1apel" name="1apel" placeholder="Primer Apellido" required>
            
            
            <label for="2apel">Segundo Apellido</label>
            <input type="text" id="2apel" name="2apel" placeholder="Segundo Apellido" required>
            
            
            <label for="fec">Fecha de Nacimiento</label>
            <input type="date" id="fec" name="fec" required>
            
            <label for="cel">Celular</label>
            <input type="number" id="cel" name="cel" placeholder="Celular" required>
            
            <label for="email">Correo</label>
            <input type="text" id="email" name="correo" placeholder="Correo" required>
            
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="contra" placeholder="Escriba una clave segura" required>
            
            <button  type="submit" value="enviar">Registrar</button>
            
            
        </fieldset>
        

    </form>
</div>

<?php

capturarDatos();
function capturarDatos()


{
   
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        return $_POST;
        
    }
    


}

include 'includes/footer.php';
