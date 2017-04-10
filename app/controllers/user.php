<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.11.2016
 * Time: 18:21
 */

namespace App\Controllers;

use App\Core\Interfaces\IHasEmail;

/**
 * Class Users
 * @package App\Controllers
 * $property
 */

class User extends App
implements IHasEmail
{
    public function action_login()
    {
        if ($_POST){
            //header(" Location: http://profit ");
        }
    }


    public function action_register()
    {
        if ($_POST){
            header("Location: http://" . $_SERVER['HTTP_HOST']);
            exit;
        }
    }

    public function action_userProfile()
    {
        var_dump($this->route);
        if (isset($this->route['id'])){
            echo $this->route['id'];
        } elseif (isset($this->route['login'])){
            echo $this->route['login'];
        }
        $this->view = 'profile';
    }

    public function action_profileByLogin()
    {
        $this->view = 'profile';
    }

    public function action_viewAll()
    {
        //var_dump($this->route);
        //$this->layout = false;
        $this->view = 'userList';

    }

    public function action_default()
    {
        echo 'Это метод ' . __METHOD__ . ' в классе ' . __CLASS__;
        var_dump($this);
    }


    /**
     * Возвращает адрес электронной почты
     * @return string Адрес электронной почты
     */
    public function getEmail()
    {
        return $this->email;

    }
}