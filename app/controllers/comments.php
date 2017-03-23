<?php
/**
 * Created by PhpStorm.
 * User: trushkov
 * Date: 03.11.2016
 * Time: 16:09
 */

namespace App\Controllers;


use App\Core\Controller;

class Comments extends Controller
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