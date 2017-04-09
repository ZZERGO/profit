<?php
/**
 * Created by PhpStorm.
 * User: trushkov
 * Date: 01.11.2016
 * Time: 13:48
 */

namespace App\Controllers;


class News extends App
{


    public function action_default()
    {
        echo __METHOD__;
    }

    public function action_fullstory($id)
    {
        echo '<h1>Просмотр новости c ID = ' . $id . '</h1>';

    }

    public function action_add()
    {

    }


    public function action_viewCategoryNews(string $CategoryName)
    {
        echo '<h1>Просмотр новостей в категории: ' . $CategoryName . '</h1>';
    }
}