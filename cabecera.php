<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <title>Recuperar Contraseña</title>
    </head>
    <body class="degradado">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img src="images/calabaza.png" width="50px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link <?php echo (strpos(strtoupper($_SERVER["REQUEST_URI"]), "INDEX"))?"active":""; ?>" href="index.php">Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php echo (strpos(strtoupper($_SERVER["REQUEST_URI"]), "LOGIN"))?"active":""; ?>" href="login.php">Iniciar Sesion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php echo (strpos(strtoupper($_SERVER["REQUEST_URI"]), "RESGISTER"))?"active":""; ?>" href="resgister.php">Resgitrarse</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php echo (strpos($_SERVER["REQUEST_URI"], "recuperar_contraseña"))?"active":""; ?>" href="recuperar_contraseña.php">Contraseña</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    
<?php
$host = $_SERVER["REQUEST_URI"]

?>