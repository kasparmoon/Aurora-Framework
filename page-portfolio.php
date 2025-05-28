<?php
/* Template Name: Writer Portfolio */
get_header(); ?>

<main class="container">
    <?php
    get_template_part('template-parts/portfolio/projects-grid');
    get_template_part('template-parts/portfolio/about-writer');
    ?>
</main>

<?php get_footer(); ?>
