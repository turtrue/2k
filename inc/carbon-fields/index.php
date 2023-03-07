<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', 'carbon_load');
function carbon_load()
{
    require_once(__DIR__ . '/../../vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

require_once __DIR__ . '/theme-options.php';
require_once __DIR__ . '/fields-home.php';
require_once __DIR__ . '/fields-service.php';
require_once __DIR__ . '/fields-case.php';
require_once __DIR__ . '/fields-service-categories.php';
