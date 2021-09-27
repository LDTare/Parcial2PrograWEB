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
            include_once("./Views/Album/create.php");
        }

        public function Edit()
        {
            $id = $_GET['id'];
            $album = Album::search($id);
        }

        public function Delete()
        {
            $id = $_GET['id'];
            $album = Album::delete($id);
        }
    }
?>