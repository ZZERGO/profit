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

            echo '<meta refresh="0;https://merchant.webmoney.ru/">';
            exit();
        }
    }

    public function action_register()
    {

    }

    public function action_register()
    {

    }


    public function action_userProfile()
    {
        $this->view = 'profile';
    }

    public function action_profileByLogin()
    {
        $this->view = 'profile';
    }

    public function action_profileById()
    {
        var_dump($this->route);
        //$this->layout = false;
        //$this->view = 'profile';
        //echo 111;
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