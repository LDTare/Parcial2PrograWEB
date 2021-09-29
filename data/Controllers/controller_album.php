<?php
    include_once("./Models/album.php");
    include_once("./Models/usuario.php");
    include_once("./db.php");
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
            $user = Usuario::consult();
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
                Album::create(
                    $usuario, 
                    $n, 
                    $fecha,
                    $sta
                );
                header("Location: ./index.php?controller=album&action=home");
            }
            
            include_once("./Views/Album/create.php");
        }

        public function Edit()
        {
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
                header("Location: ./index.php?controller=album&action=home");
            }
            include_once("./Views/Album/edit.php");
        }

        public function Delete()
        {
            $id = $_GET['id'];
            $album = Album::delete($id);
        }
    }
?>