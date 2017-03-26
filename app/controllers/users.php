<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 13.11.2016
 * Time: 18:21
 */

namespace App\Controllers;


use App\Core\Controller;
use App\Core\Interfaces\IHasEmail;

/**
 * Class Users
 * @package App\Controllers
 * $property
 */

class Users extends Controller
implements IHasEmail
{
    public function action_login()
    {
        echo '<h1> Здесь будет форма входа на сайт</h1>';
    }


    public function action_myProfile()
    {
        echo '<h1>Здесь будет страница профиля текущего пользователя</h1>';
    }

    public function action_profileByLogin(string $login)
    {
        echo '<h1>Здесь будет страница профиля с указанным логином: ' . $login . '</h1>';
    }

    public function action_profileById(int $id=2)
    {
        echo '<h1>Здесь будет страница профиля с указанным ID: ' . $id . '</h1>';
    }

    public function action_default()
    {
        echo 'Это метод ' . __METHOD__ . ' в классе ' . __CLASS__;
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