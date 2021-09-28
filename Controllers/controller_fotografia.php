<?php

    include_once("./Models/album.php");
    include_once("./Models/fotografia.php");
    include_once("./db.php");
    DB::createInstant();

    class ControlFotografia
    {
        public function Home()
        {
            $album = Fotografia::consult();
            include_once("./Views/Fotografia/home.php");
        }

        public function Create()
        {
            $foto = Fotografia::consult();
            $album = Album::consult();
            include_once("./Views/Fotografia/create.php");
        }

        public function Edit()
        {
            $id = $_GET['id'];
            $album = Fotografia::search($id);
        }

        public function Delete()
        {
            $id = $_GET['id'];
            $album = Fotografia::delete($id);
        }
    }
?>