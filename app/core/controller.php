<?php
namespace App\Core;



abstract class Controller
{

    public $config;
    public $view;
    protected $tpl_file = '';

    public function __construct()
    {
        // $this->view = new View();
        //$this->view = new Vid();
        //$this->config = Config::Instance('tpl');
        //$this->config = Config::Instance('db');
    }

    public abstract function action_default();

}