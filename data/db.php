<?php
    class DB{
        private static $instant=null;

        public static function createInstant()
        {
            if(!isset(self::$instant))
            {
                $optionPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instant = new PDO('mysql:host=localhost;dbname=parcial_prograweb','root','',$optionPDO);
            }
            return self::$instant;
        }
    }

    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'parcial_prograweb'
    ) or die(mysqli_error($conn));
?>