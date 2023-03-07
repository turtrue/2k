<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'carbon_home_fields');
function carbon_home_fields()
{
    Container::make('post_meta', 'Дополнительные поля')
        ->show_on_page(78)

        ->add_tab('Первый экран', [
            Field::make('text', 'home_first_heading', 'Заголовок блока'),
            Field::make('association', 'home_first_services', 'Основные услуги')
                ->set_types([
                    [
                        'type'      => 'post',
                        'post_type' => 'service',
                    ]
                ])
        ])

        ->add_tab('Кейсы', [
            Field::make('text', 'home_cases_heading', 'Заголовок блока'),
            Field::make('association', 'home_cases', 'Основные кейсы')
                ->set_types([
                    [
                        'type'      => 'post',
                        'post_type' => 'case',
                    ]
                ])
        ])

        ->add_tab('Популярные услуги', [
            Field::make('text', 'home_services_heading', 'Заголовок блока'),
            Field::make('association', 'home_services', 'Популярные услуги')
                ->set_types([
                    [
                        'type'      => 'post',
                        'post_type' => 'service',
                    ]
                ])
        ])

        ->add_tab('Преимущества работы с нами', [
            Field::make('text', 'home_benefits_heading', 'Заголовок блока'),
            Field::make('complex', 'home_benefits')
                ->setup_labels([
                    'plural_name'   => 'Добавить',
                    'singular_name' => ''
                ])
                ->add_fields([
                    Field::make('text', 'home_benefit', 'Преимущество')->set_width(80),
                    Field::make('text', 'home_benefit_svg', 'SVG тег')->set_width(20)
                ])
        ]);
}
