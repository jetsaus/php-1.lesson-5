<?php
    require_once '../config/config.php';
    // Отображение шаболона галереи
    echo render(TEMPLATES_DIR . 'gallery.tpl', [
        'title'     => 'Фото-зоопарк',
        'head'      => 'Фото-зоопарк:',
        'content'   => getGallery(IMG_DIR, 4)       // Вызов функции вывода галереи
    ]);
