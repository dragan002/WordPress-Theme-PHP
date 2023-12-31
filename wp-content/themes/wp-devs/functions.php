<?php  

require get_template_directory() . '/inc/customizer.php';

function wpdevs_load_scripts() {
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_script('dropdown', get_template_directory_uri() .'/js/dropdown.js', array(), '1.0', true );
}
add_action('wp_enqueue_scripts','wpdevs_load_scripts');



function wpdevs_config() {

    $textdomain = 'wp-devs';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'wp_devs_main_menu'=> esc_html__('Main Menu', 'wp-devs'),
            'wp_devs_footer_menu'=> esc_html__('Footer Menu', 'wp-devs')
        )
    );
    $args = array(
        'height' => 225,
        'width'=> 1920
    );

    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width' => 200,
        'height'=> 110,
        'flex-height'=> true,
        'flex-width'=> true
    ));
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script' 
    ));
    //add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');

    // block editor - without this code some style can't be applied in editor, try example with quote block with border on the left side
    add_theme_support('wp-block-editor');
}
add_action('after_setup_theme', 'wpdevs_config', 0);

function wpdevs_register_block_styles() {
    wp_register_style('wpdevs-block-style', get_template_directory_uri() . '/block-style.css');
    register_block_style(
        'core/quote',
        array(
            'name' => 'red-quote',
            'label' => 'Red quote',
            'is_default' => false,
            'style_handle' => 'wpdevs-block-style'
        )
    );
}
add_action('init', 'wpdevs_register_block_styles');



add_action('widgets_init', 'wpdevs_sidebars');
function wpdevs_sidebars() {
    register_sidebar(
        array(
            'name' => esc_html__('Blog sidebar', 'wp-devs'),
            'id' => 'sidebar_blog',
            'description' => esc_html__('This is the Blog Sidebar. You can add your widgets here', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Service 1', 'wp-devs'),
            'id' => 'service-1',
            'description' => esc_html__('First Service Area', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Service 2', 'wp-devs'),
            'id' => 'service-2',
            'description' => esc_html__('Second Service Area', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Service 3 ', 'wp-devs'),
            'id' => 'service-3',
            'description' => esc_html__('Third Service Area', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
}

if(! function_exists('wp_body_open')) {
    function wp_body_open() {
        do_action('wp_body_open');
    }
}