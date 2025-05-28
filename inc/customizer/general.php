<?php
/**
 * General Settings Section
 */

if (!defined('ABSPATH')) exit;

function aurora_customize_general($wp_customize) {
    // Add a section
    $wp_customize->add_section('aurora_general_section', [
        'title'    => __('General Settings', 'auroraframework'),
        'priority' => 30,
    ]);

    // Add setting for site tagline visibility
    $wp_customize->add_setting('show_tagline', [
        'default'   => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
    ]);

    // Add checkbox control
    $wp_customize->add_control('show_tagline', [
        'label'    => __('Show site tagline', 'auroraframework'),
        'section'  => 'aurora_general_section',
        'type'     => 'checkbox',
    ]);
}
add_action('customize_register', 'aurora_customize_general');
