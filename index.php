<?php

//Главная страница

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::findLast(3); //Получаем последние 3 статьи из новостей

include __DIR__ . '/templates/index.php';
