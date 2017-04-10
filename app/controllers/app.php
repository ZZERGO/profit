<?php
/**
 * Created by PhpStorm.
 * User: trushkov
 * Date: 28.03.2017
 * Time: 13:43
 */

namespace App\Controllers;


use App\Core\Controller;



abstract class App extends Controller
{

    protected $layout = 'bootstrap_one';

    public abstract function action_default();
}