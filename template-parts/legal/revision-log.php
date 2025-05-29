<?php
/**
 * Revision Log for Legal Pages
 * Shows last 5 updates with timestamp and author
 */

 /**
 * Revision Log + Last Updated Date for Legal Pages
 */

if (!is_page()) return;

global $post;

$template = get_page_template_slug($post->ID);
$allowed_templates = ['page-privacy-policy.php', 'page-terms-of-use.php'];

if (!in_array($template, $allowed_templates)) return;

// Last Updated Notice
$last_modified = get_the_modified_time(get_option('date_format'), $post->ID);
echo '<div class="last-updated">';
printf(
    esc_html__('Last Updated: %s', 'auroraframework'),
    esc_html($last_modified)
);
echo '</div>';
?>

if (!is_page()) return;

global $post;

// Check that the current template is Privacy or Terms
$template = get_page_template_slug($post->ID);
$allowed_templates = ['page-privacy-policy.php', 'page-terms-of-use.php'];

if (!in_array($template, $allowed_templates)) return;

// Get up to 5 most recent revisions
$revisions = wp_get_post_revisions($post->ID, ['numberposts' => 5]);

if (!empty($revisions)) : ?>
    <?php
    // Display "Last Updated" date at the bottom of the page
    $last_modified = get_the_modified_time(get_option('date_format'), $post->ID);

    echo '<div class="last-updated">';
    printf(
        esc_html__('Last Updated: %s', 'auroraframework'),
        esc_html($last_modified)
    );
    echo '</div>';
    ?>
    <section class="revision-log">
        <h3><?php _e('Revision History', 'auroraframework'); ?></h3>
        <ul>
            <?php foreach ($revisions as $revision) : ?>
                <li>
                    <?php
                    $author = get_the_author_meta('display_name', $revision->post_author);
                    $date = date_i18n(get_option('date_format') . ' ' . get_option('time_format'), strtotime($revision->post_modified));
                    echo esc_html("Edited by {$author} on {$date}");
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>
