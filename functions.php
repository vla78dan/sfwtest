<?php

function sfwtest_scripts()
{
wp_enqueue_style('sfwtest-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

wp_enqueue_style('sfwtest-main', get_stylesheet_uri() . '/assets/css/main.css');
}

