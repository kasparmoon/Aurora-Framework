<?php
function aurora_customize_typography($wp_customize) {
    $wp_customize->add_section('typography_section', [
        'title'    => __('Typography Settings', 'auroraframework'),
        'priority' => 45,
    ]);

    $wp_customize->add_setting('body_font_size', [
        'default' => '16',
        'sanitize_callback' => 'absint',
    ]);

    $wp_customize->add_control('body_font_size', [
        'label'    => __('Body Font Size (px)', 'auroraframework'),
        'section'  => 'typography_section',
        'type'     => 'number',
        'input_attrs' => ['min' => 12, 'max' => 24],
    ]);

    $wp_customize->add_setting('heading_font_weight', [
        'default' => '700',
        'sanitize_callback' => 'absint',
    ]);

    $wp_customize->add_control('heading_font_weight', [
        'label'    => __('Heading Font Weight', 'auroraframework'),
        'section'  => 'typography_section',
        'type'     => 'select',
        'choices'  => [
            '400' => 'Normal',
            '500' => 'Medium',
            '700' => 'Bold',
        ]
    ]);
}
add_action('customize_register', 'aurora_customize_typography');
