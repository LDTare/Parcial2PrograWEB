<?php

    include_once("./Models/usuario.php");
    include_once("./db.php");
    DB::createInstant();
    class ControlUsuario
    {
        public function Home()
        {
            $user = Usuario::consult();
            include_once("./Views/Usuarios/home.php");
        }

        public function Create()
        {
            $idLog = '';
            if(isset($_GET['id']))
            {
                $idLog = $_GET['id'];
            }
            if($_POST)
            {
                $name = $_POST['name'];
                $lstn = $_POST['lastname'];
                $email = $_POST['email'];
                $nameus = $_POST['nameus'];
                $p1 = $_POST['passw1'];
                $p2 = $_POST['passw2'];
                $estado = $_POST['estado'];
                $rol = '';
                if($idLog == '1' || $idLog == 1)
                {
                    $rol = 'User';
                }
                else if($idLog == '')
                {
                    $rol = $_POST['rol'];
                }
                
                if($p1 == $p2)
                {
                    
                }
                else
                {
                    $p1 = $p2;
                }
                Usuario::create(
                    $name,
                    $lstn, 
                    $email,
                    $nameus,
                    $p2,
                    $rol,
                    $estado
                );
                $message = "Bienvenido nuestro sistema... \r \n Estos son tus datos para que puedas acceder \n \r Tu username es " . $nameus ." y tú contraseña es: " . $p2 . "  \n \r Agredecemos tu atención. ";

                mail('josmiaguilar01@mesoamericana.edu.gt',
                $email, $message);
                header("Location: ./index.php?controller=usuario&action=home");
            }
            include_once("./Views/Usuarios/create.php");
        }

        public function Edit()
        {
            $id = $_GET['id'];
            $user = Usuario::search($id);
            if($_POST)
            {
                $name = $_POST['name'];
                $lstn = $_POST['lastname'];
                $email = $_POST['email'];
                $nameus = $_POST['nameus'];
                $p1 = $_POST['passw1'];
                $p2 = $_POST['passw2'];
                $estado = $_POST['estado'];
                $rol = $_POST['rol'];
                if($p1 == $p2)
                {
                    
                }
                else
                {
                    $p1 = $p2;
                }
                Usuario::edit(
                    $id,
                    $name,
                    $lstn, 
                    $email,
                    $nameus,
                    $p2,
                    $rol,
                    $estado
                );
                $message = "Bienvenido nuestro sistema... \r \n Estos son tus datos para que puedas acceder \n \r Tu username es " . $nameus ." y tú contraseña es: " . $p2 . "  \n \r Agredecemos tu atención. ";

                mail('josmiaguilar01@mesoamericana.edu.gt',
                $email, $message);
                header("Location: ./index.php?controller=usuario&action=home");
            }
            include_once("./Views/Usuarios/edit.php");
        }

        public function Delete()
        {
            $id = $_GET['id'];
            $user = Usuario::delete($id);
            header("Location: ./index.php?controller=usuario&action=home");
        }
    }

?>