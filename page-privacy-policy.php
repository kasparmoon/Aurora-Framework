<?php
/**
 * Template Name: Privacy Policy
 * Description: Displays your website's privacy policy information.
 */

get_header(); ?>

<main class="container privacy-policy">
    <h1><?php the_title(); ?></h1>

    <section>
        <h2>What Information We Collect</h2>
        <p>This is placeholder content. We collect personal data such as name, email address, and usage behavior.</p>

        <h2>How We Use Your Information</h2>
        <p>Your information is used to provide and improve our services, personalize user experience, and for legal compliance.</p>

        <h2>Your Data Rights</h2>
        <p>You have the right to access, correct, or delete your personal data at any time.</p>

        <h2>Contact Us</h2>
        <p>For privacy-related inquiries, email us at support@example.com.</p>
    </section>
</main>

<?php get_template_part('template-parts/legal/revision-log'); ?>

<?php get_footer(); ?>