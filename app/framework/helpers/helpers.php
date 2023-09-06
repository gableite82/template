<?php 

    use app\framework\classes\Router;
    use app\framework\classes\Exception\Engine;
    

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
            $router = new Router;
            $router->execute($routes);
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }

    function view(string $view, array $data = []){
        try {
            $engine = new Engine;
            $engine->render($view, $data);
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }
?>