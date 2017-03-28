<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06.11.2016
 * Time: 19:47
 */

namespace App\Controllers;



class Index extends App
{

    public $data = [];

    public function action_Error404()
    {
        echo '<h2>Ошибка 404<br>Страница не найдена</h2>';
    }

    public function action_default()
    {
        $this->layout = 'bootstrap_one';
        $title = 'Самый лучший сайт';
        $name = 'Сергей';
        $this->set(compact('name', 'city', 'color', 'title'));
    }


}