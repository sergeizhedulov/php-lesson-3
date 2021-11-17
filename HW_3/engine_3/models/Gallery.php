<?php
/* Класс для работы с галереей (Формирует структуру вокруг таблицы БД = gallery) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса Gallery
namespace app\models;

class Gallery extends GeneralModel // Формирование структуры класса (Наследован от GeneralModel)
{
    public $id; // ID изображения
    public $filename; // Имя файла
    public $likes; // Количество лайков

    // Конструктор класса Gallery
    public function __construct($id = null, $filename = null, $likes = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->filename = $filename;
        $this->likes = $likes;
    }

    // Метод возвращает имя таблицы в БД (<-- GeneralModel)
    public function getTableName()
    {
        return "gallery";
    }
}