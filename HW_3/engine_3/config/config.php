<?php
/* Файл конфигурации */

// Константы
define('DS', DIRECTORY_SEPARATOR); // Разделитель пути
define('ROOT_DIR', dirname(__DIR__)); // Родительский каталог

/* Сбособы формирования абсолютного пути к файлу */
//define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . "/../"); // 1й способ (Неканонический путь)
//define('ROOT_DIR', dirname(__DIR__)); // 2й способ