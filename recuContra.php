<?php
    session_start();
    var_dump($_SESSION);
    var_dump($_POST);
    
    exit;
    if($_POST['captcha']!=$_SESSION['captcha']){
        header("location: index.php?e=101");
    }

    else{
        
    }

?>