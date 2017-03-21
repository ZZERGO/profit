<?php
/**
 * Created by PhpStorm.
 * User: trushkov
 * Date: 29.10.2016
 * Time: 21:27
 */
 

namespace App\Models;

use App\Core\Model;

class Author extends Model
{
    public static $table = 'authors';

    public $name;

}