<?php
include "home.php";
include "../class/classCategorias.php";
?>
<div class="centrado">
    <?php 
        if(isset($_GET['accion']))
            echo $oCategoria ->ejecuta($_GET['accion']); 
        else
            echo $oCategoria ->ejecuta("list");
    ?>
</div>