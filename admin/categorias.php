<?php
include "home.php";
include "../class/classCategorias.php";
?>
<div class="centrado">
<h1> Categorias Registradas </h1>
    <?php 
       echo $oCategoria -> ejecuta("list");
    ?>
</div>