<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', 'my_scripts');
function my_scripts()
{
    wp_register_style('slider-swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('slider-swiper-css');

    wp_enqueue_style('my-style', get_stylesheet_uri());
    wp_enqueue_style('my-media', get_template_directory_uri() . '/assets/css/media.css');

    wp_register_script(
        'slider-swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js'
    );
    wp_enqueue_script(
        'slider-swiper-js',
        '',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'my-script',
        get_template_directory_uri() . '/assets/js/common.js',
        array('slider-swiper-js'),
        null,
        true
    );
}
