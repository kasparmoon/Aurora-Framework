<?php
/* Template Name: E-Commerce */
get_header(); ?>

<main class="container">
    <?php
    get_template_part('template-parts/ecommerce/shop-hero');

    get_template_part('template-parts/ecommerce/product-list');

    if (get_theme_mod('show_ecom_faq', true)) {
        get_template_part('template-parts/ecommerce/faq-section');
    }
    ?>
</main>

<?php get_footer(); ?>
