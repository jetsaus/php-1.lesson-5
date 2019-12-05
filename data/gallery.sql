/* Установка автоинкремента на идентификатор */
ALTER TABLE `gallery`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/* Наполнение данными таблицы */
INSERT INTO `gallery` (`id`, `url`, `size`, `name`, `description`, `views`) VALUES
    (1, '1.jpg', 170934, 'Дельфин', NULL, 0),
    (2, '2.jpg', 98882, 'Лиса', NULL, 0),
    (3, '3.jpg', 372746, 'Коала', NULL, 0),
    (4, '4.jpg', 339981, 'Лев', NULL, 0),
    (5, '5.jpg', 442827, 'Рысь', NULL, 0),
    (6, '6.jpg', 365881, 'Панда', NULL, 0),
    (7, '7.jpg', 254168, 'Белый медведь', NULL, 0),
    (8, '8.jpg', 225933, 'Пума', NULL, 0),
    (9, '9.jpg', 359751, 'Тигр', NULL, 0),
    (10, '10.jpg', 220331, 'Волки', NULL, 0);
