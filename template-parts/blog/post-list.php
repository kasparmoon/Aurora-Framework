<section class="post-list">
    <h2><?php _e('Latest Posts', 'auroraframework'); ?></h2>
    <?php
    $query = new WP_Query(['posts_per_page' => 5]);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </article>
        <?php endwhile;
        wp_reset_postdata();
    endif;
    ?>
</section>
