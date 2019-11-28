<?php
    require_once '../config/config.php';
    // Отображение шаблона главной страницы сайта
    echo render(TEMPLATES_DIR . '/index.tpl', [
            'title'     => 'Главная',
            'h1'        => 'Фото-зоопарк',
            'content'   => 'На этом сайте вы можете посмотреть и приобрести фотографии животных'
    ]);