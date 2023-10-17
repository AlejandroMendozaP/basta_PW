<?php
include "home.php";
include "../class/classCategorias.php";
?>
<div class="centrado">
    <?php 
        if(isset($_REQUEST['accion']))
            echo $oCategoria ->ejecuta($_REQUEST['accion']); 
        else
            echo $oCategoria ->ejecuta("list");
    ?>
</div>