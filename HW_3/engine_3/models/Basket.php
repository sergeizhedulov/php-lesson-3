<?php
/* Класс для работы с корзиной (Формирует структуру вокруг таблицы БД = basket) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса Basket
namespace app\models;

class Basket extends GeneralModel // Формирование структуры класса (Наследован от GeneralModel)
{
    public $id; // ID корзины
    public $session_id; // ID сессии
    public $goods_id; // ID товара

    // Конструктор класса Basket
    public function __construct($id = null, $session_id = null, $goods_id = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->session_id = $session_id;
        $this->goods_id = $goods_id;
    }

    // Метод возвращает имя таблицы в БД (<-- GeneralModel)
    public function getTableName()
    {
        return "basket";
    }
}