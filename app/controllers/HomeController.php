<?php 

namespace app\controllers\view;

class HomeController{

    public function index() 
    {
        view('home', ['nome' => 'Gabriel', 'age' => '40']); 
    }

}
?>