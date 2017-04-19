<?php

namespace app\controllers;
use app\models\Main;
use R;
use vendor\core\App;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use vendor\core\base\View;

class MainController extends AppController
{
//    $this->layout = 'main';  //Задаем шаблон(layouts) для всех экшнов

    public function indexAction()
    {
        $main = new Main();
//        App::$app->getList();
//        $this->>layout = 'main';  //Задаем шаблон(layouts) для данного экшна
//        $this->layout = false;  //Запрещаем подключение шаблонов
//        $this->layout = 'default';  //подключаем дефолтный шаблон
//        $this->view = 'test';  //указываем с каким видом будем работать, если не указан, то вид выбирается по имени экшна
//        $city = R::findOne('city', 'id=5');
//        $citys = R::findAll('city');
//        echo $city['name'];
//        App::$app->cache->delete('users');
//        $this->set(['citys'=>$citys]);
//        View::setMeta('Интернет магазин', 'Описание Интернет магазина', 'Ключевые слова Интернет магазина');

//        $logger = new Logger('find city');
//        $logger->pushHandler(new StreamHandler(ROOT.'/logs/log', Logger::DEBUG));
//        $logger->debug('find city');



    }
}
