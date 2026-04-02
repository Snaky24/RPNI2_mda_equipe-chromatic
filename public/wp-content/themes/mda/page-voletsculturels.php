<?php
/* Template Name: Volets culturels */
get_header();
?>

<main class="site-main page-voletsculturels">

    <nav class="breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> >
        <span>Volets culturels</span>
    </nav>

    <section class="section-intro">
        <div class="section-intro__contenu">
            <?php the_content(); ?>
        </div>
    </section>

    <section class="volets-culturels">

        <div class="volets-culturels__grille">
            <?php
            $query_volets = new WP_Query([
                'post_type'      => 'voletsculturels',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);

            if ($query_volets->have_posts()) :
                while ($query_volets->have_posts()) :
                    $query_volets->the_post();

                    $photo_base   = get_field('photo_1');
                    $photo_dessus = get_field('photo_2');
            ?>
                    <article class="carte-polaroid volet-culturel__carte">
                        <div class="polaroid__image volet-culturel-polaroid__image">
                            <?php
                            // Image principale : ACF photo_1, sinon image à la une, sinon placeholder
                            if ($photo_base) {
                                echo wp_get_attachment_image(
                                    is_array($photo_base) ? $photo_base['ID'] : $photo_base,
                                    'large'
                                );
                            } elseif (has_post_thumbnail()) {
                                the_post_thumbnail('large');
                            } else { ?>
                                <img class="img-polaroid" src="<?php echo esc_url(get_template_directory_uri()); ?>/liaisons/images/placeholder.jpg" alt="Image par défaut">
                            <?php } ?>
                        </div>

                        <?php if ($photo_dessus) : ?>
                            <div class="polaroid__image polaroid__image--overlay">
                                <?php
                                echo wp_get_attachment_image(
                                    is_array($photo_dessus) ? $photo_dessus['ID'] : $photo_dessus,
                                    'large'
                                );
                                ?>
                            </div>
                        <?php endif; ?>

                        <div class="polaroid__texte">
                            <h3 class="volet-culturel__titre"><?php the_title(); ?></h3> 
                            <a href="<?php the_permalink(); ?>" class="btn-volet">Voir plus</a>
                        </div>
                    </article>
                <?php
                endwhile;
                wp_reset_postdata();
            else : ?>
                <p>Aucun volet culturel n’est disponible pour le moment.</p>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>