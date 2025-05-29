<?php
/**
 * AuroraFramework - Theme Functions
 * 
 * @package AuroraFramework
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) exit; // Prevent direct access

// Autoload modular files
require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/scripts.php';
require_once get_template_directory() . '/inc/seo.php';
require_once get_template_directory() . '/inc/security.php';
require_once get_template_directory() . '/inc/customizer/register.php';
require_once get_template_directory() . '/inc/customizer/ecommerce.php';
require_once get_template_directory() . '/inc/customizer/blog.php';
require_once get_template_directory() . '/inc/customizer/portfolio.php';
require_once get_template_directory() . '/inc/customizer/contractor.php';
require_once get_template_directory() . '/inc/seo/meta-fields.php';
require_once get_template_directory() . '/inc/customizer/typography.php';

/**
 * Function for typography
 */
function aurora_custom_typography_css() {
    $body_size = get_theme_mod('body_font_size', 16) . 'px';
    $heading_weight = get_theme_mod('heading_font_weight', 700);
    echo "<style>
        body { font-size: $body_size; }
        h1, h2, h3, h4, h5, h6 { font-weight: $heading_weight; }
    </style>";
}
add_action('wp_head', 'aurora_custom_typography_css');