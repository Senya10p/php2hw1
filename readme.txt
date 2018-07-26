PHP-2. Урок 1. 
Домашняя работа. 
 
1. В качестве основы проекта взяли то, что сделано на уроке.

2. Улучшили класс Db. Добавили метод execute($query, $params=[]).

3. Протестировали работу нового метода ( в tests находится файл test.php ) 

4. В абстрактной модели добавили метод public static function findById($id), который возвращает одну запись из таблицы данной модели, с указанным первичным ключом.
Или false, если такой записи не нашлось. 

5.Создаём таблицу с записями новостей.
Для этого создаём из консоли новую датабазу php2test. 'CREATE DATABASE php2test'
Затем подключаемся к датабазе php2test через php storm.

Для создания таблицы news используем запросы:
CREATE TABLE news (id SERIAL, header VARCHAR(50), article TEXT, author VARCHAR(100));

Добавляем в таблицу news записи.
1 запись:
INSERT INTO news
(header, article, author)
VALUE
('Заголовок 1', 'Статья 1', 'Иван');

2 запись:
INSERT INTO news
(header, article, author)
VALUE
('Заголовок 2', 'Статья 2', 'Андрей');

3 запись:
INSERT INTO news
(header, article, author)
VALUE
('Заголовок 3', 'Статья 3', 'Анна');

4 запись:
INSERT INTO news
(header, article, author)
VALUE
('Заголовок 4', 'Статья 4', 'Мария');


Создали модель Article для получения данных. Добавили метод findArticles() для поиска последних 3х статей.
Для передачи данных в шаблон используем include файла с шаблоном.

6. Заголовок каждой новости является ссылкой на страницу /article.php?id=NNN, где NNN - номер этой новости. 
Создали страницу article.php
