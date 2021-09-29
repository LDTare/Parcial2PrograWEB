<?php
  include_once("./Models/album.php");
  session_start();
  error_reporting(0);
    if($activesesion == null || $activesesion == '')
    {
        header("location: ../index.php");
        die();  
    }
    $rol = $_SESSION['Rol'];
    $idUser = $_SESSION['idUser'];
    $albums = Album::consult();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Galeria</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Galeria de Imagenes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?controller=pages&action=home">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?controller=usuario&action=perfil">Perfil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php if($rol == 'Admin')
                    {
                      echo `
                      <li><a class="dropdown-item" href="?controller=usuario&action=home">Perfiles</a></li>
                      <li><a class="dropdown-item" href="?controller=album&action=home">Albumes</a></li>
                      <li><a class="dropdown-item" href="?controller=fotografia&action=home">Fotografias</a></li>
                      `;
                    } 
                    else if($rol == 'User')
                    {
                      foreach($albums as $alb)
                      {
                        if($alb -> IdUser == $idUser)
                        {
                          echo '<li><a class="dropdown-item" href="?controller=album&action=galery&id='. $alb -> IdAlbum .'">Album '. $alb -> Nombre.'</a></li>';
                        }
                      }
                      echo '<li><a class="dropdown-item" href="?controller=fotografia&action=createid='. $alb -> IdAlbum .'">Agregar un Album</a></li>';
                    }
              ?>
              </a>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="section" >
        <div class="container" style="margin-top: 10px;">
            <?php include_once("./router.php"); ?>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>