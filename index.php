<?php
session_start();
session_destroy();

include "cabecera.php";
?>

<div class="container "><div class="row mt-3"><div class="col-md-5 auto">

<?php
       
        if(isset($_GET['e']))
            switch($_GET['e']){
                case 7:
                    echo'<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header"><i class="bi bi-envelope-heart-fill"></i> Exito</div>
                    <div class="card-body">
                      <h5 class="card-title">Registro exitoso</h5>
                      <p class="card-text">La contraseña fue enviada al correo proporcionado</p>
                    </div>
                  </div>';
                break;
                case 1:
                    echo'<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Success card title<span class="bi bi-postage-fill"></span></h4>
                        <p class="card-text">Revisa tu correo</p>
                    </div>
                    </div>';
                break;
                case 2:
                    echo'<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header"><i class="bi bi-exclamation-triangle-fill"></i> Error</div>
                    <div class="card-body">
                      <h5 class="card-title">Inicio de sesion fallido</h5>
                      <p class="card-text">Las credenciales no coinciden o no existe el usuario</p>
                    </div>
                  </div>';
            }

?>

</div></div></div>





<?php
include "footer.php"
?>

