<?php
namespace App\Core;



abstract class Controller
{

    /**
     * // Текущий маршрут (controller, action, params)
     * @var array
     */
    protected $route = [];

    /**
     * Подключаемый вид
     * @var
     */
    protected $view = '';
    protected $layout = '';

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render();
    }

    public abstract function action_default();

}