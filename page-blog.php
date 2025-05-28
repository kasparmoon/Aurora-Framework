<?php
/* Template Name: Blog */
get_header(); ?>

<main class="container">
    <h1><?php the_title(); ?></h1>

    <?php if (get_theme_mod('show_featured_posts', true)) : ?>
        <?php get_template_part('template-parts/blog/post-list'); ?>
    <?php endif; ?>
    
</main>

<?php get_footer(); ?>
