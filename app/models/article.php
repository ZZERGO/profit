<?php
/**
 * Created by PhpStorm.
 * User: trushkov
 * Date: 17.10.2016
 * Time: 15:30
 */

namespace App\Models;

use App\Core\Config;
use App\Core\Model;

/**
 * Class Article
 * @package App\Model
 * @property $author
 */
class Article extends Model
{
    public static $table = 'News';

    public $id;
    public $title;
    public $short_story;
    public $full_story;
    public $author_id;


    /**
     * @param $key
     * @return null| string
     */
    public function __get($key)
    {
        switch ($key){
            case 'author':
                return User::findById($this->author_id);
                break;
            default:
                return null;
        }
    }


    public function __isset($name)
    {
        switch ($name){
            case 'author':
                return true;
                break;
            default:
                return null;
        }
    }

    /**
     * @param $news
     */
    public static function view($news){
        $config = Config::Instance('tpl');
        $tplName = $config->tpl->name;
        $tplFile = TPL_DIR . DS . $tplName . DS . 'fullstory.tpl';
        if (is_readable($tplFile)){
            include_once $tplFile;
        } else {
            echo '<br>Файл шаблона не найден';
        }
    }

}
