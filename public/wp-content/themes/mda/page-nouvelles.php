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
                            <p class="nouvelle-carte__date">
                                <span class="nouvelle-carte__date-icon" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                                        <g clip-path="url(#clip-date-card)">
                                            <path d="M4.50049 0.969482V2.90835" stroke="#8B6F47" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.00049 0.969482V2.90835" stroke="#8B6F47" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.6882 1.93896H2.81259C2.19122 1.93896 1.6875 2.37299 1.6875 2.9084V9.69443C1.6875 10.2298 2.19122 10.6639 2.81259 10.6639H10.6882C11.3096 10.6639 11.8133 10.2298 11.8133 9.69443V2.9084C11.8133 2.37299 11.3096 1.93896 10.6882 1.93896Z" stroke="#8B6F47" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1.6875 4.84717H11.8133" stroke="#8B6F47" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip-date-card">
                                                <rect width="13.501" height="11.6332" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span><?php echo esc_html(wp_date('j F Y', get_post_timestamp(get_the_ID(), 'date'))); ?></span>
                            </p>

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