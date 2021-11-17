<?php
/* Класс для работы с заказами (Формирует структуру вокруг таблицы БД = orders) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса Orders
namespace app\models;

class Orders extends GeneralModel // Формирование структуры класса (Наследован от GeneralModel)
{
    public $id; // ID заказа
    public $name; // Имя заказчика
    public $phone; // Телефон заказчика
    public $address; // Адрес заказчика
    public $session_id; // ID сессии

    // Конструктор класса Orders
    public function __construct($id = null, $name = null, $phone = null, $address = null, $session_id = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->session_id = $session_id;
    }

    // Метод возвращает имя таблицы в БД (<-- GeneralModel)
    public function getTableName()
    {
        return "orders";
    }
}