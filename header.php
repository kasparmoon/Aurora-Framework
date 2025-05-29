<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
    </div>
</header>
<?php if (get_theme_mod('show_tagline', true)) : ?>
    <p><?php bloginfo('description'); ?></p>
<?php endif; ?>

<div class="language-switcher">
    <a href="?lang=en" aria-label="English">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/flags/en.png" alt="English" />
    </a>
    <a href="?lang=es" aria-label="Español">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/flags/es.png" alt="Español" />
    </a>
    <a href="?lang=de" aria-label="Deutsch">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/flags/de.png" alt="Deutsch" />
    </a>
</div>