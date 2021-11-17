<?php
/* Класс для работы с товарами (Формирует структуру вокруг таблицы БД = goods) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса Goods
namespace app\models;

class Goods extends GeneralModel // Формирование структуры класса (Наследован от GeneralModel)
{
    public $id; // ID товара
    public $image; // Изображение товара
    public $name; // Наименование товара
    public $price; // Стоимость товара
    public $description; // Описание товара

    // Конструктор класса Goods
    public function __construct($id = null, $image = null, $name = null, $price = null, $description = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    // Метод возвращает имя таблицы в БД (<-- GeneralModel)
    public function getTableName()
    {
        return "goods";
    }
}