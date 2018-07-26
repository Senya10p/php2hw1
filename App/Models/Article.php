<?php


namespace App\Models;


use App\Db;
use App\Model;

class Article extends Model //5. Создаём модель Article
{

    public $header;
    public $article;
    public $author;

    protected static $table = 'news'; //используем защищённое статическое свойство


    public static function findArticles() //создаём метод для поиска 3-х последних записей из таблицы news
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT 3';
        //var_dump($sql);

        return $db->query( $sql, static::class, [] );
    }

}

