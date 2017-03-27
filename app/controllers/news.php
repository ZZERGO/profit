<?php
/**
 * Created by PhpStorm.
 * User: trushkov
 * Date: 01.11.2016
 * Time: 13:48
 */

namespace App\Controllers;

use App\Core\Controller;
use App\Core\View;
use App\Models\Article;

class News extends Controller
{


    public function action_default()
    {
        var_dump($_GET);
        var_dump($this->route);
    }

    public function action_fullstory($id)
    {
        echo '<h1>Просмотр новости c ID = ' . $id . '</h1>';

    }

    public function action_addNews()
    {
        echo '<h1>добавление новости</h1>';
    }


    public function action_viewCategoryNews(string $CategoryName)
    {
        echo '<h1>Просмотр новостей в категории: ' . $CategoryName . '</h1>';
    }
}