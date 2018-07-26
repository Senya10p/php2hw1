<?php

//phpinfo(); // выводит всю информацию в таблице о PHP и всех библиотеках

require __DIR__ . '/autoload.php';


$data = \App\Models\Article::findArticles(); //Двойное двоеточие - признак статического вызова!

//var_dump($data);

include __DIR__ . '/templates/index.php';
