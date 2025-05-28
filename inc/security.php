<?php
/**
 * Theme security tweaks
 */

if (!defined('ABSPATH')) exit;

// Remove WordPress version info
remove_action('wp_head', 'wp_generator');

// Escape body classes and other outputs globally (recommended in templates)
