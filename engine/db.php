<?php
/*
 * Функции работы с БД
 */

// Создание соединения с БД
function createConnection()
{
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);   // Подключение к БД
    mysqli_set_charset($db, 'utf8');                            // Установка кодировки UTF-8
    return $db;
}

// Выполнение SQL-запроса
// Применяется только для модификации данных
// Возвращает количество записей, затронутых SQL-запросом
function execQuery($sql)
{
    $db = createConnection();               // Создание соединения
    $result = mysqli_query($db, $sql);      // Выполнение запроса
    mysqli_close($db);                      // Закрытие соединения
    return $result;
}

// Создание соединения, выполнение запроса и возврат результата запроса, как результата выполнения функции
// Применяется для выборки данных
function getAssocResult($sql)
{
    $db = createConnection();                       // Создание соединения
    $result = mysqli_query($db, $sql);              // Выполнение запроса к БД
    $arrayResult = [];                              // Объявление массива для возврата выборки
    while ($row = mysqli_fetch_assoc($result)) {    // Цикл по результирующему ряду выборки
        $arrayResult[] = $row;                          // Добавление элемента выборки в результирующий массив
    }
    mysqli_close($db);                              // Закрытие соединения с БД
    return $arrayResult;
}