<?php
/**
 * Created by PhpStorm.
 * User: trushkov
 * Date: 27.03.2017
 * Time: 10:20
 */

namespace App\Controllers;


class Page extends App
{

    public function action_view()
    {
        echo __CLASS__ . ' - ' . __METHOD__;
    }

    public function action_default()
    {
        echo __METHOD__;
        var_dump($this->route);

    }

    public function action_static()
    {
        $this->set($this->route);
    }
}