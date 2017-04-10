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
    protected $view = 'default';

    /** подклчаемый шаблон
     * @var string
     */
    protected $layout = 'default';

    /**
     * Пользовательские данные
     * @var array
     */
    public $data = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->data);
    }


    public function set($vars)
    {
        $this->data = $vars;
    }

}