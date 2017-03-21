<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.11.2016
 * Time: 18:19
 */

namespace App\Controllers;


use App\Core\Controller;

class Page extends Controller
{

    public function action_View()
    {
        echo 'Это метод ' . __METHOD__ . ' в классе ' . __CLASS__;
    }

    public function action_Default()
    {
        echo '<h1>Это метод Deafult в классе ' . __CLASS__ . '</h1>';
    }

    public function action_About()
    {
        echo '<h1>Здесь будет информация о нас</h1>';
    }

    public function action_Contact()
    {
        echo '<h1>Здесь будет информация с контактами</h1>';
    }
}