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
     <!-- <img src="<@?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : 'http://localhost:8888/rpni2/thefourofus/public/wp-content/uploads/2026/03/presbytere_1917_SHSAD.jpg'; ?>" alt="image de la nouvelle"> -->
    
    <div class="Equipe">
    <?php
    if (have_posts()) {
        //tant qu'il restera des articles
        foreach ($posts as $post) { ?>
        
            <article class="article_Equipe">
            <?php
        setup_postdata($post);

        // Image ACF (photo_1)
        $image_info = get_field("photo_1");

        if ($image_info) :
            $image_url = $image_info['sizes']['Equipes'];
            $alt = $image_info['alt'];
        ?>
            <div class="equipe__img">
                <img class="image-single" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>">
            </div>
        <?php
        // Sinon image mise en avant
        elseif (has_post_thumbnail()) :
            the_post_thumbnail('Equipes', array('class' => 'image-single'));
        endif;
?>
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
                <button class="savoirPlus savoirPlus_lien" type="button" onclick="window.location.href='<?php the_permalink(); ?>'">
                En savoir plus
                </button>
            </article>
    <?php }

        //réinitialise les données reçues par défaut du gabarit pour afficher le
        //reste des informations de la page, s'il y a lieu
        wp_reset_postdata();
    } ?>
    </div>
    <!-- <div>
        <h2><?php //the_title(); ?></h2>
    </div>
    <?php //the_content(); ?> -->

</main>

<?php get_footer() ?>