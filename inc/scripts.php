<?php
/**
 * Load theme assets efficiently
 */

if (!defined('ABSPATH')) exit;

function aurora_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style(
        'aurora-style',
        get_template_directory_uri() . '/style.css',
        [],
        wp_get_theme()->get('Version'),
        'all'
    );

    // Optional: enqueue minimal, async JS if needed
    // wp_enqueue_script('aurora-main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
    
    // Gutenberg frontend compatibility (optional)
    wp_enqueue_style(
        'aurora-blocks',
        get_template_directory_uri() . '/assets/css/editor-style.css',
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'aurora-template-toggle',
        get_template_directory_uri() . '/assets/js/template-toggle.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'aurora_enqueue_assets');

// Remove default jQuery if not needed
function aurora_dequeue_unwanted_assets() {
    wp_dequeue_style('wp-block-library'); // Gutenberg frontend styles
}
add_action('wp_enqueue_scripts', 'aurora_dequeue_unwanted_assets', 100);

function aurora_enqueue_editor_assets() {
    wp_enqueue_script(
        'aurora-legal-block',
        get_template_directory_uri() . '/assets/js/blocks/legal-revision-log.js',
        ['wp-blocks', 'wp-element', 'wp-editor', 'wp-server-side-render'],
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('enqueue_block_editor_assets', 'aurora_enqueue_editor_assets');