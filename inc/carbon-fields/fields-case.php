<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'carbon_case_fields');
function carbon_case_fields()
{
    Container::make('post_meta', 'Дополнительные поля')
        ->where('post_type', '=', 'case')

        ->add_tab('Основное', [
            Field::make('textarea', 'case_short_descr', 'Краткое описание кейса')->set_width(50),
            Field::make('textarea', 'case_descr', 'Полное описание кейса')->set_width(50)
        ])

        ->add_tab('Результаты выполненных работ', [
            Field::make('text', 'case_table_heading', 'Заголовок таблицы'),
            Field::make('complex', 'case_table')
                ->setup_labels([
                    'plural_name'   => 'Добавить',
                    'singular_name' => ''
                ])
                ->add_fields([
                    Field::make('text', 'case_table_key', 'Вид работы')->set_width(50),
                    Field::make('text', 'case_table_value', 'Результат')->set_width(50)
                ])
        ]);
}
