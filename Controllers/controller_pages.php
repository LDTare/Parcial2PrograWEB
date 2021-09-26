<?php

    class ControlPages
    {
        public function Home()
        {
            include_once("./Views/Pages/home.php");
        }
        public function Error()
        {
            include_once("./Views/Pages/error.php");
        }
    }

?>