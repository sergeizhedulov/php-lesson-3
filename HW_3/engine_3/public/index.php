<?php
/* Точка входа в приложение */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
use app\engine\{
    Autoload,
    Db
}; // Используем пространство имен директории engine для подключения классов <-
// use app\interfaces\IModels; // Используем пространство имен директории interfaces для подключения класса IModels <-
use app\models\{
    Basket,
    Feedback,
    Gallery,
    Goods,
    News,
    Orders,
    Users
}; // Используем пространство имен директории models для подключения классов <-

/* realpath формирует абсолютный путь */
require_once realpath("../config/config.php"); // Подключаем файл конфигурации
require_once realpath("../engine/Autoload.php"); // Подключаем класс с методами автозагрузки моделей приложения

spl_autoload_register([new Autoload(), 'loadClass']); // Регистрируем класс и его метод автозагрузки моделей приложения
// в стеке автозагрузки

$product = new Goods('', 'GT76TITAN1.png', 'GT76 Titan', 2800, 'Самый мощный в серии «Титанов».'); // Создаем экземпляр класса Goods
//var_dump($product->getOneItem(1));
//var_dump($product);
$product->insert();

/* Пример полиморфизма
function foo(IModels $model) {
    return $model->getTableName();
}

echo foo($product);
echo foo($users);
*/