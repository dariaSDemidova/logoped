<?php
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('swiper-bundle'), null, true);
});

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('upload_mimes', 'svg_upload_allow');

function register_reviews_post_type()
{
    register_post_type('review', array(
        'labels' => array(
            'name'               => 'Отзывы',
            'singular_name'      => 'Отзыв',
            'add_new'            => 'Добавить отзыв',
            'add_new_item'       => 'Добавить новый отзыв',
            'edit_item'          => 'Редактировать отзыв',
            'new_item'           => 'Новый отзыв',
            'view_item'          => 'Посмотреть отзыв',
            'search_items'       => 'Искать отзывы',
            'not_found'          => 'Отзывов не найдено',
            'not_found_in_trash' => 'В корзине отзывов нет',
            'menu_name'          => 'Отзывы',
        ),
        'public'      => true,
        'menu_icon'   => 'dashicons-format-image',
        'supports'    => array('title', 'thumbnail'),
    ));
}

function svg_upload_allow($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    if (substr($filename, -4) === '.svg') {
        $data['ext']  = 'svg';
        $data['type'] = 'image/svg+xml';
    }
    return $data;
}, 10, 4);

add_filter('get_custom_logo', function ($html) {
    $html = str_replace('custom-logo-link', 'custom-logo-link header__logo', $html);
    return $html;
});

add_action('init', 'register_reviews_post_type');
