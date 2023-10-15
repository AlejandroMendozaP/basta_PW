<?php
//validar credenciales
session_start();
include "class/classBD.php"; //se incluye la clase de base de datos 
if(isset($_POST['email']) and isset($_POST['clave']) )
{
    
    $regi=$obBD->getTupla("SELECT * from usuario where email='".$_POST['email']."' and clave=sha1('".$_POST['clave']."')");
    
    if($obBD->numeRegistros)
    {
        $_SESSION['nombre']=$regi->nombre." ".$regi->apellidos;
        $_SESSION['isAdmin'] = ($regi->id_tipo_usuario==2)?true:false;
        $_SESSION['email'] = $regi->email;
        $_SESSION['id_usuario']=$regi->id_usuario;
        if($regi->id_tipo_usuario==1)
            header("location: users/home.php");
        else 
            header("location: admin/home.php");
    }    
    else 
        header("location: index.php?e=2");
}
else
    header("location: index.php?e=1"); //error 1 es de que no se envio datos 

// ' or '1'='1                 sirve para entrar a cualquier pagina

?>