<?php
/* Template name: Équipe */
get_header();
?>
<main class="page">

<?php  the_content() ?>
    <?php //var_dump($post); //Ce que reçoit la page
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type'    => 'equipe',
        'post_status' => 'publish',
        'orderby' => 'the_title',
        'order' => 'ASC',
    ));
    ?>

    <?php

    if (have_posts()) {
        //tant qu'il restera des articles
        foreach ($posts as $post) { ?>
            <?php
            $image_info = get_field("photo_membre");

            if ($image_info != null) {

            ?>
                <picture>
                    <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"]; ?>">
                    <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                    <img src="<?php echo $image_info['sizes']['thumbnail']; ?>" alt="<?php echo $image_info["alt"]; ?>">
                </picture>

            <?php } ?>
            <article class="article_Equipe">
                <header class="article__enteteEquipe">
                    <h2 class="article__titre">
                        <?php the_title() ?>
                    </h2>
                </header>
                <div class="article__texteEquipe">
                    <?php //affiche le l'extrait de la réalisation
                    the_excerpt();
                    ?>
                </div>
                <button type="savoirPlus"><a class="savoirPlus_lien" href="<?php the_permalink(); ?>">En savoir plus</a></button>
            </article>
    <?php }

        //réinitialise les données reçues par défaut du gabarit pour afficher le
        //reste des informations de la page, s'il y a lieu
        //wp_reset_postdata();
    } ?>
    <!-- <div>
        <h2><?php //the_title(); ?></h2>
    </div>
    <?php //the_content(); ?> -->

</main>

<?php get_footer() ?>