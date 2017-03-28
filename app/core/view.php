<?php

namespace App\Core;


/**
 * Class View
 * @package App\Core
 * @property $data
 * @property $news
 */
class View
{
    /**
     * текущий маршрут
     * @var array
     */
    public $route = [];

    /**
     * текущий вид
     * @var string
     */
    public $view = '';

    /**
     * текущий шаблон
     * @var string
     */
    public $layout = 'default';

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;

        if (false === $layout){
            $this->layout = false;
        } elseif ($layout){
            $this->layout = $layout;
        }

        $this->view = str_replace('-', '', $view);
    }

    public function render()
    {
        $file_view =  APP . DS . 'views' . DS . str_replace('-', '', lcfirst($this->route['controller'])) . DS . strtolower($this->view) . '.php';

        ob_start();
        if (is_file($file_view)){
            require $file_view;
        } else {
            echo '<h2>Не найден файл вида: ' . $file_view . '</h2>';
        }
        $content = ob_get_clean();

        $file_layout = APP . DS . 'views' .  DS . '_layouts' . DS . $this->layout . '.php';

        if (false !== $this->layout){
            if (is_file($file_layout)){
                require $file_layout;
            } else {
                echo '<h2>Не найден файл шаблона: </h2>' . $this->layout;
            }
        }

    }
}