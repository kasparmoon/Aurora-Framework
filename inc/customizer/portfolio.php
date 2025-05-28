<?php
function aurora_customize_portfolio($wp_customize) {
    $wp_customize->add_section('portfolio_section', [
        'title'    => __('Portfolio Page Settings', 'auroraframework'),
        'priority' => 42,
    ]);

    $wp_customize->add_setting('show_about_writer', [
        'default'           => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
    ]);

    $wp_customize->add_control('show_about_writer', [
        'label'   => __('Show About the Writer Section', 'auroraframework'),
        'section' => 'portfolio_section',
        'type'    => 'checkbox',
    ]);
}
add_action('customize_register', 'aurora_customize_portfolio');
