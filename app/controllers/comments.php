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
        echo 'Медот '. __METHOD__ . ' в классе ' . __CLASS__ . '<br>';
    }
}