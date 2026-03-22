<?php
/* Template name: Volets culturels */
get_header(); //Appel de l'inclusion d'entête de page
?>

<main class="page-voletsculturels">
    <div class="contenu-page">
        <?php the_content(); ?>
    </div>
    <?php
    // Utiliser le code ci-dessous pour créer une image responsive
    if (has_post_thumbnail()) {
        $sizes = array();
        $sizes[0] = wp_get_attachment_image_src(get_post_thumbnail_id(), "large");
        $sizes[1] = wp_get_attachment_image_src(get_post_thumbnail_id(), "medium");
        $sizes[2] = wp_get_attachment_image_src(get_post_thumbnail_id(), "thumbnail"); ?>

        <picture>
            <source media="(min-width: 801px)" srcset="<?php echo $sizes[0][0]; ?>">
            <source media="(min-width: 601px)" srcset="<?php echo $sizes[1][0]; ?>">
            <img src="<?php echo $sizes[2][0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
        </picture>
    <?php } ?>

    <?php
    //Requête et boucle d'affichage des articles avec ACF
    //À mettre dans les pages utilisant les articles personnalisés et adapter****************
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type'    => 'voletsculturels',
        'post_status' => 'publish',
        'orderby' => 'the_title',
        'order' => 'ASC',
    ));
    ?>

    <?php if (have_posts()) { ?>
        <div class="articles-grid">
            <?php foreach ($posts as $post) { ?>
                <article class="article-volets">
                    <?php

                    $image_info = get_field("photo_1");

                    //Si l'image est définie dans ACF
                    if ($image_info != null) {

                        //Utiliser la balise picture pour le redimensionnement de l'image 
                    ?>
                        <picture>
                            <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"]; ?>">
                            <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                            <img src="<?php echo $image_info['sizes']['thumbnail']; ?>" alt="<?php echo $image_info["alt"]; ?>">
                        </picture>

                    <?php } ?>
                    <div class="article__fond-volets">
                        <header class="article__entete-volets">
                            <h2 class="article__titre-volets">
                                <?php //affiche le lien et le titre de l'article'
                                ?>
                                <a class="article__lien-volets" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                            </h2>
                        </header>

                        <p><?php echo get_field("nom_volet") ?></p>

                        <p class="article__texte">
                            <?php //affiche le l'extrait de la réalisation
                            the_excerpt();
                            ?>
                        </p>
                    </div>
                </article>
        <?php }

            //réinitialise les données reçues par défaut du gabarit pour afficher le
            //reste des informations de la page, s'il y a lieu
            //wp_reset_postdata();
        } ?>
        </div>
</main>
<?php get_footer() ?>