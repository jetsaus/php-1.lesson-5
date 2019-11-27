<?php
    require_once '../config/config.php';
    // Отображение шаболона галереи
    echo render(TEMPLATES_DIR . 'gallery.tpl', [
        'title'     => 'Животные',
        'h3'        => 'Мои любимые животные',
        'h4'   => 'Фото-галерея животных:'
    ]);
    // Отображение галереи
    galleryRendering(IMG_DIR, 3);