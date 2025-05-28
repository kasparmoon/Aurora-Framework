<?php
/**
 * AuroraFramework - Theme Functions
 * 
 * @package AuroraFramework
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) exit; // Prevent direct access

// Autoload modular files
require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/scripts.php';
require_once get_template_directory() . '/inc/seo.php';
require_once get_template_directory() . '/inc/security.php';
require_once get_template_directory() . '/inc/customizer/register.php';
require_once get_template_directory() . '/inc/customizer/ecommerce.php';
require_once get_template_directory() . '/inc/customizer/blog.php';
require_once get_template_directory() . '/inc/customizer/portfolio.php';
require_once get_template_directory() . '/inc/customizer/contractor.php';
require_once get_template_directory() . '/inc/seo/meta-fields.php';
require_once get_template_directory() . '/inc/customizer/typography.php';


/**
 * Theme setup - Add support for core features.
 */
function aurora_theme_setup() {
    // Add support for dynamic <title> tag
    add_theme_support('title-tag');

    // Enable support for post thumbnails
    add_theme_support('post-thumbnails');

    // Enable HTML5 markup support
    add_theme_support('html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ]);

    // Register a primary navigation menu
    register_nav_menus([
        'primary' => __('Primary Menu', 'auroraframework')
    ]);
}
add_action('after_setup_theme', 'aurora_theme_setup');

/**
 * Enqueue theme assets - CSS and JS
 */
function aurora_enqueue_assets() {
    // Theme stylesheet
    wp_enqueue_style(
        'aurora-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    // Example: enqueue a JS file (if needed later)
    // wp_enqueue_script('aurora-main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'aurora_enqueue_assets');

/**
 * Function for typography
 */
function aurora_custom_typography_css() {
    $body_size = get_theme_mod('body_font_size', 16) . 'px';
    $heading_weight = get_theme_mod('heading_font_weight', 700);
    echo "<style>
        body { font-size: $body_size; }
        h1, h2, h3, h4, h5, h6 { font-weight: $heading_weight; }
    </style>";
}
add_action('wp_head', 'aurora_custom_typography_css');
