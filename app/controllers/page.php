<?php
/**
 * Created by PhpStorm.
 * User: trushkov
 * Date: 27.03.2017
 * Time: 10:20
 */

namespace App\Controllers;


use App\Core\Controller;

class Page extends Controller
{

    public function action_view()
    {
        echo __CLASS__ . ' - ' . __METHOD__;
    }

    public function action_default()
    {
        echo __METHOD__;
    }
}