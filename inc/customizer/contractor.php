<?php
function aurora_customize_contractor($wp_customize) {
    $wp_customize->add_section('contractor_section', [
        'title'    => __('Contractor Page Settings', 'auroraframework'),
        'priority' => 43,
    ]);

    $wp_customize->add_setting('show_pricing_table', [
        'default'           => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
    ]);

    $wp_customize->add_control('show_pricing_table', [
        'label'   => __('Show Pricing Table Section', 'auroraframework'),
        'section' => 'contractor_section',
        'type'    => 'checkbox',
    ]);
}
add_action('customize_register', 'aurora_customize_contractor');
