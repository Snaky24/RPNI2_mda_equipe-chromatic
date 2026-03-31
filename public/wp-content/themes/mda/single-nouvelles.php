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
    ?>

    <article class="single-nouvelle__article">

        <a href="<?php echo esc_url($retour_nouvelles_url); ?>" class="single-nouvelle__btn-retour single-nouvelle__btn-retour--top">Retour aux nouvelles</a>

        <?php if (has_post_thumbnail()) : ?>
            <section class="single-nouvelle__hero">
                <?php the_post_thumbnail('large', array('class' => 'single-nouvelle__hero-image')); ?>

                <div class="single-nouvelle__hero-contenu">
                    <p class="single-nouvelle__date"><?php echo esc_html(wp_date('j F Y', get_post_timestamp(get_the_ID(), 'date'))); ?></p>
                    <h1 class="single-nouvelle__titre"><?php the_title(); ?></h1>
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