<?php
/**
 * Basic SEO and Schema Markup
 */

if (!defined('ABSPATH')) exit;

// Output meta description
function aurora_meta_description() {
    if (is_singular()) {
        global $post;
        $excerpt = strip_tags($post->post_excerpt ?: wp_trim_words($post->post_content, 25));
        echo '<meta name="description" content="' . esc_attr($excerpt) . '">' . "\n";
    }
}
add_action('wp_head', 'aurora_meta_description', 1);

// Schema.org markup in HTML tag
function aurora_add_html_schema() {
    echo 'itemscope itemtype="https://schema.org/WebPage"';
}
add_filter('language_attributes', function($output) {
    return $output . ' ' . aurora_add_html_schema();
});

function aurora_output_meta_tags() {
    if (is_singular()) {
        global $post;
        $meta_title = get_the_title($post->ID);
        $meta_desc  = wp_strip_all_tags(get_the_excerpt($post->ID));
    } else {
        $meta_title = get_theme_mod('default_meta_title', get_bloginfo('name'));
        $meta_desc  = get_theme_mod('default_meta_desc', get_bloginfo('description'));
    }

    echo '<meta name="title" content="' . esc_attr($meta_title) . '">' . "\n";
    echo '<meta name="description" content="' . esc_attr($meta_desc) . '">' . "\n";
}
add_action('wp_head', 'aurora_output_meta_tags', 1);
