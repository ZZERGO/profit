<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 23.03.2017
 * Time: 21:26
 */

namespace App\Core;


class Vid
{

    // текущий маршрут
    public $route =[];

    //текущий шаблон
    public $layout = "default";

    // текущий вид
    public $view = '';

    public function __construct($route=[])
    {
        $this->route = $route;
        $this->view = $this->route['controller'];
        $this->layout = $this->route['action'];
        var_dump($this);
    }

    public function render(){
        $file_view = ROOT . DS . 'app' . DS . 'views' . DS . $this->view . DS . $this->layout .

    }


    public function getRoute(){

    }
}