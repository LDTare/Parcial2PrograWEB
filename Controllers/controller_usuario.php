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
            include_once("./Views/Usuarios/create.php");
        }

        public function Edit()
        {
            $id = $_GET['id'];
            $user = Usuario::search($id);
        }

        public function Delete()
        {
            $id = $_GET['id'];
            $user = Usuario::delete($id);
        }
    }

?>