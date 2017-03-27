<?php
namespace App\Core;



abstract class Controller
{

    protected $route = []; // Текущий маршрут
    protected $view; // Подключаемый вид
    protected $tpl_file = '';

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $this->view['action'];
        include APP . DS . 'views' . DS . $this->route['controller'] . DS . $this->view . '.php';
        // $this->view = new View();
        //$this->view = new Vid();
        //$this->config = Config::Instance('tpl');
        //$this->config = Config::Instance('db');
    }

    public abstract function action_default();

}