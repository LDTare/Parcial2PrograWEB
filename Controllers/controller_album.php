<?php
    include_once("./Models/album.php");
    include_once("./Models/usuario.php");
    include_once("./db.php");
    session_start();
    error_reporting(0);
    DB::createInstant();

    class ControlAlbum
    {
        public function Home()
        {
            $album = Album::consult();
            include_once("./Views/Album/home.php");
        }

        public function Create()
        {
            $id = '';
            $rol = $_SESSION['Rol'];
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
            }
            
            $user = Usuario::consult();
            if($_POST)
            {
                $usuario = '';
                if($id == '' || $id == null)
                {
                    $usuario = $_POST['user'];
                }
                else 
                {
                    $usuario = $id;
                }
                
                $n = $_POST['name'];
                $fecha = $_POST['fecha'];
                $sta = $_POST['estado'];
                if($usuario == "0")
                {
                    $usuario = null;
                }
                Album::create(
                    $usuario, 
                    $n, 
                    $fecha,
                    $sta
                );
                if($rol == 'Admin')
                {
                    header("Location: ./index.php?controller=album&action=home");
                }
                else if($rol == 'User')
                {
                    header("Location: ./index.php?controller=album&action=galery&id=".$id);
                }
                
            }

            include_once("./Views/Album/create.php");
        }

        public function Edit()
        {
            $rol = $_SESSION['Rol'];
            $id = $_GET['id'];
            $user = Usuario::consult();
            $album = Album::search($id);
            if($_POST)
            {
                $usuario = $_POST['user'];
                $n = $_POST['name'];
                $fecha = $_POST['fecha'];
                $sta = $_POST['estado'];
                if($usuario == "0")
                {
                    $usuario = null;
                }
                Album::edit(
                    $id,
                    $usuario,
                    $n,
                    $fecha,
                    $sta
                );
                if($rol == 'Admin')
                {
                    header("Location: ./index.php?controller=album&action=home");
                }
                else if($rol == 'User')
                {
                    header("Location: ./index.php?controller=album&action=galery&id=".$id);
                }
            }
            include_once("./Views/Album/edit.php");
        }

        public function Delete()
        {
            $id = $_GET['id'];
            $album = Album::delete($id);
            $rol = $_SESSION['Rol'];
            if($rol == 'Admin')
            {
                header("Location: ./index.php?controller=album&action=home");
            }
            else if($rol == 'User')
            {
                header("Location: ./index.php?controller=album&action=galery&id=".$id);
            }
        }

        public function Galery()
        {
            $id = $_GET['id'];
            $gal = Fotografia::galery($id);
            $album = Album::search($id);
            include_once("./Views/Album/galery.php");
        }
    }
?>