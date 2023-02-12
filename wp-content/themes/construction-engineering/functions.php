<?php

require get_stylesheet_directory() . '/customizer/customizer.php';

add_action( 'after_setup_theme', 'construction_engineering_after_setup_theme' );
function construction_engineering_after_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'construction-engineering-featured-image', 2000, 1200, true );
    add_image_size( 'construction-engineering-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff'
    ) );

    add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

    add_editor_style( array( 'assets/css/editor-style.css') );
}

/**
 * Register widget area.
 */
function construction_engineering_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'construction-engineering' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'construction-engineering' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'construction-engineering' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'construction-engineering' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar 3', 'construction-engineering' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'construction-engineering' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'construction-engineering' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'construction-engineering' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'construction-engineering' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'construction-engineering' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'construction-engineering' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'construction-engineering' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'construction-engineering' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'construction-engineering' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'construction_engineering_widgets_init' );

// enqueue styles for child theme
function construction_engineering_enqueue_styles() {

    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

    // Theme block stylesheet.
    wp_enqueue_style( 'construction-engineering-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'construction-engineering-child-style' ), '1.0' );

    // enqueue parent styles
    wp_enqueue_style('construction-hub-style', get_template_directory_uri() .'/style.css');

    // enqueue child styles
    wp_enqueue_style('construction-hub-child-style', get_stylesheet_directory_uri() .'/style.css', array('construction-hub-style'));

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
}
add_action('wp_enqueue_scripts', 'construction_engineering_enqueue_styles');

function construction_engineering_admin_scripts() {
    // Backend CSS
    wp_enqueue_style( 'construction-engineering-backend-css', get_theme_file_uri( '/assets/css/customizer.css' ) );
}
add_action( 'admin_enqueue_scripts', 'construction_engineering_admin_scripts' );

function construction_engineering_header_style() {
    if ( get_header_image() ) :
    $custom_header = "
        .headerbox{
            background-image:url('".esc_url(get_header_image())."');
            background-position: center top;
        }";
        wp_add_inline_style( 'construction-engineering-child-style', $custom_header );
    endif;
}
add_action( 'wp_enqueue_scripts', 'construction_engineering_header_style' );

define('CONSTRUCTION_ENGINEERING_CREDIT',__('https://www.themespride.com/themes/free-engineering-wordpress-theme/','construction-engineering') );
if ( ! function_exists( 'construction_engineering_credit' ) ) {
    function construction_engineering_credit(){
        echo "<a href=".esc_url(CONSTRUCTION_ENGINEERING_CREDIT)." target='_blank'>".esc_html__('Construction Engineering WordPress Theme','construction-engineering')."</a>";
    }
}

if ( ! defined( 'CONSTRUCTION_HUB_PRO_THEME_NAME' ) ) {
    define( 'CONSTRUCTION_HUB_PRO_THEME_NAME', esc_html__( 'Construction Engineer Pro', 'construction-engineering' ));
}
if ( ! defined( 'CONSTRUCTION_HUB_PRO_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_PRO_THEME_URL', esc_url('https://www.themespride.com/themes/civil-engineering-wordpress-theme/'));
}
if ( ! defined( 'CONSTRUCTION_HUB_RATE_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_RATE_THEME_URL', 'https://wordpress.org/support/theme/construction-engineering/reviews/#new-post' );
}
if ( ! defined( 'CONSTRUCTION_HUB_CHANGELOG_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_CHANGELOG_THEME_URL', get_stylesheet_directory() . '/readme.txt' );
}
if ( ! defined( 'CONSTRUCTION_HUB_SUPPORT_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/construction-engineering' );
}
if ( ! defined( 'CONSTRUCTION_HUB_DEMO_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_DEMO_THEME_URL', 'https://www.themespride.com/construction-engineering-pro/' );
}
if ( ! defined( 'CONSTRUCTION_HUB_DOCS_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_DOCS_THEME_URL', 'https://www.themespride.com/demo/docs/construction-engineering-lite/' );
}
if ( ! defined( 'CONSTRUCTION_HUB_DOCS_URL' ) ) {
    define( 'CONSTRUCTION_HUB_DOCS_URL', 'https://www.themespride.com/demo/docs/construction-engineering-lite/' );
}
if ( ! defined( 'CONSTRUCTION_HUB_FREE_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_FREE_THEME_URL', 'https://www.themespride.com/themes/free-engineering-wordpress-theme/' );
}
