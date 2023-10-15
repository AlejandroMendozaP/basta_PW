<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/custom.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <title>Recuperar Contraseña</title>
    </head>
    <body class="degradado">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img src="../images/calabaza.png" width="50px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="home.php">Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="categorias.php">categorias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="palabras.php">Palabras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="usuarios.php">Usuarios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../index.php">Cerrar</a>
                  </li>
                </ul>
                <?php echo $_SESSION['nombre'] ?>; <img src="" alt="foto" class="miniFoto">
              </div>
            </div>
          </nav>
    
<?php
$host = $_SERVER["REQUEST_URI"]

?>