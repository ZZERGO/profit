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
        $this->view = $this->route['action'];
        $view_file =  APP . DS . 'views' . DS . lcfirst($this->route['controller']) . DS . $this->view . '.php';
        if (isset($view_file)){
            include $view_file;
        } else {
            echo 'Не найден вид';
        }
    }

    public abstract function action_default();

}