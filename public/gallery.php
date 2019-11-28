<?php
    require_once '../config/config.php';
    // Отображение шаболона галереи
    echo render(TEMPLATES_DIR . 'gallery.tpl', [
        'title'     => 'Фото-зоопарк',
        'h3'        => 'Наши младшие братья',
        'h4'   => 'Фото-зоопарк:'
    ]);
    // Отображение галереи
    getGallery(IMG_DIR, 3);