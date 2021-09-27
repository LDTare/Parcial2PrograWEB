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
            if($_POST)
            {
                $user = (int)$_POST['user'];
                $n = $_POST['name'];
                $fecha = $_POST['fecha'];
                $sta = $_POST['estado'];
                if($user == 0)
                {
                    $user = 'null';
                }
            }
            $user = Usuario::consult();
            include_once("./Views/Album/create.php");
        }

        public function Edit()
        {
            $id = $_GET['id'];
            $user = Usuario::consult();
            $album = Album::search($id);
        }

        public function Delete()
        {
            $id = $_GET['id'];
            $album = Album::delete($id);
        }
    }
?>