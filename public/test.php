<?php
/*
 * Файл для тестирования функций
 */
require_once '../config/config.php';

$testResult = getSingle('SELECT * FROM gallery WHERE photo_id = 3');
var_dump($testResult);