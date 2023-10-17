<?php
session_start();

if(!isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'])
{
    header("location: ../index.php?e=11");
    exit;
}

include "cabecera.php";
?>




