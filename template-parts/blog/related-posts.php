<?php
$categories = get_the_category(get_the_ID());
if ($categories) {
    $cat_ids = wp_list_pluck($categories, 'term_id');
    $related = new WP_Query([
        'category__in' => $cat_ids,
        'post__not_in' => [get_the_ID()],
        'posts_per_page' => 3
    ]);

    if ($related->have_posts()) : ?>
        <section class="related-posts">
            <h2><?php _e('Related Posts', 'auroraframework'); ?></h2>
            <ul>
            <?php while ($related->have_posts()) : $related->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </section>
    <?php
    endif;
    wp_reset_postdata();
}
?>
