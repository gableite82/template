<?php 

    namespace app\framework\classes\Exception;

    use Exception;

    

class Engine{

    public function render()
    {
        $view = dirname($view, 2) . "resources\views\{$view}.php";
        
        if(!file_exists($view)){
            throw new Exception("View {$view} not found!");
            
        }
    }
}
?>