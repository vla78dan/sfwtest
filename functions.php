<?php

function sfwtest_debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';

}

//sfwtest_debug(wp_get_theme() ->get("Version"));

function sfwtest_scripts()
{
    wp_enqueue_style('sfwtest-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

//    wp_enqueue_style('sfwtest-main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('sfwtest-style', get_stylesheet_uri(), array(), wp_get_theme()->get("Version"));

    # Подключение библиотеки jquery
//    wp_enqueue_script('sfwtest-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), false, true);


# Подключение библиотеки jquery, которая находится в самом наборе комплекта WP плагине
    wp_enqueue_script('jquery');

    # Подключение сторонней библиотеки jquery, не той, которая по умолчанию в WP
//    wp_deregister_script( 'jquery' );
//    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
//    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('sfwtest-main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
    wp_enqueue_script('sfwtest-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), false, true);

}

add_action('wp_enqueue_scripts', 'sfwtest_scripts');

add_filter('excerpt_more', function ($more) {
    //var_dump($more);
    return '...';
});
function sfwtest_get_human_time()
{
    $time_diff = human_time_diff(get_post_time('U'), current_time('timestamp'));
    return "Опубликовано $time_diff назад.";
}

;

function sfwtest_setup()
{
    add_theme_support('post-thumbnails');
}

;
add_action('after_setup_theme', 'sfwtest_setup');

function sfwtest_post_thumb($id, $size = 'full', $wrapper_class = 'card-thumb')
{
    //global $post;
    $html = '<div class="' . $wrapper_class . '">';
    if (has_post_thumbnail()) {
        $html .= get_the_post_thumbnail($id, $size);
    } else {
        $html .= '<img src="https://picsum.photos/seed/picsum/1200/900"                             class="attachment-test" alt="" width="1200" height="900">';
    }
    $html .= '</div>';
    return $html;
}





























