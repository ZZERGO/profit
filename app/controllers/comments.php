<?php


namespace App\Controllers;


class Comments extends App
{
    public function action_Default()
    {
        echo '<h1>Здесь будет страница с комментариями</h1>';
    }

    public function action_Show()
    {
        $method = __METHOD__;
        $class = __CLASS__;
        echo "<h1>Это медот {$method}  в классе {$class} </h1>";
        var_dump($this);
        var_dump($this->config->routes);
    }
}