<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06.11.2016
 * Time: 19:47
 */

namespace App\Controllers;


use App\Core\Controller;
use App\Models\Article;

class Index extends Controller
{

    public function action_Error404()
    {
        echo '<h2>Ошибка 404<br>Страница не найдена</h2>';
    }

    public function action_default()
    {

    }


}