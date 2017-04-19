<?php

//require '../vendor/libs/rb.php';

//R::setup('mysql:host=localhost;dbname=world','root','123456'); //подключени к БД

//var_dump(R::testConnection()); //проверка подключения
//R::freeze(true);  //true запрещает изменять структуру БД(включать на продакшене)
//R::fancyDebug(TRUE); // выводит выполненый запрос


//Create
//$cat = R::dispense('category');
//$cat->title = 'Категория 1';  //задаем значение
//$id = R::store($cat);  //сохраняем изменения


//Read
//$cat = R::load('category', 1);  //выбираем значение
//echo $cat['title'];  //или $cat->title  //и выводим его


//Update
//$cat = R::load('category', 1);  //выбираем значение
//$cat->title = 'Категория 3';  // и обновляем его
//R::store($cat);  //сохраняем изменения


//Delete
//$cat = R::load('category', 2);  //выбираем значение
//R::trash($cat);  //и удаляем его
//или
//R::wipe('category'); //удаление всех записей из таблицы


//findAll
//$cats = R::findAll('category');  //получаем все записи из таблицы
//$cats = R::findAll('category', 'id > ?',['2']);  //получаем все записи из таблицы где id  больше 2
//или
//$cats = R::findAll('category', 'title LIKE ?',['%catego%']); //получаем все записи из таблицы где в title есть catego


//findOne
//$cat = R::findOne('category', 'id=2');  //получаем одну запись



