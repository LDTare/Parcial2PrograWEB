<?php
    session_start();
    error_reporting(0);
    class ControlPages
    {
        public function Home()
        {
            $name = $_SESSION['nombre'];
            $apellido = $_SESSION['apellido'];
            include_once("./Views/Pages/home.php");
        }
        public function Error()
        {
            include_once("./Views/Pages/error.php");
        }
    }

?>