<?php
/* Template Name: Création et résidences d’artistes */
get_header();
?>

<main class="site-main page-description_volet">

    <!-- Fil d’Ariane -->
    <nav class="breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> >
        <a href="<?php echo esc_url(home_url('/volets-culturels')); ?>">Volets culturels</a> >
        <span><?php the_title(); ?></span>
    </nav>

    <!-- Titre principal -->
    <h1 class="page-residence__titre"><?php the_title(); ?></h1>

    <!-- Texte principal -->
    <section class="page-residence__intro">
        <div class="intro__contenu">
            <?php the_content(); ?>
        </div>
    </section>

    <!-- Photos style Polaroid -->
    <section class="page-residence__photos">

        <?php
        $photo_1 = get_field('photo_1');
        ?>

        <div class="polaroid">
            <?php
            if ($photo_1) {
                echo wp_get_attachment_image($photo_1['ID'], 'large');
            }
            ?>
        </div>

    </section>

    <!-- Navigation Précédent / Suivant -->
    <div class="page-residence__nav">
        <div class="nav-prev">
            <?php previous_post_link('%link', '← Précédent'); ?>
        </div>
        <div class="nav-next">
            <?php next_post_link('%link', 'Suivant →'); ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>