<?php get_header(); ?>
<?php if ($intro = get_theme_mod('homepage_intro_text')) : ?>
    <div class="homepage-intro"><?php echo esc_html($intro); ?></div>
<?php endif; ?>

<main class="site-main container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
        <?php endwhile;
    else :
        echo '<p>' . esc_html__('No posts found.', 'auroraframework') . '</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
