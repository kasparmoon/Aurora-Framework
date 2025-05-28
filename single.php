<?php
/**
 * Template: Single Post View
 * Used for individual blog posts
 */

get_header(); ?>

<main class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <article <?php post_class('single-post'); ?>>
                
                <!-- Post Title -->
                <h1 class="post-title"><?php the_title(); ?></h1>

                <!-- Estimated Reading Time (Customizable ON/OFF) -->
                <?php if (get_theme_mod('show_reading_time', true)) : ?>
                    <?php get_template_part('template-parts/blog/reading-time'); ?>
                <?php endif; ?>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <!-- Post Content -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <!-- Tags (optional) -->
                <footer class="post-meta">
                    <p class="post-tags">
                        <?php the_tags('Tags: ', ', ', ''); ?>
                    </p>
                </footer>

                <!-- Related Posts (only for posts) -->
                <?php get_template_part('template-parts/blog/related-posts'); ?>

                <!-- Comments -->
                <?php if (comments_open() || get_comments_number()) :
                    comments_template();
                endif; ?>

            </article>

        <?php endwhile;
    else :
        echo '<p>' . esc_html__('No content found.', 'auroraframework') . '</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
