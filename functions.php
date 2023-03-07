<?php

require_once get_template_directory() . '/inc/template-enqueue.php';
require_once get_template_directory() . '/inc/template-hooks.php';
require_once get_template_directory() . '/inc/template-filters.php';
require_once get_template_directory() . '/inc/carbon-fields/index.php';

function my_print_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
