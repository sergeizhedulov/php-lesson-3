<?php
/* Класс для работы с пользователями (Формирует структуру вокруг таблицы БД = users) */

// app согласно стандарту PSR-0 (\<Vendor Name>\(<Namespace>\)*<Class Name>)
// Создаем ространство имен класса Users
namespace app\models;

class Users extends GeneralModel // Формирование структуры класса (наследован от GeneralModel)
{
    public $id; // ID пользователя
    public $login; // Логин пользователя
    public $password; // Пароль пользователя
    public $hash; // Хеш пользователя

    // Конструктор класса Users
    public function __construct($id = null, $login = null, $password = null, $hash = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->hash = $hash;
    }

    // Метод возвращает имя таблицы в БД (<-- GeneralModel)
    public function getTableName()
    {
        return "users";
    }
}