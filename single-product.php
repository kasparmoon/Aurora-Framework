<?php
/**
 * Template: Single Product
 * Custom WooCommerce single product template
 */

get_header(); ?>

<main class="container woocommerce-single-product">

    <?php
    /**
     * Use WooCommerce's own single product content function.
     * You can override it or wrap your own layout.
     */
    if (function_exists('woocommerce_content')) {
        woocommerce_content();
    } else {
        echo '<p>' . esc_html__('WooCommerce plugin is not active.', 'auroraframework') . '</p>';
    }
    ?>

</main>

<?php get_footer(); ?>
