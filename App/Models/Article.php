<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article extends Model //5. Создаём класс Article
{

    protected $header;
    protected $text;

    protected static $table = 'news'; //используем описание защищённого статического свойства

    public static function findLastArticles(int $lim) //создаём описание метода для поиска последних записей из таблицы news
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $lim;

        return $db->query( $sql, static::class );
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function getText()
    {
        return $this->text;
    }

}