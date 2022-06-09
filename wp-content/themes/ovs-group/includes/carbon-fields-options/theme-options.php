<?php
    if(!defined('ABSPATH')){
        exit;
    }

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    Container::make('theme_options', 'Настройки сайта')
        ->add_tab('Общие настройки', [
            Field::make('text', 'site_main_name', 'Название организации'),
            Field::make('text', 'site_work_time', 'Режим работы'),
        ])

        ->add_tab('Логотип', [
            Field::make('text', 'site_logo_text', 'Логотип, текст'),
            Field::make('image', 'site_logo', 'Логотип:')
            -> set_width(50),
        ])

        ->add_tab('Контакты', [
            Field::make('text', 'site_address', 'Адрес'),
            Field::make('image', 'site_icon_address', 'Иконка адреса:'),
            Field::make('text', 'site_email_main', 'Основной Email'),
            Field::make('image', 'site_icon_email_header', 'Иконка Email (шапка):')
            -> set_width(50),
            Field::make('image', 'site_icon_email_footer', 'Иконка Email (подвал):')
            -> set_width(50),
            Field::make('text', 'site_phone_main', 'Основной телефон')
            -> set_width(50),
            Field::make('text', 'site_phone_nomask_main', 'Основной телефон в формате +79521112233')
            -> set_width(50),
            Field::make('text', 'site_phone_additional', 'Дополнительный телефон')
            -> set_width(50),
            Field::make('text', 'site_phone_nomask_additional', 'Дополнительный телефон в формате +79521112233')
            -> set_width(50),
            Field::make('image', 'site_icon_phone_header', 'Иконка телефона (шапка):')
            -> set_width(50),
            Field::make('image', 'site_icon_phone_footer', 'Иконка телефона (подвал):')
            -> set_width(50),
        ]);