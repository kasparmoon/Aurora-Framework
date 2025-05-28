<?php
// Add Customizer section for meta title & description (per site default fallback)
function aurora_customize_meta_fields($wp_customize) {
    $wp_customize->add_section('meta_section', [
        'title'    => __('SEO Meta Settings', 'auroraframework'),
        'priority' => 44,
    ]);

    $wp_customize->add_setting('default_meta_title', [
        'default'           => get_bloginfo('name'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('default_meta_title', [
        'label'    => __('Default Meta Title', 'auroraframework'),
        'section'  => 'meta_section',
        'type'     => 'text',
    ]);

    $wp_customize->add_setting('default_meta_desc', [
        'default'           => get_bloginfo('description'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('default_meta_desc', [
        'label'    => __('Default Meta Description', 'auroraframework'),
        'section'  => 'meta_section',
        'type'     => 'text',
    ]);
}
add_action('customize_register', 'aurora_customize_meta_fields');
