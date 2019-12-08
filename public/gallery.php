<?php
    require_once '../config/config.php';
    $htmlGallery = getGallery(IMG_DIR, COLUMNS);        // Формирование HTML галереи
    echo render(TEMPLATES_DIR . 'gallery.tpl', [        // Отображение галереи
            'title'     => 'Фото-зоопарк',
            'head'      => 'Фото-зоопарк:',
            'content'   => $htmlGallery
    ]);
