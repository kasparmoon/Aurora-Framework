<?php
function aurora_customize_blog($wp_customize) {
    $wp_customize->add_section('blog_section', [
        'title'    => __('Blog Page Settings', 'auroraframework'),
        'priority' => 41,
    ]);

    $wp_customize->add_setting('show_reading_time', [
    'default' => true,
    'sanitize_callback' => 'rest_sanitize_boolean',
    ]);

    $wp_customize->add_control('show_reading_time', [
    'label'    => __('Show Estimated Reading Time', 'auroraframework'),
    'section'  => 'blog_section',
    'type'     => 'checkbox',
    ]);

    $wp_customize->add_setting('show_featured_posts', [
        'default'           => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
    ]);

    $wp_customize->add_control('show_featured_posts', [
        'label'   => __('Show Featured Posts Section', 'auroraframework'),
        'section' => 'blog_section',
        'type'    => 'checkbox',
    ]);
}
add_action('customize_register', 'aurora_customize_blog');
