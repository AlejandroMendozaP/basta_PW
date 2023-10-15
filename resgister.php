<?php
include "cabecera.php";
?>

        <div class="centrado-1">
            <img src="images\login.png" alt="" width="100px">
            <h1 class="titulo">Registro</h1>
            <form class="formulario" method="post" action="registrarse.php">
                <label class="etiqueta"">Nombre:</label>
                <input class="input" type="text" id="nombre" name="nombre" required>

                <label class="etiqueta">Apellidos:</label>
                <input class="input" type="text" id="apellidos" name="apellidos" required>

                <label class="etiqueta">Email:</label>
                <input class="input" type="email" id="email" name="email" required>

                <label class="etiqueta">Género:</label>
                <label>Masculino</label>
                <input type="radio" id="genero-m" name="genero" value="Masculino">
                
                <label>Femenino</label>
                <input  type="radio" id="genero-f" name="genero" value="Femenino">
                <br>
                <button class="boton" type="submit"><i class="bi bi-send-fill"></i> Enviar</button>
            </form>
        </div>

<?php include "footer.php"?>