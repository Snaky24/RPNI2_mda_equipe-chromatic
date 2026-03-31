<?php
/* Template Name: Nouvelles */
get_header();
?>

<main class="page-nouvelles">

    <section class="page-nouvelles__intro">
        <h1 class="page-nouvelles__titre"><?php the_title(); ?></h1>

        <div class="page-nouvelles__description">
            <?php the_content(); ?>
        </div>
    </section>

    <?php
    $requete_nouvelles = new WP_Query(array(
        'post_type'      => 'nouvelles',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ));
    ?>

    <section class="page-nouvelles__liste">
        <?php if ($requete_nouvelles->have_posts()) : ?>
            <div class="nouvelles-grid">

                <?php while ($requete_nouvelles->have_posts()) : $requete_nouvelles->the_post(); ?>
                    <article class="nouvelle-carte">

                        <a class="nouvelle-carte__image-lien" href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large', array('class' => 'nouvelle-carte__image')); ?>
                            <?php else : ?>
                                <span class="nouvelle-carte__image-placeholder"></span>
                            <?php endif; ?>
                        </a>

                        <div class="nouvelle-carte__contenu">
                            <p class="nouvelle-carte__date"><?php echo get_the_date('j F Y'); ?></p>

                            <h2 class="nouvelle-carte__titre">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div class="nouvelle-carte__extrait">
                                <?php the_excerpt(); ?>
                            </div>

                            <a class="nouvelle-carte__bouton" href="<?php the_permalink(); ?>">
                                LIRE LA SUITE →
                            </a>
                        </div>

                    </article>
                <?php endwhile; ?>

            </div>

            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>Aucune nouvelle pour le moment.</p>
        <?php endif; ?>
    </section>

</main>

<?php get_footer(); ?>