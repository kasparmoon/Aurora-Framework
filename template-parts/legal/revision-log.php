<?php
/**
 * Revision Log + Last Updated Date for Legal Pages
 */

if (!is_page()) {
    return;
}

global $post;

// Only show for Privacy Policy or Terms of Use
$template = get_page_template_slug($post->ID);
$allowed_templates = ['page-privacy-policy.php', 'page-terms-of-use.php'];

if (!in_array($template, $allowed_templates)) {
    return;
}

// Display Last Updated Date
$last_modified = get_the_modified_time(get_option('date_format'), $post->ID);
echo '<div class="last-updated">';
printf(
    esc_html__('Last Updated: %s', 'auroraframework'),
    esc_html($last_modified)
);
echo '</div>';

// Get the last 5 revisions
$revisions = wp_get_post_revisions($post->ID, ['numberposts' => 5]);

if (!empty($revisions)) {
    echo '<section class="revision-log">';
    echo '<h3>' . esc_html__('Revision History', 'auroraframework') . '</h3>';
    echo '<ul>';

    foreach ($revisions as $revision) {
        $author = get_the_author_meta('display_name', $revision->post_author);
        $date = date_i18n(
            get_option('date_format') . ' ' . get_option('time_format'),
            strtotime($revision->post_modified)
        );
        echo '<li>' . esc_html("Edited by {$author} on {$date}") . '</li>';
    }

    echo '</ul></section>';
}
?>