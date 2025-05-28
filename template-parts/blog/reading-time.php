<?php
$content = get_post_field('post_content', get_the_ID());
$word_count = str_word_count(strip_tags($content));
$reading_time = ceil($word_count / 200); // 200 wpm avg

echo '<p class="reading-time">🕒 Estimated Reading Time: ' . esc_html($reading_time) . ' min</p>';
