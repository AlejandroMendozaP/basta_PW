<?php
include "class/classBD.php";
$obBD->consulta("SELECT * from tipo_usuario");
//var_dump($obBD->bloque);
echo $obBD->numeRegistros;
?>