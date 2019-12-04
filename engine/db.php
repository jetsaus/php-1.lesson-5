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
function execQuery($sql)
{
    $db = createConnection();               // Создание соединения
    $result = mysqli_query($db, $sql);      // Выполнение запроса
    mysqli_close($db);                      // Закрытие соединения
    return $result;
}

// Создание соединения, выполнение запроса и возврат результата запроса, как результата выполнения функции
function getAssocResult($sql)
{
    $db = createConnection();
    $result = mysqli_query($db, $sql);
    $arrayResult = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $arrayResult[] = $row;
    }
    mysqli_close($db);
    return $arrayResult;
}