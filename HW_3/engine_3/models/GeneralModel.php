<?php
/* Класс для сбора общих Свойств/Методов для всех моделей */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса GeneralModel
namespace app\models;

use app\engine\Db; // Используем пространство имен директории engine, для доступа к классу Db
use app\interfaces\IModels; // Используем пространство имен директории interfaces, для доступа к классу IModels

abstract class GeneralModel implements IModels // Формирование структуры класса
// (Создание экземпляров класса ЗАПРЕЩЕНО (abstract)) (Реализует интерфейс IModels)
{
    protected $db; // Свойство для экземпляра класса Db

    // Конструктор класса GeneralModel
    public function __construct()
    {
        $this->db = Db::getInstance(); // Свойству $db (<-- traits/TSingletone.php) присваиваем экземпляр класса Db
    }

    // Метод запрашивает результат выполнения SQL запроса у экземпляра класса Db для одной позиции
    // $id - ID позиции для формирования SQL запроса
    public function getOneItem($id)
    {
        $tableName = $this->getTableName(); // Присваиваем переменной значение имени таблицы (<-- наследниками)
        $sql = "SELECT * FROM `{$tableName}` WHERE `id` = :id"; // Формируем SQL запрос на получение позиции по ID
        // где :id <- это плейсхолдер
        return $this->db->queryOne($sql, ['id' => $id]); // (--> engine/Db.php)
    }

    // Метод запрашивает результат выполнения SQL запроса у экземпляра класса Db для всех позиций
    public function getAllItem()
    {
        $tableName = $this->getTableName(); // Присваиваем переменной значение имени таблицы (<-- наследниками)
        $sql = "SELECT * FROM `{$tableName}`"; // Формируем запрос на получение всех позиций
        return $this->db->queryAll($sql); // (--> engine/Db.php)
    }

    // Обязуем реализовать метод возвращающий имя таблицы в БД в наследниках (abstract)
    abstract public function getTableName();

    // ...
    public function insert()
    {
        $tableName = $this->getTableName(); // Присваиваем переменной значение имени таблицы (<-- наследниками)
        foreach ($this as $key => $value) {
            if ($key == 'db') {
                continue;
            }
        }
        $sql = "INSERT INTO `{$tableName}`(`image`, `name`, `price`, `description`) VALUES ({$this->image}, {$this->name}, {$this->price}, {$this->description})";
        var_dump($this->db->query($sql, $params = []));
    }

    public function delete()
    {
//        $tableName = $this->getTableName(); // Присваиваем переменной значение имени таблицы (<-- наследниками)
//        $sql = "DELETE FROM `{$tableName}` WHERE `id` = {$this->id}";
    }

    public function update()
    {

    }
}