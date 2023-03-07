<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_head', 'wp_site_icon', 99);

add_action('after_setup_theme', 'theme_support');
function theme_support()
{
    add_theme_support('menus');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('service', [
        'label'  => null,
        'labels' => [
            'name'               => 'Услуга', // основное название для типа записи
            'singular_name'      => 'Услуга', // название для одной записи этого типа
            'add_new'            => 'Добавить услугу', // для добавления новой записи
            'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
            'new_item'           => 'Новая услуга', // текст новой записи
            'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
            'search_items'       => 'Искать услугу', // для поиска по этим типам записи
            'not_found'          => 'Услуги не найдены', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Корзина пуста', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Услуги' // название меню
        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 5,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => ['slug' => 'services'],
        'query_var'           => true
    ]);

    register_taxonomy('service-categories', ['service'], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Категории услуг',
            'singular_name'     => 'Категория услуг',
            'search_items'      => 'Искать категории',
            'all_items'         => 'Все категории',
            'view_item '        => 'Посмотреть категорию',
            'parent_item'       => 'Родительская категория',
            'parent_item_colon' => 'Родительская категория:',
            'edit_item'         => 'Изменить категорию',
            'update_item'       => 'Обновить категорию',
            'add_new_item'      => 'Добавить новую категорию',
            'new_item_name'     => 'Новое название категории',
            'menu_name'         => 'Категории',
            'back_to_items'     => '← Back to Genre',
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        // 'publicly_queryable'    => null, // равен аргументу public
        // 'show_in_nav_menus'     => true, // равен аргументу public
        // 'show_ui'               => true, // равен аргументу public
        // 'show_in_menu'          => true, // равен аргументу show_ui
        // 'show_tagcloud'         => true, // равен аргументу show_ui
        // 'show_in_quick_edit'    => null, // равен аргументу show_ui
        'hierarchical'          => true,
        'rewrite'               => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ]);

    register_post_type('case', [
        'label'  => null,
        'labels' => [
            'name'               => 'Кейс', // основное название для типа записи
            'singular_name'      => 'Кейс', // название для одной записи этого типа
            'add_new'            => 'Добавить кейс', // для добавления новой записи
            'add_new_item'       => 'Добавление кейса', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование кейса', // для редактирования типа записи
            'new_item'           => 'Новый кейс', // текст новой записи
            'view_item'          => 'Смотреть кейс', // для просмотра записи этого типа.
            'search_items'       => 'Искать кейс', // для поиска по этим типам записи
            'not_found'          => 'Кейсы не найдены', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Корзина пуста', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Кейсы' // название меню
        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 5,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => ['slug' => 'cases'],
        'query_var'           => true
    ]);
}
