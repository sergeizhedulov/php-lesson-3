<?php
/* Класс интерфейса */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем пространство имен класса GeneralModel
namespace app\interfaces;

interface IModels // Формирование структуры класса (Реализуется в GeneralModel)
{
    // Метод выполняет SQL запрос для одной позиции
    public function getOneItem($id);

    // Метод выполняет SQL запрос для всех позиций
    public function getAllItem();

    // Метод формирует имя таблицы в БД
    public function getTableName();
}