<?php

$WPCMSONE_VERSION = '1.0.0';

add_theme_support( 'post-thumbnails' ); // 添加文章缩略图支持

function theme_scripts() {
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/assets/css/style.min.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );