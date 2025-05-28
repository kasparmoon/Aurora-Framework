<?php
/**
 * Homepage Settings Section
 */

if (!defined('ABSPATH')) exit;

function aurora_customize_homepage($wp_customize) {
    $wp_customize->add_section('aurora_homepage_section', [
        'title'    => __('Homepage Settings', 'auroraframework'),
        'priority' => 31,
    ]);

    $wp_customize->add_setting('homepage_intro_text', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('homepage_intro_text', [
        'label'    => __('Intro Text', 'auroraframework'),
        'section'  => 'aurora_homepage_section',
        'type'     => 'text',
    ]);
}
add_action('customize_register', 'aurora_customize_homepage');
