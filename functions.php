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

// Switch site locale via URL query (?lang=es, ?lang=de)
function aurora_framework_custom_locale($locale) {
    if (isset($_GET['lang'])) {
        $lang = sanitize_text_field($_GET['lang']);
        $available_locales = ['en_US', 'es_ES', 'de_DE'];

        if (in_array($lang, ['en', 'es', 'de'])) {
            switch ($lang) {
                case 'en': return 'en_US';
                case 'es': return 'es_ES';
                case 'de': return 'de_DE';
            }
        }

        // Fallback to valid locales directly
        if (in_array($lang, $available_locales)) {
            return $lang;
        }
    }

    return $locale; // Default locale
}
add_filter('locale', 'aurora_framework_custom_locale');

/** Default Language English */
/**function aurora_set_default_locale($locale) {
    return $locale ?: 'en_US';
}
add_filter('locale', 'aurora_set_default_locale', 20);
*/

/**
 * Adding Template logic
 */
add_action('template_redirect', 'aurora_activate_template_features');

function aurora_activate_template_features() {
    // Example: Add Custom CSS class based on template
    if (is_page_template('page-privacy-policy.php')) {
        add_filter('body_class', function($classes) {
            $classes[] = 'privacy-mode';
            return $classes;
        });

        // Enable privacy features
        add_action('wp_head', 'aurora_enable_cookie_notice');
    }

    if (is_page_template('page-terms-of-use.php')) {
        add_filter('body_class', function($classes) {
            $classes[] = 'terms-mode';
            return $classes;
        });

        // Maybe disable comment form
        remove_action('comments_template', 'comments_template');
    }
}

// Example function: Cookie notice in <head>
function aurora_enable_cookie_notice() {
    echo "<script>console.log('Cookie notice enabled on Privacy Policy page');</script>";
}

function aurora_check_revisions_setting() {
    $config_path = ABSPATH . 'wp-config.php';

    // Safety check
    if (!file_exists($config_path)) return;

    $config_contents = file_get_contents($config_path);

    // Check if already defined
    if (strpos($config_contents, "define('WP_POST_REVISIONS'") === false) {
        $insert_code = "define('WP_POST_REVISIONS', true);\n";
        $stop_editing_line = "/* That's all, stop editing!";

        if (is_writable($config_path)) {
            if (strpos($config_contents, $stop_editing_line) !== false) {
                $new_contents = str_replace(
                    $stop_editing_line,
                    $insert_code . $stop_editing_line,
                    $config_contents
                );
                file_put_contents($config_path, $new_contents);
            }
        } else {
            // File not writable → Add admin notice
            set_transient('aurora_config_permission_error', true, 60); // Expires in 1 minute
        }
    }
}
add_action('after_switch_theme', 'aurora_check_revisions_setting');

add_action('admin_notices', 'aurora_show_config_write_notice');

function aurora_show_config_write_notice() {
    if (get_transient('aurora_config_permission_error')) {
        ?>
        <div class="notice notice-error is-dismissible">
            <p><strong>Aurora Framework:</strong> Unable to modify <code>wp-config.php</code> to enable <code>WP_POST_REVISIONS</code>. Please ensure file permissions allow write access or add this line manually:</p>
            <pre><code>define('WP_POST_REVISIONS', true);</code></pre>
            <p>Edit your <code>wp-config.php</code> file just before the line that says <em>“That's all, stop editing!”</em></p>
        </div>
        <?php
        delete_transient('aurora_config_permission_error');
    }
}
