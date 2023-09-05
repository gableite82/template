<?php 

    function path(){
        return $_SERVER['REQUEST_URI'];
    }

    function request(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    function routeExecute()
    {
        try {
            $routes = require '../app/routes/routes.php';
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }
?>