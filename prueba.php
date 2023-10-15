<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
</head>

<body>
    
    <form method="get"> 
        Color:<select name="color">
            <option value="table-success">Success</option>
            <option value="table-danger">Danger</option>
            <option value="table-warning">Warning</option>
        </select>
        <br>
        #R<input name ="reng" ><br>
        #col<input name ="col"><br>
        <button> generar </button>
    </form>

    <?php
    //Funcion que pregunta si una variable o clase existe 

    if (isset($_GET['reng']) && isset($_REQUEST['col']) && isset($_REQUEST['color'])) {
        $numR=$_GET['reng'];
        $numC=$_REQUEST['col'];
        $color=$_REQUEST['color'];
        $result='<table border="1" class="table '.$color.'">';
        
        for($contR=0; $contR<$numR; $contR++){
             $result.='<tr>';
             for($contC=0; $contC<$numC; $contC++ ){
                if($contR==0){
                    $result.='<th>'.$contR.','.$contC.'</th>';
                }
                else{
                    $result.='<td>'.$contR.','.$contC.'</td>';
                }
                
            }
            $result.='<tr>';
        }
        $result.='</table>';
        echo $result;
    }
?>
<?php include "footer.php"?>
