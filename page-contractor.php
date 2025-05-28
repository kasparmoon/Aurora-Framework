<?php
/* Template Name: Independent Contractor */
get_header(); ?>

<main class="container">
    <?php
    get_template_part('template-parts/contractor/services');
    get_template_part('template-parts/contractor/pricing');
    get_template_part('template-parts/contractor/contact');
    ?>
</main>

<?php get_footer(); ?>
