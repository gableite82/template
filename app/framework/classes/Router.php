<?php 

    namespace app\framework\classes;


    use Exception;

    class Router {
        private string $path;
        private string $request;

        private function routerFound($routes)
        {
            if (!isset($routes[$this->request])) {
                throw new Exception("Router {$this->path} does not exist");
            }

            if (!isset($routes[$this->request][$this->path])) {
                throw new Exception("Router {$this->path} does not exist");
            }
        }

        private function controllerFound()
        {

        }

        public function execute()
        {
            $this->path = path();
            $this->request = request();


            $this->routerFound($routes);
        }
    }

?>