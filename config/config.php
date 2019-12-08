<?php
    // Каталоги сайта
    define('SITE_DIR', __DIR__ . '/../');               // Выход на один уровень вверх в структуре каталогов сайта
    define('CONFIG_DIR', SITE_DIR . 'config/');         // Конфигурация
    define('DATA_DIR', SITE_DIR . 'data/');             // Данные
    define('ENGINE_DIR', SITE_DIR . 'engine/');         // Функционал
    define('WWW_DIR', SITE_DIR . 'public/');            // Каталог, доступный посетителям сайта
    define('TEMPLATES_DIR', SITE_DIR . 'templates/');   // Шаблоны
    define('IMG_DIR', 'img/');                          // Изображения
    
    // Константы соединения с б/д
    define('DB_HOST', 'hw');
    define('DB_USER', 'jetsaus');
    define('DB_PASS', 'opdf117!');
    define('DB_NAME', 'jetsaus');
    define('COLUMNS', 3);
    
    require_once ENGINE_DIR . 'functions.php';          // Общие функции
    require_once ENGINE_DIR . 'gallery.php';            // Функции работы с галереей
    require_once ENGINE_DIR . 'db.php';                 // Функции работы с БД
