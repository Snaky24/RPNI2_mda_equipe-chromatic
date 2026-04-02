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
            $image_info = get_field("photo_1");

            if ($image_info != null) {
            ?>
            
            <?php
                $img_tablet = wp_get_attachment_image_src($image_info, "EquipeTable");
                $img_mobile = wp_get_attachment_image_src($image_info, "EquipeMobile");
                $alt = get_post_meta($image_info, '_wp_attachment_image_alt', true);
            ?>
            <picture>
                <source media="(min-width: 800px)" srcset="<?php echo esc_url($img_tablet[0]); ?>">
                <source media="(min-width: 601px)" srcset="<?php echo esc_url($img_mobile[0]); ?>">
                <img src="<?php echo esc_url($img_mobile[0]); ?>" alt="<?php echo esc_attr($alt); ?>">
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