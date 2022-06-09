<?php
    if(!defined('ABSPATH')){
        exit;
    }

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    Container::make('post_meta', 'Дополнительные поля')
        ->show_on_page(10)
        ->add_tab('Слайдер стартового экрана', [
            Field::make('text', 'site_main_name1', 'Название организации:'),
        ])
        
        ->add_tab('Раздел "О компании"', [
            Field::make('text', 'index_about_title', 'Заголовок раздела:'),
            Field::make('image', 'index_about_img', 'Изображение:'),
            Field::make('rich_text', 'index_about_text', 'Текст раздела:'),
        ])
        
        ->add_tab('Раздел "Наши услуги"', [
            Field::make('text', 'index_services_title', 'Заголовок раздела:'),
        ])
        
        ->add_tab('Слайдер "Производители"', [
            Field::make('text', 'index_brends_title', 'Заголовок раздела:'),
        ]);