<?php
/**
 * Template Name: Terms of Use
 * Description: Displays the terms and conditions of using this website.
 */

get_header(); ?>

<main class="container terms-of-use">
    <h1><?php the_title(); ?></h1>

    <section>
        <h2>Acceptance of Terms</h2>
        <p>By accessing this website, you agree to be bound by these terms and all applicable laws.</p>

        <h2>Prohibited Activities</h2>
        <p>Users may not misuse content, disrupt services, or violate the law while using this website.</p>

        <h2>Limitation of Liability</h2>
        <p>We are not liable for any damages resulting from the use or inability to use the website.</p>

        <h2>Changes to Terms</h2>
        <p>We reserve the right to update these terms at any time without notice.</p>
    </section>
</main>

<?php get_template_part('template-parts/legal/revision-log'); ?>

<?php get_footer(); ?>