<?php

namespace App\Models;

use App\Core\Config;

class Db
{
    protected static $dbo = null;


    public static function Connect()
    {
        if (null == self::$dbo){
            self::$dbo = new self();
        }
        return self::$dbo;
    }


    private function __construct()
    {
        $config = Config::Instance('db');

        $host = $config->db['host'];
        $name = $config->db['name'];
        $type = $config->db['type'];
        $user = $config->db['user'];
        $pass = $config->db['pass'];
        $charset = $config->db['charset'];

        // Устанавливаем соединение

        $dsn = $type . ":host=" . $host . "; dbname=" . $name . "; charset=" . $charset;
        try {
            $this->dbh = new \PDO($dsn, $user, $pass);
            echo "<h3>Подключение к БД - $name успешно установлено!</h3>";
        } catch (\PDOException $err){
            echo '<h1>Ошибка подключения к БД: ' . $name . '<br> Ошибка: ' . $err->getCode() . '</h1>';
            echo $err->getMessage();
            die();
        }
        self::$dbo = $this->dbh;
    }


    public function execute(string $sql=null, array $param = []){
        if (0 == strlen($sql)){
            new \Exception('Пустая строка запроса');
        }
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($param);
        if (false == $res){
            new \Exception('Ошибка выполнения запроса к БД');
        }
        return true;
    }


    public function query(string $sql=null, array $data=[], $class = null){
        if (0 == strlen($sql)){
            new \Exception('Пустая строка запроса');
        }
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if (false == $res){
            throw new \Exception('Ошибка выполнения запроса к БД');
        }
        if (null === $class){
            return $sth->fetchAll();
        }elseif (class_exists($class)){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        } else {

        }
    }


    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }

}