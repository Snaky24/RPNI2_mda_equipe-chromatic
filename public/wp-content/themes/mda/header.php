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

<body <?php body_class(); ?>>

<header class="entete">

    <!-- TOPBAR  -->
    <div class="entete__topbar">

        <div class="entete__logo">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/logo_beige.png" alt="Logo">
            </a>
        </div>

        <div class="entete__menu">
            <?php if (has_nav_menu("principal")) { ?>
                <nav class="entete__nav">
                    <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
                </nav>
            <?php } ?>
        </div>

        <div class="entete__recherche">
            <?php get_search_form(); ?>
        </div>

    </div>

    <!-- VIDÉO -->
    <div class="entete__video">
        <video autoplay muted loop playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/liaisons/videos/entete__video.mp4" type="video/mp4">
        </video>

        <!-- OVERLAY -->
        <div class="entete__contenu">
            <h1 class="entete__slogan">
                « Un lieu vivant où culture, patrimoine et communauté se rencontrent. »
            </h1>

            <a href="#" class="entete__btn">Voir plus</a>
        </div>

    </div>

</header>

<div class="contenu">