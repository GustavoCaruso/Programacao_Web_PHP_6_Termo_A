<?php 

namespace Php\Biblioteca\Controller;


class HomeController{

    //http get

    public function index($params){
       require '../src/View/Home/index.php';
    }

}


