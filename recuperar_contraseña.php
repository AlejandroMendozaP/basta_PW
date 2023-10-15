<?php
session_start();
include "class/classTools.php";
include "cabecera.php";

?>
        <div class="centrado">
            <img src="images/contrasena.png" alt="Contraseña" width="100px">
            <h1 class="titulo">Recuperar Contraseña</h1>
            <form class="formulario" method="post" action="recuContra.php">
                <label class="etiqueta">Correo electrónico:</label>
                <input class="input" type="email" id="correo" name="correo" required>
                
                <input class="input" type="text" id="captcha" name="captcha" placeholder="Cuanto es <?php echo $oTools->geneCaptcha(); ?>" required>
                <br>
                <button class="boton"><i class="bi bi-send-fill"></i> Enviar</button>
            </form>
        </div>        


<?php include "footer.php"?>