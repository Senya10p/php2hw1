<?php


namespace App;


class Db    //2. Улучшаем класс Db.
{

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=php2test', 'root', '');
    }

    public function query($sql, $class, $data = []) //2.2 Добавляем в метод возможность передавать подстановку в запрос
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);

        return $sth->fetchAll( \PDO::FETCH_CLASS, $class );
    }

    public function execute( $query, $params = [] ) //2.3 Добавляем метод execute( $query, $params = [] )
    {
        $sth = $this->dbh->prepare($query);

        return $sth->execute($params);
    }

}