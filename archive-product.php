<?php
/**
 * Template: Shop Page (Product Archive)
 * Overrides default WooCommerce archive layout
 */

get_header(); ?>

<main class="container shop-archive">

<?php if (function_exists('woocommerce_product_loop')) : ?>

    <header class="shop-header">
        <h1 class="shop-title"><?php woocommerce_page_title(); ?></h1>
        <p class="shop-description"><?php _e('Browse our curated collection of premium products.', 'auroraframework'); ?></p>
    </header>

    <section class="shop-banner">
        <p><?php _e('🚚 Free Shipping on orders over $50!', 'auroraframework'); ?></p>
    </section>

    <?php if (woocommerce_product_loop()) : ?>

        <?php woocommerce_product_loop_start(); ?>

        <?php
        if (wc_get_loop_prop('total')) {
            while (have_posts()) {
                the_post();
                wc_get_template_part('content', 'product');
            }
        }
        ?>

        <?php woocommerce_product_loop_end(); ?>

        <?php do_action('woocommerce_after_shop_loop'); ?>

    <?php else : ?>
        <?php do_action('woocommerce_no_products_found'); ?>
    <?php endif; ?>

<?php else : ?>
    <p><?php esc_html_e('WooCommerce is not active or not installed.', 'auroraframework'); ?></p>
<?php endif; ?>

</main>

<?php get_footer(); ?>
