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

<body>
    <header class="entete">
        <h1 class="entete__titre">
            <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <h2 class="entete__slogan"><?php bloginfo("description"); ?></h2>
    </header>
    <?php if (has_nav_menu("principal")) { ?>
        <nav id="principal" class="menu_principal">
            <?php wp_nav_menu(array('theme_location' => 'principal')); ?>
        </nav>
    <?php } ?>
    <div class="contenu">