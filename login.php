<?php
include "cabecera.php";
?>
        
        <div class="centrado">
                <img src="images\login2.png" width="100px">
                <h1 class="titulo">Login</h1>
                <form class="formulario" method="post" action="validar.php">
                    <label class="etiqueta" for="user" >Email </label>
                    <input class="input" name="email" type="email" id="email" required>
                    <br>
                    <label class="etiqueta" for="password">Contraseña </label>
                    <input class="input" type="password" name="clave" id="clave" required>
                    <br>
                    <button class="boton"><i class="bi bi-send-fill"></i> Enviar</button>
                </form>
        </div>
<?php include "footer.php"?>