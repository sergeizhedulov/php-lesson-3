<?php
/* Класс для работы с отзывами (Формирует структуру вокруг таблицы БД = feedback) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса Feedback
namespace app\models;

class Feedback extends GeneralModel// Формирование структуры класса (Наследован от GeneralModel)
{
    public $id; // ID отзыва
    public $name; // Имя пользователя
    public $feedback; // Отзыв

    // Конструктор класса Feedback
    public function __construct($id = null, $name = null, $feedback = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->feedback = $feedback;
    }

    // Метод возвращает имя таблицы в БД (<-- GeneralModel)
    public function getTableName()
    {
        return "feedback";
    }
}