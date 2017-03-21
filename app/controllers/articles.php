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

class Articles extends Controller
{


    public function action_Default($category = null)
    {
        echo '<h1>Просмотр статей в категории: ' . $category . '</h1>';
    }

    public function action_ViewById($id)
    {
        echo '<h1>Просмотр статьи c ID = ' . $id . '</h1>';
        var_dump($id);
        //$view = new View();
        //$view->article = Article::findById(2);
        //$tpl = TPL_DIR . DS . $this->config->tpl['name'] . DS . 'fullstory.tpl';
        //$html = $view->render($tpl);
        //$view->parse('{title}', $this->view->title , $html);

    }

    public function action_Add()
    {
        echo '<h1>добавление статьи</h1>';
    }


}