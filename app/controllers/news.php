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


    public function action_Default()
    {

        echo '<h1>Просмотр всех новостей</h1>';

        $this->config->tpl['file'] = TPL_DIR . DS . $this->config->tpl['name'] . DS . 'main.tpl';

        $news = Article::findLast(5);

        $this->view->data = $news;

        $this->view->display($this->config->tpl['file']);

    }

    public function action_ViewById($id)
    {
        echo '<h1>Просмотр новости c ID = ' . $id . '</h1>';

        $this->config->tpl['file'] = TPL_DIR . DS . $this->config->tpl['name'] . DS . 'fullstory.tpl';

        $post = Article::findById($id);
        if (!is_null($post)){
            $this->view->data = $post;
            $this->view->display($this->config->tpl['file']);
        } else {
            echo "Данная новость отсутствует";
        }
    }

    public function action_Add()
    {
        echo '<h1>добавление новости</h1>';
    }


    public function action_ViewCategory(string $CategoryName)
    {
        echo '<h1>Просмотр новостей в категории: ' . $CategoryName . '</h1>';
    }
}