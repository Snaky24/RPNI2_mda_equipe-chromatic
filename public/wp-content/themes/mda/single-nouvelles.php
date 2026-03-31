<?php get_header(); ?>

<?php
$page_nouvelles = get_pages(array(
    'meta_key'   => '_wp_page_template',
    'meta_value' => 'page-nouvelles.php',
    'number'     => 1,
));

$retour_nouvelles_url = !empty($page_nouvelles)
    ? get_permalink($page_nouvelles[0]->ID)
    : get_post_type_archive_link('nouvelles');
?>

<main class="single-nouvelle">

    <?php if (have_posts()) : the_post(); ?>

    <?php
    // Suivant = article plus ancien (on part du plus récent vers le plus ancien)
    // Précédent = article plus récent (disponible seulement après avoir cliqué Suivant)
    $nouvelle_suivante   = get_previous_post();
    $nouvelle_precedente = get_next_post();
    $date_nouvelle       = get_post_meta(get_the_ID(), 'date_nouvelle', true);
    $date_affichee       = !empty($date_nouvelle)
        ? $date_nouvelle
        : wp_date('j F Y', get_post_timestamp(get_the_ID(), 'date'));
    ?>

    <article class="single-nouvelle__article">

        <a href="<?php echo esc_url($retour_nouvelles_url); ?>" class="single-nouvelle__btn-retour single-nouvelle__btn-retour--top">Retour aux nouvelles</a>

        <?php if (has_post_thumbnail()) : ?>
            <section class="single-nouvelle__hero">
                <?php the_post_thumbnail('large', array('class' => 'single-nouvelle__hero-image')); ?>

                <div class="single-nouvelle__hero-contenu">
                    <h1 class="single-nouvelle__titre"><?php the_title(); ?></h1>
                    <p class="single-nouvelle__date">
                        <span class="single-nouvelle__date-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                                <g clip-path="url(#clip-date-single)">
                                    <path d="M4.50049 0.969482V2.90835" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.00049 0.969482V2.90835" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.6882 1.93896H2.81259C2.19122 1.93896 1.6875 2.37299 1.6875 2.9084V9.69443C1.6875 10.2298 2.19122 10.6639 2.81259 10.6639H10.6882C11.3096 10.6639 11.8133 10.2298 11.8133 9.69443V2.9084C11.8133 2.37299 11.3096 1.93896 10.6882 1.93896Z" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1.6875 4.84717H11.8133" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip-date-single">
                                        <rect width="13.501" height="11.6332" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <span><?php echo esc_html($date_affichee); ?></span>
                    </p>
                </div>
            </section>
        <?php endif; ?>

        <section class="single-nouvelle__intro">
            <?php the_content(); ?>
        </section>

        <nav class="single-nouvelle__navigation">
            <?php if ($nouvelle_precedente) : ?>
                <a href="<?php echo esc_url(get_permalink($nouvelle_precedente->ID)); ?>" class="single-nouvelle__btn-nav single-nouvelle__btn-nav--prev">← Précédent</a>
            <?php endif; ?>

            <?php if ($nouvelle_suivante) : ?>
                <a href="<?php echo esc_url(get_permalink($nouvelle_suivante->ID)); ?>" class="single-nouvelle__btn-nav single-nouvelle__btn-nav--next">Suivant →</a>
            <?php endif; ?>
        </nav>

    </article>

    <?php endif; ?>

</main>

<?php get_footer(); ?>