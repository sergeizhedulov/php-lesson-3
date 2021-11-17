<?php
/* Класс для работы с новостями (Формирует структуру вокруг таблицы БД = news) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса News
namespace app\models;

class News extends GeneralModel // Формирование структуры класса (Наследован от GeneralModel)
{
    public $id; // ID новости
    public $title; // Оглавление новости
    public $preview; // Короткое описание
    public $full; // Полное описание

    // Конструктор класса News
    public function __construct($id = null, $title = null, $preview = null, $full = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->title = $title;
        $this->preview = $preview;
        $this->full = $full;
    }

    // Метод возвращает имя таблицы в БД (<-- GeneralModel)
    public function getTableName()
    {
        return "news";
    }
}