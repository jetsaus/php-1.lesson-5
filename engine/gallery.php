<?php
/*
 * Функции работы с галереей
 */
    // Функция вывода фотогалереи
    function getGallery(
        $fDir = IMG_DIR,    // Папка с изображениями
        $fColumns = 3       // Количество колонок в строке
    )
    {
        $dir = "$fDir/";            // Папка с изображениями
        $columns = $fColumns;       // Количество столбцов при создании таблицы
        $files = scandir($dir);     // все изображения из папки
        natsort($files);            // сортируем в привычном для человека порядке
        echo '<table>';             // откроем тег таблицы
        $k = 0;                     // счетчик картинок в строке
        //  Цикл по всем файлам в каталоге
        foreach ($files as $photo) {
            // Текущий и родительский каталоги пропускаем
            if (($photo != '.') && ($photo != '..')) {
                if ($k % $columns == 0) echo '<tr>';                        // Добавляем новую строку
                echo '<td>';                                                // Начинаем столбец
                $path = $dir . $photo;                                      // Получаем путь к картинке
                echo "<a href=$path target=_blank>";                        // Делаем ссылку на полноформатную картинку
                echo "<img src=$path alt='Фото' width='100' />";            // Вывод превью картинки
                echo '</a>';        // Закрываем ссылку
                echo '</td>';       // Закрываем столбец
                //переход на следеющею строку при заполнении
                if ((($k + 1) % $columns == 0)) echo "</tr>";
                // Увеличиваем  счётчик картинок в строке
                $k++;
            }
        }
        echo '</table>';        // закроем тег таблицы
    }