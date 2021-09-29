<?php
include("data/db.php");
$usuario=$_POST['nameuser'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['nameuser']=$usuario;


$consulta="SELECT*FROM usuario where nameuser='$usuario' and pasword='$contraseña'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_fetch_array($resultado);
$_SESSION['idUser'] = $filas['IdUser'];
$_SESSION['apellido'] = $filas['Apellido'];
$_SESSION['nombre'] = $filas['Nombre'];
$_SESSION['Rol'] = $filas['Rol'];
if($filas != null){
  
    switch($filas['Rol'])
    {
        case "01":
            header("location:data/index.php");
            break;
        case "02":
            header("location:data/index.php");
            break;
        default:
            header("location:data/index.php");
            break;
    }
    

}else{
    ?>
    <?php
    include("index.php");

  ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error al autenticar datos</strong> Porfavor verifica que todos los campos esten en orden
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);