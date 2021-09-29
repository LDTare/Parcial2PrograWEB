<?php
//Seguridad de paginacion
session_start();
error_reporting(0);

$activesesion = $_SESSION['nameuser'];
if($activesesion == null || $activesesion == '')
{
    header("location: ../index.php");
    die();  
}
?>

<li class="nav-item">
        <a href="../closesesion.php" class="nav-link">
          <i class="zmdi zmdi-close"> <?php echo $activesesion; ?></i> Cerrar Sesion
        </a>
</li>