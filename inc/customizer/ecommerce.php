<?php
function aurora_customize_ecommerce($wp_customize) {
    $wp_customize->add_section('ecommerce_section', [
        'title' => __('E-Commerce Page Settings', 'auroraframework'),
        'priority' => 40,
    ]);

    $wp_customize->add_setting('show_ecom_faq', [
        'default' => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
    ]);

    $wp_customize->add_control('show_ecom_faq', [
        'label' => __('Show FAQ Section', 'auroraframework'),
        'section' => 'ecommerce_section',
        'type' => 'checkbox',
    ]);
}
add_action('customize_register', 'aurora_customize_ecommerce');
