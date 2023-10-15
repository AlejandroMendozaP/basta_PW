<?php
include "class/classBD.php";

$cadena="abcdefimnABCDEFGHJKLMNPQRSTUVWXYZ23456789123456789";
$numeC=strlen($cadena);
$nuevPWD="";
for ($i=0; $i<8; $i++)
  $nuevPWD.=$cadena[rand()%$numeC]; 

include("recursos/class.phpmailer.php");
include("recursos/class.smtp.php");

$mail = new PHPMailer();

$mail->IsSMTP();
    $mail->Host="smtp.gmail.com"; //mail.google
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Port = 465;     // set the SMTP port for the GMAIL server
    $mail->SMTPDebug  = 0;  // enables SMTP debug information (for testing)
                              // 1 = errors and messages
                              // 2 = messages only
    $mail->SMTPAuth = true;   //enable SMTP authentication
    
    $mail->Username =   "20030741@itcelaya.edu.mx"; // SMTP account username
    $mail->Password = "yzaqgbssibtlepuu";  // SMTP account password
      
    $mail->From="";
    $mail->FromName="";
    $mail->Subject = "Registro completo";
    $mail->MsgHTML("<h1>BIENVENIDO ".$_POST['nombre']." ".$_POST['apellidos']."</h1><h2> tu clave de acceso es : ".$nuevPWD."</h2>");
    $mail->AddAddress($_POST['email']);

    $cad="insert into usuario set nombre='".$_POST['nombre']."', apellidos='".$_POST['apellidos']."', 
           email='".$_POST['email']."', clave=sha1('".$nuevPWD."'), id_tipo_usuario=2, genero='".$_POST['genero']."'";

  // $cad="INSERT INTO usuario (nombre, apellidos, email, clave, id_tipo_usuario, genero)
   //     VALUES ('".$_POST['nombre']."', '".$_POST['apellidos']."', '".$_POST['email']."', sha1('".$nuevPWD."'), 2, '".$_POST['genero']."')";

    //$mail->AddAddress("admin@admin.com");
    if (!$mail->Send()) 
          echo  "Error: " . $mail->ErrorInfo;
    else { $obBD->consulta($cad);
            if($obBD->erro>"")
               echo $obBD->error;
            else
               header("location: index.php?e=7"); }
/*

PROBLEMAS A SOLUCIONAR EN EL REGISTRO
1) DETECTAR QUE EL CORREO YA ESTA REGISTRADO, 
   YA QUE ES LA LLAVE PRIMARIA Y NO SE DEBE ENVIAR
   EL CORREO SI YA ESTABA REGISTRADO.
2) LA CLAVE DEBE DE CIFRARSE, POR QUE EN EL 
   LOGUEO SE CIFRA.


*/
?>