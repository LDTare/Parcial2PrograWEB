<?php
    $control = 'pages';
    $action = 'Home';
    if(isset($_GET['controller']) && isset($_GET['action']))
    {
        if(($_GET['controller']!='')&&($_GET['action']!=''))
        {
            $control = $_GET['controller'];
            $action = $_GET['action'];
        }
    }
    require_once("Views/template.php"); 
?>