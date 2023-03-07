<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'carbon_service_categories_fields');
function carbon_service_categories_fields()
{
    Container::make('term_meta', 'Дополнительные поля')
        ->where('term_taxonomy', '=', 'service-categories')

        ->add_tab(
            'Статьи',
            [
                Field::make('complex', 'service_categories_articles')
                    ->setup_labels([
                        'plural_name'   => 'Добавить',
                        'singular_name' => ''
                    ])
                    ->add_fields([
                        Field::make('text', 'service_cat_article_heading', 'Заголовок статьи'),
                        Field::make('rich_text', 'service_cat_article', 'Статья')
                    ])
            ]
        );
}
