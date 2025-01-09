<?php

function sfwtest_scripts()
{
    wp_enqueue_style('sfwtest-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_style('sfwtest-main', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('sfwtest-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');

}

add_action('wp_enqueue_scripts', 'sfwtest_scripts');


