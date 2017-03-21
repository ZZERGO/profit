<?php

namespace App\Models;
use App\Core\AUsers;
use App\Core\Model;


/**
 * Class User
 * @package App\Model
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $pass
 * @property string $login
 * @property string $email
 * @property $birthday
 *
 */
class User extends Model
{
    public static $table = 'Users';

    public $firstname;
    public $middlename;
    public $lastname;
    public $pass;
    public $login;
    public $email;
    public $birthday;
    public $phone_mobile;
    public $avatar;
    public $department_id;
    public $land_id;

    public function getName()
    {
        echo "<h6>Получаем имя</h6>";
    }

}