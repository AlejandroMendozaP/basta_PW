<?php
session_start();

if(!isset($_SESSION['nombre']))
{
    header("location: ../index.php?e=11");
    exit;
}

include "cabecera.php";
?>




