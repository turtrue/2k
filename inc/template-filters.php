<?php

if (!defined('ABSPATH')) {
    exit;
}

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args)
{
    if ($args->menu === 'main') {
        if ($item->current) {
            $atts['class'] = 'active';
        }
    };

    return $atts;
}
