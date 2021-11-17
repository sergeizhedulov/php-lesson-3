<?php
/* Класс трейта для дополнительных Свойств/Методов */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен трейта TSingletone
namespace app\traits;

trait TSingletone // Формирование структуры трейта
{
    private static $instance = null; // Свойство для хранения экземпляра класса Db

    // Конструктор трейта TSingletone (Указывая private запрещаем создание экземпляров класса Db в других классах)
    private function __construct()
    {
    }
    /* Еще варианты */
//    private function __clone() {}
//    private function __wakeup() {}

    // Метод создает экземпляр класса Db
    public static function getInstance() // (<-- $instance)
    {
        if (is_null(static::$instance)) { // Если экземпляр класса Db не создан
            static::$instance = new static(); // Создаем экземпляр класса Db (new static = new Db())
        }
        return static::$instance; // В противном случае возвращаем хранящееся значение ($instance) экземпляра класса Db
    }
}