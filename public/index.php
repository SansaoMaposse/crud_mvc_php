<?php

    define("ROOT_PATH", dirname(__DIR__));
    require_once ROOT_PATH . '/app/core/App.php';
    // echo $_SERVER['QUERY_STRING'];

    new App();

?>