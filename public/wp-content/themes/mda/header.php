<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo('name');
        if (is_home() || is_front_page()) { ?>
            | <?php bloginfo('description');
            } else { ?>
            | <?php wp_title("", true);
            } ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/liaisons/css/styles.css">
    <?php wp_head(); ?>
</head>

    <header class="entete">
        <div class="entete__logo">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/logo_beige.png" alt="Logo">
            </a>
        </div>
        <div class="entete_nav">
            <?php if (has_nav_menu("principal")) { ?>
                <nav class="entete__menu">
                    <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
                </nav>
            <?php } ?>
        </div>
    </header>
    <div class="contenu">