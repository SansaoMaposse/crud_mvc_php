<?php

class App{
    protected $controller = "HomeController";
    protected $action = "index";
    protected $params = [];

    public function __construct(){
        $url = $_SERVER['QUERY_STRING'];

        $url = explode("/", $url);

        echo $url[0];
    }   
}


?>