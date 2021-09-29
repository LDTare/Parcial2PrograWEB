<?php
    //echo $control;
    //echo $action;
    include_once("Controllers/controller_". $control .".php");
    $objControlador ="Control".ucfirst($control);
    $control = new $objControlador;
    $control->$action();
?>