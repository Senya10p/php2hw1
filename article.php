<?php
/*6. Создаём страницу article.php. Заголовок каждой новости на главной странице является ссылкой на страницу /article.php?id=NNN,
где NNN - номер этой новости.*/

require __DIR__ . '/autoload.php';

if ( isset($_GET['id']) ) { //проверяем на существование

    $new = \App\Models\Article::findBiId( $_GET['id'] );

    if ( false === $new ) { //если новости с таким id не существует
        die ( 'Такой новости не существует' );
    }

    //var_dump($new);
    include __DIR__ . '/templates/article.php';
}
