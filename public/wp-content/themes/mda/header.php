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

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/liaisons/css/styles.css?v=<?php echo filemtime(get_template_directory() . '/liaisons/css/styles.css'); ?>">
    <script defer src="<?php echo get_template_directory_uri(); ?>/liaisons/js/visionneuse.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/liaisons/js/menu.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="entete">

        <div class="entete__topbar">

            <div class="entete__logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/logo_beige.png" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>

            <button class="entete__burger" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="menu-principal">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="entete__menu" id="menu-principal">
                <?php if (has_nav_menu("principal")) { ?>
                    <nav class="entete__nav">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'principal',
                            'container' => false
                        ));
                        ?>
                    </nav>
                <?php } ?>
            </div>

            <div class="entete__recherche">
                <?php get_search_form(); ?>
            </div>

        </div>

        <div class="entete__video">
            <video autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/liaisons/videos/entete__video.mp4" type="video/mp4">
            </video>

            <div class="entete__contenu">
                <h1 class="titre-principal"><?php the_title(); ?></h1>

                <a href="#" class="entete__btn">Voir plus</a>
            </div>
        </div>

    </header>

    <div class="contenu">