<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'carbon_service_fields');
function carbon_service_fields()
{
    Container::make('post_meta', 'Дополнительные поля')
        ->where('post_type', '=', 'service')

        ->add_tab('Основное', [
            Field::make('textarea', 'service_descr', 'Описание услуги')->set_width(50),
            Field::make('text', 'service_price', 'Цена услуги через запятую, например 50,000')->set_width(50)
        ])

        ->add_tab(
            'Успехи клиентов',
            [
                Field::make('text', 'clients_success_heading', 'Заголовок блока'),
                Field::make('complex', 'clients_success')
                    ->setup_labels([
                        'plural_name'   => 'Добавить',
                        'singular_name' => ''
                    ])
                    ->add_fields([
                        Field::make('text', 'client_site_domain', 'Домен сайта клиента')->set_width(50),
                        Field::make('image', 'client_site_graph', 'График успеха')->set_width(50)
                    ])
            ]
        )

        ->add_tab(
            'Тарифы',
            [
                Field::make('text', 'service_rates_heading', 'Заголовок блока'),
                Field::make('complex', 'service_rates')
                    ->setup_labels([
                        'plural_name'   => 'Добавить',
                        'singular_name' => ''
                    ])
                    ->add_fields([
                        Field::make('text', 'service_table_heading', 'Заголовок таблицы'),
                        Field::make('complex', 'service_table')
                            ->setup_labels([
                                'plural_name'   => 'Добавить',
                                'singular_name' => ''
                            ])
                            ->add_fields([
                                Field::make('text', 'service_table_key', 'Тариф')->set_width(50),
                                Field::make('text', 'service_table_value', 'Значение')->set_width(50)
                            ])
                    ])
            ]
        )

        ->add_tab(
            'Преимущества',
            [
                Field::make('text', 'service_benefits_heading', 'Заголовок блока'),
                Field::make('complex', 'service_benefits')
                    ->setup_labels([
                        'plural_name'   => 'Добавить',
                        'singular_name' => ''
                    ])
                    ->add_fields([
                        Field::make('text', 'service_benefits_list_heading', 'Заголовок списка'),
                        Field::make('complex', 'service_benefits_list')
                            ->setup_labels([
                                'plural_name'   => 'Добавить',
                                'singular_name' => ''
                            ])
                            ->add_fields([
                                Field::make('text', 'service_benefit', 'Преимущество')
                            ])
                    ])
            ]
        );
}
