<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'carbon_attach_theme_options');
function carbon_attach_theme_options()
{
    Container::make('theme_options', 'Настройки сайта')
        ->add_tab('Общие настройки', [
            Field::make('image', 'site_logo', 'Логотип сайта')
        ])

        ->add_tab('Контакты', [
            Field::make('text', 'site_phone', 'Номер телефона')->set_width(33),
            Field::make('text', 'site_phone_digits', 'Номер телефона без пробелов +78888888888')->set_width(33),
            Field::make('text', 'site_email', 'Электронная почта')->set_width(33),
            Field::make('text', 'site_vk', 'ВКонтакте')->set_width(33),
            Field::make('text', 'site_youtube', 'Youtube')->set_width(33),
            Field::make('text', 'site_ok', 'Одноклассники')->set_width(33)
        ]);
}
