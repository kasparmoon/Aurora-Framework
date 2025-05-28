<?php
/**
 * Setup theme features
 */

if (!defined('ABSPATH')) exit;

function aurora_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('align-wide'); // Enables wide and full align support for blocks
    add_theme_support('editor-styles'); // Let theme provide editor styles
    add_theme_support('wp-block-styles'); // Support WordPress default block styles
    add_theme_support('responsive-embeds'); // Responsive embeds support
    add_theme_support('woocommerce'); // WooCommerce support
    
    // Load text domain for translations
    load_theme_textdomain('auroraframework', get_template_directory() . '/languages');
    
    // Load editor styles
    add_editor_style('assets/css/editor-style.css');

    register_nav_menus([
        'primary' => __('Primary Menu', 'auroraframework')
    ]);
}
add_action('after_setup_theme', 'aurora_theme_setup');

// Globally enable lazy loading for all WordPress images
function aurora_enable_lazy_loading() {
    add_filter('wp_get_attachment_image_attributes', function($attr) {
        $attr['loading'] = 'lazy';
        return $attr;
    });
}
add_action('after_setup_theme', 'aurora_enable_lazy_loading');

